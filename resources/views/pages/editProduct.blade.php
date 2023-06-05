@extends('index')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Sửa sản phẩm</h3>   
            @foreach ($info as $value)    
            <form  action="{{ route('updateProduct')}}" method="post">
              @csrf
              <input type="text" name="id" value="{{ $value->id}}" hidden="">
                Sửa tên sản phẩm: <input type="text" name="product" placeholder="{{ $value->title}}">
                Sửa giá sản phẩm: <input type="text" name="price" placeholder="{{$value->price}}">
                <input type="submit">
            </form>            
            @endforeach
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