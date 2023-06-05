@extends('index')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            
            <h3 class="box-title">Danh sách danh mục</h3>
            {{-- <a href="/addcategory">Thêm mới</a> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-md-12 ">
              <a href="/addcategory" class="btn btn-success" style="float: right; margin-bottom:10px">Thêm mới</a>
            </div>
            <div class="col-md-12">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                  <?php $stt=1;?>
                  @foreach ($info as $value)
                <tr>
                  <td><?= $stt++ ?></td>
                  <td>{{$value['Cat_name']}}</td>
                  <td>carrot@gmail.com</td>
                  <td> <a class="btn btn-info" href="editCategory/{{$value ['id']}}">Sửa</a></td>
                  <td><a class="btn btn-danger" href="deleteCategory/{{$value ['id'] }}">Xóa</a></td>
                </tr>
                @endforeach
                <tr>
                  
              </table>
            </div>
           
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  @endsection