@extends('layouts.admin')
    @section('content')
       <div id="wrapper">
        @include('admin.navigation')
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Trucks</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Trucks
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date Posted</th>
                                            <th>Post Name</th>
                                            <th>Truck Category</th>
                                            <th>Brand</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trucks as $t)
                                        <tr class="odd gradeX">
                                            <td>{{ $t->date_posted }}</td>
                                            <td>{{ $t->post_name }}</td>
                                            <td>{{ $t->truck_category_id }}</td>
                                            <td>{{ $t->brand }}</td>
                                            <td>{{ $t->price }}</td>
                                            <td>
                                                <a href = "{{ route('admin:editTruckEntry' , ['id' => $t->truck_id ]) }}">Edit</a>
                                                <a href = "">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                          <!--   <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

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