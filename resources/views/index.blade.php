@extends('layout.master')

@section('content')

<!-- Слайдер -->

	<div class="main_slider" style="background-image:url({{asset('images/' . 'slider_1.jpg')}})">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Добро пожаловать в аптеку Riin</h6>
						<h2>Найдите для себя необходимые лекарства</h2>
						<div class="red_button shop_now_button"><a href="{{ route('category') }}">КУПИТЬ</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Баннер -->

	<div class="banner">
		<div class="container">
			<div class="row">
				@foreach($category as $cat)
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url({{asset('images/categories/' . $cat->image)}})">
						<div class="banner_category">
							<a href="{{ route('category') }}">{{  $cat->name }}'s</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<!-- Новые поступления -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Наши товары</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							@foreach( $category as $cat )
								<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter="#item-{{ $cat->id }}">{{ $cat->name }}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Продукт 1 -->
						@foreach( $product as $item )
						<div class="product-item" id="item-{{ $item->category->id }}">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="{{asset('images/products/' . $item->image)}}" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="{{ route('single') }}">{{ $item->title}}</a></h6>
									<div class="product_price">TK {{ $item->price }}</div>
								</div>
							</div>
							
							<div class="red_button add_to_cart_button"> 
								<form action="{{ route ('cart.store') }}" method="post"> 
	 							@csrf
									<input type="hidden" name="product_id" value="{{ $item->id }}">
									<button type="button" class="cart" value="{{ $item->id }}">добавить в корзину</button>
								</form>

							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Скидки недели -->

	<div class="deal_ofthe_week" id="deal">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Скидка недели</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">06</div>
								<div class="timer_unit">Дней</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">3</div>
								<div class="timer_unit">Часов</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">2</div>
								<div class="timer_unit">Минут</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">17</div>
								<div class="timer_unit">Секунд</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="{{ route('category') }}">показать</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Лучшие селлеры -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Бренды</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							@foreach($brand as $brad)
							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="{{asset('images/brands/' . $brad->image)}}" alt="">
										</div>
										<div class="favorite favorite_left"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>


						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="blogs" id="blog">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blog Articles</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url({{asset('images/blogs/' . 'blog-1.png')}})"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Убийство Печени Максима</h4>
							<span class="blog_meta">создано Администратором</span>
							<a class="blog_more" href="#">Читать больше</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url({{asset('images/blogs/' . 'blog-2.png')}})"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Убийство Печени Максима</h4>
							<span class="blog_meta">создано Администратором</span>
							<a class="blog_more" href="#">Читать больше</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url({{asset('images/blogs/' . 'blog-3.png')}})"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Убийство Печени Максима</h4>
							<span class="blog_meta">создано Администратором</span>
							<a class="blog_more" href="#">Читать больше</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	@include ('partials.benefit')

@endsection

@push('scripts')
	<script> 

	$(document).ready(function(){
		$('.cart').on('click', function(){
			let id = $(this).attr('value');

			$.ajax({
				url: 'http://localhost:8000/carts/store',
				method: 'post',
            	data: { product_id: id },
            	headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            	dataType: 'json',
				success:function(data){

					alertify.set('notifier','position', 'top-center');
 					alertify.success('Предмет успешно добавлен в корзину. Количество товаров: ' +data.total_items+ '<br/><a href="{{ route('carts') }}">Переходим в корзину</a>');

					$('#totalItems').html(data.total_items);
				}
			})
		});
	});

	</script>
@endpush
