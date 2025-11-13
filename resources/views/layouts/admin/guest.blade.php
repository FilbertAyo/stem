<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Adiisha STEM Lab &mdash; Administrative Use</title>

    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style-preset.css') }}">

</head>

<body>

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">

                {{ $slot }}

                <div class="auth-footer row">
                    <div class="col my-1">
                        <p class="m-0">Copyright © <a href="#">Adiisha STEM Lab</a>
                            <span class="mx-2">|</span>
                            <span>Administrative Use Only</span>
                        </p>
                    </div>
                    <div class="col-auto my-1">
                        <ul class="list-inline footer-link mb-0">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/dashboard-default.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/feather.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeo5GpG9fDgfz5xWsyhZPJfX2kwQ2vI5DkRtZB1z9+nJoZ+n" crossorigin="anonymous">
    </script>

    <script>
        layout_change('light');
    </script>

    <script>
        change_box_container('false');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change("preset-1");
    </script>

    <script>
        font_change("Public-Sans");
    </script>

</body>

</html>
