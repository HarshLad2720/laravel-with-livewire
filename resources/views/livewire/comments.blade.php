<div>
    <div class="form-group">
        <input type="text" class="form-control" id="testInfo" placeholder="What`s your mind" wire:model="newComments">
        <button type="submit" class="btn btn-primary" wire:click="addComments">Add</button>
    </div>
    @foreach($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-start my-2">
                <p class="font-bold text-lg">{{$comment['creator']}}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment['created_at']}}</p>
            </div>
            <p class="text-gray-800">{{$comment['body']}}</p>
        </div>
    @endforeach
</div>
