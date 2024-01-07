<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyController extends Controller
{
    public function checkKey()
    {
        return response()->json(['status' => 'true', 'url' => route('hello')], 200);
    }

    public function Hello() {
        return 'hello';
    }
}
