@extends('layout.main')

@section('navbar')
<div class="flex justify-center items-center">
    <div class="w-full max-w-xs">
        <form action="/update/{{ $pembeli->id }}" method="POST" >
        @csrf
        @method('put')
            <label class="block form-control">
                <div class="label">
                    <span class="label-text">Nama</span>
                </div>
                <input type="text" placeholder="Masukkan nama Pembeli!" class="input input-bordered input-error-content w-full max-w-xs" name="nama" required/>
                
            </label>
            <label class="block form-control">
                <div class="label">
                    <span class="label-text">Jenis Musang</span>
                </div>
                <input type="text" placeholder="Masukkan jenis musang!" class="input input-bordered input-error-content w-full max-w-xs" name="jenis" required/>
                
            </label>
            <label class="block form-control">
                <div class="label">
                    <span class="label-text">Harga</span>
                </div>
                <input type="text" placeholder="Harga" class="input input-bordered input-error-content w-full max-w-xs" name="harga" required/>
                
            </label>
            <button type="submit" class="btn btn-base-300 mt-5">Send</button>
        </form>
    </div>
  </div>
@endsection