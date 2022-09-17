<div class="bg-grey-50" id="aboutme">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-36">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="lg:pr-10">
                <h2 class="text-4xl font-extrabold leading-none">
                    {{__('site.name')}}
                </h2>
                <p class="my-7 text-base md:text-lg subtitle--bg">
                    <span>{!!__('lnd.about-header')!!}</span>
                </p>
                <div class="text-sm">
                    {!!__('lnd.about-text')!!}
                </div>


                <hr class="mb-3 border-green"/>
            </div>
            <div class="flex items-center justify-center -mx-4 lg:pl-8">

                <modal-image></modal-image>

                <div class="px-3">
                    <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80"
                         src="/img/about-me.jpg" alt="Здоровцова Наталья"/>
                </div>
            </div>
        </div>
        <div class="flex justify-center pt-10">
            <smpl-button txt="{{__('lnd.about-btn')}}"
                         cls="text-sm px-7 py-3 sm:px-10 sm:py-4 md:text-lg md:px-16 md:py-5"></smpl-button>
        </div>
    </div>
</div>
