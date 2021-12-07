<div class="bg-grey-50" id="directions">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-4xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-4xl md:mb-12">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                {{__('lnd.dir-h2')}}
            </h2>
            <p class="text-base md:text-lg subtitle--bg">
                <span>{{__('lnd.dir-mark')}}</span>
            </p>
        </div>
        <div class="grid gap-10 mx-auto grid-cols-1 md:grid-cols-2 xl:grid-cols-4 place-content-start lg:max-w-screen-lg">
            @php
                $directions = [
                    ['n'=>1, 'l1'=>3, 'l2'=>3],
                    ['n'=>2, 'l1'=>4, 'l2'=>2],
                    ['n'=>3, 'l1'=>3, 'l2'=>3],
                    ['n'=>4, 'l1'=>3, 'l2'=>3]
                ]
            @endphp
            @foreach($directions as $d)
                @include('components.dir', [
                    'n' => $d['n'],
                    'l1' => $d['l1'],
                    'l2' => $d['l2'],
                ])
            @endforeach

        </div>
        <div class="flex justify-center pt-12">
            <smpl-button txt="{{__('lnd.dir-btn')}}"
                         cls="text-sm px-7 py-3 sm:px-10 sm:py-4 md:text-lg md:px-16 md:py-5"></smpl-button>
        </div>
    </div>
</div>
