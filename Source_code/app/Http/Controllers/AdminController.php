<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getIndex()
    {
        $newOrderCount=Orders::where('state',1)->count();
        return view('admin.index',['newOrderCount'=>$newOrderCount]);
    }

    public function showChangePasswordForm()
    {
        return view('admin.changePassword');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed'
        ]);

        if(Hash::check($request->input('old_password'),Auth::user()->password))
        {
            $request->user()->fill(['password' => Hash::make($request->input('new_password'))])->save();
            return redirect()->back()->with('message','Đổi password thành công! Vui lòng đăng xuất và đăng nhập lại.');

        }
        return redirect()->back()->withErrors(['wrongPassword'=>'Password cũ ko đúng!']);
    }
}
