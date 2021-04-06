<div class="max-w-2xl pb-4 mx-auto bg-gray-200">
    <div class="px-4">
        <h1 class="text-2xl">Comments</h1>
    </div>
    <div class="px-4 mt-8">
        <div>
            <div class="flex space-x-4">
                <input class="w-full border" type="text" name="title" id="title" placeholder="Enter title">
                <button class="px-2 py-1 text-white bg-blue-500 rounded" wire:click="addComment">Add</button>
            </div>
        </div>
        @foreach ($comments as $comment)
            <div class="py-2 mt-4 bg-gray-300 border">
                <p class="w-full px-2">
                    {{ $comment['body'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>
