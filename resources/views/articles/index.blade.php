<x-app-layout>
    <h1 class="text-center text-white font-semibold leading-loose text-3xl mb-3">Most popular articles</h1>
    <div x-data="articleRedirect" class="m-auto p-10 w-[77%] grid grid-cols-2 gap-10 dark:bg-gray-800 rounded-lg">
        @foreach ($articles as $article)
            <x-article x-data="{ id: {{ $article->id }} }" class="index-article" x-on:click="redirect">
                <x-slot:title class="m-auto mb-5 active:text-indigo-800">
                    {{ $article->title }}
                </x-slot>
                {{-- !!!! Add line clamp to body --}}
                <x-slot:category>
                    {{ $article->category }}
                </x-slot>
                <x-slot:tags>
                    {{ $article->tags }}
                </x-slot>
                <x-slot:body class="line-clamp-2 opacity-60">
                    {{ $article->body . '...' }}
                </x-slot>
                <x-slot:created_at class="bottom-2">
                    {{ $article->created_at }}
                </x-slot>
            </x-article>
        @endforeach
    </div>
</x-app-layout>
