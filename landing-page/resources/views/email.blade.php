<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/email.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <script type="text/javascript" src="{{ asset('js/home.js') }}" defer></script>
    <title> Welcome · Book-Seychelles</title>
</head>
<body>
    <main class="wrapper">
        <div class="card">
            <img src="/images/logo.png" class="logo" alt="Book Seychelles Logo">
            <h1 class="main-text">Be the first to know when we launch!</h1>
            <input type="text" class="email-input" placeholder="Email">
            <span class="btn-wrap">
                <button class="btn-primary">SIGN ME UP</button>
                <span class="btn-secondary-wrap" onclick="window.location='{{ url('/learn') }}'">
                    <button class="btn-secondary">LEARN MORE</button>
                </span>
            </span>
        </div>
    </body>
</html>