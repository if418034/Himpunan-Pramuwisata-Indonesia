@extends('layouts.admin')

@section('content')         
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Galeri</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/indexAdmin">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Galeri</li>
						</ol>
					</div>
					
					
                        
                    <div class="row main justify-content-center">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        
                                
                                </div>
                                <div class="card-body text-center">
                                    <div style="width:100%;height:200px; background-image: url('img/samosir.jpg'); background-size:cover;">
                                        
                                    </div>
                                    
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        
                                
                                </div>
                                <div class="card-body text-center">
                                    <div style="width:100%;height:200px; background-image: url('img/samosir.jpg'); background-size:cover;">
                                        
                                    </div>
                                    
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        
                                
                                </div>
                                <div class="card-body text-center">
                                    <div style="width:100%;height:200px; background-image: url('img/samosir.jpg'); background-size:cover;">
                                        
                                    </div>
                                    
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        
                                
                                </div>
                                <div class="card-body text-center">
                                    <div style="width:100%;height:200px; background-image: url('img/samosir.jpg'); background-size:cover;">
                                        
                                    </div>
                                    
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        
                                
                                </div>
                                <div class="card-body text-center">
                                    <div style="width:100%;height:200px; background-image: url('img/samosir.jpg'); background-size:cover;">
                                        
                                    </div>
                                    
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
					<!-- Modal Logout -->
					<div class="modal fade" id="logou<br>tModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
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
