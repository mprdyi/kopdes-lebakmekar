<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekretarisController extends Controller
{
 public function index(){
    return view('sekretaris.duit');
 }

 public function suratSk()
 {
    return view('sekretaris.suratSK');
 }

 public function suratUndangan()
 {
    return view('sekretaris.surat-undangan');
 }

 public function suratTugas()
 {
    return view('sekretaris.surat-tugas');
 }

 public function suratPemberitahuan()
 {
    return view('sekretaris.surat-pemberitahuan');
 }
}
