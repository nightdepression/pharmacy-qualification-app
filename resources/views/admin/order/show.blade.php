@extends('admin.layouts.master')

@section('content')          

		<!-- Page Title Header Starts-->
	    <div class="row page-title-header">
	       	<div class="col-12">
	         	<div class="page-header">
	            	<h4 class="page-title">Заказ #LE{{ $order->id }}</h4>
	          	</div>
	        </div>
	    </div>
	    <!-- Page Title Header Ends-->
		
        <div class="row">
          <div class="col-md-8 grid-margin">
            <div class="card">
              <div class="card-body">
                @include('admin.partials.messages')
                <h5 mb-2>Информация о заказчике</h5>
                
                <p><strong>Имя заказчика: </strong> <span>{{ $order->name }}</span></p>
                <p><strong>Почта заказчика: </strong> <span>{{ $order->email }}</span></p>
                <p><strong>Телефон заказчика: </strong> <span>{{ $order->phone_no }}</span></p>
                <p><strong>Адрес доставки: </strong> <span>{{ $order->shipping_address }}</span></p>
                <p><strong>Сообщение: </strong> <span>{{ $order->message }}</span></p>
                <p><strong>Способ оплаты: </strong> <span>При получении</span></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12"> 
            <div class="card mt-2">
              <div class="card-body">
              </div>

              <div class="order_btn pb-4 ml-4"> 
                <form action="{{ route('admin.order.delivered', $order->id) }}" method="post" style="display: inline-block;"> 
                  @csrf
                  
                  @if($order->delivered)
                  <button type="submit" class="btn btn-danger">Отменить доставку</button>
                  @else
                  <button type="submit" class="btn btn-success">Доставлено</button>
                  @endif

                </form>
              </div>
            </div>
          </div>
        </div>

@endsection
