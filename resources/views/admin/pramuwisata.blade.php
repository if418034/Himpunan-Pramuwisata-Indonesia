@extends('layouts.admin')

@section('content')         
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Pramuwisata</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/indexAdmin">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Pramuwisata</li>
						</ol>
					</div>
					<a href="tambahAnggota" class="btn btn-primary"><i class="fa fa-plus"></i>  Tambah Anggota</a>
                    <div class="row main">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th class="text-center">Profil</th>
                                                <th>Nama</th>
                                                <th>Bahasa</th>
                                                <th style="width:30%">Pengalaman</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($anggotas as $anggota)
                                            <tr>
                                                <td>{{$anggota->id}}</a>
                                                </td>
                                                <td class="text-center">
                                                    <img style="width:40px;height:40px;" src="img/profile/{{$anggota->profile}}" alt="">
                                                </td>
                                                <td>{{$anggota->nama}}</td>
                                                <td>{{$anggota->bahasa}}</td>
                                                <td>{{$anggota->pengalaman}}</td>
                                                <td>
                                                <a href="{{url('/editAnggota',$anggota->id)}}" class="btn btn-success btn-sm">
                                                    <i class="fas fa-edit"> Edit</i>
                                                </a>
                                                
                                                <a href="{{url('/hapusAnggota',$anggota->id)}}" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"> Hapus</i>
                                                </a>    
                                
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
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
