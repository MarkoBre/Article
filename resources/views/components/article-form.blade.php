<div class="py-16">
    <div class="w-3/5 m-auto px-5 py-10 sm:py-15 sm:px-8 dark:bg-gray-800 rounded-lg">
        <form id="form" method="POST" {{ $attributes->merge(['class' => '']) }}>
            @csrf
            @if ($method == 'PATCH')
                <input type="hidden" name="_method" value="PATCH">
            @endif
            <div class="w-full sm:w-4/5 lg:w-4/6 flex flex-col items-stretch m-auto space-y-8">
                <h1 class="text-center font-semibold text-2xl text-indigo-500 tracking-wider antialiased">
                    {{ $header }}
                </h1>

                {{-- ! Title --}}
                <div>
                    <x-input-label class="text-3xl!important" for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" value="{{ $title }}"
                        placeholder="Character Development of Vegeta" class="mt-1 block w-full" required />
                </div>

                {{-- ! Body --}}
                <div>
                    <x-input-label for="body" :value="__('Body')" />
                    <x-textarea type="text" :$body form-sizing="auto"
                        placeholder="Vegeta starts out as a ruthlessly evil villain in Dragon Ball Z, obsessed with surpassing Goku in power and proud of his Saiyan warrior heritage. Throughout his battles with the Z-Fighters, he slowly begins to change, developing into an antihero..."
                        class="mt-1 block w-full min-h-max" required />
                </div>

                {{-- ! Category --}}
                <div>
                    <x-input-label classcategory="text-3xl!important" for="category" :value="__('Category')" />
                    <x-text-input min="3" max="20" id="category" name="category" type="text"
                        value="{{ $category }}" placeholder="Anime" class="mt-1 block w-full" required />
                </div>

                {{-- ! Tags --}}
                <div>
                    <x-input-label for="tags" :value="__('Tags')" />
                    <x-text-input id="tags" name="tags" type="text" value="{{ $tags }}"
                        placeholder="dragon ball z, vegeta, character development, saiyan, bulma"
                        class="mt-1 block w-full" required />
                </div>

                <x-primary-button id="btn" class="flex justify-center w-full">
                    Create
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
