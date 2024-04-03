<?php

namespace App\Traits;

use App\Models\Feed;

trait FeedTraits {
    public static function fcreate($message, $type = 'success'){
        Feed::create([
            'message' => $message,
            'type' => $type
        ]);
    }
}