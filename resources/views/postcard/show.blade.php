<x-layout>

    <h1>{{ $postcard->id }}</h1>

    <div>
        <p><strong>Skill level:</strong> {{ $postcard->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $postcard->bio }}</p>
    </div>

    {{-- Tojo Information --}}
    <div class="border-2 border-dashed bg-amber-100 px-4 pb-4 my-4 rounded">   
        <h3>Tojo Information</h3>
        <p><strong>Name:</strong> {{ $postcard->tojo->name }}</p>
        <p><strong>Location:</strong> {{ $postcard->tojo->location }}</p>
        <p><strong>Description:</strong> {{ $postcard->tojo->description }}</p>
    </div>

    <form action="{{ route('postcard.destroy', $postcard->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 px-4 py-2 rounded hover:bg-red-300 hover:text-gray-800">Delete Postcard</button>
    </form>

</x-layout>
