<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Booking;
use App\Anggota;
use App\Destinasi;
use App\Kegiatan;
use App\Galeri;
use App\Paket;
use App\Komentar;
class HomeController extends Controller
{
    public function index(){
        $destinasis = Destinasi::all();
        return view('/welcome',['destinasis'=>$destinasis]);
    }
    

    public function about(){
        $kegiatans = Kegiatan::all();
        return view('/about',['kegiatans'=>$kegiatans]);
    }
    public function detailKegiatan($id){
        $data = Kegiatan::findorFail($id);
        $kegiatans = Kegiatan::all();
        return view('/detailKegiatan', compact('data'),['kegiatans'=>$kegiatans]);
    }
    public function detailTempat($id){
        $data = Destinasi::findorFail($id);
        $destinasis = Destinasi::all();
        return view('/detailTempat', compact('data'),['destinasis'=>$destinasis]);
    }
    public function pramuwisata(){

        $anggotas = Anggota::paginate(6);
        return view('/pramuwisata',['anggotas'=>$anggotas]);
    }
    public function cariPramuwisata(Request $request)
    {
        $cari = $request->cari;
    
        $anggotas = Anggota::where('nama','like',"%".$cari."%")->paginate();
    
        return view('pramuwisata',['anggotas' => $anggotas]);
    
    }
    public function destinasi(){
        $destinasis = Destinasi::paginate(3);
        return view('/destinasi',['destinasis'=>$destinasis]);
    }
    public function cariDestinasi(Request $request)
    {
        $cari = $request->cari;
    
        $destinasis = Destinasi::where('nama','like',"%".$cari."%")->paginate();
    
        return view('destinasi',['destinasis' => $destinasis]);
    
    }
    public function kegiatan(){
        $kegiatans = Kegiatan::paginate(6);
        return view('/kegiatan',['kegiatans'=>$kegiatans]);
    }
    public function cariKegiatan(Request $request)
    {
        $cari = $request->cari;
    
        $kegiatans = Kegiatan::where('judul','like',"%".$cari."%")->paginate();
    
        return view('kegiatan',['kegiatans' => $kegiatans]);
    
    }
    public function paket(){
        $pakets = Paket::paginate(3);
        return view('/paket',['pakets'=>$pakets]);
    }
    public function cariPaket(Request $request)
    {
        $cari = $request->cari;
    
        $pakets = Paket::where('nama','like',"%".$cari."%")->paginate();
    
        return view('paket',['pakets' => $pakets]);
    
    }
    public function buatPemesanan($id){
        $data = Paket::findOrFail($id);
        $pakets = Paket::all();
        return view('/formPemesanan', compact('data'),['pakets'=>$pakets]);
    }
    public function buatPemesananPost(Request $request){    
        
        
        $pemesanan = new Booking;

        $pemesanan->nama = $request->nama;
        $pemesanan->waktu = $request->waktu;
        $pemesanan->jumlah = $request->jumlah;
        $pemesanan->jenis = $request->jenis;
        $pemesanan->kontak = $request->kontak;
        $pemesanan->catatan = $request->catatan;
        $pemesanan->status = 'menunggu';
        $pemesanan->save();

        
        return redirect('/paket');
    }

    public function indexAdmin(){
        return view('admin.login');
    }
    
    public function buatKomentarPost(Request $request){
        $komentar = new Komentar;

        $komentar->nama = $request->nama;
        $komentar->kontak = $request->kontak;
        $komentar->komentar = $request->komentar;
        $komentar->save();

        return redirect('/pramuwisata');
    }
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
      
            //Upload File
            $request->file('upload')->move('img/uploads', $filenametostore);;
 
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('img/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
        
    }
}
