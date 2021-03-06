@extends('layout.master')
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
              <li class="breadcrumb-item active">Create Products </li>
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
            <div class="card card-primary">
              <div class="card-header" style="background: #fff;color:#333">
                <h3 class="card-title">Add New Product &nbsp; &nbsp; <a href="{{route('product')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Manage Product</button></a></h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <div class="col-md-6">
                <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                 @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="category_id" required="">
                         @foreach($categories as $key=>$value) 
                          <option value="{{$value->id}}">{{$value->title}}</option>
                         @endforeach 
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="number" class="form-control" name="price" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="image">Product Image</label>
                      <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-radio">
                      <label class="form-radio-label" for="exampleCheck1">Status</label>
                      <input type="radio" name="status" value="1" checked=""> Enable &nbsp;
                      <input type="radio" name="status" value="0"> Disable
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer" style="background: #fff">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
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