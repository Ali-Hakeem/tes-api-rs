<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        // Read the contents of the JSON file
        $json = file_get_contents(public_path('dist/data_rs.json'));
  
        // Decode JSON into an associative array
        $data = json_decode($json, true);
        return response()->json($data);
    }
}
