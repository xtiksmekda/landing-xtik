<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="https://avatars.githubusercontent.com/u/76462435?v=4" rel="icon">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="assets/js/three.r134.min.js"></script>
    <script src="assets/js/vanta.halo.min.js"></script>

    <video id="bg-video" muted loop autoplay poster="assets/poster.png">
        <source src="https://github.com/lknknm/link-in-bio/raw/main/assets/links-bg.webm" type="video/webm">
    </video>
    <div class="overlay"></div>
    <title>@yield('header')</title>
</head>

@yield('content')

<footer>
    <p>Made with ❤️ by <a href="https://github.com/ShirokamiRyzen">Fatih Firdaus</a> for <a href="{{ $website }}">XTIK SMEKDA</a></p>
</footer>

</div>
</body>
</html>