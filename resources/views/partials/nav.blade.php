<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="{{ route('index') }}">АПТЕКА <span>RIIN</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{ route('index') }}">Главная</a></li>
								<li><a href="{{ route('category') }}">Магазин</a></li>
								<li><a href="#deal">О нас</a></li>
								<li><a href="#blog">Новости</a></li>
								<li><a href="{{ route('contact') }}">Конктакты</a></li>
							</ul>
							<ul class="navbar_user">
								<li>
									<form action="{{ route('search') }}" method="get">
										<input type="text" name="search" placeholder="Введите ваш запрос...">
										<button type="submit">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</form>
								</li>
								<li class="checkout">
									<a href="{{ route('carts') }}">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span class="badge" id="totalItems">{{ App\Cart::totalItems() }}</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="{{ route('index') }}">главная</a></li>
				<li class="menu_item"><a href="{{ route('category') }}">магазин</a></li>
				<li class="menu_item"><a href="#">акции</a></li>
				<li class="menu_item"><a href="#">страницы</a></li>
				<li class="menu_item"><a href="#">важная информация</a></li>
				<li class="menu_item"><a href="{{ route('contact') }}">контакты</a></li>
			</ul>
		</div>
	</div>

	@include('partials.messages')
