<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="fas fa-home"></i>
        <p>Beranda</p>
    </a>
</li>

@if ($user->level == 1)
<li class="nav-item">
    <a href="{{ url('tampil') }}" class="nav-link">
        <i class="fas fa-search"></i>
        <p>
            Tampil Data
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('manage') }}" class="nav-link">
        <i class="fas fa-tasks"></i>
        <p>
            Manage Data
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('akun') }}" class="nav-link">
        <i class="fas fa-key"></i>
        <p>
            Data Akun
        </p>
    </a>
</li>

@elseif($user->level == 2)
<li class="nav-item">
    <a href="{{ url('mahasiswa2') }}" class="nav-link">
        <i class="fas fa-user-circle"></i>
        <p>
            Daftar Mahasiswa
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('daftar') }}" class="nav-link">
        <i class="fas fa-address-card"></i>
        <p>
            Daftar KTM
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('ubah') }}" class="nav-link">
        <i class="fas fa-key"></i>
        <p>
            Akun
        </p>
    </a>
</li>
@endif