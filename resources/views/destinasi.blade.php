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
							<h2 style="font-size:2.5em">Destinasi</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- breadcrumb start-->
    <!-- blog post part start-->
    <section class="blog_part padding_top">
        <div class="container">
                        <div class="text-center" style="margin-bottom:20px">
                            <form action="/cariDestinasi" method="GET">
                                <input class="pencarianTf " type="text" name="cari" placeholder="Cari destinasi" value="{{ old('cari') }} ">
                                <input class="pencarianBtn" type="submit" value="CARI">
                            </form>
                        </div>
            
            <div class="row">
                        
                @foreach($destinasis as $destinasi)
                <div class="col-lg-4 col-sm-6">
                <a href="{{url('/detailTempat', $destinasi->id)}}">
                    <div class="single_blog_part">
                        <img src="img/destinasi/{{$destinasi->gambar}}" alt="">
                        <div class="blog_text">
                            <h2>{{$destinasi->nama}}</h2>
                            <span><i class="ti-calendar"></i> {{$destinasi->lokasi}}</span>
                            <br><br>
                            <p>{{$destinasi->deskripsi}}</p>
                            
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <nav class="blog-pagination">
                        {{$destinasis->links()}}
                    </nav>
                </div>
                
            </div>

            
            
        </div>
        
    </section>
    <!-- blog post part end-->
    
  

@endsection