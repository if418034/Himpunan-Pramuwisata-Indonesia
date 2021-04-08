@extends('layouts.admin')

@section('content')         
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Kegiatan</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/indexAdmin">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Galeri</li>
						</ol>
					</div>
					
					<a href="/addKegiatan" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Kegiatan</a>
					<div class="text-center" style="margin-bottom:20px">
                            <form action="/cariKegiatanAdmin" method="GET">
                                <input type="text" name="cari" placeholder="Cari kegiatan" value="{{ old('cari') }}">
                                <input type="submit" value="CARI">
                            </form>
                        </div> 
                    <div class="row main">
						@foreach($kegiatans as $kegiatan)
                        <div class="col-md-4">
                        	
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-secondary">{{$kegiatan->judul}}</h6>
                                </div>
                                <div class="card-body">
                                    <div style="width:100%;height:200px; background-image: url('img/kegiatan/{{$kegiatan->gambar}}'); background-size:cover;">

                                    </div><br>
                                    <p>{{$kegiatan->deskripsi}}</p>
                                    <div class="text-right">
                                        
                                        <a href="{{url('/editKegiatan', $kegiatan->id)}}" class="btn btn-success btn-sm">
                                            <i class="fas fa-edit"> Edit</i>
                                        </a>
                                        <a href="{{url('/deleteKegiatan', $kegiatan->id)}}" onclick="return confrim('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">
                                        	<i class="fas fa-trash"> Hapus</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                        
                        <div class="col-sm-12 text-center">
							<nav class="blog-pagination">
								{{$kegiatans->links()}}
							</nav>
						</div>
                    </div>
					<!-- Modal Logout -->
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Apakah anda yakin akan keluar?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button> <a href="/logout" class="btn btn-primary">Logout</a>
								</div>
							</div>
						</div>
					</div>
                    <!-- Modal Logout -->


				</div>
				<!---Container Fluid-->
@endsection
