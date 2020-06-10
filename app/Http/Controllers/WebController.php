<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Session;

class WebController extends Controller
{
    public function home(){
        $mahasiswa = Mahasiswa::all();
        if (!$mahasiswa->isEmpty()){            
            return view('home', ['mahasiswa' => $mahasiswa]);
        }
        else{
            Session::flash('message', 'Database Kosong');
            return view('home');
        }
    }

    public function menuTambah(){
        $dosen = Dosen::all();
        return view('tambah', ['dosen' => $dosen]);
    }

    public function menuEdit($id){
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', ['dosen' => $dosen, 'mahasiswa' => $mahasiswa]);
    }

    public function insertData(Request $request){
        $dosen = Dosen::where('nama', $request->select)
                        ->value('id');
        Mahasiswa::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'nim' => $request->nim,
            'dosen_id' => $dosen            
        ]);        
        return redirect('/beranda');
    }

    public function deleteData($id){                
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/beranda');               
    }

    public function editData(Request $request, $id){
        $dosen = Dosen::where('nama', $request->select)
                        ->value('id');

        Mahasiswa::where('id', $id)
        ->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'nim' => $request->nim,
            'dosen_id' => $dosen            
        ]);        
        return redirect('/beranda');
    }
}
