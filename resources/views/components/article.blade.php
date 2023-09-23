@props(['title', 'body', 'category', 'tags', 'footer', 'creator'])
<article {{ $attributes->merge(['class' => 'relative rounded-lg']) }}>

    <section class="relative">
        <h2 {{ $title->attributes->class(['font-extrabold w-fit text-2xl transition duration-150 ease-in-out']) }}>
            {{ $title }}
        </h2>
        @auth
            <div class="flex space-x-3 absolute right-[-6rem] top-[-1rem]">
                {{ $slot }}
            </div>
        @endauth
        <p {{ $body->attributes->class(['text-white my-3 antialiased transition duration-200 ease-in-out']) }}>
            {{ $body }}
        </p>
    </section>

    @isset($footer)
        <div {{ $footer->attributes->class(['relative']) }}>
        @endisset
        <h2 {{ $category->attributes->class(['text-white font-bold text-xl']) }}>
            Category: <span class="text-sky-400 capitalize">{{ $category }}</span>
        </h2>
        <h4 {{ $tags->attributes->class(['text-white']) }}>Tags:
            <small class="text-indigo-400">
                {{ $tags }}
            </small>
        </h4>
        @isset($footer)
        </div>
    @endisset

    <div class="flex flex-col absolute right-5 bottom-3">
        @isset($author)
            <div>
                <h4 class="text-white font-semibold">Author:
                    <span {{ $author->attributes->class(['text-indigo-600']) }}>
                        {{ $author }}</span>
                </h4>
            </div>
        @endisset
        <samp {{ $created_at->attributes->class(['text-violet-400']) }}>
            {{ $created_at }}
        </samp>
    </div>

</article>
