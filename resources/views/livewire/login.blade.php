<div class="my-10 flex justify-center w-full">
    <section class="border rounded shadow-lg p-4 w-6/12 bg-gray-200">
        <h1 class="text-center text-3xl my-5">Login Time</h1>
        <hr>
        <form class="my-4" wire:submit.prevent="submit">
            <div class="flex justify-around my-8">
                <div class="w-10/12">
                    <input type="email" class="p-2 rounded border shadow-sm w-full" placeholder="Email" wire:model="form.email"/>
                    @error('form.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="w-10/12">
                    <input type="password" class="p-2 rounded border shadow-sm w-full" placeholder="Password" wire:model="form.password"/>
                    @error('form.password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="w-10/12">
                    <input type="submit" value="Register" class="p-2 bg-gray-800 text-white rounded border shadow-sm w-full tracking-wider cursor-pointer" placeholder="Name"/>
                </div>
            </div>
        </form>
    </section>
</div>

