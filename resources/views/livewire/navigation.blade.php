<div>
    <nav class="w-[92%] mx-auto pt-5 md:flex xl:flex items-center xl:items-center md:flex-col xl:flex-row mt-4 xl:justify-between">
        <!-- Link and logo to the left -->
            <button class="self-start md:ml-8 xl:ml-0 hover:text-slate-500">
                <a href="/" wire:navigate>
                    <h1 class="text-3xl font-bold">GRAPHOLIO</h1>
                </a>

            </button>
            <div class="nav-links xl:items-center bg-black-500 xl:mt-0 md:mt-6 md:ml-6 min-h-[60vh] top-[9%] xl:w-auto w-full xl:block flex md:flex md:min-h-[0vh] items-center px-5 hidden md:hidden">
                <ul class="flex flex-col gap-8 xl:flex-row xl:items-center">
                    <li class="hover:text-slate-500">
                        <a href="/" wire:navigate >Home</a>
                    </li>
                    <li class=" hover:text-slate-500">
                        <a href="/about" wire:navigate>About</a>
                    </li>
                    <li class="cursor-pointer hover:text-slate-500 group dropdown">
                        <a href="" class="group-hover:text-slate-500">Work</a>
                        <div class="flex-col hidden p-2 mt-2 border-2 border-black rounded-md md:p-0 md:border-white md:mt-1 md:absolute m-w-32 z-1 group-hover:flex work">
                            <a href="/work/portfolio-flex" wire:navigate >Portfolio Flex</a>
                            <a href="/work/portfolio-grid" wire:navigate>Portfolio Grid</a>
                        </div>
                    </li>
                    <li class=" hover:text-slate-500 group">
                        <a href="" class="group-hover:text-slate-500">Services</a>
                        <div class="flex-col hidden p-2 mt-2 border-2 border-black rounded-md md:p-0 md:border-white md:mt-1 md:absolute m-w-32 z-1 group-hover:flex">
                            <a href="/services/services-01" wire:navigate >Services 01</a>
                            <a href="/services/services-02" wire:navigate >Services 02</a>
                        </div>
                    </li>
                    <li class=" hover:text-slate-500 group">
                        <a href="" class="group-hover:text-slate-500">Pages</a>
                        <div class="flex-col hidden p-2 mt-2 border-2 border-black rounded-md md:p-0 md:border-white md:mt-1 md:absolute m-w-32 z-1 group-hover:flex">
                            <a href="#">404 Not Found</a>
                            <a href="/pages/blogs" wire:navigate >Blogs</a>
                        </div>
                    </li>
                    <button class="p-2 text-white bg-gray-900 rounded-lg xl:hidden ">Contact Us</button>
                </ul>
            </div>
        <!-- Links on the middle -->

        <!-- Button on the right side -->
        <div class="flex items-center gap-6">
            <ion-icon name="menu" onClick="onToggleMenu(this)" class="absolute order-2 p-2 text-3xl border-2 rounded-md cursor-pointer top-6 xl:hidden right-6"></ion-icon>
            <button class="hidden p-2 px-6 text-white bg-gray-900 rounded-lg md:hidden xl:block md:flex">
                <a href="/contact-us" wire:navigate>Contact Us</a></button>
        </div>
    </nav>


</div>
