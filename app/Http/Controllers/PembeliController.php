<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('table',compact(['pembeli']));
    }
    public function create()
    {
       return view('add');
    }
    public function store(Request $request)
    {
        $pembeli = Pembeli::create($request->except(['_token']));

        return redirect('table');
    }
    public function edit($id)
    {
        $pembeli = Pembeli::find($id);

        return view('update.edit',compact(['pembeli']));
    }
    public function update($id, Request $request)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->update($request->all());
        return redirect('table');
    }
    public function destroy($id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->delete();
        return redirect('table');
    }
}
