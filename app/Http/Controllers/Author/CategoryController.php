<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $category=Category::all();
        return view('author.category.index',compact('category'));
    }
    public function create()
    {
        return view('author.category.create');
    }
    public function store(CategoryFormRequest $request)
    {
        $data=$request->validated();
        $category=new Category;
        $category->name=$data['name'];
        $category->slug= Str::slug($data['slug']);
        $category->description=$data['description'];
        
        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename);
            $category->image=$filename;
        }
        $category->meta_title=$data['meta_title'];
        $category->meta_description=$data['meta_description'];
        $category->meta_keyword=$data['meta_keyword'];
        // $category->is_approved=true;
        $category->navbar_status=$request->navbar_status==true ? '1':'0';
        $category->status=$request->status==true ? '1':'0';
        $category->created_by=Auth::user()->id;
        $category->save();
        return redirect('/author/category')->with('message','category created successfully');
    }
    public function edit($category_id)
    {
        $category=Category::find($category_id);
        return view('author.category.edit',compact('category'));
    }
    public function update(CategoryFormRequest $request,$category_id)
    {
        $data=$request->validated();
        $category= Category::find($category_id);
        $category->name=$data['name'];
        $category->slug= Str::slug($data['slug']);
        $category->description=$data['description'];
        
        if($request->hasfile('image')){

            $destination='uploads/category/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination);
            }


            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename);
            $category->image=$filename;
        }
        $category->meta_title=$data['meta_title'];
        $category->meta_description=$data['meta_description'];
        $category->meta_keyword=$data['meta_keyword'];
      //  $category->is_approved=$request->is_approved==true ? '1':'0';
        $category->navbar_status=$request->navbar_status==true ? '1':'0';
        $category->status=$request->status==true ? '1':'0';
        $category->created_by=Auth::user()->id;
        $category->update();
        return redirect('/author/category')->with('message','category updated successfully');
    }
    public function destroy(Request $request)
    {
        $category=Category::find($request->category_delete_id);
        if($category){
            
            $destination='uploads/category/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $category->posts->each->delete();
        $category->delete();
            return redirect('author/category')->with('message','category deleted with its posts successfully');
    }
    else
    {
        return redirect('author/category')->with('message','category id not found');
    }
}
}
