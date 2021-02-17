<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{

    public function test()
    {
        return ['Test' => 'OK'];
    }

    public function imageupload(Request $request)
    {

        // types of image allowed to upload
        $request->validate([
            'file' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $imageName = time().'.'.$request->file->extension();

        // move file from temp folder to target folder
        $request->file->move(public_path('media/images'), $imageName);

        // generate and return file link
        return [
            'location' => asset('media/images/'.$imageName)
        ];

    }

}
