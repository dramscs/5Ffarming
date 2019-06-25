<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    
    public function index()
       {
        
        return view('admin.views.programIndex',compact('programs'));
        
       }
      
       public function create()
       {
           return view('admin.views.programCreate');
       }
     
       public function store(Request $request)
       {
           
       }
      
        
       public function edit(Speaker $speaker)
       {
         
       }
     
      
       public function update(Request $request, Speaker $speaker)
       {
          
       }
     
       
       public function destroy($id)
       {
   
         
         
       }
   }
