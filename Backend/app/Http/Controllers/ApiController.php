<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data = ['message' => 'This is an API response'];
        return response()->json($data);
    }
    
}
