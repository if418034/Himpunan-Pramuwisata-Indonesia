<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Booking;
use App\Anggota;
use App\Galeri;
use App\Paket;
use App\Destinasi;
use App\Kegiatan;
use App\Komentar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function login(){
        return view('/admin.login');
    }

    public function index(){
        $bookings = Booking::paginate(5);
        $komentars = Komentar::paginate(8);
        return view('/admin.index',['bookings'=> $bookings],['komentars'=> $komentars]);
    }

    public function loginPost(Request $request){
        $this->validate($request,[
            'email' =>'required',
            'password'=>'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        

        $data = Admin::where('username',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->name);
                Session::put('nama',$data->nama);
                Session::put('login',TRUE);
                return redirect('indexAdmin');
                          
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }
    

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }


    public function paket(){
        $paket = Paket::paginate(3);
        return view('/admin.paket',['paket'=>$paket]);
    }
    public function cariPaketAdmin(Request $request)
    {
        $cari = $request->cari;
    
        $pakets = Paket::where('nama','like',"%".$cari."%")->paginate(3);
    
        return view('/admin.paket',['paket' => $pakets]);
    
    }
    public function addPaket(){
        return view('/admin.addPaket');
    }
    public function addPaketPost(Request $request){
        $data = new Paket();
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $data->lokasi = $request->lokasi;
        $data->harga = $request->harga;
        $data->konten = $request->ckeditor;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/paket',$newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        
        
        return redirect('/paketAdmin'); 
    }

    public function editPaket($id){     
        

        $data = Paket::findOrFail($id);

        return view('/admin.editPaket', compact('data'));
    }

    public function editPaketPost(Request $request){
        $data = Paket::where('id', $request->id)->first();
        $data->nama = $request->nama;
        $data->lokasi = $request->lokasi;
        $data->kategori= $request->kategori;
        $data->deskripsi= $request->deskripsi;
        $data->konten = $request->ckeditor;
        $data->harga= $request->harga;
        
        if(empty($request->file('gambar'))){
            $data->gambar =  $data->gambar;
        }else{
            unlink('img/paket/'.$data->gambar);
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/paket', $newName);
            $data->gambar = $newName;
        }
        $data->save();

        return redirect('/paketAdmin');
    }

    public function hapusPaket($id){
        $paket = paket::find($id);
        
        $paket->delete();
        $paket2 = paket::all();
        return redirect('/paketAdmin'); 
    }
    
    public function viewDestinasi(){
        $destinasis = Destinasi::paginate(3);
        return view('/admin.destinasi',['destinasis'=>$destinasis]);
    }
    public function cariDestinasiAdmin(Request $request)
    {
        $cari = $request->cari;
    
        $destinasis = Destinasi::where('nama','like',"%".$cari."%")->paginate(3);
    
        return view('/admin.destinasi',['destinasis' => $destinasis]);
    
    }
    public function deleteDestinasi($id){
        Destinasi::find($id)->delete();
        return redirect('/destinasiAdmin');
    }
    public function addDestinasi(){
        return view('/admin.addDestinasi');
    }
    public function addDestinasiPost(Request $request){
        $data = new Destinasi();
        $data->nama = $request->nama;
        $data->lokasi = $request->lokasi;
        $data->deskripsi = $request->deskripsi;
        $data->konten = $request->ckeditor;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/destinasi', $newName);
        $data->gambar = $newName;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect('/destinasiAdmin');
    }
    public function editDestinasi($id){
        $data = Destinasi::findOrFail($id);

        return view('admin.editDestinasi', compact('data'));
    }
    public function editDestinasiPost(Request $request){
        $data = Destinasi::where('id', $request->id)->first();
        $data->nama = $request->nama;
        $data->lokasi = $request->lokasi;
        $data->deskripsi = $request->deskripsi;
        $data->konten = $request->ckeditor;
        if(empty($request->file('gambar'))){
            $data->gambar =  $data->gambar;
        }else{
            unlink('img/destinasi/'.$data->gambar);
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/destinasi', $newName);
            $data->gambar = $newName;
        }
        $data->save();

        return redirect('/destinasiAdmin');
    }


    public function pramuwisata(){
        $anggotas = Anggota::all();
        
        return view('/admin.pramuwisata',['anggotas'=>$anggotas]);
    }
    public function tambahAnggota(){
        return view('/admin.tambahAnggota');
    }
    public function addAnggotaPost(Request $request){    
        
        
        $data = new Anggota();
        $data->nama = $request->nama;
        $data->bahasa = $request->bahasa;
        $file = $request->file('photo');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/profile',$newName);
        $data->profile = $newName;
        $data->pengalaman = $request->pengalaman;
        $data->save();
        
        return redirect('/pramuwisataAdmin');
    }


    public function editAnggota($id){     
        

        $data = Anggota::findOrFail($id);

        return view('/admin.editAnggota', compact('data'));
    }
    public function editAnggotaPost(Request $request){     
        
        
        $data = Anggota::where('id',$request->id)->first();
        $data->nama = $request->nama;
        $data->bahasa = $request->bahasa;
        if (empty($request->file('photo'))){
            $data->profile = $data->profile;
        }
        else{
            unlink('img/profile/'.$data->profile); 
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/profile',$newName);
            $data->profile= $newName;
        }
        $data->pengalaman = $request->pengalaman;
        $data->save();
        
        return redirect('pramuwisataAdmin');
    }
    public function hapusAnggota($id){     
        Anggota::find($id)->delete();
    
        return redirect('pramuwisataAdmin');
    }
    
    public function booking(){
        $bookings = Booking::paginate(5);
        
        return view('/admin.booking',['bookings'=>$bookings]);
    }
    public function cariBookingAdmin(Request $request)
    {
        $cari = $request->cari;
    
        $bookings = Booking::where('nama','like',"%".$cari."%")->paginate(5);
    
        return view('/admin.booking',['bookings' => $bookings]);
    
    }
    public function terimaPesanan($id){
        $data = Booking::where('id',$id)->first();

        $data->status = 'diproses';
        $data->save();

        return redirect('/bookingAdmin');
    }
    public function selesaiPesanan($id){
        $data = Booking::where('id',$id)->first();

        $data->status = 'selesai';
        $data->save();

        return redirect('/bookingAdmin');
    }
    public function hapusPesanan($id){
        Booking::find($id)->delete();

        return redirect('/bookingAdmin');
    }
    

    public function terimaPesanan1($id){
        $data = Booking::where('id',$id)->first();

        $data->status = 'diproses';
        $data->save();

        return redirect('/indexAdmin');
    }
    public function selesaiPesanan1($id){
        $data = Booking::where('id',$id)->first();

        $data->status = 'selesai';
        $data->save();

        return redirect('/indexAdmin');
    }
    public function hapusPesanan1($id){
        Booking::find($id)->delete();

        return redirect('/indexAdmin');
    }

    public function viewKegiatan(){
        $kegiatans = Kegiatan::paginate(3);
        return view('/admin.kegiatan',['kegiatans'=>$kegiatans]);
    }
    public function cariKegiatanAdmin(Request $request)
    {
        $cari = $request->cari;
    
        $kegiatans = Kegiatan::where('judul','like',"%".$cari."%")->paginate(3);
    
        return view('/admin.kegiatan',['kegiatans' => $kegiatans]);
    
    }
    public function addKegiatan(){
        return view('/admin.addKegiatan');
    }

    public function editKegiatan($id){
        $data = Kegiatan::findorFail($id);

        return view('/admin.editKegiatan', compact('data'));
    }

    public function editKegiatanPost(Request $request){
        $data = Kegiatan::where('id',$request->id)->first();
        $data->judul = $request->judul;
        $data->waktu = $request->waktu;
        $data->deskripsi = $request->deskripsi;
        $data->konten = $request->ckeditor;
        if(empty($request->file('gambar'))){
            $data->gambar = $data->gambar;
        }else{
            //unlink('img/kegiatan/'.$data->gambar);
            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('img/kegiatan/',$newName);
            $data->gambar= $newName;
        }
        $data->save();

        return redirect('kegiatanAdmin');
    }


    public function addKegiatanPost(Request $request){
        $data = new Kegiatan();
        $data->judul = $request->judul;
        $data->waktu = $request->waktu;
        $data->deskripsi = $request->deskripsi;
        $data->konten = $request->ckeditor;
        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/kegiatan/',$newName);
        $data->gambar= $newName;
        $data->save();

        return redirect('kegiatanAdmin');
    }

    public function deleteKegiatan($id){
        Kegiatan::find($id)->delete();
        return redirect('kegiatanAdmin');
    }

    public function galeri(){
        return view('/admin.galeri');
    }
    public function buatKomentarPost(Request $request){
        $komentar = new Komentar;

        $komentar->nama = $request->nama;
        $komentar->kontak = $request->kontak;
        $komentar->komentar = $request->komentar;
        $komentar->save();

        return redirect('/about');
    }

}
