@extends('layouts.admin')

@section('content')         
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="./">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</div>
					<div class="row mb-3">
                        <?php
                            $total=0; 
                            $i=0;
                            $j=0;
                            $k=0;
                            $l=0;
                        ?>
                         @foreach($bookings as $booking)
                            <?php $total++; ?>
                            @if($booking->status=='menunggu')
                            <?php $i++;?>
                            @endif
                            @if($booking->status=='diproses')
                            <?php $j++;?>
                            @endif
                            @if($booking->status=='selesai')
                            <?php $k++;?>
                            @endif 
                         <?php
                            
                         ?>
                         @endforeach
						<!-- Earnings (Monthly) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-uppercase mb-1">Total Booking</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($total); ?></div>
											<!-- <div class="mt-2 mb-0 text-muted text-xs"> <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
												<span>Since last month</span>
											</div> -->
										</div>
										<div class="col-auto"> <i class="fas fa-book fa-2x text-primary"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Earnings (Annual) Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-uppercase mb-1">Booking Terbaru</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($i); ?></div>
											<!-- <div class="mt-2 mb-0 text-muted text-xs"> <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
												<span>Since last years</span>
											</div> -->
										</div>
										<div class="col-auto"> <i class="fas fa-envelope fa-2x text-warning"></i>
										</div>
									</div>
								</div>
							</div>
                        </div>
                        
						<!-- New User Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-uppercase mb-1">Booking diproses</div>
											<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($j); ?></div>
											<!-- <div class="mt-2 mb-0 text-muted text-xs"> <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
												<span>Since last month</span>
											</div> -->
										</div>
										<div class="col-auto"> <i class="fas fa-spinner fa-2x text-info"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Pending Requests Card Example -->
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-uppercase mb-1">Booking Selesai</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($k); ?></div>
											<!-- <div class="mt-2 mb-0 text-muted text-xs"> <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
												<span>Since yesterday</span>
											</div> -->
										</div>
										<div class="col-auto"> <i class="fas fa-check fa-2x text-success"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Invoice Example -->
						<div class="col-xl-8 col-lg-7 mb-4">
							<div class="card">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Booking</h6>
									<a class="m-0 float-right btn btn-secondary btn-sm" href="/bookingAdmin">Lihat Semua <i
                                    class="fas fa-chevron-right"></i></a>
								</div>
								<div class="table-responsive">
									<table class="table align-items-center table-flush">
										<thead class="thead-light">
											<tr>
												<th>ID</th>
												<th width="30%">Nama Pelanggan</th>
												<th>Kontak</th>
												<th>Status</th>
												<th>Kelola</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($bookings as $booking)

											<tr>
												<td>{{$booking->id}}</td>
												<td>{{$booking->nama}}</td>
												<td>{{$booking->kontak}}</td>
												<td><span class="badge {{$booking->status}}">{{$booking->status}}</span>
												</td>
												<td>
                                                    @if($booking->status=='menunggu')
                                                    <a href="{{ url('/terimaPemesanan1',$booking->id) }}" class="btn btn-info"> Terima</a>
                                                    @endif
                                                    @if($booking->status=='diproses')
                                                    <a href="{{ url('/selesaiPemesanan1',$booking->id) }}" class="btn btn-success "> Selesai</a>
                                                    @endif
                                                    @if($booking->status=='selesai')
                                                    <a href="{{ url('/hapusPemesanan1',$booking  ->id) }}" class="btn btn-danger "> Hapus</a>
                                                    @endif 
												</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
								<div class="card-footer"></div>
							</div>
						</div>
						<!-- Message From Customer-->
						<div class="col-xl-4 col-lg-5 ">
							<div class="card">
								<div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-light">Feedback untuk anda</h6>
								</div>
								<div>
									@foreach($komentars as $komentar)
									<div class="customer-message align-items-center">
										<a class="font-weight-bold" href="#">
											<div class="text-truncate message-title">{{$komentar->komentar}}</div>
											<div class="small text-gray-500 message-time font-weight-bold">by : {{$komentar->nama}}</div>
										</a>
									</div>
									@endforeach
									<!-- <div class="card-footer text-center"> <a class="m-0 small text-primary card-link" href="#">View More <i
                                        class="fas fa-chevron-right"></i></a>
									</div> -->
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
