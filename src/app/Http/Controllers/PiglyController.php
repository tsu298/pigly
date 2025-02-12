<?php

namespace App\Http\Controllers;

use App\Models\Pigly;
use Illuminate\Http\Request;
use App\Http\Requests\PiglyRequest;

class PiglyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function weight(PiglyRequest $request)
    {
        $pigly = $request->only(['weight_now','weight_goal']);
        return view('weight', compact('pigly'));
    }
}
