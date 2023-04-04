<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    public function index()
    {
        $About = DB::table('about')->get();
        return view ('backend.updatelayouts.about.indexabout',compact('About'));
        // return view('backend.updatelayouts.about.indexabout');
    }

    public function create()
    {
        return view('backend.updatelayouts.about.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('image', $image->hashName());

        $about = About::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if($about){
            //redirect dengan pesan sukses
            return redirect()->route('backend.updatelayouts.about.indexabout')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('backend.updatelayouts.about.indexabout')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    // public function show($id)
    // {
    //     $Ab= about::find($id);
    //     return view('backend.masterdata.siswa.show', compact('Ab'));
    // }


}
