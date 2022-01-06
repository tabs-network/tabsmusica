@extends('web._inc.main')

@section('metaTitle', $chord->meta_title)
@section('metaDescription', $chord->meta_description)
@section('metaImage', url('assets/artist/500x500/'.$chord->artist->image))

@section('content')
<section class="my-3">
    <div class="container">
        <div class="rounded-3 shadow-sm p-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home.index') }}" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('web.chord.index') }}" class="text-decoration-none">Chord</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $chord->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="my-3">
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <img src="{{ url('assets/artist/500x500/'.$chord->artist->image) }}" alt="aasdad" class="img-fluid rounded-pill" width="200">
                <div class="fs-2 fw-bold text-primary">{{ $chord->artist->name }}</div>
                    <div class="text-muted">
                        {!! $chord->artist->description !!}
                    </div>
            </div>   
        </div>
    </div>
</section>

<section class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="fs-3 fw-bold mb-3 text-primary">{{ $chord->title }}</h1>
                <div>
                    {!! $chord->content !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="fs-4 fw-bold mb-2 text-primary">CHORD RELATED</div>
                @foreach($relatedChord as $v)
                <a href="{{ route('web.chord.show', $v->slug) }}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center my-2">
                        <img src="{{ url('assets/artist/300x300/'.$v->artist->image) }}" alt="adadasda" class="rounded-pill" width="50" height="50">
                        <div class="ms-2">
                            <h3 class="fs-6 fw-bold text-primary m-0">{{ $v->title }}</h3>
                            <div class="text-muted">{{ $v->artist->name }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
    
                <div class="fs-4 fw-bold my-2 text-primary">CHORD GITAR TERBARU</div>
                @foreach($newChord as $v)
                <a href="{{ route('web.chord.show', $v->slug) }}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ url('assets/artist/300x300/'.$v->artist->image) }}" alt="adadasda" class="rounded-pill" width="50" height="50">
                        <div class="ms-2">
                            <h3 class="fs-6 fw-bold text-primary m-0">{{ $v->title }}</h3>
                            <div class="text-muted">{{ $v->artist->name }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="my-2">
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
                            <h3 class="fs-6 m-0">{{ $v->name }}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection