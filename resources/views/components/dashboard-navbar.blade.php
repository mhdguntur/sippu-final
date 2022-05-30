<nav class="navbar navbar-expand-lg navbar-light bg-none mb-3">
    <div class="container">
        <img src="{{ asset('img/logo.png') }}">
        <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
            DISPERINDAGKOP UKM Provinsi
            <span class="d-block">Riau | UPT. PLUT UMKM</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @can('umkm')
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('dashboard/produk*') ? 'active' : '' }} mx-3">
                        <a class="nav-link" href="{{ url('dashboard/produk') }}">Produk</a>
                    </li>
                    <li
                        class="nav-item {{ Request::is('dashboard/pelayanan*') ? 'active' : '' }} ? 'active' : '' }} mx-3">
                        <a class="nav-link" href="{{ url('dashboard/pelayanan') }}">Pelayanan</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ url('dashboard/profil') }}"
                            class="nav-link {{ Request::is('dashboard/profil') ? 'active' : '' }}">Profil</a>
                    </li>
                    <li class="nav-item ml-3">
                        <form action="{{ url('logout') }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"
                                class="btn btn-success">Logout</button>
                        </form>
                    </li>
                </ul>
            @elsecan('pemerintah')
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('pemerintah/pelayanan*') ? 'active' : '' }} mx-3">
                        <a class="nav-link" href="{{ url('pemerintah/pelayanan') }}">Pelayanan</a>
                    </li>
                    <li class="nav-item {{ Request::is('pemerintah/umkm*') ? 'active' : '' }} ? 'active' : '' }} mx-3">
                        <a class="nav-link" href="{{ url('pemerintah/umkm') }}">UMKM</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ url('pemerintah/pendaftaran') }}"
                            class="nav-link {{ Request::is('pemerintah/pendaftaran*') ? 'active' : '' }}">Pendaftaran</a>
                    </li>
                    <li class="nav-item ml-3">
                        <form action="{{ url('logout') }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"
                                class="btn btn-success">Logout</button>
                        </form>
                    </li>
                </ul>
            @endcan
        </div>
    </div>
</nav>
