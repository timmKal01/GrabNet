<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head class="text-center px-8 py-12 w-x1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Generate Your Postcard</title>

        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
    <body class="text-center px-2 py-4 w-3" >
        <div class="container">
            <div class="content">
                <div class="title">
                    Welcome to My Postcard Generator!
                </div>
                <div class="links">
                    <a href="/postcard" class="btn mt-4 inline-block">Reviews</a>
                    
                </div>
            </div>
        </div>
    </body>
