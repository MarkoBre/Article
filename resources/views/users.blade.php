<x-app-layout>
    <div class="text-white flex flex-col items-center gap">
        <h1>Keva</h1>
        @foreach ($users as $user)
            <div class="my-5">
                <h3>{{ $user }}</h3>
            </div>
        @endforeach
    </div>
</x-app-layout>
