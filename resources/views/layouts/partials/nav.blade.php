<div x-data="{
    triggerNavItem(id) {
        $scroll(id)
    },
    triggerMobileNavItem(id) {
        $parent.mobileMenu = false;
        this.triggerNavItem(id)
    }
}">
<div
   class="w-full z-50 top-0 py-3 sm:py-5  absolute  ">
  <div class="container flex justify-between items-center">
      <div>
          <a href="/" class="text-2xl text-white font-bold">
            {{config('app.name')}}
              {{-- <img src="/img/logo.svg"
                   class="w-24 lg:w-48"
                   alt="logo image"> --}}
          </a>
      </div>
      <div class="hidden lg:block">
          <ul class="flex items-center">

              <li class="group pl-6">

                  <span @click="triggerNavItem('#numbers')"
                        class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Числа</span>

                  <span
                        class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                  <span @click="triggerNavItem('#steps')"
                        class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Шаги</span>

                  <span
                        class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                  <span @click="triggerNavItem('#categories')"
                        class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Категории</span>

                  <span
                        class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                  <span @click="triggerNavItem('#trust')"
                        class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Обо мне</span>

                  <span
                        class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
              </li>

              <li class="group pl-6">

                      <span @click="triggerNavItem('#services')"
                            class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Услуги</span>

                      <span
                            class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                  </li>

                  <li class="group pl-6">

                      <span @click="triggerNavItem('#statistics')"
                            class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Statistics</span>

                      <span
                            class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                  </li>

                  <li class="group pl-6">

                      <span @click="triggerNavItem('#blog')"
                            class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Blog</span>

                      <span
                            class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                  </li>

                  <li class="group pl-6">

                      <span @click="triggerNavItem('#contact')"
                            class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Contact</span>

                      <span
                            class="block w-full h-0.5 bg-transparent group-hover:bg-yellow"></span>
                  </li>


          </ul>
      </div>
      <div class="block lg:hidden">
          <button @click="$parent.mobileMenu = true" class="absolute top-0 right-0 mt-4 mr-4">
            <img src="/img/menu.svg"
               class="h-8 w-auto"
               alt="">
         </button>
      </div>
  </div>
</div>


<div class="fixed inset-0 bg-black bg-opacity-70 z-50 min-h-screen lg:hidden transition-opacity opacity-0 pointer-events-none"
   :class="{ 'opacity-100 pointer-events-auto': $parent.mobileMenu }">
  <div
       class="w-2/3 md:w-1/3 bg-primary min-h-screen absolute right-0 shadow py-4 px-8">
      <button class="absolute top-0 right-0 mt-4 mr-4"
              @click="$parent.mobileMenu = false">
          <img src="/img/icon-close.svg"
               class="h-10 w-auto"
               alt="">
      </button>

      <ul class="flex flex-col mt-8">

          <li class="py-2">

              <span @click="triggerMobileNavItem('#about')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">About</span>

          </li>

          <li class="py-2">

              <span @click="triggerMobileNavItem('#services')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Services</span>

          </li>

          <li class="py-2">

              <span @click="triggerMobileNavItem('#portfolio')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Portfolio</span>

          </li>

          <li class="py-2">

              <span @click="triggerMobileNavItem('#clients')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Clients</span>

          </li>

          <li class="py-2">

              <span @click="triggerMobileNavItem('#work')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Work</span>

          </li>

          <li class="py-2">

              <span @click="triggerMobileNavItem('#statistics')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Statistics</span>

          </li>

          <li class="py-2">

              <span @click="triggerMobileNavItem('#blog')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Blog</span>

          </li>

          <li class="py-2">

              <span @click="triggerMobileNavItem('#contact')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">Contact</span>

          </li>

      </ul>
  </div>
</div>
</div>
