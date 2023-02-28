<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class frontEndController extends Controller
{
    public function index()
    {
        
        return view('frontend.index');
    }
    public function viewCategoryPost($category_slug)
    {
        $category=Category::where('slug',$category_slug)->where('status','0')->first();
        if($category)
        {
            $post=Post::where('category_id',$category->id)->where('status','0')->paginate(1);
            return view('frontend.post.index',compact('post','category'));
        }
        else
        {
            return redirect('/');
        }
        
    }
}
