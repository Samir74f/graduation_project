
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('Home')}}"> <span
                class="logo-name">Admin Panal</span>
            </a>
          </div>
          <ul class="sidebar-menu pt-2">


            <li class="dropdown pt-2 {{ Request::is('Home') ? 'active':''}} ">
              <a href="{{url('Home')}}" class="nav-link "><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown pt-2 {{ Request::is('Slider') ? 'active':''}} ">
              <a href="{{url('Slider')}}" class="nav-link "><i class="bi bi-sliders"></i></i><span>Home Slider</span></a>
            </li>

            <li class="dropdown pt-2 {{ Request::is('product' || 'all_pro') ? 'active':''}}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>
                  Products</span></a>
              <ul class="dropdown-menu ">
                <li><a class="nav-link" href="{{url('adminproduct')}}">Add Product</a></li>
                <li><a class="nav-link" href="{{url('all_product')}}">Products</a></li>

              </ul>
            </li>
                    <li class="dropdown pt-2  {{ Request::is('adminCategories') ? 'active':''}}">
              <a href="{{url('AdminCategories')}}" class="nav-link "><i data-feather="grid"></i><span>categories </span></a>
            </li>


           <li class="dropdown pt-2 {{ Request::is('adminbrand') ? 'active':''}}">
              <a href="{{url('adminbrand')}}" class="nav-link "><i data-feather="bell"></i><span>Brands</span></a>
            </li>
            <li class="dropdown pt-2 {{ Request::is('site_setting') ? 'active':''}}">
              <a href="{{url('site_setting')}}" class="nav-link "><i class="bi bi-gear"></i><span>Site Setting</span></a>
            </li>






          </ul>
        </aside>
      </div>
      @include('sweetalert::alert')

