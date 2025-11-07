<x-layout>
    <h2>Currently available Postcards</h2>

    <ul>
        @foreach($postcards as $postcard)
        <li>
            <x-card href="{{ route('postcard.show', $postcard->id) }}" :highlight="$postcard->skill > 70">
                <div>
                 <h3>{{ $postcard->name }}</h3> 
                 <p>{{ $postcard->tojo->name }}</p>
                </div>
            </x-card>

        </li>
        @endforeach
    </ul>

    {{ $postcards->links() }}
</x-layout>
