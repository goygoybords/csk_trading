<!-- <form action = "{{ url('/test') }}" method = "post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
</form>
@if($errors->has())
@foreach ($errors->all() as $error)
    <div id="error_message">{{ $error }}</div>
  @endforeach
  @endif
@if (Session::has('msg'))
    <div id="error_message">{{ Session::get('msg') }}</div>
@endif -->

<form action = "{{ url('/test') }}" method = "post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<!-- <input type="file" name="fileToUpload" id="fileToUpload"> -->
	<input type = "text" name = "name" value = "{{ old('name') }}">
	<input type = "text" name = "address" value = "{{ old('address') }}"> 
	<input type="submit"  value="Upload Image" name="submit">
</form>
@if($errors->has())
@foreach ($errors->all() as $error)
    <div id="error_message">{{ $error }}</div>
  @endforeach
  @endif
@if (Session::has('msg'))
    <div id="error_message">{{ Session::get('msg') }}</div>
@endif