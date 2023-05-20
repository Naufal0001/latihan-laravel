<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('lihat-data', compact(['data']));
    }

    public function input(){
        return view('input-data');
    }

    public function input_data(Request $request){
        $user = new User();
        $user -> nama = $request -> nama;
        $user -> kelas = $request -> kelas;
        $user -> nis = $request -> nis;
        $user -> save();
        return redirect('/index');
    }

    public function edit($id){
        $update = User::findOrFail($id);
        return view('update-data', compact(['update']));
    }

    public function update(Request $request, $id){
    $validatedData = $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
        'nis' => 'required',
    ]);

    User::whereId($id)->update($validatedData);
    return redirect('/index')->with('success', 'Post updated successfully!');
    }

    public function delete($id){
        $delete = User::findOrFail($id);
        $delete->delete();
        return redirect('/index');
    }
}
