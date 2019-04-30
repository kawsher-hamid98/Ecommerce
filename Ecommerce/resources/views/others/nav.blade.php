<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ecommerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/supplier_login">Supplier Login</a>
      </li>

      @if(Auth::guard('supplier')->check())

      <li class="nav-item">
        <a class="nav-link" href="/supplierDash">Suuplier Dash</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/sendProducts">Products Details</a>
      </li>

      @endif

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->

    </ul>

    <ul class="navbar-nav navbar-right">

       @if(Auth::user())

      <li class="nav-link">
        <span>{{ ucwords(Auth::user() -> FirstName) }}</span>
      </li>

      <li>
        <a class="nav-link" href="{{ URL::to('/logout')}}">Logout</a>
      </li>

       @else

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/user_login')}}">Sign In</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/user_signup')}}">Register</a>
      </li>

      @endif

    </ul>


    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

  </div>
</nav>
