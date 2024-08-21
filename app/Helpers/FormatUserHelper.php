<?php

namespace App\Helpers;

use App\Models\User;
use Carbon\Carbon;

class FormatUserHelper
{
    public static function formatResultAuth($user)
    {
        return[
            'user_id'       => $user->id,
            'nama'          => $user->name,
            'username'      => $user->username,
            'email'         => $user->email,
            'terdaftar'     => Carbon::parse($user->created_at)->translatedFormat('d F Y'),
        ];
    }

    public static function resultAuth($status, $message, $data = '', $responseCode = 200)
    {
        return response()->json([
            'status'    => $status,
            'msg'       => $message,
            'data'      => $data,
            ], $responseCode);
    }

    public static function error($status, $message)
    {
        return response()->json([
            'status'    => $status,
            'message'   => $message,
        ], 200);
    }

    public static function resultUser($user_id)
    {
        $user = User::where('id', $user_id)
                    ->get()
                    ->map(function ($user){
                        return FormatUserHelper::formatResultAuth($user);
                    });
        return $user;
    }
}