<div>
    <nav class="flex justify-between w-[92%] mx-auto items-center pt-5 ">

        <!-- Link and logo to the left -->
        <div>
            <button class="hover:text-slate-500">
                <h1 class="text-2xl">Photography</h1>
            </button>

        </div>
        <!-- NEEDS FIXING DROPDOWN MENU -->
        <!-- Links on the middle -->
        <div class="nav-links md:static absolute bg-black-500 md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto   w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li class="hover:text-slate-500">
                    <a href="/" wire:navigate >Home</a>
                </li>
                <li class=" hover:text-slate-500">
                    <a href="/about" wire:navigate>About</a>
                </li>
                <li class=" hover:text-slate-500 group">
                    <a href="" class="group-hover:text-red-300">Work</a>
                    <div class="absolute flex-col hidden m-w-32 m-h-32 z-1 group-hover:flex">
                        <a href="/work/portfolio-flex" wire:navigate >Portfolio Flex</a>
                        <a href="#">Portfolio Grid</a>
                    </div>
                </li>
                <li class=" hover:text-slate-500 group">
                    <a href="" class="group-hover:text-red-300">Services</a>
                    <div class="absolute flex-col hidden m-w-32 m-h-32 z-1 group-hover:flex">
                        <a href="#">Services 01</a>
                        <a href="#">Services 02</a>
                    </div>
                </li>
                <li class=" hover:text-slate-500 group">
                    <a href="" class="group-hover:text-red-300">Pages</a>
                    <div class="absolute flex-col hidden m-w-32 z-1 group-hover:flex">
                        <a href="#">404 Not Found</a>
                        <a href="#">Blogs</a>
                    </div>
                </li>
                <button class="p-2 px-6 text-white bg-gray-900 rounded-lg md:hidden ">Contact Us</button>
            </ul>
        </div>
        <!-- Button on the right side -->
        <div class="flex items-center gap-6">
            <ion-icon name="menu" onClick="onToggleMenu(this)" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            <button class="hidden p-2 px-6 text-white bg-gray-900 rounded-lg md:flex">Contact Us</button>
        </div>
    </nav>
</div>
