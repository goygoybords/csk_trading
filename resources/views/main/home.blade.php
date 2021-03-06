@extends('layouts.main')
    @section('content')
   	    	<div class="container slider-wrapper">
			<div class="item">
				<a>
				<img id="clickimage" src="http://1.shard.bmwusa.com.edgesuite.net/l/r/OUSnGBf4A.jpg" border="0" alt="Level Up Your Next Ride" link="none" target="_blank">
				</a>
			</div>
			<div class="item">
				<a id="link"  title="Level Up Your Next Ride" target="_blank">
					<img id="clickimage" src="http://1.shard.bmwusa.com.edgesuite.net/l/r/OUSnGBf4A.jpg" border="0" alt="Level Up Your Next Ride" link="none" target="_blank">
				</a>
			</div>
			<div class="item">
				<a id="link"  title="Level Up Your Next Ride" target="_blank">
					<img id="clickimage" src="http://1.shard.bmwusa.com.edgesuite.net/l/r/OUSnGBf4A.jpg" border="0" alt="Level Up Your Next Ride" link="none" target="_blank">
				</a>
			</div>
	    </div>

	    <div class="container cars-categories-wrapper">
			<div class="row">			
				<div class="col-xs-6 col-md-4">
					<div class="cars-container">
						<a href="{{ route('main:trucks' , ['slug' => 'aluminum-vans']) }}" title="ALUMINUM VANS">
						<h4>ALUMINUM VANS</h4>

							<img src="{{ URL::asset('uploads/P4140629.JPG') }}">
						</a>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<div class="cars-container">
						<a href="{{ route('main:trucks' , ['slug' => 'cab-chassis']) }}" title="CAB CHASSIS">
						<h4>CAB CHASSIS</h4>
							<img src="{{ URL::asset('uploads/P4140629.JPG') }}">
						</a>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<div class="cars-container">
						<a href="{{ route('main:trucks' , ['slug' => 'cargo-trucks']) }}" title="CARGO TRUCKS">
						<h4>CARGO TRUCKS</h4>
							<img src="{{ URL::asset('uploads/P4140629.JPG') }}">
						</a>
					</div>
				</div>
				
			</div>
			<div class="row">			
				<div class="col-xs-6 col-md-4">
					<div class="cars-container">
						<a href="{{ route('main:trucks' , ['slug' => 'dump-trucks']) }}" title="DUMP TRUCKS">
						<h4>DUMP TRUCKS</h4>
							<img src="{{ URL::asset('uploads/P4140629.JPG') }}">
						</a>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<div class="cars-container">
						<a href="{{ route('main:trucks' , ['slug' => 'chiller-vans']) }}" title="CHILLER VANS">
						<h4>CHILLER VANS</h4>
							<img src="{{ URL::asset('uploads/P4140629.JPG') }}">
						</a>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<div class="cars-container">
						<a href="{{ route('main:trucks' , ['slug' => 'other-equipments']) }}" title="OTHER EQUIPMENTS">
						<h4>OTHER EQUIPMENTS</h4>
							<img src="{{ URL::asset('uploads/P4140629.JPG') }}">
						</a>
					</div>
				</div>
			</div>	
		</div>
	@endsection