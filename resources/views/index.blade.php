<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogger</title>
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit-rtl.min.css') }}">
</head>
<body>
    <div id="app">
        <v-header></v-header>
        <main style="margin-top: 20px;">
            <div class="uk-container">
                <router-view></router-view>
            </div>
        </main>
    </div>

    <script src="{{ asset('assets/js/uikit.min.js') }}"></script>
    <script src="{{ asset('assets/js/uikit-icons.min.js') }}"></script>
    <script src="/js/app.js"></script>
</body>
</html>
