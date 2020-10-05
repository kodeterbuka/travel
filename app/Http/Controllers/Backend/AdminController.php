<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Profil(){
        
        return view('backend.admin.profil');
    }
    public function ProfilUpdate(ProfilRequest $request){
        $request->user()->update(
            $request->all()
        );
        session()->flash("success","update your profile "); 
        return redirect('admin/profil');
    }

    public function Password(){
        return view('backend.admin.password');
    }
    public function PasswordUpdate(){
        request()->validate([
            'old_password' => 'required' ,
            'password' => ['required', 'min:3', 'confirmed',
                            'regex:/(^[A-Za-z]+$)+/',      // must contain at least one lowercase letter
                            // 'regex:/[0-9]/',      // must contain at least one digit
                            // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
                //  contoh -> 'regex:/[@$!%*#?&]/',  <- contoh must contain a special character /(^[A-Za-z ]+$)+/'
                        ],
                    ],[
                        'password.regex' => 'Password hanya abjad dan angka,',
                
                    ]);
        $now = Auth()->user()->password;
        $old = request()->old_password;
        $new = request()->password;
        // dd($new);
        if(Hash::check($old, $now)){
            Auth()->logoutOtherDevices($old);
            Auth()->user()->update([
                'password' => bcrypt($new),
            ]);
            
                // dd(request()->all());
            Auth()->logout();
            return redirect()->route('admin.profil')->with('success','Password Sudah Diganti');
        }else{
            return back()->withErrors(['old_password'=>'Gagal, Password lama anda salah !']);
        }
        return view('backend.admin.profil');
    }
    public function messages(){
        return [
        'password.regex:/[A-Z]' => 'huruf besar',

    ];
}
}
