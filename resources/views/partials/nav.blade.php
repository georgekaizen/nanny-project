<nav class="navbar navbar-expand navbar-dark bg-primary">
  <div class="navbar-nav w-100">
    <a class="navbar-brand text-color" href="/">Nanny Palour</a>
    <a class="nav-item nav-link" href="{{ route('employees') }}">Browse Nannys</a>
    <a class="nav-item nav-link" href="{{ route('employee_registration') }}">Register Employee</a>
    @if (Route::has('login'))
      <div class="ml-auto">
        @auth
          <a class="nav-item nav-link" href="{{ route('logout') }}">Logout</a>
        @else
          <a class="nav-item nav-link" href="{{ route('login') }}">Login/Signup</a>
        @endauth
      </div>
    @endif
  </div>
</nav>
