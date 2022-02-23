<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public  function about(){
        echo "Nama  : Muchamad Rizal Gusnanda Atmaja <br>";       
        echo "Nim   : 2041720015 <br>";
        echo "Kelas : TI 2G";
    }
}
