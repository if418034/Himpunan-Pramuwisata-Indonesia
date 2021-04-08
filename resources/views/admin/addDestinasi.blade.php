@extends('layouts.admin')

@section('content')         
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Destinasi</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/indexAdmin">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Destinasi</li>
                        </ol>
                    </div>
                    
                    <form method="post" enctype="multipart/form-data"  action="{{url('/addDestinasiPost')}}">
                    {{ csrf_field() }}
                    
                       
                        <div class="col-lg-12 ">
                            
                            <br><h4>Informasi Kegiatan</h4>
                            <hr>
                            
                            <br>    
                            <div class="deskripsi">

                                    <input name="nama" id="nama"  type="text" value="" placeholder="Nama Tempat Wisata" required class="form-control">
                                    <br>
                                    <h5>Gambar : <input type="file"  required name="gambar" id="gambar" >
                                    <br>
                                    <br>
                                    <input name="lokasi" id="lokasi" type="text" required value="" placeholder="Lokasi Tempat Wisata" class="form-control">
                                    <br>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control"  required id="exampleFormControlTextarea1" style="resize: none;" rows="2">Deskripsi</textarea>
                                    <br>
                                    <textarea class="form-control" id="konten" name="ckeditor" placeholder="Konten">Konten</textarea>
                                    
                            </div>
                            
                        </div>
                        <div class="col-lg-12">
                            <br><br>
                            <div class="button-group text-center">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <a type="reset" class="btn btn-danger" href="{{url('/DestinasiAdmin')}}">
                                    Batal
                                </a>
                                                
                            </div>  
                        </div>
                        <br><br>
                       
                    </form>    
                    
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
