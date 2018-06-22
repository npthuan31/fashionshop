<?php

namespace App\Http\Controllers;

use App\StaticPage;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about()
    {
        $about=StaticPage::find(1);
        return view('store.about',['about'=>$about]);
    }
    public function aboutEdit()
    {
        $about=StaticPage::find(1);
        return view('admin.aboutEdit',['about'=>$about]);
    }
    public function aboutUpdate(Request $request)
    {
        $this->validate($request,[
            'content' => 'required'
        ]);

        $about=StaticPage::find(1);
        $about->content=$request->input('content');
        $about->save();
        return redirect()->back()->with('message','Lưu thành công!');
    }

    public function instruction()
    {
        $instruction=StaticPage::find(2);
        return view('store.instruction',['instruction'=>$instruction]);
    }
    public function instructionEdit()
    {
        $instruction=StaticPage::find(2);
        return view('admin.instructionEdit',['instruction'=>$instruction]);
    }
    public function instructionUpdate(Request $request)
    {
        $this->validate($request,[
            'content' => 'required'
        ]);

        $instruction=StaticPage::find(2);
        $instruction->content=$request->input('content');
        $instruction->save();
        return redirect()->back()->with('message','Lưu thành công!');
    }

    public function contact()
    {
        $contact=StaticPage::find(3);
        return view('store.contact',['contact'=>$contact]);
    }
    public function contactEdit()
    {
        $contact=StaticPage::find(3);
        return view('admin.contactEdit',['contact'=>$contact]);
    }
    public function contactUpdate(Request $request)
    {
        $this->validate($request,[
            'content' => 'required'
        ]);

        $contact=StaticPage::find(3);
        $contact->content=$request->input('content');
        $contact->save();
        return redirect()->back()->with('message','Lưu thành công!');
    }
}