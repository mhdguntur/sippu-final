<nav class="navbar navbar-expand-lg navbar-light bg-none mb-3">
    <div class="container">
        <img src="{{ asset('img/logo.png') }}">
        <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
            DISPERINDAGKOP UKM Provinsi
            <span class="d-block">Riau | UPT. PLUT KUMKM</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') || Request::is('/*') ? 'active' : '' }} mx-3">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('produk') || Request::is('produk*') ? 'active' : '' }} mx-3">
                    <a class="nav-link" href="{{ url('produk') }}">Produk</a>
                </li>
                <li class="nav-item {{ Request::is('pelayanan*') ? 'active' : '' }} mx-3">
                    <a class="nav-link" href="{{ url('pelayanan') }}">Pelayanan</a>
                </li>
                @auth
                    @can('umkm')
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('dashboard/produk') }}">Dashboard</a>
                        </li>
                    @elsecan('pemerintah')
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('pemerintah/pelayanan') }}">Dashboard</a>
                        </li>
                    @endcan
                    <li class="nav-item ml-3">
                        <form action="{{ url('logout') }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"
                                class="btn btn-success">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('signup') ? 'active' : '' }} mx-3">
                        <a class="nav-link" href="{{ url('signup') }}">Sign Up</a>
                    </li>
                    <li class="nav-item {{ Request::is('signin') ? 'active' : '' }} ms-3">
                        <a href="{{ url('signin') }}" class="btn btn-success" style="width: 100px;">Sign In</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
