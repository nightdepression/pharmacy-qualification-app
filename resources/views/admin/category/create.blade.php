@extends('admin.layouts.master')

@section('content')          

		<!-- Page Title Header Starts-->
	    <div class="row page-title-header">
	       	<div class="col-12">
	         	<div class="page-header">
	            	<h4 class="page-title">Добавить категорию</h4>
	          	</div>
	        </div>
	    </div>
	    <!-- Page Title Header Ends-->
		
        <div class="row">
          <div class="col-md-8 grid-margin">
            <div class="card">
              <div class="card-body">
                @include('admin.partials.messages')
                <form class="forms-sample" action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Имя</label>
                    <input type="text" class="form-control" id="exampleInputName1" name ="name" placeholder="Имя">
                  </div>
                  <div class="form-group">
                    <label>Изображение</label>
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control file-upload-info" name="image" placeholder="Загрузить изображение">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Описание</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-success mr-2">Добавить</button>
                  <button class="btn btn-light"><a href="{{route('admin.category.create')}}">Отменить</a></button>
                </form>
              </div>
            </div>
          </div>
        </div>

@endsection
