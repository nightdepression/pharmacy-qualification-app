@extends('layout.master')

@section('content')

<div class="container contact_container">
	<div class="row">
		<div class="col">
			<!-- Хлебные крошки -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li><a href="{{ route('index') }}">Главная</a></li>
					<li class="active"><a href="{{ route('contact') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Контакты</a></li>
				</ul>
			</div>
		</div>
	</div>

		<div class="row">
			<div class="col">
				<div id="google_map">
					<div class="map_container">
						<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aac49713a6fd6be7495c33326687b530be91801ebbaae0fc02f39d283cb68fdb0&amp;source=constructor" width="1120" height="698" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Свяжитесь с нами</h1>
					<p>У нас огромное количество вариантов обратной связи, не стесняйтесь мы вас ждём!</p>
					<div>
						<p>8 (913) 252-8523</p>
						<p>cock@gmail.com</p>
					</div>
					<div>
						<p>Круглосуточно</p>
					</div>
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Не хотите звонить?</h1>
					<p>Напишите нам сообщение, мы вам обязательно ответим на ваши вопросы</p>
					<form action="post">
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Имя" required="required" data-error="Введите имя">
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Почта" required="required" data-error="Введите почту">
							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Сообщение" rows="3" required data-error="Напишите сообщение"></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="con_red_button message_submit_btn trans_300" value="Submit">отправить</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

@endsection
