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
    <div class="container grid grid-cols-4 gap-6 p-4 mx-auto h-max">

        @foreach ($notes as $note)
            <x-confess-card :title='$note->title' :message='$note->message' :color='$note->card_color' :id='$note->id' />
        @endforeach

    </div>
</x-main-layout>
