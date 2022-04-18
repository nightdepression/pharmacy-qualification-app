@extends('admin.layouts.master')

@section('content')          

	    <div class="row page-title-header">
	       	<div class="col-12">
	         	<div class="page-header">
	            	<h4 class="page-title">Продукты</h4>
	          	</div>
	        </div>
	    </div>
		
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card">
              <div class="card-body">
                @include('admin.partials.messages')
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> Имя </th>
                      <th> Категория </th>
                      <th> Бренд </th>
                      <th> Количество </th>
                      <th> Цена </th>
                      <th> Статус </th>
                      <th> Действие </th>
                    </tr>
                  </thead>
                  <tbody>

                  	@foreach($products as $item)
                    <tr>
                      <td> {{ $item -> title }} </td>
                      <td> {{ $item->category->name}} </td>
                      <td> {{ $item->brand->name }} </td>
                      <td> {{ $item -> quantity }} </td>
                      <td> {{ $item -> price }} </td>
          					  <td>
                      @if($item->status == "Active")
          							<label class="badge badge-success">{{ $item -> status }}</label>
          						@else
          							<label class="badge badge-warning">{{ $item -> status }}</label>
          						@endif
                      </td>
                      <td>
      						<a href="{{ route('admin.product.edit' , $item->id) }}" class="btn btn-primary">Изменить</a>
      						<a href="#deleteModal{{ $item->id }}" data-toggle="modal" class="btn btn-danger">Удалить</a>

                  <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header"> 
                          <h5 class="modal-title" id="exampleModalLabel">Вы точно хотите удалить?</h5>
                          <button type="buttone" class="close" data-dismiss="modal" aria-label="Close"> 
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer"> 
                          <form action="{{ route('admin.product.delete' , $item->id) }}" method="post"> 
                              {{ csrf_field() }}
                              <button type="submit" class="btn btn-danger">Удалить</button>
                          </form>
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Отменить</button>
                        </div>
                          
                        </div>
                      </div>
                    </div>
					       </td>
                </tr>
               @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@endsection
