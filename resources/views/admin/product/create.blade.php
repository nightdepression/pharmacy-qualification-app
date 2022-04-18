@extends('admin.layouts.master')

@section('content')          

		<!-- Page Title Header Starts-->
	    <div class="row page-title-header">
	       	<div class="col-12">
	         	<div class="page-header">
	            	<h4 class="page-title">Добавить продукт</h4>
	          	</div>
	        </div>
	    </div>
	    <!-- Page Title Header Ends-->
		
        <div class="row">
          <div class="col-md-8 grid-margin">
            <div class="card">
              <div class="card-body">
                @include('admin.partials.messages')
                <form class="forms-sample" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Имя</label>
                    <input type="text" class="form-control" id="exampleInputName1" name ="title" placeholder="Имя" value="{{old('title')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Выберите категорию</label>
                    <select name="category_id" id="exampleFormControlSelect1" class="form-control">
                      <option value="">Выберите категорию</option>
                      @foreach(App\Category::orderBy('id' , 'desc')->get() as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Выберите бренд</label>
                    <select name="brand_id" id="exampleFormControlSelect1" class="form-control"> 
                      <option value="">Выберите бренд</option>
                      @foreach(App\Brand::orderBy('id' , 'desc')->get() as $brad)
                        <option value="{{ $brad->id }}">{{ $brad->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Описание</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Количество</label>
                    <input type="number" class="form-control" id="exampleInputName1" name ="quantity" placeholder="Количество">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Цена</label>
                    <input type="text" class="form-control" id="exampleInputName1" name ="price" placeholder="Цена">
                  </div>
                  <div class="form-group">
                    <label>Изображение</label>
                    <div class="input-group col-xs-4">
                      <input type="file" class="form-control file-upload-info" name="image" placeholder="Загрузить картинку">
                    </div>
                  </div>

                  <button type="submit" class="btn btn-success mr-2">Добавить</button>
                  <button class="btn btn-light"><a href="{{route('admin.product.create')}}">Отменить</a></button>
                </form>
              </div>
            </div>
          </div>
        </div>

@endsection
