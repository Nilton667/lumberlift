<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;

class UploadController
{
    public function upload(Request $request) {
        try {

            $request->validate([
                'name' => 'string',
                'file' => 'required|file|mimes:pdf|max:2048',
            ]);

            if ($request->file('file')->isValid()) {
                $filePath = $request->file('file')
                ->store(
                    'uploads',
                    'public'
                );
                return response()->json([
                    "result" => [
                        "success" => true,
                        "data"    => $filePath,
                    ]
                ]);
            }else{
                return response()->json([
                    "result" => [
                        "success" => false,
                        "error"   => "Upload falhou",
                    ]
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "result" => [
                    "success" => false,
                    "error"   => $th->getMessage(),
                ]
            ]);
        }
    }
}
