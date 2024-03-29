<div class="bg-center bg-cover bg-no-repeat relative py-8" style="background-image: url(/img/bg_main.jpg);">
  <div class="bg-center bg-cover bg-no-repeat absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to"></div>

  <div class="container z-30 relative pt-20 sm:pt-36 lg:pt-48 pb-12 sm:pb-24 lg:pb-36">
    <div class="flex flex-col lg:flex-row justify-center items-center">
      <div class="rounded-full border-4 lg:border-0 border-white shadow-xl">
          <img src="/img/end-photo.jpg"
               class="rounded-full lg:rounded-none"
               width="300"
               height="300"
               alt="author">
      </div>
      <div class="lg:pl-24 pt-8 sm:pt-10 lg:pt-0">
          <h2 class="font-header text-white text-3xl sm:text-5xl md:text-6xl text-right">
              {!! __('lnd.end-h2') !!}
          </h2>
          <div>
              <div class="py-10">
                <p class="text-white text-2xl font-semibold">
                    {{__('lnd.end-txt')}}
                </p>
              </div>
              <div class="flex justify-left">
                <div class="flex justify-left">
                  <smpl-button txt="{{__('lnd.end-btn')}}" cls="text-lg px-16 py-5"></smpl-button>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
