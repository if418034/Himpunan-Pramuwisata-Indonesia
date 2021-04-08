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
							<h2 style="font-size:2.5em">Kegiatan</h2>
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
                            <img class="img-fluid" src="../img/kegiatan/{{$data->gambar}}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>
                                {{$data->judul}}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-calendar"></i> {{$data->waktu}}</a>
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
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        
                        
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Kegiatan</h3>
                            @foreach($kegiatans as $kegiatan)
                            <div class="media post_item">
                                <img width="80px" height="60px" src="../img/kegiatan/{{$kegiatan->gambar}}" alt="post">
                                <div class="media-body">
                                    <a href="{{url('/detailKegiatan', $kegiatan->id)}}">
                                        <h3>{{$kegiatan->judul}}</h3>
                                    </a>
                                    <p>{{$kegiatan->waktu}}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </aside>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection