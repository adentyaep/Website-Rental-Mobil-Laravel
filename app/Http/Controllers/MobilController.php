<?php

namespace App\Http\Controllers;

use App\Models\Mobil_model;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class MobilController extends Controller
{
    public function index(){
        $data = Mobil_model::paginate(15);

        return view('mobil.index', compact('data'));
    }
    public function create(){
        return view('mobil.create');
    }

    // public function mobil(){
    //     $data = Mobil_model::all();
    //     return view('mobil.mobil', compact('data'));
    // }

    public function tambah(Request $request){

        $request->validate([
            'foto_mobil' => 'required',
            'id_jenis' => 'required|max:5',
            'type_mobil' => 'required|max:25|min:4',
            'merk' => 'required|max:25|min:4',
            'no_polisi' => 'required|max:25|min:4',
            'warna' => 'required|max:25|min:4',
            'harga' => 'required|max:15|min:4',
        ]);

        

        $imgName = $request->foto_mobil->getClientOriginalName() . '-' . time() . '.' . $request->foto_mobil->extension();
        

        $request->foto_mobil->move(public_path('image'), $imgName);

        // $data = new Mobil_model();
        // $data->foto_mobil = $request->foto_mobil;
        // $data->id_jenis = $request->id_jenis;
        // $data->type_mobil = $request->type_mobil;
        // $data->merk = $request->merk;
        // $data->no_polisi = $request->no_polisi;
        // $data->warna = $request->warna;
        // $data->harga = $request->harga;
        // $data->status = 0;
        // $data->save();

        Mobil_model::create([
            'foto_mobil' => $imgName,
            'id_jenis' => $request->id_jenis,
            'type_mobil' => $request->type_mobil,
            'merk' => $request->merk,
            'no_polisi' => $request->no_polisi,
            'warna' => $request->warna,
            'harga' => $request->harga,
            'status' => 0
        ]);

        return redirect('/mobil');
    }

    public function edit($id){
        
        $data = Mobil_model::find($id);

        return view('mobil.edit', compact('data'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'id_jenis' => 'required|max:5',
            'type_mobil' => 'required|max:25|min:4',
            'merk' => 'required|max:25|min:4',
            'no_polisi' => 'required|max:25|min:4',
            'warna' => 'required|max:25|min:4',
            'harga' => 'required|max:15|min:4',
        ]);

            $imgName = $request->foto_lama;

        
            if($request->foto_mobil){
                $imgName = $request->foto_mobil->getClientOriginalName() . '-' . time() . '.' . $request->foto_mobil->extension();

                $request->foto_mobil->move(public_path('image'), $imgName);
                
            }

            $data = Mobil_model::find($id)->update([
                'foto_mobil' => $imgName,
                'id_jenis' => $request->id_jenis,
                'type_mobil' => $request->type_mobil,
                'merk' => $request->merk,
                'no_polisi' => $request->no_polisi,
                'warna' => $request->warna,
                'harga' => $request->harga,
                'status' => 0
            ]);
            
        
        
        
        return redirect('/mobil');
    }

    public function detail($type_mobil){

        $data = Mobil_model::where('type_mobil', $type_mobil)->first();

        return view('mobil.detail', compact('data'));
    }

    public function delete($id){

        Mobil_model::find($id)->delete();

        return redirect('/mobil');
       
    }
}
