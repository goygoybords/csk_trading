@extends('layouts.admin')
    @section('content')
       <div id="wrapper">
        @include('admin.navigation')
             <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
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
                            <div class="row">
                                <form method = "post" action = "{{ route('admin:postTruckEntry') }}" enctype="multipart/form-data"> 
                                {{ csrf_field() }}
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Truck Category</label>
                                            <select class="form-control" name = "truck_category">
                                                <option></option>
                                                @foreach($categories as $c)
                                                <option value = "{{ $c->truck_category_id }}">{{ $c->description }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input type = "text" name = "post_title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type = "text" name = "brand" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Body Type</label>
                                            <input type = "text" name = "body_type" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type = "text" name = "" class="form-control">
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Engine</label>
                                            <input type = "text" name = "engine" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type = "text" name = "brand" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name = "description" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Body Type</label>
                                            <input type = "file" name = "image_file">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                                </form>
                            </div>
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
    @section('customjs')
       <!-- DataTables JavaScript -->
        <script src="{{ URL::asset('admin/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
         <script type="text/javascript">
            $(document).ready(function(){
                $('#dataTables-example').DataTable();
            });
    @endsection