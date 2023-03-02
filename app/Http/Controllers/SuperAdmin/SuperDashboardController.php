<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

use App\Models\User;
class SuperDashboardController extends Controller
{
    public function index()
    {
        $categories=Category::count();
        $posts=Post::count();
        $authors=User::where('role_as','0')->count();
        $admins=User::where('role_as','1')->count();

        return view('super_admin.super_dashboard',compact('categories','posts','authors','admins'));
    }
}
