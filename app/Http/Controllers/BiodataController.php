<?php

namespace App\Http\Controllers;
use App\Models\Biodata;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
   public function index()
   {
    return view('controllerBiodata');
   }

   public function MenampilkanBiodata()
   {
    $dataNama = Biodata ::$nama;
    $dataKelas = Biodata ::$kelas;
    $dataSekolah = Biodata ::$sekolah;
    $dataAlamat = Biodata ::$alamat;
    $dataHobi = Biodata ::$hobi;
    $dataEmail = Biodata ::$email;
    $dataBesti = Biodata ::$besti;
    return view('biodata', compact('dataNama','dataKelas','dataSekolah','dataAlamat','dataHobi','dataEmail','dataBesti'));
    
    
  }
}
