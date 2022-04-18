@extends('layout.master')

@section('title')

	{{ $product->title }} | MediStore

@endsection

@section('content')
<div class="container single_product_container">
	<div class="row">
		<div class="col">
			<!-- Крошки -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li><a href="{{ route('index') }}">Главная</a></li>
					<li><a href="{{ route('category') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Категория</a></li>
					<li class="active"><a href="{{ route('single.show' , $product->id) }}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{ $product->title }}</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
							<div class="single_product_thumbnails">
								<ul>
									@php
										$i = 0;
									@endphp
									<li class="{{ $i == 1 ? 'active' : ''}}"><img src="{{ asset('images/products/'.$product->image) }}" alt="" data-image="{{ asset('images/products'.$product->image) }}"></li>
									@php
										$i++;
									@endphp
								</ul>
							</div>
						</div>
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url({{ asset('images/products/' . $product->image) }})"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2>{{ $product->title }}</h2>
						<p>{{ $product->description }}</p>
						<div class="tab_title">
							<h4>{{ $product->quantity < 1 ? ' Отсутствует' : $product->quantity . ' | В наличии'}}</h4>
						</div>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>бесплатная доставка</span>
					</div>
					<div class="product_price">₽ {{ $product->price }}</div>
					<ul class="star_rating">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					</ul>
					<div class="product_color">
						<span>Выберите цвет:</span>
						<ul>
							<li style="background: #e54e5d"></li>
							<li style="background: #252525"></li>
							<li style="background: #60b3f3"></li>
						</ul>
					</div>
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span>Количество:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
						<div class="red_button sin_add_to_cart_button">
							<form action="{{ route ('cart.store') }}" method="post"> 
 							@csrf
								<input type="hidden" name="product_id" value="{{ $product->id }}">
								<button type="button" class="cart" value="{{ $product->id }}">в корзину</button>
							</form>
						</div>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="tabs_section_container">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab active" data-active-tab="tab_1"><span>Описание</span></li>
							<li class="tab" data-active-tab="tab_2"><span>Дополнительная информация</span></li>
							<li class="tab" data-active-tab="tab_3"><span>Отзывы</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<div id="tab_1" class="tab_container active">
						<div class="row">
							<div class="col-lg-5 desc_col">
								<div class="tab_title">
									<h4>Описание</h4>
								</div>
								<div class="tab_text_block">
									<h2>{{ $product->title }}</h2>
									<p>{{ $product->description }}</p>
								</div>
								<div class="tab_image">
									<img src="{{ asset('images/products/' . $product->image) }}" alt="">
								</div>
								<div class="tab_text_block">
									<h2>{{ $product->title }}</h2>
									<p>{{ $product->description }}</p>
								</div>
							</div>
							<div class="col-lg-5 offset-lg-2 desc_col">
								<div class="tab_image">
									<img src="{{ asset('images/products/' . $product->image) }}" alt="">
								</div>
								<div class="tab_text_block">
									<h2>{{ $product->title }}</h2>
									<p>{{ $product->description }}</p>
								</div>
								<div class="tab_image desc_last">
									<img src="{{ asset('images/products/' . $product->image) }}" alt="">
								</div>
							</div>
						</div>
					</div>

					<div id="tab_2" class="tab_container">
						<div class="row">
							<div class="col additional_info_col">
								<div class="tab_title additional_info_title">
									<h4>Дополнительная информация</h4>
								</div>
								<p>Цвет:<span>Розовый, Фиолетовый, Чёрный</span></p>
								<p>Размер:<span>L, M, XL</span></p>
							</div>
						</div>
					</div>

					<div id="tab_3" class="tab_container">
						<div class="row">

							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Отзывы (2)</h4>
								</div>

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">17 Апреля 2022</div>
										<div class="user_name">Максим Бычковский</div>
										<p>Заказал средства контрацепции, мне всё понравилось. Вышло даже дешевле, спасибо за это Riin стору!</p>
									</div>
								</div>

								<!-- User Review -->

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">16 Апреля 2022</div>
										<div class="user_name">Никита Суслин</div>
										<p>По совету Максима, сделал заказ и мне положили аж две пачки. Одну в подарок для меня, не для Макса. Я очень рад, заказывать буду ещё!</p>
									</div>
								</div>
							</div>

							<div class="col-lg-6 add_review_col">

								<div class="add_review">
									<form id="review_form" action="post">
										<div>
											<h1>Добавить отзыв</h1>
											<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Заполните поля имя">
											<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Заполните поля почта">
										</div>
										<div>
											<h1>Ваша оценка: </h1>
											<ul class="user_star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
											<textarea id="review_message" class="input_review" name="message"  placeholder="Ваш отзыв" rows="4" required data-error="Пожалуйста, напишите ваш отзыв"></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" class="sin_red_button review_submit_btn trans_300" value="Submit">отправить</button>
										</div>
									</form>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>

	<!-- Benefit -->

	@include ('partials.benefit')

@endsection


@push('scripts')
	<script> 

	$(document).ready(function(){
		$('.cart').on('click', function(){
			let id = $(this).attr('value');

			$.ajax({
				url: 'http://webpharm.ae/public/carts/store',
				method: 'post',
            	data: { product_id: id },
            	headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            	dataType: 'json',
				success:function(data){
					alertify.set('notifier','position', 'top-center');
 					alertify.success('Предмет успешно добавлен в корзину! Всего: ' +data.total_items+ '<br/>Перейти <a href="{{ route('carts') }}">в корзину</a>');

					$('#totalItems').html(data.total_items);
				}
			})
		});
	});

	</script>
@endpush
