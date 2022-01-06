<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Login Admin</title>

    <link rel="shortcut icon" href="{{ url('assets/dashboard/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ url('assets/dashboard/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ url('assets/dashboard/media/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet" id="css-main" href="{{ url('assets/dashboard/css/oneui.min.css') }}">

</head>

<body>
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="w-100">
                    <!-- Sign In Section -->
                    <div class="bg-white">
                        <div class="content content-full">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <p class="mb-2">
                                            <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                        </p>
                                        <h1 class="h4 mb-1">
                                            Login
                                        </h1>
                                        <h2 class="h6 font-w400 text-muted mb-3">
                                            Administrator
                                        </h2>
                                    </div>

                                    <form class="js-validation-signin" action="{{ route('login.loginAdmin.login') }}" method="POST">
                                    @csrf
                                        <div class="py-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-alt"
                                                    id="login-username" name="email" placeholder="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password"
                                                    class="form-control form-control-lg form-control-alt"
                                                    id="login-password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-center mb-0">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="font-size-sm text-center text-muted py-3">
                        <strong>TABS Musica</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ url('assets/dashboard/js/oneui.core.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/oneui.app.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/dashboard/js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

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
    </script>
</body>

</html>
