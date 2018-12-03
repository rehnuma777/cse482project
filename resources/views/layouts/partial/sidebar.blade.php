 <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin Panel
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::is('/admin/dashboard*') ? 'active':'' }} ">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{Request::is('/admin/slider*') ? 'active':'' }}">
            <a class="nav-link" href="{{route('slider.index')}}">
              <i class="material-icons">slideshow</i>
              <p>Sliders(doctor)</p>
            </a>
          </li>
          <li class="{{Request::is('/admin/services*') ? 'active':'' }}">
            <a class="nav-link" href="{{route('services.index')}}">
              <i class="material-icons">bubble_chart</i>
              <p>Doctor Category</p>
            </a>
          </li>
         <li class="{{Request::is('/admin/item*') ? 'active':'' }}">
                <a class="nav-link" href="{{route('item.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Doctor Add/Update/Delete</p>
                </a>
            </li>
            <li class="{{Request::is('/admin/reservation*') ? 'active':'' }}">
                <a class="nav-link" href="{{route('reservation.index')}}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Appointment</p>
                </a>
            </li>




        </ul>
      </div>
    </div>