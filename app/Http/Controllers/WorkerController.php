<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function workers()
    {
        $workers = Worker::all();
        return view('workers.workers', compact('workers'));
    }
}