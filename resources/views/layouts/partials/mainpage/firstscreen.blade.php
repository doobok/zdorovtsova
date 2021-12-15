<div class="bg-center bg-cover bg-no-repeat relative py-8" style="background-image: url(/img/bg_main.jpg);">
    <div
        class="bg-center bg-cover bg-no-repeat absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to"></div>

    <div class="container z-30 relative pt-20 sm:pt-36 lg:pt-48 pb-12 sm:pb-24 lg:pb-36">
        <div class="flex flex-col lg:flex-row justify-center items-center">
            <div class="rounded-full border-8 border-primary shadow-xl block lg:hidden">
                <img src="/img/main-photo.jpg"
                     class="h-48 sm:h-64 rounded-full"
                     alt="Наталия Здоровцова">
            </div>
            <div class="w-full lg:w-1/3">
                <img src="/img/main-photo.jpg" class="h-auto w-72 lg:w-full hidden lg:block" alt="Наталия Здоровцова">
            </div>
            <div class="lg:pl-12 xl:pl-24 pt-8 sm:pt-10 lg:pt-0">
                <h1 class="font-header text-white text-4xl sm:text-5xl md:text-6xl text-center sm:text-left">
                    {{__('lnd.h1')}}
                </h1>
                <p class="text-white text-base md:text-2xl font-medium my-5">
                    {!! __('lnd.main-subtitle') !!}
                </p>
                <div class="pt-3 sm:pt-5">
                    <div class="pl-0 md:pl-1">
                        <p class="text-gray-300 text-sm md:text-lg uppercase subtitle--bg">
                            <span>{{__('lnd.main-mark')}}</span>
                        </p>
                    </div>
                    <div class="pt-8">
                        <p class="text-white text-base md:text-xl font-medium">{{__('lnd.main-list-title')}}</p>
                        <ul class="pt-5 text-white font-medium text-sm md:text-lg list-disc ml-6">
                            {!! __('lnd.main-list') !!}
                        </ul>
                    </div>
                    <div class="flex justify-center lg:justify-start pt-10">
                        <smpl-button txt="Получить консультацию"
                                     cls="text-sm px-7 py-3 sm:px-10 sm:py-4 md:text-lg md:px-16 md:py-5"></smpl-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
