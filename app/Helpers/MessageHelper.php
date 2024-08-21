<?php

namespace App\Helpers;

use Carbon\Carbon;

class MessageHelper
{
    public static function error($status, $message)
    {
        return response()->json([
            'status'    => $status,
            'message'   => $message,
        ], 200);
    }
}