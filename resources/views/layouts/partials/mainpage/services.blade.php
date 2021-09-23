<div class="bg-grey-50" id="services">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-36">

    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      Основные направления работы
    </h2>
    <p class="text-base md:text-lg subtitle--bg">
      <span>выберите необходимое чтобы получить консультацию</span>
    </p>
  </div>



    <div class="grid gap-5 mx-auto sm:grid-cols-1 lg:grid-cols-3 lg:max-w-screen-lg">

        @for ($i=0; $i < 3; $i++)
          <div class="">


            <div class="px-10 py-5 border border-primary rounded lg:px-5 lg:py-7 xl:py-10">
              <div class="text-center mb-2">
                <h4 class="inline-block max-w-xs mx-auto mb-3 text-xl font-extrabold leading-7 transition-colors duration-200 hover:text-deep-purple-accent-400">
                  Индивидуальное консультирование
                </h4>
              </div>

              <p class="max-w-xs text-sm mx-auto mb-2 text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>

              <div class="flex flex-wrap justify-center">

                <button class="bg-orange hover:bg-orange-10 font-bold text-xs text-white px-2 mx-2 lg:px-1 lg:w-full py-2 flex justify-center mt-3 rounded items-center uppercase">
                    Психологические тренинги
                </button>
                <button class="bg-orange hover:bg-orange-10 font-bold text-xs text-white px-2 mx-2 lg:px-1 lg:w-full py-2 flex justify-center mt-3 rounded items-center uppercase">
                    Коррекция моделей поведения
                </button>
                <button class="bg-orange hover:bg-orange-10 font-bold text-xs text-white px-2 mx-2 lg:px-1 lg:w-full py-2 flex justify-center mt-3 rounded items-center uppercase">
                    Коррекция эмоциональных состояний
                </button>

              </div>





            </div>
            <div class="w-11/12 h-2 mx-auto bg-primary rounded-b opacity-75"></div>
            <div class="w-10/12 h-2 mx-auto bg-primary rounded-b opacity-50"></div>
            <div class="w-9/12 h-2 mx-auto bg-primary rounded-b opacity-25"></div>
          </div>

        @endfor


    </div>
  </div>
</div>
