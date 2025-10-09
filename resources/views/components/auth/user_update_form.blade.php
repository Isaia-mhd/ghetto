<div class="bg-white rounded-2xl shadow p-8 flex flex-col md:flex-row gap-8 items-center md:items-start">

    <form action="" wire:submit.prevent='update({{ auth()->id() }})'>
        <h2 class="text-md text-myblack font-semibold pb-2">Modifier votre Information</h2>
        <div class="grid sm:grid-cols-2 gap-4 text-sm">
            <div class="flex flex-col gap-1">
                <label for="name" class="text-gray-500">Nom</label>
                <input type="text" id="name" wire:model='name'
                    class="text-sm rounded-md px-3 py-1 shadow-sm shadow-gray-200">
            </div>
            <div class="flex flex-col gap-1">
                <label for="email" class="text-gray-500">Email</label>
                <input type="text" id="email" wire:model='email'
                    class="text-sm rounded-md px-3 py-1 shadow-sm shadow-gray-200">
            </div>
            <div class="flex flex-col gap-1">
                <label for="phone" class="text-gray-500">Phone</label>
                <input type="text" id="phone" wire:model='phone'
                    class="text-sm rounded-md px-3 py-1 shadow-sm shadow-gray-200">
            </div>
            <div class="flex flex-col gap-1">
                <label for="address" class="text-gray-500">Adresse</label>
                <input type="text" id="address" wire:model='address'
                    class="text-sm rounded-md px-3 py-1 shadow-sm shadow-gray-200">
            </div>
        </div>
        <button class="w-[100px] mt-6 bg-secondary px-3 py-1 cursor-pointer rounded-2xl text-sm text-mywhite">
            Enregistrer
        </button>
    </form>
</div>
