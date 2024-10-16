<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nepalgunj</title>


    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/backend/vendors/images/treadmark.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/backend/vendors/images/treadmark.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/backend/vendors/images/treadmark.png') }}" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/styles/icon-font.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/styles/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">
</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="{{ asset('assets/backend/vendors/images/deskapp-logo.svg') }}" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> --}}
    @include('sweetalert::alert')
    @include('backend.partials.header')
    @include('backend.partials.sidebar')

    <div class="main-container">
        <div class="pd-ltr-20">

           @yield('container')
            @include('backend.partials.footer')
        </div>
    </div>
    @stack('script')
    <!-- js -->
    <script src="{{ asset('assets/backend/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('assets/backend/src/plugins/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/scripts/dashboard.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scripts/dashboard.js') }}"></script>
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
            }
        }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font
        } from 'ckeditor5';
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <!-- A friendly reminder to run on a server, remove this during the integration. -->
    <script>
        window.onload = function() {
            if ( window.location.protocol === 'file:' ) {
                alert( 'This sample requires an HTTP server. Please serve this file with a web server.' );
            }
        };
    </script>

</body>

</html>
