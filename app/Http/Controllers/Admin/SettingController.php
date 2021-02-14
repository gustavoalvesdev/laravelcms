<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Setting;

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

        $settings = [];

        // return all settings
        $dbSettings = Setting::get();

        foreach($dbSettings as $dbSetting) {
            $settings[$dbSetting['name']] = $dbSetting['content'];
        }

        return view('admin.settings.index', [
            'settings' => $settings
        ]);
    }

    public function save()
    {

    }
}
