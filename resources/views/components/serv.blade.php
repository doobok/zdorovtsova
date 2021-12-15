<div class="">
    <div class="px-10 py-5 border border-primary rounded lg:px-5 lg:py-7 xl:py-10">
        <div class="text-center mb-2">
            <h4 class="inline-block max-w-xs mx-auto mb-3 text-xl font-extrabold leading-7 transition-colors duration-200 hover:text-deep-purple-accent-400">
                {{__('lnd.serv' . $n)}}
            </h4>
        </div>
        <div class="max-w-xs text-sm mx-auto mb-2 text-gray-700">
            {!! __('lnd.serv' . $n . '-txt') !!}
        </div>
        <div class="flex flex-wrap justify-center pt-4">

            <smpl-button txt="{{__('lnd.serv-btn')}}"
                         cls="font-bold text-xs text-white px-2 mx-2 lg:px-1 lg:w-full py-2"
            ></smpl-button>

        </div>
    </div>
    <div class="w-11/12 h-2 mx-auto bg-primary rounded-b opacity-75"></div>
    <div class="w-10/12 h-2 mx-auto bg-primary rounded-b opacity-50"></div>
    <div class="w-9/12 h-2 mx-auto bg-primary rounded-b opacity-25"></div>
</div>
