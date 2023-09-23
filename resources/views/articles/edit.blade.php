@props([
    'action' => route('articles.update', $article->id),
    'method' => 'PATCH',
    'header' => 'Edit your article',
    'title' => $article->title,
    'body' => $article->body,
    'category' => $article->category,
    'tags' => $article->tags,
])
<x-app-layout>
    <x-article-form :$action :$header :$method :$title :$body :$category :$tags />
    <script>
        const hiddenBody = document.getElementById("hiddenBody");
        const body = document.querySelector("span[role='textbox']");
        const btn = document.querySelector("button[type='submit']");

        btn.addEventListener("click", e => {
            hiddenBody.value = body.textContent;
        });
    </script>
</x-app-layout>
