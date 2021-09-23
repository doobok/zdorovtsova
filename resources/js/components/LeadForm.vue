<template>
  <transition name="modal">
    <div v-show="formstatus" class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container text-white h-full lg:h-auto flex justify-center">

          <div class="relative modal-body">
            <button @click="close" class="text-grey-50 absolute top-0 right-0">
              <svg  width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg>
            </button>

          <template id="lead-form" v-if="sended">

            <div class="w-full flex text-center justify-center flex-col">
              <div class="text-2xl font-semibold text-white flex flex-row justify-center">
                Вы на верном пути!
            </div>
            <p class="text-base text-white m-3">
              Осталось оставить контактный номер телефона и я Вам перезвоню
            </p>
          </div>

          <div class="mx-auto px-4 flex flex-wrap justify-center">

            <div class="w-full md:w-4/5">
              <!-- phone -->
              <input type="text" name="phone" hidden>
              <div class="w-full p-2 relative mb-3">
                <span class="text-sm text-white">Номер телефона</span>
                <input
                  type="text" name="password" autocomplete="new-password"
                  v-model="phone"
                  ref="phone"
                  class="border-0 placeholder-grey-20 text-grey-10 bg-white rounded text-xl shadow focus:outline-none focus:ring w-full p-4"
                  placeholder="Номер телефона"
                  @blur="$v.phone.$touch()"
                />
                <span v-if="$v.phone.$error" class="text-xs text-red absolute -bottom-2 left-3">введите действительный номер телефона</span>
              </div>

              <div class="w-full p-2 relative">
                <button
                  class="bg-orange hover:bg-orange-10 text-white w-full p-4 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
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
            </div>

          <div class="w-full flex text-center justify-center">
            <p class="text-sm text-grey-50 m-3">
              * будьте спокойны, я никогда не передам номер телефона третьим лицам
            </p>
          </div>
        </div>
        </template>
        <template v-else>
          <div class="w-full flex text-center justify-center flex-col">
            <div class="text-2xl font-semibold text-white flex flex-row justify-center">

              <svg class="mr-2 text-green-400" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"/></svg>
              <span>Готово</span>
          </div>


            <p class="text-base text-gray-300 m-3">
              Номер телефона успешно отправлен, ☎️ ожидайте звонка!
            </p>

            <div class="flex justify-center mt-3">
              <button
                class="bg-orange hover:bg-orange-10 text-white w-full md:w-3/5 p-4 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
                type="button"
                @click="close"
              >
                  Вернутся к просмотру сайта
              </button>
            </div>



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
