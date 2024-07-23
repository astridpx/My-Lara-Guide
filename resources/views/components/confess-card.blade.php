@props(['title', 'message', 'color', 'id'])

@php

    $newColor = 'bg-[' . $color . ']';
@endphp

<div {{ $attributes->merge(['class' => 'relative w-full max-h-[18rem] h-[18rem] rounded-lg p-2 hover:shadow-md hover:scale-105 duration-150 bg-yelslow-20s0']) }}
    style="background-color: {{ $color }};">
    <header>
        <h3 class="overflow-hidden text-lg font-bold line-clamp-2">
            {{ $title }}
        </h3>
    </header>

    <article class="mt-6 overflow-hidden line-clamp-6">
        {{ $message }}
    </article>

    @auth
        <div class="absolute flex items-center justify-end w-full gap-2 bottom-2 right-2">
            <a href="/notes/edit/{{ $id }}" class="">
                <x-primary-button class="">
                    Edit
                </x-primary-button>
            </a>

            <x-danger-button form="delete-form-{{ $id }}">
                Delete
            </x-danger-button>
        </div>

        <form method="POST" action="/notes/{{ $id }}" id="delete-form-{{ $id }}" class="hidden">
            @csrf
            @method('DELETE')

        </form>
    @endauth

</div>
