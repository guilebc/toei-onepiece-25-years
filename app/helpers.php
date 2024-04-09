<?php

use Carbon\Carbon;

function steps($name): bool
{
    $now = Carbon::now();

    $countdownEndsAt = Carbon::parse(config('app.countdown_ends_at'));

    if($name === 'before_countdown' && $countdownEndsAt->greaterThan($now)) {
        return true;
    }

    if($name === 'after_countdown' && $countdownEndsAt->lessThan($now)) {
        return true;
    }

    if($name === 'bestof' && config('app.bestof_displayed')) {
        return true;
    }

    if($name === 'gallery' && config('app.gallery_displayed')) {
        return true;
    }

    return false;
}
