<?php

namespace App\Rules;

use App\Services\Azure\ContentSafetyInterface;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ImageContentSafety implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $result = app(ContentSafetyInterface::class)
            ->imageAnalyze(file_get_contents($value->getRealPath()));

        if(!$result) {
            $fail(trans('app.contentSafetyNotComply'));
        }
    }
}
