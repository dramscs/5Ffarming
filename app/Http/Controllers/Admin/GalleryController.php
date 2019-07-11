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

        $galleries = DB::select("SELECT *, 

        (SELECT name FROM lkp_master WHERE lookupid=cmn_gallery.associatetypeid) As associatetypeid,  
        (SELECT eventname FROM evn_event_master WHERE id=cmn_gallery.associateid AND active = 1) As associateid 
        FROM cmn_gallery WHERE active = 1 ORDER BY id DESC");

        return view('admin.views.galleryIndex',compact('galleries'))
            ->with('i');

    }

    
    public function create()
    {
        return view('admin.views.galleryCreate');
    }

   
    public function store(Request $request)
    {
            $request->validate([
                'associatetypeid' => 'required',
                'associateid' => 'required',
                'name' => '',
                'imagename' => 'required'
            ]);
            
            
        $galleries = new Gallery($request->input());

        if($file = $request->hasFile('imagename')) {
            
            $file = $request->file('imagename') ;
            $destinationPath = public_path().'/images/' ;
            $fileExtention = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999). '.' . $fileExtention;
            $file->move($destinationPath,$fileName);
            $galleries->imagename = $fileName ;
        }
  
        $galleries->save() ;
        return redirect()->route('gallery.index')
                       ->with('success','You have successfully Added Image');
            
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
                'name' => '',
                'imagename' => '',
    
        ]);
  
        $gallery->update($request->all());
  
         return redirect()->route('gallery.index')->with('success','Image updated successfully');
    }  

    
    public function destroy($id)
    {
        $galleries = Gallery::find($id);
		$galleries = DB::select("UPDATE cmn_gallery SET active = 0 WHERE id = $id");
		return redirect('/gallery')->with('success','Image deleted successfully');
    }
  

}