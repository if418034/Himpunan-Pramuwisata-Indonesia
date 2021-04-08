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
					
                    <div class="row">
                    <form method="post" enctype="multipart/form-data"  action="{{url('/tambahAnggotaPost')}}">
                    {{ csrf_field() }}
                        <div class="profile card" style="padding:50px">
                            <div class="row">
                                
                            
                                <div class="col-lg-4 col-md-4  img-profile text-center">
                                    <img src="/img/boy.png" style="width:100%;height:300px;" alt="">
                                    <input type="file"  required name="photo" id="photo" >
                                </div>
                                
                                
                                <div class="col-lg-8 col-md-8  info-profile">
                                    <h4>Profil</h4>
                                    <hr>
                                    <table>
                                    <tr>
                                        <td style="padding-right:80px;">Nama</td>
                                        <td style="padding-right:20px;">:</td>                                
                                        <td><input name="nama" id="nama" style="width:350px" type="text" value="" required class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right:80px;">Bahasa</td>
                                        <td style="padding-right:20px;">:</td>
                                        <td><input name="bahasa" id="bahasa" type="text" required value="" class="form-control"></td>
                                    </tr>
                                    
                                    
                                    </table>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12">
                                
                                <div class="pengalaman">
                                    <h4>Pengalaman Kerja</h4>
                                    <hr>
                                    <textarea name="pengalaman" id="pengalaman" class="form-control"  required id="exampleFormControlTextarea1" style="resize: none;" rows="8"></textarea>
                                    
                                </div>
                                <br><br>
                                <div class="button-group text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                    <a type="reset" class="btn btn-danger" href="{{url('/pramuwisataAdmin')}}">
                                        Batal
                                    </a>
                                                    
                                </div>  
                            </div>
                        

                        </div>
                    </form>      
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
