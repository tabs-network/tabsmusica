<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin - @yield('title')</title>

    <link rel="shortcut icon" href="{{ url('assets/dashboard/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('assets/dashboard/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/dashboard/media/favicons/apple-touch-icon-180x180.png') }}">

    <link href="{{ url('assets/dashboard/js/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ url('assets/dashboard/css/oneui.min.css') }}">

    <style>
        #document-editor {
        border: 1px solid #DFE4E6;
        border-bottom-color: #cdd0d2;
        border-right-color: #cdd0d2;
        border-radius: 2px;
        max-height: 700px;
        display: flex;
        flex-flow: column nowrap;
        box-shadow: 2px 2px 2px rgba(0,0,0,.1);
    }
    </style>
</head>

<body>
    <div id="page-container" class="sidebar-o sidebar-dark page-header-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <nav id="sidebar" aria-label="Main Navigation">
            @include('admin._inc.sidebar')
        </nav>
        <header id="page-header">
            @include('admin._inc.header')
        </header>
        <main id="main-container">
            @yield('content')
        </main>
    </div>
    
    <script src="{{ url('assets/dashboard/js/oneui.core.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/oneui.app.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/ckeditor/ckeditor.js') }}"></script>
    
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init()
        })

        $(document).ready(function () {
            $('.select2').select2();
        });

        $('[maxlength]').maxlength({
            alwaysShow: true,
            placement: 'bottom',
            warningClass: "badge badge-primary",
            limitReachedClass: "badge badge-danger"
        });

        @if(session('status'))
        $.notify({
            title: '<strong>SUCCESS</strong><br>',
            message: '{{ session("status") }}'
        }, {
            type: 'success'
        });
        @endif

        @if(session('error'))
        $.notify({
            title: '<strong>ERROR</strong><br>',
            message: '{{ session("error") }}'
        }, {
            type: 'danger'
        });
        @endif

        @if($errors->any())
            @foreach($errors -> all() as $error)
                $.notify({
                    title: '<strong>ERROR :</strong>',
                    message: '{{ $error }}',
                }, {
                    type: 'danger'
                });
            @endforeach
        @endif

        CKEDITOR.replace('editor1', {
            height: 500,
        });
    </script>

    @yield('js')
</body>

</html>
