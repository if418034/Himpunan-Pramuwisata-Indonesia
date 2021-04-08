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
							<h2 style="font-size:2.5em">Kegiatan</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- breadcrumb start-->


    <!-- blog post part start-->
    <section class="blog_part padding_top">
                        <div class="text-center" style="margin-bottom:20px">
                            <form action="/cariKegiatan" method="GET">
                                <input class="pencarianTf" type="text" name="cari" placeholder="Cari kegiatan" value="{{ old('cari') }}">
                                <input class="pencarianBtn" type="submit" value="CARI">
                            </form>
                        </div>
        <div class="container">
            
            
            <div class="row">
                @foreach($kegiatans as $kegiatan)
                <div class="col-lg-4 col-sm-6">
                <a href="{{url('/detailKegiatan', $kegiatan->id)}}">
                    <div class="single_blog_part">
                        <img src="img/kegiatan/{{$kegiatan->gambar}}" alt="">
                        <div class="blog_text">
                            <h2>{{$kegiatan->judul}}</h2>
                            <span><i class="ti-calendar"> </i> {{$kegiatan->waktu}}</span>
                            <br>
                            <br>
                            <p>{{$kegiatan->deskripsi}}</p>
                            
                        </div>
                    </div>
                </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <nav class="blog-pagination">
                        {{$kegiatans->links()}}
                    </nav>
                </div>
                
            </div>
        </div>
        <img src="img/overlay_1.png" alt="#" class="blog_img">
    </section>
    <!-- blog post part end-->
    

@endsection