<div class="border border-blue-400 rounded-lg p-8 mb-4">
    <form method="POST" action="\tweets">
        @csrf

        <textarea name="body" class="w-full" placeholder="What's on the tip of your beak?"></textarea>
        <hr class="my-4">
        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet</button>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror
</div>