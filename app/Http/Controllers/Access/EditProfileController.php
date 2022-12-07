<?php

namespace App\Http\Controllers\Access;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EditProfileController extends Controller
{
    public function index()
    {
        $menu = 'Edit Profile';
        $user = \DB::table('users')
                    ->join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
                    ->where('username', Auth::user()->username)
                    ->select('users.*', 'kelas.*')
                    ->first();
        $kelas = \DB::table('kelas')->get();

        return view('pages.access.edit-profile', compact('menu','user','kelas'));
    }

    public function update(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'kelas' => 'required',
            'phone_number' => 'required',
        ]);

        if($req->hasFile('picture')) {
            $pict = $req->file('picture');
            $store_picture = Storage::putFileAs('public/profile/', $pict, $pict->getClientOriginalName());
            
            $update = \DB::table('users')
                        ->where('username', Auth::user()->username)
                        ->update([
                            'name' => $req->name,
                            'picture' => $pict->getClientOriginalName(),
                            'id_kelas' => $req->kelas,
                            'phone_number' => $req->phone_number,
                            'updated_at' => now()
                        ]);    
        }else{
            $update = \DB::table('users')
                        ->where('username', Auth::user()->username)
                        ->update([
                            'name' => $req->name,
                            'id_kelas' => $req->kelas,
                            'phone_number' => $req->phone_number,
                            'updated_at' => now()
                        ]);
        return redirect()->back()->with('success', 'Berhasil memperbarui profile!');
        }
        

    }
}
