@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="mt-2 mb-3">
            <h3>Detail Mobil</h3>
        </div>
        <div class="card shadow p-3 mb-5" style="width: 18rem;">
            <img class="card-img-top" src="/image/{{$data->foto_mobil}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $data->type_mobil }}</h5>
                <p class="card-text">{{ $data->no_polisi }}</p>
                <a href="/mobil" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection

