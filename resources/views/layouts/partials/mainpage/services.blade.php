<div class="bg-grey-50" id="services">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-36">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                {{__('lnd.serv-h2')}}
            </h2>
            <p class="text-base md:text-lg subtitle--bg">
                <span>{{__('lnd.serv-mark')}}</span>
            </p>
        </div>
        <div class="grid gap-5 mx-auto sm:grid-cols-1 lg:grid-cols-3 lg:max-w-screen-lg">
            @for ($i=1; $i <= 3; $i++)
                @include('components.serv', ['n' => $i])
            @endfor
        </div>
    </div>
</div>
