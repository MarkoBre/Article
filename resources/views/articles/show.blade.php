@php
    $lorem = '<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptatum totam iste eligendi temporibus cum consectetur illo nisi, molestiae <br><br> voluptatem ullam officia? Molestiae qui beatae sapiente voluptatem recusandae rem delectus quisquam deserunt.<br><br> Error fugiat id reprehenderit assumenda temporibus corporis non, perferendis dignissimos esse, dolores deserunt quasi, libero soluta ea natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, voluptatum totam iste eligendi temporibus cum consectetur illo nisi, molestiae voluptatem ullam officia? Molestiae qui beatae sapiente voluptatem recusandae rem delectus quisquam deserunt.<br><br> corporis non, perferendis dignissimos esse, dolores deserunt quasi, libero soluta la kurac :) ';
@endphp
<x-app-layout x-data="{ 'isModalOpen': false }" x-on:keydown.escape="isModalOpen=false">
    @auth
        @if (auth()->id() === $article->user_id)
            <x-confirm-modal />
        @endif
    @endauth

    {{-- Create partials for delete and update --}}
    <x-modal name="confirm-article-deletion" :show="$errors->articleDeletion->isNotEmpty()" focusable>
        {{-- {{ route('articles.destroy') }} --}}
        <form method="post" action="{{ route('articles.edit', $article->id) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {!! __('Are you sure you want to delete your <strong>article</strong>?') !!}
            </h2>

            <p class="mt-1 text-base text-gray-600 dark:text-gray-300">
                {{ __('Once your article is deleted, it cannot be restored back!!!') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Delete Article') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>

    <div class="w-3/5 m-auto py-12">
        <x-article class="px-[7rem] py-3 dark:bg-gray-800">
            <x-slot:title class="mb-10 mt-5 m-auto text-indigo-600 capitalize text-4xl text-bold font-serif">
                {{ $article->title }}
            </x-slot>
            @auth
                @if (auth()->id() === $article->user_id)
                    <a href="{{ route('articles.edit', $article->id) }}">
                        <x-edit-icon />
                    </a>
                    <a class="cursor-pointer" x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-article-deletion')">
                        <x-delete-icon />
                    </a>
                @endif
            @endauth
            <x-slot:body
                class="shadow-[inset_0_0_40px_-8px] shadow-black/75 hover:shadow-[inset_0_0_8px_-3px] dark:bg-gray-900 rounded-lg p-14 font-[Lato] text-lg tracking-wider font-normal">
                {!! $article->body . $lorem !!}
            </x-slot>
            <x-slot:footer class="mt-10">
                <x-slot:category>
                    {{ $article->category }}
                </x-slot>
                <x-slot:tags class="mt-1">
                    {{ $article->tags }}
                </x-slot>
                <div>
                    <x-slot:author>
                        {{ $author->name }}
                    </x-slot>
                    <x-slot:created_at>
                        {{ $article->created_at }}
                    </x-slot>
                </div>
            </x-slot>
        </x-article>
    </div>
</x-app-layout>
