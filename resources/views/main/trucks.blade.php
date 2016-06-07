@extends('layouts.main')
    @section('content')
    	<div class="container" id="desktop-wrapper">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="page-header">
						<h2 class="page-title">All Trucks</h3>
					</div>
					
					<div class="row">	
					@foreach($trucks as $t)		
						<div class="col-md-4 col-sm-6 grid-content">
							<div class="news">
								<a href="">
									<!-- <div style="background-image: url('http://localhost/csk_trading/storage/uploads/van.jpg'); 
									background-position: top center; 
									background-size: 100% auto; background-repeat: no-repeat; width: 100%; height: 150px;">
									</div> -->
									<div><img src="{{ URL::asset($t->image_path) }}"></div>
									<h4 style="overflow: hidden;">{{ $t->post_name }}</h4>
								</a>
								<p>
									Brand: {{$t->brand}}
									<br>
									Model: {{$t->model }}
									<br>
									Engine: {{$t->engine }}
									<br>
									Description: {{ $t->description }}
									
								</p>
							</div>
						</div>
						@endforeach	
					</div>
							
					<div class="load-older-news">
						<button class="btn btn-load">Load More Trucks<i class="fa fa-angle-down"></i></button>
					</div>
				</div><!--/col-md-12-->
			</div><!--/row-->
		</div><!--/container-->
	@endsection