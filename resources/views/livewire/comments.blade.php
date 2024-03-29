<div class="flex justify-center">
    <div class="w-10/12">
        <h1 class="my-10 text-3xl">Comments</h1>
        @error('newComment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        <div>
            @if (session()->has('message'))
                <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                    {{ session('message') }}
                </div>
            @elseif(session()->has('messagedel'))
                <div class="p-3 bg-red-300 text-red-800 rounded shadow-sm">
                    {{ session('messagedel') }}
                </div>
            @endif
        </div>

        <section>
            @if($image)
                <img src="{{$image}}" width="200">
            @endif
            <input type="file" id="image" wire:change="$emit('fileChoosen')"/>
        </section>

        <form class="my-4 flex" wire:submit.prevent="addComment">
            <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind?" wire:model.debounce.500ms="newComment">
            <div class="py-2">
                <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
            </div>
        </form>
        @foreach($comments as $comment)
            <div class="rounded border shadow p-3 my-2">
                <div class="flex justify-between my-2">
                    <div class="flex">
                        <p class="text-lg font-bold">{{$comment->creator->name}}</p>
                        <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}</p>
                    </div>
                    <i class="fa fa-times text-red-200 hover:text-red-600" wire:click="remove({{$comment->id}})"></i>
                </div>
                <p class="text-gray-800">{{$comment->body}}</p>
                @if($comment->image)
                    <img src="{{'storage/'.$comment->image}}"/>
                @endif
            </div>  
        @endforeach

        {{$comments->links('pagination-links')}}
    </div>  
</div>

<script>
    window.livewire.on('fileChoosen', () => {
        let inputField = document.getElementById('image');
        let file = inputField.files[0];
        let reader = new FileReader();
        reader.onloadend = ()=>{
            window.livewire.emit('fileUpload',reader.result);
            console.log(reader.result);
        }
        reader.readAsDataURL(file);
    })
</script>
