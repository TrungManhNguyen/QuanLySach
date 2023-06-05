@extends('index')

@section('content')

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Sửa danh mục</h3>       
            <form  action="{{ route('updateCategory')}}" method="post">
              @csrf
              <input type="text" name="id" value="{{ $info['id']}}" hidden="">
                Sửa danh mục: <input type="text" name="category" placeholder="{{ $info['Cat_name']}}">
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