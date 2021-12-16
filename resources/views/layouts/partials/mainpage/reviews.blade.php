<div class="bg-grey-60" id="reviews">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-36">

        <div class="max-w-xl mb-4 md:mx-auto text-center lg:max-w-2xl md:mb-8">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                {{__('lnd.reviews-h2')}}
            </h2>
            <p class="text-base md:text-lg subtitle--bg">
                <span>{{__('lnd.reviews-mark')}}</span>
            </p>
        </div>

        <reviews-slider :items="{{json_encode(__('lnd.reviews'))}}"></reviews-slider>

    </div>
</div>
