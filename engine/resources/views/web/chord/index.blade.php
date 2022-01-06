@extends('web._inc.main')

@section('metaTitle', settingMetaTag('Chord')->meta_title)
@section('metaDescription', settingMetaTag('Chord')->meta_description)
@section('metaImage', 'asdasdsadadd')

@section ('content')
<section class="my-3">
    <div class="container">
        <div class="rounded-3 shadow-sm p-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chord</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="my-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="fs-4 fw-bold text-primary">CHORD GITAR</div>
                <h1 class="fs-6 fw-normal text-muted">Chord Gitar Lagu Populer</h1>
            
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            @foreach($chord as $v)
                            <tr>
                                <td>
                                    <a href="{{ route('web.chord.show', $v->slug) }}" class="text-decoration-none">
                                        <div class="d-flex">
                                            <img src="{{ url('assets/artist/300x300/'.$v->artist->image) }}" class="rounded-pill" alt="" width="50" height="50">
                                            <div class="ms-2 align-self-center">
                                                <div class="fs-6 text-primary fw-bold">{{ $v->title }}</div>
                                                <div class="fs-6 text-muted">
                                                    {{ $v->artist->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    
                <ul class="pagination justify-content-end">
                    {{ $chord->links() }}
                </ul>
            </div>

            <div class="col-lg-4">
                <div class="fs-4 fw-bold mb-2 text-primary">CHORD GITAR POPULER</div>
                @foreach($popularChord as $v)
                <a href="{{ route('web.chord.show', $v->slug) }}" class="text-decoration-none text-dark">
                    <div class="d-flex align-items-center my-3">
                        <img src="{{ url('assets/artist/300x300/'.$v->artist->image) }}" alt="adadasda" class="rounded-pill" width="50" height="50">
                        <div class="ms-2">
                            <h3 class="fs-6 fw-bold text-primary m-0 p-0">{{ $v->title }}</h3>
                            <div class="text-muted">{{ $v->artist->name }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="my-4">
    <div class="container">
        <div class="fs-3 fw-bold text-primary">ARTIST</div>
        <h2 class="fs-6 fw-normal text-muted mb-3">List Artis dan grup band</h2>
        <div class="row g-3">
            @foreach($artist as $v)
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

@section('og')

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ settingMetaTag('Chord')->meta_title }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="asadsadasdadadadad">
    <meta property="og:description" content="{{ settingMetaTag('Chord')->meta_description }}">

@endsection

@section('schema')

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "url": "{{ url()->current() }}",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "asdsadsadsadsadsadasdsadsa{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

@endsection