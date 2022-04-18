@extends('admin.layouts.master')

@section('content')          

		<!-- Page Title Header Starts-->
	    <div class="row page-title-header">
	       	<div class="col-12">
	         	<div class="page-header">
	            	<h4 class="page-title">Обновить категорию</h4>
	          	</div>
	        </div>
	    </div>
	    <!-- Page Title Header Ends-->
		
        <div class="row">
          <div class="col-md-8 grid-margin">
            <div class="card">
              <div class="card-body">
                @include('admin.partials.messages')
                <form class="forms-sample" action="{{ route('admin.category.update' , $category->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Имя</label>
                    <input type="text" class="form-control" id="exampleInputName1" name ="name" value="{{ $category -> name }}">
                  </div>

                  {{-- <div class="form-group">
                    <label>Изображение</label>
                    <div class="input-group col-xs-12">
                      <img src="{{ asset('images/categories/' . $category -> image) }}" height="100" width="100" alt="">
                    </div>  
                   </div>
                  <div class="form-group">
                  	<div class="input-group">
                  <input type="file" class="form-control file-upload-info" name="image" value="{{$category -> image}}">
                   </div>
                  </div> --}}

                  <div class="form-group">
                    <label for="exampleTextarea1">Описание</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"> {{ $category -> description }}</textarea>
                  </div>

                  {{-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Статус</label>
                    <select name="status" id="exampleFormControlSelect1" class="form-control"> 
                      <option value="">Выберите статус</option>

                      @if($category->status == "Active")
                        <option value="" selected>{{ $category -> status }}</option>
                        <option value="Unavailable">Недоступно</option>
                      @elseif($category->status == "Unavailable")
                        <option value="Active">Активно</option>
                        <option value="" selected>{{ $category -> status }}</option>
                      @endif
                    </select>
                  </div> --}}
                  
                  <button type="submit" class="btn btn-success mr-2">Обновить</button>
                  <button class="btn btn-light"><a href="{{route('admin.category.index')}}">Отменить</a></button>
                </form>
              </div>
            </div>
          </div>
        </div>

@endsection
