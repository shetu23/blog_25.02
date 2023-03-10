<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        
        return view('admin.settings.index');
    }
    public function savedata(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'website_name'=>'required|max:255',
            'logo'=>'required',
            'favicon'=>'nullable',
             'description'=>'nullable',
            'meta_title'=>'required|max:255',
             'meta_keyword'=>'nullable',
             'meta_description'=>'nullable'
           
        ]);
       
        if($validator->fails())
        {
            return redirect()->back()->with('message',$validator);
        }


        $settings=Settings::where('id','1')->first();
        if($settings){   
            $settings->website_name=$request->website_name;
        if($request->hasfile('logo'))
        {

            $file=$request->file('logo');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/settings/',$filename);
            $settings->logo=$filename;
        }    
            if($request->hasfile('favicon'))
            {
                $file=$request->file('favicon');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('uploads/settings/',$filename);
                $settings->favicon=$filename;}
        $settings->meta_title=$request->meta_title;
        $settings->meta_keyword=$request->meta_keyword;
        $settings->meta_description=$request->meta_description;
        $settings->save();
           
        return redirect('admin/settings')->with('message','settings updated');
       
            }
        
       else{
        $settings=new Settings;
        $settings->website_name=$request->website_name;
        if($request->hasfile('logo'))
        {
          
            $file=$request->file('logo');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/settings/',$filename);
            $settings->logo=$filename;
        }    
            if($request->hasfile('favicon'))
            {
               
    
                $file=$request->file('favicon');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('uploads/settings/',$filename);
                $settings->favicon=$filename;
            }
        $settings->meta_title=$request->meta_title;
        $settings->meta_keyword=$request->meta_keyword;
        $settings->meta_description=$request->meta_description;
        $settings->save();
            
        return redirect('admin/settings')->with('message','settings added');   
        }
    }
}