@extends('layouts.app')

@section('content')
    <!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bg">
		<div class="container">
			<div class="row">
                
				<div class="col-lg-12">
					<div class="breadcrumb_iner text-center">
						<div class="breadcrumb_iner_item">
                            <br><br><br><br>
                            <h2 style="font-size:2.5em">Paket Wisata</h2>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <p>Kabupaten Toba memang menawarkan beragam kegiata wisata, mulai dari
wisata budaya, alam, religi, hingga wisata kuliner. Tak perlu ragu jika ingin berlibur ke Toba. <br><br> Reputasi keindahan Toba, termasuk Danau Toba sudah diakui oleh dunia. Bahkan nama Toba justru sangat populer dibandingkan Kabupaten lain di Sumatera Utara.. Beberapa orang penting sekelas Raja dan Ratu Belanda, Willem Alexander dan Maxima serta Presiden Indonesia pernah ke sini. 

<br> Kali ini, saatnya Anda membuat kenangan Anda sendiri. Jika Anda tak sempat merencanakan liburan singkat Anda di Toba, cukup gunakan layanan paket wisata dari HPI Toba. Ada banyak pilihan paket liburan dengan budget sangat terjangkau.</p>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid" style="border-radius:20px" src="img/Capture.JPG" alt="">
                                </div>
                            </div>
                            <br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- breadcrumb start-->
    
    
    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h3>Daftar Paket Wisata ke Toba</h3>
                        <p>Apakah anda sedang berencana liburan ke Danau Toba dalam waktu dekat? Hmm,.. sangat tepat anda berada di halaman ini. Karena 
                        website ini berisi informasi penawaran paket wisata Bali terbaik dan termurah dari perusahaan kami. Apapun rencana liburan anda,
                        bersama kami dijamin anda akan mendapatkan pengalaman berlibur menyenangkan dan tak terlupakan. paket wisata yang kami 
                        tawarkan, ada banyak pilihannya. Anda bisa memilih yang paling sesuai dengan keinginan dan budget anda.</p>
                    </div>
                </div>
            </div>
                        <div class="text-center" style="margin-bottom:20px">
                            <form action="/cariPaket" method="GET">
                                <input class="pencarianTf" type="text" name="cari" placeholder="Cari paket wisata" value="{{ old('cari') }}">
                                <input class="pencarianBtn" type="submit" value="CARI">
                            </form>
                        </div>
            <div class="row justify-content-center">
                
                    @foreach($pakets as $pak)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                
                                <div class="card-body">
                                    <div style="width:100%;height:200px; background-image: url('img/paket/{{$pak->gambar}}'); background-size:cover;">

                                    </div>
                                    <br>
                                    <h5>{{$pak->nama}}</h5>
                                    <table>
                                        
                                        <tr>
                                            <td>Kategori</td>
                                            <td style="padding:0 15px 0 15px;">:</td>
                                            <td>{{$pak->kategori}}</td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td style="padding:0 15px 0 15px;">:</td>
                                            <td>{{$pak->lokasi}}</td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td style="padding:0 15px 0 15px;">:</td>
                                            <td>{{$pak->harga}}</td>
                                        </tr>
                                        
                                    </table>	
                                    <div class="text-center">
                                        <a href="/buatPemesanan/{{$pak->id}}" class="btn1">Booking sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <nav class="blog-pagination">
                        {{$pakets->links()}}
                    </nav>
                </div>
                
            </div>
        </div>
    </section>

    <!-- use sasu part end-->
    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="section_tittle">
                        <h3>Fasilitas Yang Anda Dapatkan</h3>
                        <hr>
                        <p>- Transportasi sesuai dengan jumlah peserta (private tour).
                        <br>- Transportasi AC.
                        <br>- Tiket masuk ke obyek – obyek wisata sesuai itinerary.
                        <br>- 1 X makan siang (one day).
                        <br>- Makan sesuai program paket 
                        <br>- Snack box + mineral water.
                        <br>- Profesional tour guide.
                        <br>- Driver.
                        <br>- BBM.
                        <br>- Parkir.
                        </p>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-5">
                    <div class="section_tittle">
                        <h3>Syarat dan Ketentuan Tour</h3>
                        <hr>
                        <p>- Waktu yang kami berikan tidak mengikat.
                        <br>- Penjemputan oleh perwakilan kami menyesuaikan jam kedatangan & kesepakatan di jemput di bandara, stasion, terminal dll.
                        <br>- Transportasi menyesuaikan kapasitas peserta, dan bersifat private tour, tidak di gabung sama peserta lain nya.
                        <br>- Harga berlaku untuk wisatawan domestik.
                        <br>- Harga tidak berlaku pada saat Highseason (Natal, Tahun Baru & Lebaran).
                        <br>- Harga sewaktu-waktudapat berubah dengan adanya kenaikan harga BBM, Hotel (include), tiket masuk wisata sertahal lain yang berkaitan dengan pariwisata.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- use sasu part end-->
    



@endsection