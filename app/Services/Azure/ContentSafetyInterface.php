<?php

namespace App\Services\Azure;

interface ContentSafetyInterface
{
    /**
     * Analyzes the image to determine whether or not it conforms.
     *
     * @param $image
     * @return bool
     * @see ContentSafety::imageAnalyze()
     */
    public function imageAnalyze($image): bool;
}
