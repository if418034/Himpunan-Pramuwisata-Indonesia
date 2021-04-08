@extends('layouts.app_edit')

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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- breadcrumb start-->
   
    <section class="blog_area single-post-area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="../img/paket/{{$data->gambar}}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>
                                {{$data->nama}}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-gift    "></i> {{$data->kategori}}</a>
                                </li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> {{$data->lokasi}}</a>
                                </li>
                                <li><a href="#"><i class="fa fa-tag"></i> {{$data->harga}}</a>
                                </li>
                                
                            </ul>
                            
                            <?= $data["konten"]; ?>
                            
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                           
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            f
                        </div>
                        
                    </div>
                    
                    
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        
                        
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Paket Wisata</h3>
                            @foreach($pakets as $paket)
                            <div class="media post_item">
                                <img width="80px" height="60px" src="../img/paket/{{$paket->gambar}}" alt="post">
                                <div class="media-body">
                                    <a href="{{url('/buatPemesanan', $paket->id)}}">
                                        <h3>{{$paket->nama}}</h3>
                                    </a>
                                    <p>{{$paket->kategori}}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </aside>
                        
                        
                    </div>
                </div>
            
                
            </div>
        </div>
    </section>
    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Form Booking</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{url('/buatPemesananPost')}}" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="nama" required id="nama" type="text"  placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="kontak" required id="kontak" type="number" min="0"  placeholder="Kontak">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="jumlah" required id="jumlah" type="number" min="1"  placeholder="Jumlah Orang">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="waktu" required id="waktu" type="date"  placeholder="Kontak">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="jenis" readonly value="{{$data->nama}}" required id="jenis" type="text"  placeholder="Nama Paket">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" required name="catatan"  id="catatan" cols="30" rows="9"  placeholder="Catatan Tambahan"></textarea>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1" onclick="allert()">Booking Sekarang<i class="flaticon-right-arrow"></i> 
                            </button>
                            <script type="text/javascript">
                                function allert(){
                                    alert("Anda telah berhasil melakukan pemesanan");
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
    </section>
    <!-- use sasu part end-->

    



@endsection