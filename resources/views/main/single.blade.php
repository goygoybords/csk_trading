@extends('layouts.main')
    @section('content')

    	<div class="container" id="desktop-wrapper">
			<div class="row">
				<div class="col-md-12 product-content">
					<div class="product-header">
						<div class="product-info">
							<h4>{{ strtoupper($trucks->post_name) }}</h4>
							<p>Details</p>
							<p>
								<ul class = "details">
									<li>BRAND: {{ strtoupper($trucks->brand) }} </li>
									<li>BODY TYPE: {{ strtoupper($trucks->body_type) }}  </li>
									<li>MODEL: {{ strtoupper($trucks->model) }}  </li>
									<li>ENGINE: {{ strtoupper($trucks->engine) }} </li>
									<li>DESCRIPTION: {{ strtoupper($trucks->description) }} </li>
								</ul>
							</p>
						</div>
						<!-- <div class="product-img" style="background-image: url('http://isuzuphil.imgix.net/uploads/files/vehicle_8/f-series-rev-prodhead-final.png?auto=compress,enhance?fm=webp');">
						</div> -->
						<div class="product-img" >
							<img src="{{ asset($trucks->image_path) }}" style= "width:100%; height:100%" >
						</div>
					</div>
					<div class="disclaimer-container">
			
						<div class="col-md-6">
				
							<a href="">
								<button class="btn pro-btn quotation" style="font-size:15px;padding:10px 25px;">INQUIRE NOW</button>
							</a>
						</div>
					</div>
				</div><!--col-md-12-->
			</div><!--row-->
		</div><!--container-->

		<div id="featured-product-wrapper" style="background-color: #f8f8f8;">
			<div class="container" id="wrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="product-detail"><h1><center>Featured Trucks</center></h1></div>
						<div class="featured-product-slider">
							<div class="item">
								<a>
									<img src="http://d1k45mg6o9axif.cloudfront.net/uploads/files/featured_26/f-series-1.jpg" alt="FORWARD" />
									<h4>FORWARD</h4>
									<p></p>
								</a>
							</div>
							<div class="item">
								<a>
									<img src="http://d1k45mg6o9axif.cloudfront.net/uploads/files/featured_27/f-series-2.jpg" alt="FORWARD" />
									<h4>FORWARD</h4>
									<p></p>
								</a>
							</div>
							<div class="item">
								<a>
									<img src="http://d1k45mg6o9axif.cloudfront.net/uploads/files/featured_28/f-series-3.jpg" alt="FORWARD" />
									<h4>FORWARD</h4>
									<p></p>
								</a>
							</div>
							<div class="item">
								<a>
									<img src="http://d1k45mg6o9axif.cloudfront.net/uploads/files/featured_87/f-series-4.jpg" alt="FORWARD" />
									<h4>FORWARD</h4>
									<p></p>
								</a>
							</div>
							<div class="item">
								<a>
									<img src="http://d1k45mg6o9axif.cloudfront.net/uploads/files/featured_88/f-series-5.jpg" alt="FORWARD" />
									<h4>FORWARD</h4>
									<p></p>
								</a>
							</div>
							<div class="item">
								<a>
									<img src="http://d1k45mg6o9axif.cloudfront.net/uploads/files/featured_89/f-series-6.jpg" alt="FORWARD" />
									<h4>FORWARD</h4>
									<p></p>
								</a>
							</div>
							<div class="item">
								<a>
									<img src="http://d1k45mg6o9axif.cloudfront.net/uploads/files/featured_90/f-series-7.jpg" alt="FORWARD" />
									<h4>FORWARD</h4>
									<p></p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection