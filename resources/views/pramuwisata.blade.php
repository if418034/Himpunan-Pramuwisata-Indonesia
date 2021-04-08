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
							<h2 style="font-size:2.5em">Pramuwisata</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb start-->
	
	<!-- blog part start-->
    <section class="blog_part padding_top">
        <div class="container">
			        <div class="text-center" style="margin-bottom:20px">
                            <form action="/cariPramuwisata" method="GET">
                                <input type="text" name="cari" placeholder="Cari pramuwisata" value="{{ old('cari') }}">
                                <input type="submit" value="CARI">
                            </form>
                        </div>
            <div class="row justify-content-center">
            
				@foreach($anggotas as $anggota)
				<div class="col-lg-4 col-sm-6">
					<div style="padding:20px;">				
						<div class="card mb-4">
							<div class="card-body">
								<div style="width:100%;height:200px; background-image: url('img/profile/{{$anggota->profile}}'); background-size:cover;"></div>
								<br>
								<h5>{{$anggota->nama}}</h5>
								<table>
									<tr>
										<td>Bahasa</td>
										<td style="padding:0 15px 0 15px;">:</td>
										<td>{{$anggota->bahasa}}</td>
									</tr>
									<tr>
										<td>Pengalaman</td>
										<td style="padding:0 15px 0 15px;">:</td>
									</tr>
								</table>
								<p>{{$anggota->pengalaman}}</p>
								<br>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <nav class="blog-pagination">
                        {{$anggotas->links()}}
                    </nav>
                </div>
                
            </div>
        </div>
        <img src="img/overlay_1.png" alt="#" class="blog_img">
    </section>
    <!-- blog part end-->

    <section class="blog_part padding_top">
        <div class="container">

            <div class="col-md-12">
                <div id="primary" class="content-area">
                    <main id="main" class="post-wrap" role="main">
                        <article id="post-3199" class="blog-post blog-single post-3199 post type-post status-publish format-standard has-post-thumbnail hentry category-berita">
                            <div class="entry-box-title clearfix">
                                <div class="wrap-entry-title">
                                    <h1 class="entry-title">RECRUITMENT  CALON PRAMUWISATA 2021</h1>	
                                </div>
                                <!-- /.wrap-entry-title -->
                            </div>
                            <div class="featured-post text-center">
                                
                                    <img width="770" height="367" src="https://dpdhpiBali.org/wp-content/uploads/2020/03/IMG_0134-770x367.jpg" class="attachment-themesflat-blog size-themesflat-blog wp-post-image" alt="">
                               
                            </div>
                            <div class="main-post">
                                <div class="entry-content">
                                    <p>Recruitment calon&nbsp; prmuwisata umum tahun 2020 yang&nbsp; diawali&nbsp; dengan Uji Bahasa tanggal 25 dan 26&nbsp; Febroari 2020 bertempat&nbsp; di kantor&nbsp; DPD HPI Toba jalan&nbsp; Sekar Tunjung dan Diklat Calon Pramuwisata Umum dilaksanakan di Hotel Niki dari tanggal 2 Maret 2020 sampai 6 Maret&nbsp; 2020 . Uji&nbsp; Budaya deselenggarakan tanggal 7 maret&nbsp; 2020 bertempat&nbsp; di&nbsp; &nbsp;hotel Niki juga , selanjutnya&nbsp; Uji&nbsp; Field Trip yang&nbsp; dijadwalkan tanggal 8 Maret 2020 yang terdiri dari 10 Bus&nbsp; dengan&nbsp; rute trip berangkat dari Hotel&nbsp; Niki menuju ke Daerah Tujuan Wisata&nbsp; Sangeh dalanjutkan ke daerah Tujuan Wisata berikutnya Pura&nbsp; Kafe bahagia&nbsp; dan&nbsp; balikk&nbsp; ke&nbsp; hotel&nbsp;Bahagia</p>
                                    <p>Recruitment tahun 2020 diikuti oleh 12 Divisi Bahasa dengan&nbsp; total peserta 358 orang</p>
                                    <ol>
                                        <li>Divisi Bahasa&nbsp; Inggris&nbsp; diikuti&nbsp; oleh 127 peserta</li>
                                        <li>Divisi&nbsp; Bahasa Mandarin dikuti&nbsp; oleh 65 peserta</li>
                                        <li>Divisi&nbsp; Bahasa Korea diikuti oleh 38 peserta</li>
                                        <li>Divisi Bahasa Indonesia diikuti oleh 41 peserta</li>
                                        <li>Divisi Bahasa&nbsp; Jepang diikuti oleh 19 peserta</li>
                                        <li>Divisi Bahasa Spanyol diikuti&nbsp; oleh 10 peserta</li>
                                        <li>Divisi Bahasa&nbsp; Jerman diikuti oleh 10 peserta</li>
                                        <li>Divisi Bahasa Belanda diikuti oleh 2 peserta</li>
                                        <li>Divisi Bahasa&nbsp; Prancis&nbsp; diikuti oleh 38 peserta</li>
                                        <li>Divisi Bahasa Rusia&nbsp; diikuti oleh&nbsp; 6 peserta</li>
                                        <li>Divisi&nbsp; Bahasa Itali diikuti&nbsp; oleh 1 peserta</li>
                                        <li>Divisi Bahasa&nbsp; Arab diikuti oleh 1 peserta</li>
                                    </ol>
                                    <p>Uji Bahasa akan diselenggarakan</p>
                                    <ul>
                                        <li>Tanggal 25 Febroari 2020 jam&nbsp; 08.00 sampai&nbsp; selesai bertempat&nbsp; di gedung DPD HPI Toba&nbsp; Jalan SM. Mangaraja 12 No 9 Gatsu Timur</li>
                                        <li>Tanggal 26 Febroari 2020 jam&nbsp; 08.00 sampai&nbsp; selesai bertempat&nbsp; di gedung DPD HPI Toba&nbsp; Jalan SM. Mangaraja 12 No 9 Gatsu Timur</li>
                                    </ul>
                                    <p>Setelah Uji&nbsp; Field Trip dilanjutkan dengan Uji Kompetensi dari&nbsp; tanggal 9 sampai 11 maret&nbsp; bertempat&nbsp; Hotel Bahagia Balige</p>
                                    <p>Dari&nbsp; seluruh rangkaian&nbsp; kegiatan recruitment&nbsp; calon pramuwisata&nbsp; umum rencana akan di umumkan pada&nbsp; tanggal 30 atau 31 maret&nbsp; 2020.</p>
                                    <p>Ketua panitia recruitment</p>
                                    
                                </div>
                                <!-- .entry-content -->
                            </div>
                            <!-- /.main-post -->
                        </article>
                        
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
        </div>
       
    </section>
	<!-- blog post part start-->
    <section class="blog_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <img src="img/section_tittle_img.png" alt="" >
                        <h2>Feedback</h2>
						<p>Kirimkan komenter terbaik anda, feedback anda membuat kami berkembang lebih baik.</p>
                    </div>
					
                </div>
            </div>
            
            <div class="row">
				
                
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{url('/buatKomentarPost')}}" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required class="form-control" name="nama" required id="nama" type="text"  placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required class="form-control" name="kontak" required id="kontak" type="number" min="0"  placeholder="Kontak">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea  required class="form-control w-100"  name="komentar" required id="komentar" cols="30" rows="9"  placeholder="Komentar"></textarea>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1" onclick="allert()">Kirim<i class="flaticon-right-arrow"></i> 
                            </button>
                            <script type="text/javascript">
                                function allert(){
                                    alert("Anda telah berhasil menambahkan komentar");
                                };
                            </script>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Hotel Serenauli, Laguboti</h3>
                            <p>Toba, Pos 22381</p>
                        </div>
                    </div>
                    <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>021 478825555</h3>
                           <p>Dapat dihubungi kapan pun.</p>
                        </div>
                    </div>
                    <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>info@dpphpitoba.gmail</h3>
                            <p>Kirimkan email anda.</p>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <img src="img/overlay_1.png" alt="#" class="blog_img">
    </section>
    <!-- blog post part end-->



@endsection