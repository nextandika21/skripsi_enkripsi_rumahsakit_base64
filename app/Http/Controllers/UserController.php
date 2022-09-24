<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Storage;
use Hash;

use App\Models\User;

class UserController extends Controller
{
    public function messages(){
        return [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Format email tidak sesuai',
            'email.unique' => 'Email sudah terdaftar',
            'name.required' => 'Nama tidak boleh kosong',
            'name.string' => 'Nama harus berupa string',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter',
            'photo.file' => 'Photo harus berupa file',
            'photo.max' => 'Photo tidak boleh lebih dari 7 MB',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal berisi 8 karakter',
            'password.confirmed' => 'Password tidak sesuai',
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

        $user = User::all();
        return view('user.index',['user'=>$user]);
    }

    public function add()
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

        return view('user.add');
    }

    public function add_save(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:255',
            'photo' => 'file|max:7000', // max 7MB
            'password' => 'required|min:8|confirmed'
        ], $this->messages());

        $save_path = "";
        
        if($request->file('photo') != null){
            $path = Storage::putFile('public/images/'.$request->email,
                $request->file('photo'),
            );
            $save_path = substr($path,7);
        }

        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->photo = $save_path;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('success', "User berhasil ditambahkan");
        return redirect('console/user');
    }

    public function profile($id)
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

        $user = User::find($id);
        return view('user.profile',['user'=>$user]);
    }

    public function profile_save(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'photo' => 'file|max:7000', // max 7MB
        ], $this->messages());

        $user = User::find($id);
        $save_path = "";
        
        if($request->file('photo') != null){
            $path = Storage::putFile('public/images/'.$user->email,
                $request->file('photo'),
            );
            $save_path = substr($path,7);
        }else{
            $save_path = $user->photo;
        }

        $user->name = $request->name;
        $user->photo = $save_path;
        $user->save();

        Session::flash('success', "Data berhasil diubah");
        return redirect('console/user');
    }

    public function changepassword($id)
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

        $user = User::find($id);
        return view('user.changepassword',['user'=>$user]);
    }

    public function changepassword_save(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|min:8|confirmed'
        ], $this->messages());

        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('success', "Password berhasil diubah");
        return redirect('console/user');
    }

    public function edit($id)
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
        
        $user = User::find($id);
        return view('user.edit',['user'=>$user]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('success', "User berhasil dihapus");
        return response()->json("berhasil");
    }
}
