<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Patient;

class PatientController extends Controller
{
    public function messages(){
        return [
            'nik.required' => 'NIK tidak boleh kosong',
            'nik.max' => 'NIK tidak boleh lebih dari 255 karakter',
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'alamat.max' => 'Alamat tidak boleh lebih dari 255 karakter',
            'nomor_hp.required' => 'Nomor HP tidak boleh kosong',
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

        $patient = Patient::all();
        $length_data = count($patient);
        for($i=0;$i<=$length_data-1;$i++){
            $patient[$i]->nik = base64_decode($patient[$i]->nik);
            $patient[$i]->nama = base64_decode($patient[$i]->nama);
            $patient[$i]->tanggal_lahir = base64_decode($patient[$i]->tanggal_lahir);
            $patient[$i]->jenis_kelamin = base64_decode($patient[$i]->jenis_kelamin);
            $patient[$i]->alamat = base64_decode($patient[$i]->alamat);
            $patient[$i]->nomor_hp = base64_decode($patient[$i]->nomor_hp);
        }

        return view('patient.index',['patient'=>$patient]);
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

        return view('patient.add');
    }

    public function add_save(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string|max:255',
            'nomor_hp' => 'required'
        ], $this->messages());

        $checkpatient = Patient::where("nik", base64_encode($request->nik))->first();
        if($checkpatient){
            Session::flash('error', "NIK sudah terdaftar");
            return redirect()->back();
        }

        $patient = new Patient;
        $patient->nik = base64_encode($request->nik);
        $patient->nama = base64_encode($request->nama);
        $patient->tanggal_lahir = base64_encode($request->tanggal_lahir);
        $patient->jenis_kelamin = base64_encode($request->jenis_kelamin);
        $patient->alamat = base64_encode($request->alamat);
        $patient->nomor_hp = base64_encode($request->nomor_hp);
        $patient->save();

        Session::flash('success', "Patient berhasil ditambahkan");
        return redirect('console/patient');
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

        $patient = Patient::find($id);
        $patient->nik = base64_decode($patient->nik);
        $patient->nama = base64_decode($patient->nama);
        $patient->tanggal_lahir = base64_decode($patient->tanggal_lahir);
        $patient->jenis_kelamin = base64_decode($patient->jenis_kelamin);
        $patient->alamat = base64_decode($patient->alamat);
        $patient->nomor_hp = base64_decode($patient->nomor_hp);
        return view('patient.profile',['patient'=>$patient]);
    }

    public function profile_save(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string|max:255',
            'nomor_hp' => 'required'
        ], $this->messages());

        $patient = Patient::find($id);
        $patient->nama = base64_encode($request->nama);
        $patient->tanggal_lahir = base64_encode($request->tanggal_lahir);
        $patient->jenis_kelamin = base64_encode($request->jenis_kelamin);
        $patient->alamat = base64_encode($request->alamat);
        $patient->nomor_hp = base64_encode($request->nomor_hp);
        $patient->save();

        Session::flash('success', "Data patient berhasil diubah");
        return redirect('console/patient');
    }

    public function delete($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        Session::flash('success', "Patient berhasil dihapus");
        return response()->json("berhasil");
    }
}
