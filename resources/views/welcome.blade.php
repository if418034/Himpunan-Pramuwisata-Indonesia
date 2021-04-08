@extends('layouts.app')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            
                            <h1>Selamat Datang Di Website HPI Toba</h1>
                            <br><br><br><br>
                            <h5>Explore and Travel Wisata Toba</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- banner part start-->
    <section class="search_your_country">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="search_form counter-content">
                        <div class="row banner_text_iner  text-center" style="    font-size: 30px;       font-weight: 500;    color: #fff;    font-family: 'Kaushan Script', cursive;   ">
                            <div class="col-sm-6">

                                
                                <div class="big-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="counter-content text-left">
                                    <h2>Buka Setiap Hari</h2>
                                    <p><i class="fa fa-clock"></i> Senin - Jumat : 09.00 - 16.00, <br> Sabtu : 09.00 - 12.00, Minggu: libur</p>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                
                                <div class="big-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="counter-content text-left">
                                    <h2>Lokasi Kantor</a></h2>
                                    <p><i class="fa fa-map"> </i> Jalan Sisingamangaraja, Kelurahan No.21 , Napitupulu Bagasan, Balige</p>
                                </div>
                            </div>
                            
                            
                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="single_donation_item" style="padding-right:40px">
                        <h3>Azas Tujuan dan Fungsi</h3>
                        <hr>
                        <p>1. HPI bertujuan menghimpun, mempersatukan, meningkatkan , 
                        dan membina persatuan PramuwisataToba agar lebih berdaya
                        dan berhasil guna bagi kesejahteran dan kehidupan diabdikan 
                        bagi kelestaria Pariwisata Toba.
                        <br><br>
                        2. Berupaya melaksanakan dan menyukseskan pembangunan, 
                        pembinaan dan penelitian wawasan pariwisata terkait, baik 
                        pemerintah maupun swasta.
                        <br><br>
                        3. Bertindak mewakili para anggota dalam memperjuangkan 
                        dan melindungi kepentingan bersama.
                        <br><br>
                        4. HPI berfungsi sebagai wadah tunggal Pramuwisata Indonesia 
                        dalam rangka pembinaan berkomunikasi antar Pramuwisata, Pramuwisata 
                        dengan pemerintah atau swasta dalam rangka pengembangan dunia 
                        Pariwisata Indonesia     
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-1">
                    
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_donation_item">
                        <h3>Keanggotaan</h3>
                        <hr>
                        <p>Keanggotaan terdiri dari Pramuwisata yang terdaftar syah dan memenuhi ketentuan yang berlaku, yaitu ;
                        <br><br>
                        1. Anggota Biasa.
                        <br>
                        2. Anggota Kehormatan.</p>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <img src="img/animate_icon/Shape-1.png" alt="" class="feature_icon_1">
        <img src="img/animate_icon/Shape-2.png" alt="" class="feature_icon_2">
    </section>
    <!-- banner part start-->
    <!-- pricing part start-->
    <section class="tour_package section_padding">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-xl-3 offset-lg-1 col-sm-4">
                    <div class="tour_pack_content">
                        <img src="img/section_tittle_img.png" alt="">
                        <h2>Tujuan Wisata</h2>
                        <p>Kami menyediakan layanan paket wisata terbaik untuk kenyamanan perjalanan anda</p>
                        
                    </div>
                </div>
                <div class="col-lg-7 col-sm-7">
                    <div class="tour_package_cotent owl-carousel">
                        @foreach($destinasis as $destinasi)
                        <div class="single_tour_package">
                            <a href="{{url('/detailTempat', $destinasi->id)}}" style="color:black;">
                            <img src="img/destinasi/{{$destinasi->gambar}}" alt="">
                            </a>
                            <div class="tour_pack_content" style="padding:40px">
                                <h4>  <a href="{{url('/detailTempat', $destinasi->id)}}" style="color:black;">{{$destinasi->nama}}</a></h4>
                                <span><i class="fa fa-map-marker"></i> {{$destinasi->lokasi}}</span>
                                <p>{{$destinasi->deskripsi}}</p>
                                <div class="tour_content_rating">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <a href="{{url('/detailTempat', $destinasi->id)}}" class="btn1">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- pricing part end-->
     <!-- about_us part start-->
     <section class="place_details section_padding">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="place_detauls_text">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="place_details_content">
                                    <img src="img/section_tittle_img.png" alt="#">
                                    <h2>Paket Wisata</h2>
                                    <p>Jelajahi Serta nikmati keindahan alam Pulau Samosir dan Danau Toba.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <img src="img/danau.jpg" alt="#">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="place_details_img">
                        <img src="img/samosir.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <div class="view_all_btn">
            <a href="/paket" class="view_btn">Lihat Paket Wisata</a>
        </div>
    </section>
    <!-- about_us part end-->
    

    
    
   
    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <img src="img/section_tittle_img.png" alt="">
                        <h2>Most Popular <span>place</span> </h2>
                        <p>Tempat tempat yang paling sering dikunjungi</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($destinasis as $destinasi)
                <div class="col-lg-4 col-sm-6">
                    <div class="card mb-4 text-center">
					    <div class="card-body">
                            <div style="width:100%;height:250px; background-image: url('img/destinasi/{{$destinasi->gambar}}'); background-size:cover; background-position: center;">
                            </div>
                            <br>
							<a href="{{url('/detailTempat', $destinasi->id)}}"><h4>{{$destinasi->nama}}</h4></a>
                        </div>
					</div>
                </div>
               
                @endforeach
            </div>
        </div>
    </section>
    <!-- use sasu part end-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                        <img src="img/about_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="img/section_tittle_img.png" alt="#">
                        <h2>Amazing tour</h2>
                        <p>Anda dapat mengunjungi banyak tempat yang belum pernah Anda kunjungi sebelumnya. Diarahkan para pramuwisata bersertifikat dan berpengalaman.</p>
                        
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_1.png" alt="">
                                    <h4>Hemat Waktu</h4>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-6">
                                <div class="feature_part_text_iner">
                                    <img src="img/icon/tour_icon_3.png" alt="">
                                    <h4>Hemat Uang</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Shape-1.png" alt="" class="feature_icon_1">
        <img src="img/animate_icon/Shape-2.png" alt="" class="feature_icon_2">
        <img src="img/animate_icon/Shape-3.png" alt="" class="feature_icon_3">
    </section>
    <!-- upcoming_event part start-->

    <!-- about_us part start-->
    <section class="place_details section_padding">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="place_detauls_text">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="place_details_content">
                                    <img src="img/zoom.png" width="180px" heigt="140px" alt="#">
                                    <h2>Vitual Tour</h2>
                                    <p>Kami menyediakan layanan perjalanan virtual yang dapat dinikmati 
                                    dari rumah dan dari manapun dengan kualitas terbaik dan menyenangkan </p>
                                    <span>Keliling Tobasa tanpa ke lokasi</span>
                                </div>
                            </div>
                        </div>
                        <img src="img/plase_details_1.png" alt="#">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="place_details_img">
                        <img src="img/plase_details_2.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <div class="view_all_btn">
            <p class="view_btn">Segera Hadir</p>
        </div>
    </section>
    <!-- about_us part end-->
    

        
@endsection
