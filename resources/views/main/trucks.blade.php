@extends('layouts.main')
    @section('content')
    	<div class="container" id="desktop-wrapper">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="page-header">
						<h2 class="page-title">All Trucks</h3>
					</div>
					<div class="row">				
						<div class="col-md-4 col-sm-6 grid-content">
							<div class="news">
								<a href="?page=news&eid=154">
									<div style="background-image: url('http://localhost/csk_trading/storage/uploads/van.jpg'); 
									background-position: top center; 
									background-size: 100% auto; background-repeat: no-repeat; width: 100%; height: 150px;">
									</div>
									<h4 style="overflow: hidden;">IPC announced 200K raffle promo winners</h4>
								</a>
								<p>
									Celebrating its 200,000 unit-sales, Isuzu Philippines Corporation turned into Santa Claus for buyers of the Isuzu Crosswind, ...					
								</p>
								<a href="#">VIEW MORE</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 grid-content">
							<div class="news">
								<a href="?page=news&eid=153">
									<div style="background-image: url('./uploads/files/news_153/photo-1.jpg'); background-position: top center; background-size: 100% auto; background-repeat: no-repeat; width: 100%; height: 150px;">
									</div>
									<h4 style="overflow: hidden;">
										IPC mechanics bags merits in this year's Isuzu World Technician Competition in Japan
									</h4>
								</a>
								<p>
									Isuzu Philippine Corporation (IPC) recently received recognitions for its technical talents in the field of vehicle services ...
								</p>
								<a href="#">VIEW MORE</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 grid-content">
							<div class="news">
								<a href="?page=news&eid=153">
									<div style="background-image: url('./uploads/files/news_153/photo-1.jpg'); background-position: top center; background-size: 100% auto; background-repeat: no-repeat; width: 100%; height: 150px;">
									</div>
									<h4 style="overflow: hidden;">
										IPC mechanics bags merits in this year's Isuzu World Technician Competition in Japan
									</h4>
								</a>
								<p>
									Isuzu Philippine Corporation (IPC) recently received recognitions for its technical talents in the field of vehicle services ...
								</p>
								<a href="#">VIEW MORE</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 grid-content">
							<div class="news">
								<a href="?page=news&eid=153">
									<div style="background-image: url('./uploads/files/news_153/photo-1.jpg'); background-position: top center; background-size: 100% auto; background-repeat: no-repeat; width: 100%; height: 150px;">
									</div>
									<h4 style="overflow: hidden;">
										IPC mechanics bags merits in this year's Isuzu World Technician Competition in Japan
									</h4>
								</a>
								<p>
									Isuzu Philippine Corporation (IPC) recently received recognitions for its technical talents in the field of vehicle services ...
								</p>
								<a href="#">VIEW MORE</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 grid-content">
							<div class="news">
								<a href="?page=news&eid=153">
									<div style="background-image: url('./uploads/files/news_153/photo-1.jpg'); background-position: top center; background-size: 100% auto; background-repeat: no-repeat; width: 100%; height: 150px;">
									</div>
									<h4 style="overflow: hidden;">
										IPC mechanics bags merits in this year's Isuzu World Technician Competition in Japan
									</h4>
								</a>
								<p>
									Isuzu Philippine Corporation (IPC) recently received recognitions for its technical talents in the field of vehicle services ...
								</p>
								<a href="#">VIEW MORE</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 grid-content">
							<div class="news">
								<a href="?page=news&eid=153">
									<div style="background-image: url('./uploads/files/news_153/photo-1.jpg'); background-position: top center; background-size: 100% auto; background-repeat: no-repeat; width: 100%; height: 150px;">
									</div>
									<h4 style="overflow: hidden;">
										IPC mechanics bags merits in this year's Isuzu World Technician Competition in Japan
									</h4>
								</a>
								<p>
									Isuzu Philippine Corporation (IPC) recently received recognitions for its technical talents in the field of vehicle services ...
								</p>
								<a href="#">VIEW MORE</a>
							</div>
						</div>
					</div>			
					<div class="load-older-news">
						<button class="btn btn-load">Load More Trucks<i class="fa fa-angle-down"></i></button>
					</div>
				</div><!--/col-md-12-->
			</div><!--/row-->
		</div><!--/container-->

<style>
body{background:none !important;}
</style>


<script>
	$(document).ready(function(){
		var totalnewscount = '61';

		if( totalnewscount <= 12 ){
			$('.btn-load').hide();
		}

		$('.btn-load').click(function(){
			var currentpage = $('#currentpage').val();
			var totalpagecount = $('#totalpagecount').val();
			var pageType = 'news';
			var currentNewsCount = $('.main-content .row .grid-content').length;

			$.ajax({
				type: 'GET',
				url: 'http://www.isuzuphil.com/ajax.php',
				data: {page: pageType, count: currentNewsCount },

				success: function(data) {
					var response = data;
					currentpage = parseInt(currentpage) + 1;
					if( currentpage == totalpagecount ) {
						$('.btn-load').hide();
					}

					$('#currentpage').val(currentpage);
					$('.main-content .row').append(response);
				}
			});
		});
	})
</script>
	@endsection