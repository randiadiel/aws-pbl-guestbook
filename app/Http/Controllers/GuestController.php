<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Return guests list page
     *
     * Get data from guests database and return it with the blade.
     *
     **/
    public function view()
    {
        $guests = Guest::all();
        return view('guestList',['guests' => $guests]);
    }

    /**
     * Create a new item in guests table
     *
     * Acccept data from guest form and insert it into database.
     *
     * @param Request $request Form Request
     **/
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        Guest::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->back()->with('success','Thankyou, You have been recorded!');
    }
}
