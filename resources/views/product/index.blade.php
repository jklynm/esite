@extends('layout.master')
@section('datatablecss')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@section('scripts')
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
@section('dynamicContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Products </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     @include('layout.alert')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
			<div class="card">
		      <div class="card-header">
		         <h3 class="card-title">Manage Product &nbsp; &nbsp; <a href="{{route('product.create')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Add Product</button></a></h3>
		      </div>
		      <!-- /.card-header -->
		      <div class="card-body">
		        <table id="example1" class="table table-bordered table-striped">
		          <thead>
		          <tr>
		            <th>S.No.</th>
		            <th>Category</th>
		            <th>Title</th>
		            <th>Description</th>
		            <th>Status</th>
		            <th>Action</th>
		          </tr>
		          </thead>
		          <tbody>
		          @foreach($products as $index=>$val) 
		          <tr>
		            <td>{{$index+1}}</td>
		            <td>{{$val->category->title}} </td> 
		            <td>{{$val->title}}</td>
		            <td>{{$val->description}}</td>
		            <td> @if($val->status == 0)
		            	<button class="btn btn-danger">Disable</button>
		            	@else <button class="btn btn-success">Enable</button>
		            	@endif
		            </td>		           
		            <td> <a href="{{route('category.edit',$val->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a> &nbsp; <a href="" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
		          </tr>
		          @endforeach		        
		          </tbody>
		          <tfoot>
		          <tr>
		            <th>S.N.</th>
		            <th>Category</th>		            
		            <th>Title</th>
		            <th>Description</th>
		            <th>Status</th>
		            <th>Action</th>
		          </tr>
		          </tfoot>
		        </table>
		      </div>
		    
		      <!-- /.card-body -->
    		</div>

            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection