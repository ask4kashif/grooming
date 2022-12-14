<?php

namespace App\Http\Controllers\Admin;

use Storage;
use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::first();
        return view('admin.about.index',[
            'about'=>$about,
        ]);
    }
    public function edit($slug)
    {
        $about=About::where('slug',$slug)->first();
        return view('admin.about.edit',[
            'about'=>$about,
        ]);
    }
    public function update(Request $request,$slug)
    {
        $about=About::where('slug',$slug)->first();
        $image=$about->image;

        if($request->hasFile('image')){
            $image=$request->file('image')->store('public/images');
            Storage::delete($about->image);
        }
        $about->title=$request->title;
        $about->slug=Str::slug($request->title,'-');
        $about->description=$request->description;
        $about->image=$image;

        $about->save();
        return redirect()->route('admin.about')->with('success','About page updated successfully');
    }
}
