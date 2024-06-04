<div>
    <nav class="w-[92%] mx-auto pt-5 md:flex xl:flex items-center xl:items-center md:flex-col xl:flex-row mt-4 xl:justify-between">
        <!-- Link and logo to the left -->
            <button class="self-start xl:ml-0 hover:text-slate-500">
                <a href="/" wire:navigate>
                    <h1 class="text-3xl font-bold">GRAPHOLIO</h1>
                </a>
            </button>
            <!-- Links on the middle -->
            <div class="nav-links xl:items-center bg-black-500 xl:mt-0 md:mt-6 md:ml-6 min-h-[60vh] top-[9%] xl:w-auto w-full xl:block flex md:flex md:min-h-[0vh] items-center px-5 hidden md:hidden">
                <ul class="flex flex-col gap-8 xl:flex-row xl:items-center text-[#666666] font-bold tracking-wide">
                    <li class="hover:text-black">
                        <a href="/" wire:navigate >Home</a>
                    </li>
                    <li class=" hover:text-black">
                        <a href="/about" wire:navigate>About</a>
                    </li>
                    <li class="cursor-pointer hover:text-black group dropdown">
                        <a href="" class="group-hover:text-black">work <ion-icon name="caret-down-outline"></ion-icon></a>
                        <div class="flex-col hidden p-2 mt-2 border-2 border-black rounded-md xl:bg-white xl:p-4 xl:border-black md:mt-1 md:hover:absolute xl:absolute m-w-32 z-1 group-hover:flex work">
                            <a href="/work/portfolio-flex" wire:navigate class="text-[#666666] hover:text-black" >Portfolio Flex</a>
                            <a href="/work/portfolio-grid" wire:navigate class="text-[#666666] hover:text-black">Portfolio Grid</a>
                        </div>
                    </li>
                    <li class=" hover:text-black group">
                        <a href="" class="group-hover:text-black">services <ion-icon name="caret-down-outline"></ion-icon></a>
                        <div class="flex-col hidden p-2 mt-2 border-2 border-black rounded-md xl:bg-white xl:p-4 xl:border-black md:mt-1 md:hover:absolute xl:absolute m-w-32 z-1 group-hover:flex work">
                            <a href="/services/services-01" wire:navigate class="text-[#666666] hover:text-black">Services 01</a>
                            <a href="/services/services-02" wire:navigate class="text-[#666666] hover:text-black">Services 02</a>
                        </div>
                    </li>
                    <li class=" hover:text-black group">
                        <a href="" class="group-hover:text-black">pages <ion-icon name="caret-down-outline"></ion-icon></a>
                        <div class="flex-col hidden p-2 mt-2 border-2 border-black rounded-md xl:bg-white xl:p-4 xl:border-black md:mt-1 md:hover:absolute xl:absolute m-w-32 z-1 group-hover:flex work">
                            <a href="#" class="text-[#666666] hover:text-black">404 Not Found</a>
                            <a href="/pages/blogs" wire:navigate class="text-[#666666] hover:text-black">Blogs</a>
                        </div>
                    </li>
                    <button class="p-2 text-white bg-[#2D2E2F] rounded-lg xl:hidden ">Contact Us</button>
                </ul>
            </div>

        <!-- Button on the right side -->
        <div class="flex items-center gap-6">
            <ion-icon name="menu" onClick="onToggleMenu(this)" class="absolute order-2 p-2 text-3xl border-2 rounded-md cursor-pointer top-6 xl:hidden right-6"></ion-icon>
            <button class="hidden p-2 px-6 text-white bg-[#2D2E2F] rounded-lg md:hidden xl:block md:flex hover:bg-white hover:text-black duration-300">
                <a href="/contact-us" wire:navigate>Contact Us</a></button>
        </div>
    </nav>


</div>
