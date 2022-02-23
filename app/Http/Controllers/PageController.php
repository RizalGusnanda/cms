<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Hi! Selamat Datang di Website Laravel";
    }

    public  function about(){
        echo "Nama  : Muchamad Rizal Gusnanda Atmaja <br>";       
        echo "Nim   : 2041720015 <br>";
        echo "Kelas : TI 2G";
    }

    public function articles($id){
        echo "Ini adalah halaman Artikel dengan id " . $id;
    }
}