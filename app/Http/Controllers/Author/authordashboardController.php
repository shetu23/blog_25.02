<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class authordashboardController extends Controller
{
    
    public function index()
    {
        $categories=Category::where('created_by', Auth::user()->id)->get();
        $posts=Post::where('created_by', Auth::user()->id)->get();
      

        return view('author.authordashboard',compact('categories','posts'));
    }
    
}
