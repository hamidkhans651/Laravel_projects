<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <!-- Add your header content here -->
    </header>

    <main>

            @yield('content')

            <!-- This is where the page-specific content will go -->
    </main>

    <footer class="footer-no-gap">
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved.
                    Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>