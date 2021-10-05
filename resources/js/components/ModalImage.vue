<template>
  <div>
    <div class="grid grid-cols-2 gap-2 md:gap-4">

        <img v-for="i in imgs" @click="open(i.url)" class="object-cover w-20 h-auto rounded shadow-lg sm:w-32 xl:w-40 cursor-pointer" :src="i.url" />

    </div>

    <transition name="modal">
      <div v-show="opened" class="modal-mask">
        <div class="modal-wrapper">
          <button @click="close" class="text-grey-50 absolute top-10 right-10">
            <svg  width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg>
          </button>
          <div class="modal-container text-white h-auto flex justify-center">

            <div class="relative flex flex-wrap">
              <div class="max-w-2xl">
                <img class="object-cover w-full h-auto rounded shadow-lg" :src="selected"/>
                <div class="flex justify-center gap-4 mt-4">

                  <img v-for="i in imgs" @click="selected = i.url" class="object-cover w-8 h-6 sm:w-20 sm:h-12 cursor-pointer border-2 border-white" :src="i.url" />

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>

export default {
  data(){
        return{
          opened: false,
          selected: '',
          imgs: [
            {url: '/img/diplom1.jpg'},
            {url: '/img/diplom2.jpg'},
            {url: '/img/diplom3.jpg'},
            {url: '/img/diplom4.jpg'},
            {url: '/img/diplom5.jpg'},
            {url: '/img/diplom6.jpg'},
          ]
        }
    },
    methods: {
      open(img) {
        this.opened = true;
        this.selected = img;
      },
      close(){
        this.opened = false;
      },
    },
  }
</script>
