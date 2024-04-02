<?php

namespace App\Livewire;

use App\Enums\PostCity;
use App\Enums\PostType;
use App\Models\Post;
use App\Rules\ImageContentSafety;
use App\Rules\ImageTemporaryFile;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Exceptions\DecoderException;
use Intervention\Image\ImageManager;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $city;

    public $image;

    public $turnstile;

    public $successed = false;

    public function rules(): array
    {
        return [
            'city' => ['required'],
            'image' => ['required', 'mimes:jpg,png', new ImageTemporaryFile()/*, new ImageContentSafety()*/],
            'turnstile' => ['required', Rule::turnstile()],
        ];
    }

    /**
     * @param $name
     * @param $tmpFilenames
     * @return void
     */
    #[On('upload:finished')]
    public function uploadFinished($name, $tmpFilenames): void
    {
        $file = TemporaryUploadedFile::createFromLivewire($tmpFilenames[0]);

        $manager = new ImageManager(new Driver());

        try {
            $image = $manager->read($file->getRealPath());

            $image->scaleDown(width: 600);
            $image->toJpeg(75)
                ->save($file->getRealPath());
        } catch (DecoderException $decoderException) {
            //
        }
    }

    public function save(): void
    {
        $this->dispatch('post-submitted');

        $this->validate();

        $image = $this->image->store(path: 'images');

        Post::create([
            'city' => PostCity::from($this->city),
            'type' => PostType::from('app'),
            'image_url' => $image,
            'active' => true,
            'published_at' => Carbon::now()
        ]);

        $this->successed = true;

        //$this->reset();
    }

    public function anotherPhoto()
    {
        $this->reset();

        $this->successed = false;
    }

    public function rerenderTurnstile()
    {
        $this->dispatch('turnstile-rerender');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
