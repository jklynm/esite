@extends('layout.master')
@section('dynamicContent')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SubCategories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Subcategories </li>
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
                <h3 class="card-title">Add New Sub Category &nbsp; &nbsp; <a href="{{route('subcategory')}}"><button class="btn btn-success"><i class="fa fa-pen"></i> Manage SubCategory</button></a></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="col-md-6">
                <form method="post" action="{{route('subcategory.store')}}">
                 @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="selcategory">
                          <option value="cat1">Category 1</option>
                          <option value="cat2">Category 2</option>
                          <option value="cat3">Category 3</option>
                          <option value="cat4">Category 4</option>
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" value="1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
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