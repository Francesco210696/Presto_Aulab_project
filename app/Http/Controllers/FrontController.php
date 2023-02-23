<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        $announcements = Announcement::take(6)->get()->sortByDesc('created_at');
        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category)
    {
        return view('announcements.categoryShow', compact('category'));
    }
}
