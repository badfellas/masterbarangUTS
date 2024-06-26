<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="special-brand">KICK'S AVENUE.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('item.*') ? 'active' : '' }}" href="{{ route('item.index') }}">Sneakers</a>
                </li>
            </ul>
            <div class="btn-action float-left">
                <a type="button" href="{{ route('profile') }}" class="btn btn-light btn-profile"><i class="bi bi-person-badge"></i> Profile</a>
            </div>
        </div>
    </div>
</nav>
