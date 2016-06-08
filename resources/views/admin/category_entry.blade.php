@extends('layouts.admin')
    @section('content')
       <div id="wrapper">
        @include('admin.navigation')
             <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category Entry Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category Entry Form
                        </div>
                        <div class="panel-body">
                            @if(!isset($cat))
                            <div class="row">
                                <form method = "post" action = "{{ route('admin:postCategoryEntry') }}" > 
                                {{ csrf_field() }}
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type = "text" name = "description" class="form-control" value = "{{ old('description') }}">
                                            @if (Session::has('msg'))
                                                <div id="error_message">{{ Session::get('msg') }}</div>
                                            @endif
                                            @if ($errors->has('description'))
                                                <p> <strong>{{ $errors->first('description') }}</strong></p>
                                            @endif
                                        </div> 
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type = "text" name = "slug" class="form-control" value = "{{ $cat->description }}">
                                             @if ($errors->has('slug'))
                                                <p> <strong>{{ $errors->first('slug') }}</strong></p>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Record</button>
                                    </div>
                                </form>
                            </div>
                            @else
                            <div class="row">
                                <form method = "post" action = "{{ route('admin:postEditCategoryEntry' , ['id' => $cat->truck_category_id ]) }}"> 
                                {{ csrf_field() }}
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type = "text" name = "description" class="form-control" value = "{{ $cat->description }}">
                                            @if (Session::has('msg'))
                                                <div id="error_message">{{ Session::get('msg') }}</div>
                                            @endif
                                            @if ($errors->has('description'))
                                                <p> <strong>{{ $errors->first('description') }}</strong></p>
                                            @endif
                                        </div> 
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type = "text" name = "slug" class="form-control" value = "{{ $cat->slug }}">
                                             @if ($errors->has('slug'))
                                                <p> <strong>{{ $errors->first('slug') }}</strong></p>
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
