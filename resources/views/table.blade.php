@extends('layout.main')

@section('navbar')
@php
    $no = 1;
@endphp
<div class="p-5">
    <a href="/add"><button class="btn btn-active btn-neutral">Add data</button></a>
</div> 
    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <th></th>
                <th>Nama</th>
                <th>Jenis Musang</th>
                <th>Harga</th>
            </thead>
            <tbody>
                @foreach ($pembeli as $p)
                    
            
                <tr>
                    <td>{{ $no }}.</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jenis }}</td>
                    <td>{{ $p->harga }}</td>
                    <td><a href="/{{ $p->id }}/edit"><button class="btn btn-accent-content">Edit</button></a>
                        <form action="/update/{{ $p->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class=" btn btn-primary">Delete</button>
                    </form></td>
                </tr>
                @php
                $no++
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection