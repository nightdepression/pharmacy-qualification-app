@extends('layout.master')

@section('content')

<<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Хлебные крошки -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="{{ route('index') }}">Главная</a></li>
						<li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i>Все товары из <button class="btn btn-primary">{{ $category->name }} категории</button></li>
					</ul>
				</div>

				@include ('partials.sidebar')


				<div class="main_content">

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Сортировка -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Без сортировки</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Без сортировки</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Цена</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>По названию</span></li>
											</ul>
										</li>
										<li>
											<span>Показать</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>из</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<div class="cat_product-grid">

									@if($products->count() > 0)

										@foreach($products as $product)

											<div class="cat_product-item men">
												<div class="product discount product_filter">
													<div class="product_image">
														<a href="{{ route('single.show' , $product->id) }}"><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->title }}"></a>
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{ route('single.show' , $product->id) }}">{{ $product->title }}</a></h6>
														<div class="product_price">₽ {{ $product->price }}</div>
													</div>
												</div>
												<div class="cat_red_button cat_add_to_cart_button"><a href="#">добавить в корзину</a></div>
											</div>

										@endforeach

										{{-- {{ $products->links()}} --}}

									@else

										<div class="alert alert warning"> 
											<p style="padding: 75px;">Нет продуктов в этой категории :(</p>
										</div>

									@endif


								</div>

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">
									<ul class="product_sorting">
										<li>
											<span>Показать:</span>
											<span class="num_sorting_text">04</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>01</span></li>
												<li class="num_sorting_btn"><span>02</span></li>
												<li class="num_sorting_btn"><span>03</span></li>
												<li class="num_sorting_btn"><span>04</span></li>
											</ul>
										</li>
									</ul>
									<span class="showing_results">Отображается 1–3 из 12 результатов</span>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>из</span> 3</div>
										<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include ('partials.benefit')

@endsection
