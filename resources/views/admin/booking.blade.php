@extends('layouts.admin')

@section('content')         
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Booking</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/indexAdmin">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Booking</li>
						</ol>
					</div>
					
					<div class="row">
                        <!-- DataTable with Hover -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel Booking</h6>
                                </div>
                                <div class="table-responsive p-3">
                                    <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="text-center" style="margin-bottom:20px">
                                                    <form action="/cariBookingAdmin" method="GET">
                                                        <input type="text" name="cari" placeholder="Cari destinasi" value="{{ old('cari') }}">
                                                        <input type="submit" value="CARI">
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table align-items-center table-flush table-hover dataTable" id="dataTableHover" role="grid" aria-describedby="dataTableHover_info">
                                                    <thead class="thead-light">
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 5%;">ID</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">Nama</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:15%;">Kontak</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 15%;">Waktu</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 15%">Paket</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 10%">Jumlah</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 10%">Status</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 10%">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                    
                                                                                                        
                                                        @foreach($bookings as $booking)
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">{{$booking->id}}</td>
                                                            <td>{{$booking->nama}}</td>
                                                            <td>{{$booking->kontak}}</td>
                                                            <td>{{$booking->waktu}}</td>
                                                            <td>{{$booking->jenis}}</td>
                                                            <td>{{$booking->jumlah}}</td>
                                                            
                                                            <td><span class="badge {{$booking->status}}">{{$booking->status}}</td>
                                                            <td>
                                                            @if($booking->status=='menunggu')
                                                            <a href="{{ url('/terimaPemesanan',$booking->id) }}" class="btn btn-info"> Terima</a>
                                                            @endif
                                                            @if($booking->status=='diproses')
                                                            <a href="{{ url('/selesaiPemesanan',$booking->id) }}" class="btn btn-success "> Selesai</a>
                                                            
                                                            @endif
                                                            @if($booking->status=='selesai')
                                                            <a href="{{ url('/hapusPemesanan',$booking  ->id) }}" class="btn btn-danger "> Hapus</a>
                                                            
                                                            @endif 
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="dataTableHover_info" role="status" aria-live="polite">Menampilkan {{ $bookings->perPage() }} data per halaman dari total {{ $bookings->total() }} data booking</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <nav class="blog-pagination">
                                                    {{$bookings->links()}}
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
