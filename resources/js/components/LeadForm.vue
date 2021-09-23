<template>
  <transition name="modal">
    <div v-show="formstatus" class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container text-white h-full lg:h-auto flex justify-center">

          <div class="relative modal-body">
            <button @click="close" class="text-white absolute top-0 right-0">
              <svg  width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg>
            </button>

          <template id="lead-form" v-if="!sended">

            <div class="w-full flex text-center justify-center flex-col">
              <div class="text-2xl font-semibold text-white flex flex-row justify-center">

                <svg class="mr-2 text-yellow-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M4.908 2.081l-2.828 2.828 19.092 19.091 2.828-2.828-19.092-19.091zm2.121 6.363l-3.535-3.535 1.414-1.414 3.535 3.535-1.414 1.414zm1.731-5.845c1.232.376 2.197 1.341 2.572 2.573.377-1.232 1.342-2.197 2.573-2.573-1.231-.376-2.196-1.34-2.573-2.573-.375 1.232-1.34 2.197-2.572 2.573zm-5.348 6.954c-.498 1.635-1.777 2.914-3.412 3.413 1.635.499 2.914 1.777 3.412 3.411.499-1.634 1.778-2.913 3.412-3.411-1.634-.5-2.913-1.778-3.412-3.413zm9.553-3.165c.872.266 1.553.948 1.819 1.82.266-.872.948-1.554 1.819-1.82-.871-.266-1.553-.948-1.819-1.82-.266.871-.948 1.554-1.819 1.82zm4.426-6.388c-.303.994-1.082 1.772-2.075 2.076.995.304 1.772 1.082 2.077 2.077.303-.994 1.082-1.772 2.074-2.077-.992-.303-1.772-1.082-2.076-2.076z"/></svg>
                leadFormTitle
            </div>
            <p class="text-sm text-gray-300 m-3">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

            </p>
          </div>

          <div class="mx-auto px-4 mt-2 flex flex-wrap">

            <!-- phone -->
            <div id="phone" class="w-full p-2 relative">
              <span class="text-xs text-gray-400">Номер телефона</span>
              <input
                type="text" name="password" autocomplete="new-password"
                v-model="phone"
                ref="phone"
                class="border-0 p-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                placeholder="Номер телефона"
                @blur="$v.phone.$touch()"
              />
              <span v-if="$v.phone.$error" class="text-xs text-red-400 absolute -bottom-2 left-3">введите действительный номер телефона</span>
            </div>




            <button
              class="bg-orange hover:bg-orange-10 text-white w-full p-3 m-3 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
              type="button"
              :disabled="$v.$invalid"
              @click="sendForm"
            >
            <template v-if="$v.$invalid">
              заполните форму
            </template>
            <template v-else>
              продолжить
            </template>
          </button>

        </div>
        </template>
        <template v-else>
          <div class="w-full flex text-center justify-center flex-col">
            <div class="text-2xl font-semibold text-white flex flex-row justify-center">

              <svg class="mr-2 text-green-400" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"/></svg>
              <span>Готово</span>
          </div>


            <p class="text-base text-gray-300 m-3">
                  Форма отправлена ☎️ 😉
            </p>

            <button
              class="bg-green-400 text-gray-700 p-3 m-3 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
              type="button"
              @click="close"
            >
              Вернутся к просмотру сайта
          </button>

        </div>
        </template>
      </div>

        </div>
      </div>
    </div>
  </transition>
</template>

<script>

import Inputmask from 'inputmask';
import { required, maxLength } from "vuelidate/lib/validators";
import { mapGetters } from "vuex";

export default {
  data(){
        return{
          phone: '',
          send: false, //нажатие кнопки
          sended: false, //индикатор отправки
        }
    },
    methods: {
      sendForm() {
        if (!this.send) {
          this.send = true;
          axios
            .post('/api/v1/send-lead', this.collectedLead).then(response => {
              if (response.data.success === true) {
                this.sended = true;
              }
            }).catch(err => {
              let e = { ...err    }
              alert('Error! - ' + e.response.data.message)
            });
        }
      },
      close(){
        this.$store.dispatch('TUGGLE_FORM', false);
      },
    },
    computed: {
      ...mapGetters(['formstatus']),

      collectedLead() {
        return {
          phone: this.phoneNum,
          marker: this.slug,
        };
      },
      phoneNum: function() {
                var str = this.phone;
                str = str.replace(/[^0-9.]/g, '');
                str = str.substr(2);
                return str;
      },
    },
    mounted() {
        var im = new Inputmask('+38 '+'(999) 999-9999');
        im.mask(this.$refs.phone);
    },
    validations: {
      phone: {
        required,
        validFormat: val => /^\+38 \(0\d{2}\) \d{3}\-\d{4}$/.test(val),
      },
    },
  }
</script>
