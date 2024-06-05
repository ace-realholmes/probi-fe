<div>
    <section class="w-[92%] mx-auto pt-5 mb-8 flex flex-col">
        <div class="md:w-[92%] xl:w-[46%]  xl:m-0">
            <h1 class="mb-5 text-4xl font-bold tracking-wide md:text-6xl">FREQUENTLY ASKED QUESTIONS</h1>
        </div>
        <!-- FAQ left side -->
        <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
            <div class="w-[92%]  xl:w-[58%]">

                <div x-data="{ open: false }" class="pb-4 mb-6 border-b-2 border-black">
                    <div class="flex justify-between">
                        <button  @click="open = ! open"  class="mb-2 text-2xl tracking-wider group-hover:text-slate-900 text-start">who are grapholio?</button>
                        <ion-icon @click="open = ! open" class="self-end pr-4 text-3xl font-extrabold cursor-pointer " name="chevron-down-outline"></ion-icon>
                    </div>
                    <div x-transition.duration.300ms x-trainsition x-show="open" @click.outside="open = false"><p class=" tracking-wide text-start text-[#656565]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere eum sed explicabo, asperiores laudantium dolore eligendi cumque similique. Voluptas?</p></div>
                </div>

                <div x-data="{ open: false }" class="pb-4 mb-6 border-b-2 border-black">
                    <div class="flex justify-between">
                        <button @click="open = ! open"  class="mb-2 text-2xl tracking-wider group-hover:text-slate-900 text-start">What is your approach to photography ?</button>
                        <ion-icon @click="open = ! open" class="self-end pr-4 text-3xl font-extrabold cursor-pointer " name="chevron-down-outline"></ion-icon>
                    </div>
                    <div x-transition.duration.300ms x-trainsition x-show="open" @click.outside="open = false"><p class=" tracking-wide text-start text-[#656565]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere eum sed explicabo, asperiores laudantium dolore eligendi cumque similique. Voluptas?</p></div>
                </div>


                <div x-data="{ open: false }" class="pb-4 mb-6 border-b-2 border-black">
                    <div class="flex items-center justify-between">
                        <button @click="open = ! open"  class="mb-2 text-2xl tracking-wider group-hover:text-slate-900 text-start">What types of photography do you specialize in?</button>
                        <ion-icon @click="open = ! open" class="self-end pr-4 text-3xl font-extrabold cursor-pointer " name="chevron-down-outline"></ion-icon>
                    </div>
                    <div x-transition.duration.300ms x-trainsition x-show="open" @click.outside="open = false"><p class=" tracking-wide text-start text-[#656565]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere eum sed explicabo, asperiores laudantium dolore eligendi cumque similique. Voluptas?</p></div>
                </div>


                <div x-data="{ open: false }" class="pb-4 mb-6 border-b-2 border-black">
                    <div class="flex items-center justify-between">
                        <button @click="open = ! open"  class="mb-2 text-2xl tracking-wider group-hover:text-slate-900 text-start">Can I see examples of your work?</button>
                        <ion-icon @click="open = ! open" class="self-end pr-4 text-3xl font-extrabold cursor-pointer " name="chevron-down-outline"></ion-icon>
                    </div>
                    <div x-transition.duration.300ms x-trainsition x-show="open" @click.outside="open = false"><p class=" tracking-wide text-start text-[#656565]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere eum sed explicabo, asperiores laudantium dolore eligendi cumque similique. Voluptas?</p></div>
                </div>

                <div x-data="{ open: false }" class="pb-4 mb-6 border-b-2 border-black">
                    <div class="flex items-center justify-between">
                        <button @click="open = ! open"  class="mb-2 text-2xl tracking-wider group-hover:text-slate-900 text-start">How do you ensure high-quality images?</button>
                        <ion-icon @click="open = ! open" class="self-end pr-4 text-3xl font-extrabold cursor-pointer " name="chevron-down-outline"></ion-icon>
                    </div>
                    <div x-transition.duration.300ms x-trainsition x-show="open" @click.outside="open = false"><p class=" tracking-wide text-start text-[#656565]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere eum sed explicabo, asperiores laudantium dolore eligendi cumque similique. Voluptas?</p></div>
                </div>





            </div>
            <!-- FAQ Image highlight -->
            <div class="flex justify-center">
                <img src="https://erramix-themes.com/grapholio-demo/images/faq/faq.jpg" alt="">
            </div>
        </div>

    </section>
</div>
