<html lang="en">
<head class="text-center px-8 py-12 w-x1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-2xl font-bold">My Postcard</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-[#db7373] text-white">
  @if (session('success'))
      <div class="bg-green-50 font-bold p-4 text-center text-green-500">
          {{ session('success') }}
      </div>
  @endif
  <header>
   
      <nav>
      <h1 >Postcards Page</h1>
        <ul class="flex flex-col md:flex-row gap-4">
          <li><a href="{{ route('postcard.index') }}" class="hover:underline text-blue-500 hover:text-stone-600">All Postcards</a></li>
          <li><a href="{{ route('postcard.create') }}" class="hover:underline text-blue-500 hover:text-stone-600">Create New Postcard</a></li>
        </ul>
      </nav>
    
  </header>

  <main class="container mx-auto mt-8 px-4 md:px-0">
    {{ $slot }}
  </main>
</body>
</html>