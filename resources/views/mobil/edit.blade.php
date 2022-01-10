@extends('layouts.app')

@section('content')
    <div class="container" mt-4>
        <div class="text-center mt-4">
            <h3>Form Edit Data Mobil</h3>
        </div>
        <form class="mt-4" action="/mobil/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Foto Mobil</label>
                @if($data->foto_mobil)
                  <img src="/image/{{ $data->foto_mobil }}" alt="">
                    
                @endif
              <input type="file" name="foto_mobil" id="foto_mobil" class="form-control" value="">
              <input type="hidden" name="foto_lama" id="foto_mobil" class="form-control" value="{{ $data->foto_mobil }}">
              @error('foto_mobil')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Jenis Mobil</label>
              <select id="id_jenis" name="id_jenis" class="form-select">
                <option value="">Silahkan Pilih Jenis</option>
                <option value="1">Matic</option>
                <option value="2">Manual</option>
              </select>
              @error('id_jenis')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Type Mobil</label>
              <input type="text" class="form-control" id="type_mobil" name="type_mobil" value="{{ old('type_mobil') ? old('type_mobil') : $data->type_mobil }}">
              @error('type_mobil')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" value="{{ old('merk') ? old('merk') : $data->merk }}">
                @error('merk')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="mb-3">
                <label class="form-label">No. Polisi</label>
                <input type="text" class="form-control" id="no_polisi" name="no_polisi" value="{{ old('no_polisi') ? old('no_polisi') : $data->no_polisi }}" >
                @error('no_polisi')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
            <div class="mb-3">
                <label class="form-label">Warna</label>
                <input type="text" class="form-control" id="warna" name="warna" value="{{ old('warna') ? old('warna') : $data->warna }}">
                @error('warna')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') ? old('harga') : $data->harga }}">
                @error('harga')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
           
              <input type="submit" value="Simpan" class="btn btn-success mt-2">
              <a href="/mobil" class="btn btn-primary mt-2">Kembali</a>
          </form>
    </div>
@endsection