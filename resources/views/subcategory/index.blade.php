@extends('layout.master')
@section('dynamicContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SubCategory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Subcategories </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
			<div class="card">
		      <div class="card-header">
		         <h3 class="card-title">Manage Subcategory &nbsp; &nbsp; <a href="{{route('subcategory.create')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Add SubCategory</button></a></h3>
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
		          @foreach($subcategory as $index=>$val) 
		          <tr>
		            <td>{{$index+1}}</td>
		            <td>Category </td>
		            <td>{{$val->title}} </td>
		            <td>{{$val->description}}</td>
		            <td> @if($val->status == 0)
		            	<button class="btn btn-danger">Disable</button>
		            	@else <button class="btn btn-success">Enable</button>
		            	@endif
		            </td>
		           
		            <td> {{$val->id}}<a href="{{route('category.edit',$val->id)}}"><i class="fa fa-edit"></i></a> &nbsp; <a href=""><i class="fa fa-times"></i></a></td>
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