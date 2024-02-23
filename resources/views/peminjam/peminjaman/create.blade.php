@extends('layouts.index')
@section('title','Pinjam Buku')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Pinjam Buku</h4>
            </div>
            <div class="card-body">
                <form action="/ulasan" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">No</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Buku</label>
                        <input type="text" name="buku" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Tanggal Peminjaman</label>
                        <input type="text" name="Tanggal_Peminjaman" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Tanggal Pengembalian</label>
                        <input type="date" name="Tanggal_Pengembalian" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Status Peminjaman</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($peminjaman as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection