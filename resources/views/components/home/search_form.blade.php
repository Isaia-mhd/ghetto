<form class="w-full max-w-[70%] hidden bg-mywhite rounded-full shadow-md py-1 px-4 lg:flex  flex-col md:flex-row justify-between items-center gap-4 md:gap-2">
            <div class="w-full text-left text-xs font-semibold space-y-0">
                <label for="location" class="block font-light">Location</label>
                <input type="text" placeholder="Ex: Mahajanga..."
                class=" py-1 rounded-md focus:outline-none text-myblack">
            </div>

            <div class="w-full text-left text-xs font-semibold space-y-0">
                <label for="checkIn" class="block font-light">Date d'entrée</label>
                <input type="date"
                class=" py-1 rounded-md focus:outline-none text-myblack">
            </div>

            <div class="w-full text-left text-xs font-semibold space-y-0">
                <label for="checkOut" class="block font-light">Date de sortie</label>
                <input type="date"
                class=" py-1 rounded-md focus:outline-none text-myblack">

            </div>

             <div class="w-full text-left text-xs font-semibold space-y-0">
                <label for="guest" class="block font-light">Nombre de personne</label>
                <input type="number" min="1" placeholder="Ex: 2"
                class=" py-1 rounded-md focus:outline-none text-myblack">
            </div>

            <button type="submit"
                class="py-2 px-3 bg-secondary text-mywhite font-semibold rounded-full cursor-pointer transition duration-700 ease-in-out">
                <i class="fa fa-solid fa-search"></i>
            </button>
        </form>
