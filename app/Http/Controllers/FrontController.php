<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceivedMail;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function contactUs()
    {
        return view('contact');
    }
    public function saveContact(Request $request)
    {
        $contact = $request->all();
        Mail::to('proprietario@gmail.com')->send(new ContactReceivedMail($contact));
        return redirect()->back()->with('success', 'complimenti hai inviato una mail con successo');
    }
    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->paginate(10);
        return view('announcements.index',compact('announcements'));
    }
}
