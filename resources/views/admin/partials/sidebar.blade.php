<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name">Панель администратора</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Главное меню</li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.index')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Главная</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Категории</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.category.create')}}">Добавить категори</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.category.index')}}">Список категорий</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#brand" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Бренд</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="brand">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.brand.create')}}">Добавить бренд</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.brand.index')}}">Список брендов</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Товар</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.product.create')}}">Добавить товар</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.product.index')}}">Все товары</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#order" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Заказы</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="order">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.order.index')}}">Все заказы</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Пользователи</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="user">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.user.index')}}">Список пользователей</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="nav-link">
                <form action="{{ route('admin.logout') }}" method="POST"> 
                  @csrf

                  <input type="submit" value="Выйти" class="form-control btn btn-danger" style="cursor:pointer;">

                </form>
              </a>
            </li>
          </ul>
        </nav>
