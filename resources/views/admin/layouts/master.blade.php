<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Панель администратора крутой аптеки</title>

    @include('admin.partials.styles')

  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.partials.sidebar')
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
            
			@yield('content')

          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
	@include('admin.partials.scripts')

  </body>
</html>
