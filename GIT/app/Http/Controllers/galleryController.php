<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\album;
use App\Models\albums_subImage;
use Illuminate\Support\Facades\Storage;
class galleryController extends Controller
{
    function index(){
        return view('admin.add_album');
    }
    function store(Request $req){

        $req->validate([
            'album_title'=> 'required | min:4',
            'image'=> 'required | mimes:jpg,jpeg,png,gif',
        ]);

        $images= $req->file('subImages');

            $album=album::create([
            'album_title'=> $req->album_title,
            'album_coverImage'=>$this->image($req->image)
        ]);

        foreach ($images??'' as $image) {
            $image=$this->image($image);

            $subImage=albums_subImage::create([
                'albums_subImages_name'=>$image,
                'album_id'=>$album->id
            ]);

        }
        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }

    function show(){
        $albums=album::get();
        return view('admin.views.view_albums',['albums'=>$albums]);
    }


    function delete($id){

        $album=album::where('album_id',$id)->first();
        if (Storage::exists('upload/GIT_albums/'.$album->album_coverImage)) {
            Storage::delete('upload/GIT_albums/'.$album->album_coverImage);
        }
        album::where('album_id',$id)->delete();
        $subImages=albums_subImage::where('album_id',$id)->get('albums_subImages_name');
        foreach ($subImages as $img) {
            if (Storage::exists('upload/GIT_albums/'.$img->albums_subImages_name)) {
                Storage::delete('upload/GIT_albums/'.$img->albums_subImages_name);
            }
        }
        return redirect()->back()->with("msg","Album Deleted Successfully")->with("status","danger");
    }


    function edit($id){
        $album=album::all()->where('album_id',$id)->first();
        return view('admin.edits.edit_album',['album'=>$album]);
    }


    function edited(Request $req){
        $req->validate([
            'album_title'=> 'required | min:4',
        ]);
        if ($req->image) {

            album::where('album_id',$req->id)->update([
                'album_title'=>$req->album_title,
                'album_coverImage'=>$this->image($req->image)
            ]);
        } else {
            album::where('album_id',$req->id)->update([
                'album_title'=>$req->album_title
            ]);
        }


        return redirect('gallery/view')->with("msg","Album Updated Successfully")->with("status","primary");
    }


    function image($image){

        $filenameWithExt = $image->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);

        //get just extension
        $extension = $image->extension();
        $nameToStore = $filename['filename'] . "_".time().".".$extension;
        //Move to folder
        $path = $image->move('upload/GIT_albums/' ,$nameToStore);
        return $nameToStore;

    }
}
