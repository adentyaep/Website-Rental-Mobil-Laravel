@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Data Mobil</h1>
        <table class="table">
            <tr>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->type_mobil}}</td>
                <td>
                    <a href="/mobil/{{ $item->type_mobil }}" class="btn badge rounded-pill bg-info">Detail</a>
                    <a href="/mobil/{{ $item->id }}/edit" class="btn badge rounded-pill bg-warning">Edit</a>
                    {{-- <a href="" class="badge rounded-pill bg-danger">Hapus</a> --}}
                    <form class="mt-2" action="/mobil/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                        <button class="btn badge rounded-pill bg-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{ '/create' }}" class="btn btn-success">Tambah Data</a>
        {{$data->links()}}
    </div>
    
@endsection