@php
    $title = "Can't Stop Thinking of You!! Pbha hsaihsa
            hsahjsajjsa hahals
            bla bla bla";
    $message = "I have solid experience with React, which is similar to Vue.js in many ways. Although I haven't
            used Vue.js directly, I understand its key concepts like components and reactive data. I'm confident
            that my background in React will help me pick up Vue.js quickly. I'm very keen to learn new
            technologies and am ready to dive into Vue.js.";
    $color = '#FEF08A';
@endphp


<x-main-layout>
    <h3 class="text-xl font-semibold text-center">My Posts</h3>
    <div class="container grid grid-cols-4 gap-6 p-4 mx-auto h-max">
        {{-- card --}}
        <x-confess-card :title='$title' :message='$message' :color='$color' />
        <x-confess-card :title='$title' :message='$message' :color='$color' />
        <x-confess-card :title='$title' :message='$message' :color='$color' />
        <x-confess-card :title='$title' :message='$message' :color='$color' />
        <x-confess-card :title='$title' :message='$message' :color='$color' />
        <x-confess-card :title='$title' :message='$message' :color='$color' />

    </div>
</x-main-layout>
