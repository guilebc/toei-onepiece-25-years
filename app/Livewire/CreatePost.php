<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $city;

    public $image;

    public function rules()
    {
        return [
            'city' => ['required'],
            'image' => ['required', 'mimes:jpg,png'],
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ];
    }

    public function save()
    {
        dd($this->all());
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
