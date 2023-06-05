@extends('index')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            
            <h3 class="box-title">Danh sách sản phẩm</h3>
            {{-- <a href="/addcategory">Thêm mới</a> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-md-12 ">
              <a href="/addProduct" class="btn btn-success" style="float: right; margin-bottom:10px">Thêm mới</a>
            </div>
            <div class="col-md-12">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá </th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                    <?php $stt=1;?>
                    @foreach ($info as $value)  
                <tr>
                  <td><?= $stt++ ?></td>
                  <td>{{$value->title}}</td>
                  <td>{{$value->price}}</td>
                  <td> <a class="btn btn-info" href="editProduct/{{$value->id}}">Sửa</a></td>
                  <td><a class="btn btn-danger" href="deleteProduct/{{$value->id}}">Xóa</a></td>
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