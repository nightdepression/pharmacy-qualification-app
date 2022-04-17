@extends('layout.master')

@section('content')

	<div class="container contact_container cart_area">
		<div class="row">
			<div class="col">
				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="{{ route('index') }}">Главная</a></li>
						<li class="active"><a href="{{ route('checkout') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Корзина</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card"> 
			<div class="card-body">
				<h3>Подтвердите предметы</h3>
				<hr>
				<div class="row">
					<div class="col-lg-7"> 
						@foreach(App\Cart::totalCarts() as $cart)
							<p> 
								{{ $cart->product->title }} ({{ $cart->product_quantity }} Items)- 
								<strong>{{ $cart->product->price }} &#8381;</strong>
							</p>
						@endforeach

						<div class="cart_btn mt-2"> 
							<a href="{{ route('carts') }}" class="btn btn-primary mr-1">Изменить</a>
						</div>
					</div>
					<div class="col-lg-5"> 
						@php
							$total_price = 0;
						@endphp

						@foreach(App\Cart::totalCarts() as $cart)
							@php
								$total_price += $cart->product->price * $cart->product_quantity;
							@endphp
						@endforeach

						<p> 
							Итоговая цена: <strong>{{ $total_price }} &#8381;</strong>
						</p>
						<p> 
							Итоговая цена с доставкой: <strong>{{ $total_price + App\Modification::first()->shipping_cost }} &#8381;</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col">
				<div class="card">
					<div class="card-body"> 
						<h3>Адрес доставки:</h3>
						
						<form action="{{ route('checkout.store') }}" method="post"> 
							@csrf

							<div class="form-group"> 
								<label for="name">Имя получателя:</label>
								<input type="text" id="name" name="name" class="form-control" value="{{ Auth::check() ? Auth::user()->first_name.' '.Auth::user()->last_name : ''}}" required>
							</div>
							<div class="form-group"> 
								<label for="email">Email:</label>
								<input type="text" id="email" name="email" class="form-control" value="{{ Auth::check() ? Auth::user()->email : ''}}">
							</div>
							<div class="form-group"> 
								<label for="phone_no">Телефон:</label>
								<input type="text" id="phone_no" name="phone_no" class="form-control" value="{{ Auth::check() ? Auth::user()->phone_no : ''}}" required>
							</div>
							<div class="form-group"> 
								<label for="shipping_address">Адрес:</label>
								<input type="text" id="shipping_address" name="shipping_address" class="form-control" value="{{ Auth::check() ? Auth::user()->shipping_address : ''}}" required>
							</div>
							<div class="form-group"> 
								<label for="message">Пожелание (опционально):</label>
								<textarea id="message" name="message" class="form-control"></textarea> 
							</div>
							<div class="form-group"> 
								<label for="shipping_address">Методы оплаты:</label>
								<input type="text" id="shipping_address" name="shipping_address" class="form-control" value="Оплата по получению" disabled>
							</div>
							<div class="form-group"> 
								<button type="submit" class="btn btn-success">Заказать</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
