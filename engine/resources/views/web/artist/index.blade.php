@extends('web._inc.main')

@section('metaTitle', settingMetaTag('Artist')->meta_title)
@section('metaDescription', settingMetaTag('Artist')->meta_description)
@section('metaImage', url('assets/webSetting/image.png'))

@section ('content')
<section class="my-3">
    <div class="container">
        <div class="rounded-3 shadow-sm p-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artist</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="my-3">
    <div class="container mb-3">
        <div class="fs-4 fw-bold text-primary">ARTIST</div>
        <h2 class="fs-6 fw-normal text-muted mb-3">List Artis dan grup band</h2>
        <div class="row g-3">
            @foreach($artist as $v)
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

@section('og')

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ settingMetaTag('artist')->meta_title }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('assets/webSetting/image.png') }}">
    <meta property="og:description" content="{{ settingMetaTag('artist')->meta_description }}">

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