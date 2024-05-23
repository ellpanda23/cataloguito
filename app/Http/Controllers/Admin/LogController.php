<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.logs.index')->only('index');
        $this->middleware('can:admin.logs.show')->only('show');
    }

    public function index()
    {
        return view('admin.logs.index');
    }

    public function show(Activity $log)
    {
        return view('admin.logs.show', compact('log'));
    }

}
