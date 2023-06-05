@extends('index')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Thêm danh mục</h3>
            <form action="" method=" post">
              <div class="form-group">
                <label for="exampleInputEmail1">Nhập Tên danh mục</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên sản phẩm">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mô tả</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mô tả">
              </div>
              <div class="form-check">
                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                {{-- <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>

              <div class="form-group">
                <label>Chọn danh mục cha</label>
                <select name="" class="form-control" id=""></select>
                <option value="0">Chọn danh mục cha</option>
              </div>
            </form>

            <form action="{{ route('getCategory') }}" method="post">
              @csrf
                Tên danh mục: <input type="text" name="category">
                <input type="submit">
            </form>
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