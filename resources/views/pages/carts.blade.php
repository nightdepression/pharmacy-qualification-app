@extends('layout.master')

@section('content')

	<div class="container contact_container cart_area">
		<div class="row">
			<div class="col">

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="{{ route('index') }}">Главная</a></li>
						<li class="active"><a href="{{ route('carts') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Корзина</a></li>
					</ul>
				</div>
			</div>
		</div>
		@include('partials.messages')
		<div class="row">
			<div class="col-lg-12">
				@if(App\Cart::totalItems() > 0)
					<table class="table table-bordered">
					<thead>
						<tr class="text-center">
							<th>Номер</th>
							<th>Название товара</th>
							<th>Изображение товара</th>
							<th>Количество товара</th>
							<th>Цена за единицу</th>
							<th>Сумма</th>
							<th>Отменить заказ</th>
						</tr>
					</thead>
					<tbody>
						@php
							$total_price = 0;
						@endphp

						@foreach(App\Cart::totalCarts() as $cart)
							<tr class="text-center">
								<td>{{ $loop->index + 1 }}</td>
								<td><a href="{{ route('single.show' , $cart->product->id) }}">{{ $cart->product->title }}</a></td>
								<td><img src="{{ asset('images/products/' . $cart->product->image)}}" alt="Product" width="40" height="30"></td>
								<td> 
									<form class="form-inline" action="{{ route('cart.update' , $cart->id) }}" method="post"> 
										@csrf
										<input type="number" name="product_quantity" class="form-control" value="{{ $cart->product_quantity }}">
										<button type="submit" class="btn alert-success">Обновить</button>
									</form>
								</td>
								<td>{{ $cart->product->price }} TK</td>
								@php
									$total_price += $cart->product->price * $cart->product_quantity;
								@endphp
								<td>{{ $cart->product->price * $cart->product_quantity}} TK</td>
								<td> 
									<form class="form-inline" action="{{ route('cart.delete', $cart->id) }}" method="post"> 
										@csrf
										<input type="hidden" name="cart_id">
										<button type="submit" class="btn btn-danger">Удалить</button>
									</form>
								</td>
							</tr>
						@endforeach
							<tr> 
								<td colspan="4"></td>
								<td><strong>Количество</strong></td>
								<td colspan="2"><strong>{{ $total_price }} &#8381;</strong></td>
							</tr>
					</tbody>
				</table>

				<div class="cart_btn text-right mt-2"> 
					<a href="{{ route('category') }}" class="btn btn-primary mr-1">Добавить ещё</a>
					<a href="{{ route('checkout') }}" class="btn btn-success">Расчёт</a>
				</div>
				@else

				<div class="alert alert-warning"> 
					<h4>Ваша корзина пустая</h4>

					<a href="{{ route('category') }}" class="btn btn-primary mt-2">Добавить продукты</a>
				</div>
				@endif
			</div>
		</div>
	</div>

@endsection
