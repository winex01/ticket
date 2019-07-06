<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteTicketController extends Controller
{
    //
    public function create($id, Request $request)
    {
    	return redirect()->route('voyager.tickets.create')
    	->with('site_id', $id);
    }
}
