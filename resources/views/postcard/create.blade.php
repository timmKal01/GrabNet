<x-layout>
    <form action="{{ route('postcard.store') }}" method="POST">

    @csrf
        <h2>Create a New Postcard</h2>

        <!-- Postcard Name -->
        <div class="max-w-md mx-auto bg-white p-6 rounded-2xl shadow-lg space-y-5">
            <!-- Postcard Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                    Postcard Name
                </label>
                <input 
                type="text" id="name" name="name" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter postcard name" value="{{ old('name') }}">
            </div>

            <!-- Skill Level -->
            <div>
                <label for="skill" class="block text-sm font-medium text-gray-700 mb-1">
                    Skill Level (0-100)
                </label>
                <input type="number" id="skill" name="skill" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter skill level" value="{{ old('skill') }}">
            </div>

            <!-- Bio -->
            <div>
                <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">
                    Bio
                </label>
                <textarea id="bio" name="bio" rows="5" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Write a short bio...">{{ old('bio') }}</textarea>
            </div>

            <!-- Tojo Selection -->
            <div>
                <label for="tojo_id" class="block text-sm font-medium text-gray-700 mb-1">
                    Select Tojo
                </label>
                <select id="tojo_id" name="tojo_id" required class="w-full rounded-lg border border-gray-300 px-4 py-2 bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="" disabled selected>Select Tojo</option>
                    <!-- dynamic options will go here -->
                    @foreach ($tojos as $tojo)
                        <option value="{{ $tojo->id }}" {{$tojo->id== old('tojo_id') ? 'selected' : ''}}>{{ $tojo->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg shadow-md transition-all duration-200">
                Create Postcard
            </button>

            <!-- Validation Errors -->
            @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100 rounded-lg">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500 text-sm mt-2">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <!-- <p class="text-red-500 text-sm mt-2">Please fill out all fields.</p> -->
        </div>

    </form>

</x-layout>
