<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Storage;

use App\Models\Setting;

class SettingController extends Controller
{
    public function messages(){
        return [
            'logoweb.file' => 'Logo Web harus berupa file',
            'logoweb.max' => 'Logo Web tidak boleh lebih dari 7 MB'
        ];
    }

    public function index()
    {
        echo 
        '<html>
        <head>
        <style>
        .loader{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("https://i.pinimg.com/originals/e9/29/1e/e9291eaddacd460280a34a151dcc5cc4.gif") 
                        50% 50% no-repeat #0e1e2f;
            background-size: 100px;
        }
        </style>
        </head>
        <body>
        <div class="loader"></div>
        </body>
        </html>';

        return view('setting.index');
    }

    public function index_save(Request $request)
    {
        $this->validate($request, [
            'logoweb' => 'file|max:7000', // max 7MB
        ], $this->messages());

        $logoweb = Setting::find(1);
        $save_path = "";
        
        if($request->file('logoweb') != null){
            $path = Storage::putFileAs('public/setting', $request->file('logoweb'), 'logo.png');
            $save_path = substr($path,7);
        }else{
            $save_path = $logoweb->value;
        }

        $logoweb->value = $save_path;
        $logoweb->save();

        Session::flash('success', "Pengaturan berhasil di update");
        return redirect('console/setting');
    }
}
