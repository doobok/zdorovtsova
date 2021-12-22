<div class="grid grid-cols-1 justify-items-center place-content-between">
    <div class="grid grid-cols-1 justify-items-center place-content-start">
        <img class="object-cover w-36 h-36 rounded-full shadow" src="/img/category{{$n}}.jpg"
             alt="{{__('lnd.dir' . $n)}}"/>
        <p class="text-lg font-bold mt-4">{{__('lnd.dir' . $n)}}</p>
        <div class="mt-4 ml-8 mr-2 w-full">
            <ul class="list-disc text-sm tracking-wide">
                @for($i=1; $i<$l1+1; ++$i)
                    <li class="mb-4">{{__('lnd.dir' . $n . '-'.$i)}}</li>
                @endfor
            </ul>
        </div>
    </div>
    <div class="grid grid-cols-1 justify-items-center place-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green m-3" width="24" height="24"
             viewBox="0 0 970.586 970.586" fill="currentColor">
            <path
                d="m44.177 220.307 363.9 296.4c22.101 18 48.9 27 75.8 27 26.901 0 53.701-9 75.801-27l366.699-298.7c51.4-41.9 59.101-117.4 17.2-168.8-41.8-51.4-117.399-59.1-168.8-17.3l-290.901 237-288.1-234.7c-51.4-41.8-127-34.1-168.8 17.3-41.899 51.4-34.099 126.9 17.201 168.8z"/>
            <path
                d="m44.177 642.207 363.9 296.399c22.101 18 48.9 27 75.8 27 26.901 0 53.701-9 75.801-27l366.699-298.7c51.4-41.899 59.101-117.399 17.2-168.8-41.899-51.399-117.399-59.1-168.8-17.2l-290.901 236.9-288.1-234.6c-51.4-41.9-127-34.101-168.8 17.199-41.899 51.402-34.099 127.001 17.201 168.802z"/>
        </svg>
    </div>
    <div class="grid grid-cols-1 justify-items-center place-content-end">
        <div class="ml-4">
{{--            <p class="mb-3 text-sm"><span class="text-xl">👩‍💼</span> {{__('lnd.i-help')}}</p>--}}
            <ul class="list-disc text-sm">
                @for($i=1; $i<$l2+1; ++$i)
                    <li class="mb-3">{{__('lnd.dirh' . $n . '-'.$i)}}</li>
                @endfor
            </ul>
        </div>
    </div>
</div>
