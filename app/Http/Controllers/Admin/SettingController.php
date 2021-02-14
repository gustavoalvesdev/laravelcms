<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Setting;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\Validator;

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

    public function save(Request $request)
    {
        $data = $request->only([
            'title', 'subtitle', 'email', 'bgcolor', 'textcolor'
        ]);

        $validator = $this->validator($data);

        if ($validator->fails()) {
           return redirect()->route('settings')
           ->withErrors($validator);
        }

        // TODO: save
        echo 'Salvando';

        // redirect to settings page
        # return redirect()->route('settings');
    }

    /**
     * @param array $data
     *
     * @return Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) : ValidationValidator
    {
        return Validator::make($data, [
            'title' => ['string', 'max:100'],
            'subtitle' => ['string', 'max:100'],
            'email' => ['string', 'email'],
            'bgcolor' => ['string', 'regex:/#[A-Z0-9]{6}/i'],
            'textcolor' => ['string', 'regex:/#[A-Z0-9]{6}/i']
        ]);
    }
}
