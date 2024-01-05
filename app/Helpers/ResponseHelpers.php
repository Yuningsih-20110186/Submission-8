<?php

namespace App\Helpers;

class ResponseHelpers {

    public static function success($status, $messages, $data){
        $response = [
            'metaData' => [
                'status' => $status,
                'messages' => $messages
            ],
            'response' => $data
        ];
        return response()->json($response, $status);
    }

    public static function error($status, $messages, $data = null){
        $response = [
            'metaData' => [
                'status' => $status,
                'messages' => $messages
            ],
            'response' => $data
        ];
        return response()->json($response, $status);
    }

}
