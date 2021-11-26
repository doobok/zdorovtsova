<div class="bg-grey-50" id="aboutme">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-36">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="lg:pr-10">
                <h2 class="text-4xl font-extrabold leading-none">
                    {{-- {{config('app.name')}} --}}
                    Обо мне
                </h2>
                <p class="my-7 text-base md:text-lg subtitle--bg">
                    <span>лучший психолог Киева в 2019 году</span>
                </p>
                <ul class="list-disc mb-7 ml-5">
                    <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</li>
                    <li>accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae explicabo.</li>
                    <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem totam rem aperiam</li>
                    <li>iste natus error sit voluptatem totam rem aperiam, eaque</li>
                    <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</li>
                    <li>iste natus error sit voluptatem totam rem aperiam, eaque</li>
                </ul>
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
            <smpl-button txt="Назначить встречу"
                         cls="text-sm px-7 py-3 sm:px-10 sm:py-4 md:text-lg md:px-16 md:py-5"></smpl-button>
        </div>
    </div>
</div>
