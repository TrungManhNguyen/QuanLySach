@extends('index')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Thêm sản phẩm</h3>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Ghi chú</small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Giá thành">
              </div>
              <div class="form-check">                
              </div>
              <div class="form-group">
                <label>Giá thành</label>
                <input type="text" class="form-control" name="price" placeholder="Nhập giá thành">
              </div>
              <div class="form-group">
                
                <label>Chọn danh mục cha</label>
                <select name="name" class="form-control"  id="">
                    <option value="0">Chọn danh mục cha</option>
                </select>
              </div> 

             
                <div class="form-group">
                  <label>Ảnh</label>
                  <input type="file" class="form-control" name="feature_image_path[]" placeholder="Nhập giá thành">
                </div>
                <div class="form-group">
                  <label >Nhập nội dung</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name ="content" rows="3"></textarea>
                </div>
                <div class="form-group">
                
                  <label>Nhập tag cho sản phẩm</label>
                  <select  class="form-control tags_select_choose" multiple="multiple">
                    
                  </select>
                </div> 
            </form>

            <form action="{{route('getProduct')}}" method="post">
              @csrf
                Tên sản phẩm: <input type="text" name="product" placeholder="Nhập tên sản phẩm">
                Giá thành: <input type="text" name="price" placeholder="Nhập giá">
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
  @section('js')
  <script> src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"</script>
  <script>
    $(function () {
      $(".tags_select_choose").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
    })
  </script>


  @endsection