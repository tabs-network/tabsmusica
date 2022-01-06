@extends('web._inc.main')

@section ('content')
<section class="my-3">
    <div class="container my-3">
        <div class="rounded-3 shadow-sm p-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}"
                            class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('web.artist.index') }}"
                            class="text-decoration-none">Artist</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $artist->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="my-3">
    <div class="container">
        <div class="row g-3 justify-content-center mb-2">
            <div class="col-lg-3">
                <div class="bg-dark rounded-3 shadow-sm">
                    <img src="{{ url('assets/artist/500x500/'.$artist->image) }}" alt="aasdad" class="img-fluid rounded-3">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="fs-4 fw-bold text-primary text-uppercase">{{ $artist->name }}</div>
                <h1 class="fs-6 fw-normal text-muted m-0 p-0">Kumpulan Chord Gitar dan Video {{ $artist->name }}</h1>
                <span class="badge bg-primary fw-light">Total Chord : 10</span>
                <div>
                    {!! $artist->description !!}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-3">
    <div class="container mb-3">
        <div class="fs-4 fw-bold text-primary">CHORD DAN KUNCI LAGU</div>
        <div class="fs-6 fw-normal text-muted mb-3">Daftar Chord Lagu {{ $artist->name }} Terpopuler</div>
        <div class="table-responsive">
            <table class="table table table-hover table-bordered">
                <tbody>
                    @foreach($chord as $v)
                    <tr>
                        <td>
                            <a href="{{ route('web.chord.show', $v->slug) }}" class="text-decoration-none">
                                <h3 class="fs-6 fw-bold m-0">{{ $v->title }}</h3>
                                <div class="fs-6 text-muted">{{ $v->artist->name }}</div>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="my-3">
    <div class="container">
        <div class="fs-4 fw-bold text-primary">ARTIST</div>
        <h2 class="fs-6 fw-normal text-muted mb-3">List Artis dan grup band</h2>
        <div class="row g-3">
            @foreach($otherArtist as $v)
            <div class="col-6 col-md-6 col-lg-2">
                <a href="{{ route('web.artist.show', $v->slug) }}" class="text-decoration-none text-dark">
                    <div class="rounded-3 shadow-sm">
                        <img src="{{ url('assets/artist/300x300/'.$v->image) }}" alt="{{ $v->name }}" class="img-fluid rounded-top" width="1000" height="1000">
                        <div class="p-3 text-center">
                            <h3 class="fs-6 m-0 text-uppercase">{{ $v->name }}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection