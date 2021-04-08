@extends('layouts.admin')

@section('content')        

<section id="add-destinasi">
            <div class="container">
                <form method="post" enctype="multipart/form-data" action="{{url('/addGaleriPost')}}">
                {{ csrf_field() }}
                <div class="row blog">          
                        <div class="col-sm-4 konten">
                           
                            
                            
                            <input name="gambar" id="gambar"  type="file" > 
                           <br>
                            <br>
                            <h5>Deskripsi </h5>
                            <textarea  name="deskripsi" id="deskripsi" class="form-control"  style="resize: none;" rows="15"></textarea>
                           </div>
                        <div class="col-sm-8 konten">
                            </div>
                            <div class="button-group text-center">
                                <br><br>
                                <button type="submit" style="margin-top:20px" class="btn btn-primary">
                                    Simpan
                                </button>
                                <a href="{{url('/galeriAdmin')}}" type="reset" style="margin-top:20px" class="btn btn-danger">
                                    Batal
                                </a>
                                 
                            </div>  
                </div>
                   
                </form> 
            </div>
        </section>


@endsection