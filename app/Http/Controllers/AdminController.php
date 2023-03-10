<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logged Out Successfully!',
            'alert-type' => 'success'
        );


        return redirect('/login')->with($notification);
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function editProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function storeProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        
        if($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin_images'), $fileName);
            $data['profile_image'] = $fileName;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Update Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }

    public function changePassword()
    {
        return view('admin.admin_change_password');
    }

    public function updatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required |same:newPassword',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldPassword, $hashedPassword))
        {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newPassword);
            $users->save();
            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        } else {
            session()->flash('message','Old Password did not match');
            return redirect()->back();
        }
    }
}
