<x-main-layout>
    <form method="POST" action="/notes/{{ $note->id }}" class="p-4 w-[30rem] space-y-4 text-obsidian-black">
        @csrf
        @method('PATCH')

        <h4 class="text-xl font-bold text-center ">
            Update A Message
        </h4>
        <div class="space-y-4">
            <div class="flex ">
                <label for="title" class="w-24 font-semibold">Color:</label>
                <x-text-input type="color" class="w-24" name="color" value="{{ $note->card_color }}" />
            </div>

            <div class="flex ">
                <label for="title" class="w-24 font-semibold">Title:</label>
                <input type="text" id="title" name="title" class="w-[18rem] rounded-lg"
                    value="{{ $note->title }}" required>
            </div>
            @error('title')
                <p class="text-xs text-red-500 ">{{ $message }}</p>
            @enderror

            <div class="flex">
                <label for="message" class="w-24 font-semibold">Message:</label>
                <textarea name="message" class="w-[18rem] h-[20rem] resize-none rounded-lg" required>{{ $note->message }}</textarea>
            </div>

            <div class="flex justify-end -translate-y-2">

                <x-primary-button class="mr-16 ">
                    Update
                </x-primary-button>
            </div>
        </div>
    </form>
</x-main-layout>
