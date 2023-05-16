<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/tour.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <script type="text/javascript" src="{{ asset('js/tour.js') }}" defer></script>
    <title> Welcome · Book-Seychelles</title>
</head>
<body>
    <main class="wrapper">
    <img src="/images/text-logo.png" class="text-logo" alt="Book Seychelles Logo">
        <section class="slideshow">
            <div class="card" id="1" onclick="handleclick('1', this)">
                <h1 class="card-text">Prepare to embark on a journey that's as extraordinary as the destination itself.</h1>
            </div>
            <div class="card-hide" id="2" onclick="handleclick('2',this)">
                <h1 class="card-text">Choose your ideal spot & plan every step of your trip effortlessly in just a few clicks.</h1>
            </div>
            <div class="card-hide" id="3" onclick="handleclick('3', this)">
                <h1 class="card-text">The power of choice: from exclusive resorts to lesser-known gems. We've got it all.</h1>
            </div>
            <div class="card-hide" id="4" onclick="handleclick('4', this)">
                <h1 class="card-text">Just tell Book-Seychelles what you're looking for. "Where is the nearest secluded beach?".</h1>
            </div>
          
        </section>
        <div class="circle-wrap">
            <span class="circle" id="11"></span>
            <span class="circle-hide" id="22"></span>
            <span class="circle-hide" id="33"></span>
            <span class="circle-hide" id="44"></span>
        </div>
    </main>    
</body>

</html>