<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Support\Carbon;

class WorkerController extends Controller
{
    public function all()
    {
        $workers = Worker::paginate(10);

        return view('workers', compact('workers'));
    }

    public function trial()
    {
        $date = Carbon::now()->subDays(90);
        $workers = Worker::whereDate('employment_date', '>', $date)
            ->orderBy('first_name', 'asc')
            ->paginate(10);

        return view('workers', compact('workers'));
    }

    public function dismissed()
    {
        $workers = Worker::whereNotNull('dismissal_date')
            ->paginate(10);

        return view('workers', compact('workers'));
    }

    public function leaders()
    {
        $workers = Worker::has('subordinates')->with("subordinates")->paginate(10);

        return view('leaders', compact('workers'));
    }
}
