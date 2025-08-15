<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
    $projects = Auth::user()->projects;

    return view('dashboard', compact('projects'));
    }
}