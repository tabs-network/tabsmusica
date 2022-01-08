@extends('web._inc.main')

@section('metaTitle', settingMetaTag('Home')->meta_title)
@section('metaDescription', settingMetaTag('Home')->meta_description)
@section('metaImage', url('assets/webSetting/image.png'))

@section ('content')

<img src="{{ url('assets/webSetting/cover.svg') }}" alt="Chord dan Gita Lagu Indonesia Barat Populer">

<section class="bg-dark py-5 text-center">
    <div class="container">
        <div class="fs-4 fw-bold text-primary">TABS MUSICA</div>
        <h1 class="fs-6"><a href="{{ url()->current() }}" class="text-decoration-none text-light"> Website Kunci Gitar Dan Chord Gitar Lagu Terlengkap</a></h1>
        <div class="text-light">
            Tabs Musica adalah website yang membahas seputar kunci dan chord gitar lagu populer
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <div class="fs-4 fw-bold text-primary">ARTIST</div>
                <h2 class="fs-6 text-muted">Artis</h2>
            </div>
            <a href="{{ route('web.artist.index') }}" class="text-decoration-none text-light"><span class="badge fw-light bg-primary">Selengkapnya</span></a> 
        </div>
        <div class="row g-3">
            @foreach($artist as $v)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
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

<section class="py-5 bg-dark">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <div class="fs-4 fw-bold text-primary">CHORD DAN KUNCI GITAR</div>
                <h2 class="fs-6 text-muted">Chord dan kunci gitar lagu populer indonesia dan barat</h2>
            </div>
            <a href="{{ route('web.chord.index') }}" class="text-decoration-none text-light"><span class="badge fw-light bg-primary">Selengkapnya</span></a> 
        </div>

        <div class="row g-3 mt-2">
            @foreach($chord as $v)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="d-flex">
                    <img src="{{ url('assets/artist/300x300/'.$v->artist->image) }}" class="rounded-pill" alt="" width="50" height="50">
                    <div class="ms-2">
                        <h3 class="fs-6 fw-bold m-0"><a href="#" class="text-decoration-none text-primary">{{ $v->title }}</a></h3>
                        <div class="fs-6"></div>
                        <a href="#" class="text-decoration-none text-muted">{{ $v->artist->name }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('og')

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ settingMetaTag('Home')->meta_title }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('assets/webSetting/image.png') }}">
    <meta property="og:description" content="{{ settingMetaTag('Home')->meta_description }}">

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