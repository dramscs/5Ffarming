<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\model\Gallery;

class GalleryController extends Controller
{
    
    public function index()
    {
        $galleries = Gallery::latest()->paginate(5);
        $galleries = DB::select("SELECT * FROM cmn_gallery WHERE active = 1 order by created_at DESC");
        return view('admin.views.galleryIndex',compact('galleries'))
            ->with('i');

    }

    
    public function create()
    {
        return view('admin.views.galleryCreate');
    }

   
    public function store(Request $request)
    {
        {
            $request->validate([
                'associatetypeid' => 'required',
                'associateid' => 'required',
                'name' => '',
                'imagename' => '',

    
            ]);
            
            $galleries = new Gallery($request->input());
            }
            $galleries->save() ;
            return redirect()->route('gallery.index')
                           ->with('success','Image Added successfully');
                           return view('admin.views. galleryIndex');
    }
    
    public function edit(Gallery $gallery)
    {
        return view('admin.views.galleryEdit',compact('gallery'));
    }
  
   
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'associatetypeid' => 'required',
                'associateid' => 'required',
                'imagename' => 'required',
    
        ]);
  
        $gallery->update($request->all());
  
         return redirect()->route('gallery.index')->with('success','Image updated successfully');
    }  

    
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
		$gallery = DB::select("UPDATE cmn_gallery SET active = 0 WHERE gallery_id = $id");
		return redirect('/gallery')->with('success','Image deleted successfully');
    }
  

}