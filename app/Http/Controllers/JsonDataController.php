<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonDataController extends Controller
{
    public function getJsonData($filename)
    {
        $path = public_path("json/{$filename}.json");

        if (file_exists($path)) {
            $jsonData = file_get_contents($path);
            $data = json_decode($jsonData);
            return view('card', compact('data'));
            // return response()->json(json_decode($jsonData), 200);
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
    }
}
