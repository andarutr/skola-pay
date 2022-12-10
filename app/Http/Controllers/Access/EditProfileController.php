<?php

namespace App\Http\Controllers\Access;

use Auth;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EditProfileController extends Controller
{
    public function index()
    {
        $menu = 'Edit Profile';
        $user = User::join('kelas', 'users.id_kelas', '=', 'kelas.id_kelas')
                        ->where('username', Auth::user()->username)
                        ->select('users.*', 'kelas.*')
                        ->first();
        $kelas = Kelas::get();

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
            $pict->move('assets/images/profile/', $pict->getClientOriginalName());
            
            // Update with picture
            User::where('username', Auth::user()->username)
                    ->update([
                        'name' => $req->name,
                        'picture' => $pict->getClientOriginalName(),
                        'id_kelas' => $req->kelas,
                        'phone_number' => $req->phone_number
                    ]);    
        }else{
            User::where('username', Auth::user()->username)
                    ->update([
                        'name' => $req->name,
                        'id_kelas' => $req->kelas,
                        'phone_number' => $req->phone_number
                    ]);
        }
                    
        return redirect()->back()->with('success', 'Berhasil memperbarui profile!');
    }
}
