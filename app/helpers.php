<?php

use Carbon\Carbon;

function steps($name): bool
{
    $now = Carbon::now();

    $countdownEndsAt = Carbon::parse(config('app.countdown_ends_at'));
    $galleryEndsAt = Carbon::parse(config('app.gallery_ends_at'));
    $eventEndsAt = Carbon::parse(config('app.event_ends_at'));

    if($name === 'countdown' && $countdownEndsAt->greaterThan($now)) {
        return true;
    }

    if($name === 'gallery' && $galleryEndsAt->greaterThan($now)) {
        return true;
    }

    if($name === 'event' && $eventEndsAt->greaterThan($now)) {
        return true;
    }

    if($name === 'end' && $countdownEndsAt->lessThan($now) && $eventEndsAt->lessThan($now)) {
        return true;
    }

    return false;
}
