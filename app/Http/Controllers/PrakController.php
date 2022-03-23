<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PrakController extends Controller
{
    public function index(){
        return view('index', ['Posts'=> Post::index()]);
    }
}
