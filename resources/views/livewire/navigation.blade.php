<div>
    <nav class="flex justify-between w-[92%] mx-auto items-center pt-5 ">

        <!-- Link and logo to the left -->
        <div>
            <button class="hover:text-slate-500">
                <h1 class="text-2xl">Photography</h1>
            </button>

        </div>

        <!-- Links on the middle -->
        <div class="nav-links md:static absolute bg-black-500 md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto   w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li class="hover:text-slate-500">
                    <a href="/" wire:navigate >Home</a>
                </li>
                <li class=" hover:text-slate-500">
                    <a href="/about" wire:navigate>About</a>
                </li>
                <li class=" hover:text-slate-500">
                    <a href="">Work</a>
                </li>
                <li class=" hover:text-slate-500">
                    <a href="">Services</a>
                </li>
                <li class=" hover:text-slate-500">
                    <a href="">Pages</a>
                </li>
                <button class="bg-gray-900 rounded-lg text-white p-2 px-6 md:hidden ">Contact Us</button>
            </ul>
        </div>
        <!-- Button on the right side -->
        <div class="flex items-center  gap-6">
            <ion-icon name="menu" onClick="onToggleMenu(this)" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            <button class="bg-gray-900 rounded-lg text-white p-2 px-6 hidden md:flex">Contact Us</button>
        </div>
    </nav>
</div>
