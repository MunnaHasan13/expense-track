
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route ('dashboard.index') }}"> ExpenseTrack </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('show.login') }}"> Login </a></li>
                <li class="nav-item active"><a class="nav-link" href="{{ route('show.register')}}"> Register </a></li>
            @endguest

            @auth
                <span class="navbar-text">
                    Hi there, {{ Auth::user()->name }}
                </span>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('expense.index') }}"> Expenses </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('report.index') }}"> Reports </a></li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button class="btn btn-secondary "> Logout </button>
                    </form>
                </li> --}}
            @endauth
        </ul>
      </div>
    </div>
</nav>

<!-- Sidebar -->
{{-- <div class="sidebar">
    <h3 class="p-3">Dashboard</h3>
    <ul class="list-unstyled">
        <li><a href="{{ route('dashboard.index') }}"> Home </a></li>
        <li><a href="{{ route('expense.index') }}"> Expenses </a></li>
        <li><a href="##"> Reports </a></li>
        <li><a href="{{ route('category.index') }}"> Categories </a></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button class="btn btn-secondary btn-logout"> Logout </button>
            </form>
        </li>
    </ul>
</div> --}}

<div class="sidebar">
    <h3 class="p-3">Dashboard</h3>
    <ul class="list-unstyled d-flex flex-column" style="height: 100%;">
        <li><a href="{{ route('dashboard.index') }}"> Home </a></li>
        <li><a href="{{ route('expense.index') }}"> Expenses </a></li>
        <li><a href="{{ route('report.index') }}"> Reports </a></li>
        <li><a href="{{ route('category.index') }}"> Categories </a></li>
        <li class="mt-auto"> <!-- Push this item to the bottom -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button class="btn btn-secondary btn-logout"> Logout </button>
            </form>
        </li>
    </ul>
</div>




