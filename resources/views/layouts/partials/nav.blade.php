<div>
<div
   class="w-full z-50 top-0 py-3 sm:py-5  absolute">
  <div class="container flex justify-between items-center">
      <div>
          <a href="/" class="text-2xl text-white font-bold">
            {{-- {{config('app.name')}} --}}
            <img src="/img/logo.png"
                 class="w-24 md:w-36 lg:w-48"
                 alt="{{config('app.name')}}">
          </a>
      </div>
      <div class="hidden lg:block">
          <ul class="flex items-center">

            <li class="group pl-6">

                <span v-scroll-to="'#numbers'"
                      class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Числа</span>

                <span
                      class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
            </li>


              <li class="group pl-6">

                  <span v-scroll-to="'#steps'"
                        class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Шаги</span>

                  <span
                        class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                  <span v-scroll-to="'#categories'"
                        class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Категории</span>

                  <span
                        class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                  <span v-scroll-to="'#trust'"
                        class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Обо мне</span>

                  <span
                        class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                      <span v-scroll-to="'#services'"
                            class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Услуги</span>

                      <span
                            class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                  </li>

                <li class="group pl-16">

                    <a href="tel:+380991796860" class="font-header font-semibold text-2xl text-white uppercase pt-0.5 cursor-pointer">099-179-68-60</a>

                </li>



          </ul>
      </div>
      <div class="block lg:hidden">
          <button class="absolute top-0 right-0 mt-4 mr-4"
            onclick="toggleNavbar('collapse-navbar')"
          {{-- @click="$parent.mobileMenu = true" class="absolute top-0 right-0 mt-4 mr-4" --}}
          >
            <img src="/img/menu.svg"
               class="h-7 w-auto"
               alt="">
         </button>
      </div>
  </div>
</div>


<div id="collapse-navbar" class="fixed hidden inset-0 bg-black bg-opacity-100 z-50 min-h-screen lg:hidden transition-opacity opacity-100 pointer-events-auto"
   {{-- :class="{ 'opacity-100 pointer-events-auto': $parent.mobileMenu }" --}}
   >
  <div
       class="w-2/3 md:w-1/3 bg-primary min-h-screen absolute right-0 shadow py-4 px-8">
      <button class="absolute top-0 right-0 mt-4 mr-4"
              onclick="toggleNavbar('collapse-navbar')"
              {{-- @click="$parent.mobileMenu = false" --}}
              >
          <img src="/img/icon-close.svg"
               class="h-10 w-auto"
               alt="">
      </button>

      <ul class="flex flex-col mt-8">

          <li class="py-2">

            <a href="#" v-scroll-to="'#numbers'"
              onclick="toggleNavbar('collapse-navbar')"

                  class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Числа</a>


          </li>

          <li class="py-2">

              <span v-scroll-to="'#services'"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Services</span>

          </li>

          <li class="py-2">

              <span v-scroll-to="'#portfolio'"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Portfolio</span>

          </li>

          <li class="py-2">

              <span v-scroll-to="'#clients'"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Clients</span>

          </li>

          <li class="py-2">

              <span v-scroll-to="'#work'"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Work</span>

          </li>

          <li class="py-2">

              <span v-scroll-to="'#statistics'"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Statistics</span>

          </li>

          <li class="py-2">

              <span v-scroll-to="'#blog'"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Blog</span>

          </li>

          <li class="py-2">

              <span v-scroll-to="'#contact'"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Contact</span>

          </li>

      </ul>
  </div>
</div>
</div>
