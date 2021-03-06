<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="profile.html"><img src="{{URL::asset('adminpanel/img/islam.jpg')}}" class="img-circle" width="80"></a></p>
      <h5 class="centered">Islam bahaa</h5>
      <li class="mt">
        <a class="active" href="index.html">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{route('user.index')}}"><i class="fas fa-fw fa-user"></i>All</a>
                <a class="collapse-item" href="{{route('user.create')}}"><i class="fas fa-fw fa-user-plus"></i>Add user</a>
            </div>
        </div>
    </li>
    
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fas fa-fw fa-cog"></i>
          <span>Products</span>
          </a>
        <ul class="sub">
          <li><a class="collapse-item" href="{{route('products.index')}}"><i class="fas fa-fw fa-user"></i>All Products</a></li>
          <li><a class="collapse-item" href="{{route('products.create')}}"><i class="fas fa-fw fa-user-plus"></i>Add product</a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fas fa-fw fa-cog"></i>
          <span>Category</span>
          </a>
        <ul class="sub">
          <li><a class="collapse-item" href="{{route('categories.index')}}"><i class="fas fa-fw fa-user"></i>All Categories</a></li>
          <li><a class="collapse-item" href="{{route('categories.create')}}"><i class="fas fa-fw fa-user-plus"></i>Add Category</a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-tasks"></i>
          <span>Forms</span>
          </a>
        <ul class="sub">
          <li><a href="form_component.html">Form Components</a></li>
          <li><a href="advanced_form_components.html">Advanced Components</a></li>
          <li><a href="form_validation.html">Form Validation</a></li>
          <li><a href="contactform.html">Contact Form</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-th"></i>
          <span>Data Tables</span>
          </a>
        <ul class="sub">
          <li><a href="basic_table.html">Basic Table</a></li>
          <li><a href="responsive_table.html">Responsive Table</a></li>
          <li><a href="advanced_table.html">Advanced Table</a></li>
        </ul>
      </li>
      <li>
        <a href="inbox.html">
          <i class="fa fa-envelope"></i>
          <span>Mail </span>
          <span class="label label-theme pull-right mail-info">2</span>
          </a>
      </li>
      
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->