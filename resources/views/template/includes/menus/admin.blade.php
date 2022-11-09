    <div class="sidebar-heading">
        Data Master
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('welcome.list.admin') }}">Admin</a>
                <a class="collapse-item" href="{{ route('crud.mentor.index') }}">Mentor</a>
                <a class="collapse-item" href="{{ route('welcome.list.peserta') }}">Peserta</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Bootcamp</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('kategori.index') }}">Kategori Bootcamp</a>
                <a class="collapse-item" href="{{ route('bootcamp.index') }}">Kelas Bootcamp</a>
                <a class="collapse-item" href="{{ route('transaksi.index') }}">Transaksi</a>
            </div>
        </div>
    </li>