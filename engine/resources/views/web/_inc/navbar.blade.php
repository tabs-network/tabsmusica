<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">TABS</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('web.home.index') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web.artist.index') }}">ARTIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web.chord.index') }}">CHORD</a>
                </li>
            </ul>
        </div>
        <form class="d-flex">
            <input class="form-control me-2 shadow-none" type="search" placeholder="Cari Chord" aria-label="Search">
        </form>
    </div>
</nav>