@extends('layouts.admin')
    @section('content')
       <div id="wrapper">
        @include('admin.navigation')
             <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Truck Entry Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Truck Entry 
                        </div>
                        <div class="panel-body">
                            @if(!isset($trucks))
                            <div class="row">
                                <form method = "post" action = "{{ route('admin:postTruckEntry') }}" enctype="multipart/form-data"> 
                                {{ csrf_field() }}
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Truck Category</label>
                                                @if (Session::has('msg'))
                                                    <div id="error_message">{{ Session::get('msg') }}</div>
                                                @endif
                                            <select class="form-control" name = "truck_category">
                                                <option></option>
                                                @foreach($categories as $c)
                                                <option value = "{{ $c->truck_category_id }}" 
                                                    <?php 
                                                     if(old('truck_category') == $c->truck_category_id) 
                                                          echo "selected";
                                                    ?>
                                                 >{{ $c->description }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('truck_category'))
                                                <p> <strong>{{ $errors->first('truck_category') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input type = "text" name = "post_title" class="form-control" value = "{{ old('post_title') }}">
                                            @if ($errors->has('post_title'))
                                                <p> <strong>{{ $errors->first('post_title') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type = "text" name = "brand" class="form-control" value = "{{ old('brand') }}">
                                             @if ($errors->has('brand'))
                                                <p> <strong>{{ $errors->first('brand') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Body Type</label>
                                            <input type = "text" name = "body_type" class="form-control" value = "{{ old('body_type') }}"> 
                                            @if ($errors->has('body_type'))
                                                <p> <strong>{{ $errors->first('body_type') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type = "text" name = "model" class="form-control" value = "{{ old('model') }}">
                                        </div>
                                        @if ($errors->has('model'))
                                            <p> <strong>{{ $errors->first('model') }}</strong></p>
                                        @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Engine</label>
                                            <input type = "text" name = "engine" class="form-control" value = "{{ old('engine') }}">
                                            @if ($errors->has('model'))
                                                <p> <strong>{{ $errors->first('engine') }}</strong></p>
                                            @endif
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">PHP</span>
                                            <input type="text" name = "price" class="form-control" value = "{{ old('price') }}">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name = "description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                             @if ($errors->has('description'))
                                                <p> <strong>{{ $errors->first('description') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type = "file" name = "image_file" accept="image/*">
                                            @if ($errors->has('image_file'))
                                                <p> <strong>{{ $errors->first('image_file') }}</strong></p>
                                            @endif
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit Record</button>
                                    </div>
                                </form>
                            </div>
                            @else
                            <div class="row">
                                <form method = "post" action = "{{ route('admin:postEditTruckEntry' , ['id' => $trucks->truck_id ]) }}"> 
                                {{ csrf_field() }}
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Truck Category</label>
                                                @if (Session::has('msg'))
                                                    <div id="error_message">{{ Session::get('msg') }}</div>
                                                @endif
                                            <select class="form-control" name = "truck_category">
                                                <option></option>
                                                @foreach($categories as $c)
                                                <option value = "{{ $c->truck_category_id }}" 
                                                    <?php 
                                                     if($trucks->truck_category_id == $c->truck_category_id) 
                                                          echo "selected";
                                                    ?>
                                                 >{{ $c->description }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('truck_category'))
                                                <p> <strong>{{ $errors->first('truck_category') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input type = "text" name = "post_title" class="form-control" value = "{{ $trucks->post_name }}">
                                            @if ($errors->has('post_title'))
                                                <p> <strong>{{ $errors->first('post_title') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type = "text" name = "brand" class="form-control" value = "{{ $trucks->brand }}">
                                             @if ($errors->has('brand'))
                                                <p> <strong>{{ $errors->first('brand') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Body Type</label>
                                            <input type = "text" name = "body_type" class="form-control" value = "{{ $trucks->body_type }}"> 
                                            @if ($errors->has('body_type'))
                                                <p> <strong>{{ $errors->first('body_type') }}</strong></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type = "text" name = "model" class="form-control" value = "{{ $trucks->model }}">
                                        </div>
                                        @if ($errors->has('model'))
                                            <p> <strong>{{ $errors->first('model') }}</strong></p>
                                        @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Engine</label>
                                            <input type = "text" name = "engine" class="form-control" value = "{{ $trucks->engine }}">
                                            @if ($errors->has('model'))
                                                <p> <strong>{{ $errors->first('engine') }}</strong></p>
                                            @endif
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">PHP</span>
                                            <input type="text" name = "price" class="form-control" value = "{{ $trucks->price }}">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name = "description" class="form-control" rows="3">{{ $trucks->description }}</textarea>
                                             @if ($errors->has('description'))
                                                <p> <strong>{{ $errors->first('description') }}</strong></p>
                                            @endif
                                        </div>
                            
                                        
                                        <button type="submit" class="btn btn-default">Update Record</button>
                                    </div>
                                </form>
                            </div>
                            @endif
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @endsection
