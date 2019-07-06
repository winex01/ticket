<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteTicketController extends Controller
{
    //
    public function create($id, Request $request)
    {
    	// clock($id);
    	session(['site_id' => $id]);
    	return redirect()->route('voyager.tickets.create');
    }
}
