<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function __construct()
    {
        // only authenticated users can access it
        $this->middleware('auth');
    }

    /**
     * @return View
     */
    public function index() : View
    {
        return view('admin.settings.index');
    }

    public function save()
    {

    }
}
