<div class="sidebar">
	<div class="sidebar_section">
		<div class="sidebar_title">
			<h5>Категории</h5>
		</div>
		<ul class="sidebar_categories">
			@foreach(App\Category::orderBy('name' , 'asc')->get() as $category)

			<li><a href="{{ route('categorywise.show' , $category->id) }}"><img src="{{ asset('images/categories/' . $category->image) }}" width="30" height="30" alt=""> {{ $category->name }}</a></li>

			@endforeach
		</ul>
	</div>

	<div class="sidebar_section">
		<div class="sidebar_title">
			<h5>Бренды</h5>
		</div>
		<ul class="sidebar_categories">
			@foreach(App\Brand::orderBy('name' , 'asc')->get() as $brand)

			<li><a href="{{ route('brandwise.show' , $brand->id) }}"><img src="{{ asset('images/brands/' . $brand->image) }}" width="30" height="30" alt=""> {{ $brand->name }}</a></li>

			@endforeach
		</ul>
	</div>

	{{--
	<div class="sidebar_section">
		<div class="sidebar_title">
			<h5>Фильтр по цене</h5>
		</div>
		<p>
			<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
		</p>
		<div id="slider-range"></div>
		<div class="filter_button"><span>фильтр</span></div>
	</div>

	<div class="sidebar_section">
		<div class="sidebar_title">
			<h5>Размеры</h5>
		</div>
		<ul class="checkboxes">
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>
			<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>
		</ul>
	</div>

	<div class="sidebar_section">
		<div class="sidebar_title">
			<h5>Цвет</h5>
		</div>
		<ul class="checkboxes">
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Черный</span></li>
			<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Розовый</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Белый</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Голубой</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Оранжевый</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Белый</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Голубой</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Оранжевый</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Белый</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Голубой</span></li>
			<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Оранжевый</span></li>
		</ul>
		<div class="show_more">
			<span><span>+</span>Показать больше</span>
		</div>
	</div> --}}
</div>
