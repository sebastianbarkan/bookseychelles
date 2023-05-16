<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <script type="text/javascript" src="{{ asset('js/home.js') }}" defer></script>
    <title> Welcome · Book-Seychelles</title>
</head>
<body onclick="window.location='{{ url('/email') }}'">
    <main class="wrapper">
        <img src="/images/logo.png" class="text-logo" alt="Book Seychelles Logo">
        <h1 class="welcome-msg">Welcome to Book-Seychelles!</h1>
    </main>
</body>
</html>