<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buy') }}
        </h2>
    </x-slot>

    <!-- component -->
<!-- This is an example component -->
<div class='flex min-h-screen pt-[30px] px-[40px]'>
   <div class="min-w-full">
       <p class="text-[#00153B] text-[20px] leading-[40px] font-semibold">
           What do you want stranger?
       </p>

       <div>
           <p class="text-[#717F87] text-[15px] leading-[27px] font-medium">
               Choice the good things you want, stranger
           </p>
       </div>
    <section>
        @foreach ($packages as $key=>$item)
        <div class="mt-[20px] grid grid-cols-3 gap-[20px]">
            <div key="1" class="w-full bg-[#fff] rounded-[10px] shadow-[0px 1px 2px #E1E3E5] border border-[#E1E3E5] divide-y">
                <div class="pt-[15px] px-[25px] pb-[25px]">
                    <div class="flex justify-end">
                        <div class="bg-[#F6F6F7] rounded-[20px] flex justify-center align-center px-[12px]">
                            <p class="text-[#00153B] text-[12px] leading-[28px] font-bold">
                                Horror
                            </p>
                        </div>
                    </div>

                    <div>
                        <p class="text-[#00153B] text-[50px] leading-[63px] font-bold">
                            3 Game Multiplayer
                        </p>
                    </div>

                    <div>
                        <p class="text-[#717F87] text-[18px] leading-[28px] font-medium">
                            For New
                        </p>
                        <p class="text-[#717F87] text-[18px] leading-[28px] font-medium">
                            Experience Mate
                        </p>
                    </div>
                </div>

                <div class="pt-[25px] px-[25px] pb-[35px]">
                    <div>
                        <p class="text-[#717F87] text-[14px] leading-[24px] font-medium">
                            Phasmophobia
                        </p>
                        <p class="text-[#717F87] text-[14px] leading-[24px] font-medium">
                            Devour
                        </p>
                        <p class="text-[#717F87] text-[14px] leading-[24px] font-medium">
                            Left 4 Dead
                        </p>
                    </div>

                    <div class="mt-[25px]">
                        <button class="bg-[#006EF5] rounded-[5px] py-[15px] px-[25px] text-[#fff] text-[14px] leading-[17px] transform transition hover:scale-90 font-semibold ease-in-out">
                        <a href="{{route('checkout')}}">Buy
                        </button>
                    </div>
                </div>
            </div>

            <div key="2" class="w-full bg-[#fff] rounded-[10px] shadow-[0px 1px 2px #E1E3E5] border border-[#E1E3E5] divide-y">
                <div class="pt-[15px] px-[25px] pb-[25px]">
                    <div class="flex justify-end">
                        <div class="bg-[#F6F6F7] rounded-[20px] flex justify-center align-center px-[12px]">
                            <p class="text-[#00153B] text-[12px] leading-[28px] font-bold">
                                Coming Soon
                            </p>
                        </div>
                    </div>

                    <div>
                        <p class="text-[#00153B] text-[50px] leading-[63px] font-bold">
                            Give me a break
                        </p>
                    </div>

                    <div>
                        <p class="text-[#717F87] text-[18px] leading-[28px] font-medium">
                            I need more
                        </p>
                        <p class="text-[#717F87] text-[18px] leading-[28px] font-medium">
                            Research Stranger
                        </p>
                    </div>
                </div>

                <div class="pt-[25px] px-[25px] pb-[35px]">
                    <div>
                        <p class="text-[#717F87] text-[14px] leading-[24px] font-medium">
                            coming soon
                        </p>
                        <p class="text-[#717F87] text-[14px] leading-[24px] font-medium">
                            coming soon
                        </p>
                        <p class="text-[#717F87] text-[14px] leading-[24px] font-medium">
                            coming soon
                        </p>
                    </div>

                    <div class="mt-[25px]">
                        <div class="bg-[#858585] rounded-[5px] py-[15px] px-[25px] text-[#fff] text-[14px] leading-[17px] font-semibold">Coming soon</div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
        
                </div>
            </div>
        </div>
   </div>
</div>


</x-app-layout>
