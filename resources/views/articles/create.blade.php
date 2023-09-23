@props([
    'header' => 'Create a new article',
])
<x-app-layout>
    <x-article-form :action="route('articles.store')" method="POST" :$header />
</x-app-layout>
