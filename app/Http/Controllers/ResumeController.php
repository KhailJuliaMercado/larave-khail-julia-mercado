<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail; // Ensure the model matches your database structure

class ResumeController extends Controller
{
    public function index()
    {
        // Fetch the first entry from the 'details' table (or adjust as needed)
        $detail = Detail::first();

        // Pass the `$detail` variable to the view
        return view('index', compact('detail'));
    }
}
