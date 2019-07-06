<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteTicketController extends Controller
{
    //
    public function create($id)
    {
    	clock($id);
    }
}
