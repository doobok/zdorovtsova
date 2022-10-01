<template>
    <transition name="modal">
        <div v-show="formstatus" class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container text-white h-full lg:h-auto flex justify-center">

                    <div class="relative modal-body">
                        <button @click="close" class="text-grey-50 absolute top-0 right-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                 fill-rule="evenodd" clip-rule="evenodd" fill="currentColor">
                                <path
                                    d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/>
                            </svg>
                        </button>

                        <template id="lead-form" v-if="!sended">

                            <div class="w-full flex text-center justify-center flex-col">
                                <div class="text-2xl font-semibold text-white flex flex-row justify-center">
                                    {{ $ml.get('leadFormTitle') }}
                                </div>
<!--                                <p class="text-base text-white m-3">-->
<!--                                    Оставьте заявку и я с Вами свяжусь!-->
<!--                                </p>-->
                            </div>

                            <div v-if="errorshow" class="text-lg text-center">
                                <span class="text-white p-2 rounded bg-red">{{ error }}</span>
                            </div>

                            <div class="mx-auto px-4 flex flex-wrap justify-center">

                                <div class="w-full md:w-4/5">
                                    <template v-if="!mark">
                                        <div class="w-full p-2 relative mb-1">
                                            <p class="text-base text-center text-white m-3">
                                                {{ $ml.get('selectMessager') }}
                                            </p>
                                            <button
                                                class="my-3 bg-telegram hover:bg-orange text-white w-full p-4 text-sm font-bold rounded shadow hover:shadow-lg outline-none focus:outline-none"
                                                type="button"
                                                @click="setMark('Telegram')"
                                            >
                                                <span class="flex justify-center">
                                                  <svg class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="currentColor" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                                                      <path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"/>
                                                  </svg>
                                                  <span>Telegram</span>
                                                </span>
                                            </button>

                                            <button
                                                class="my-3 bg-viber hover:bg-orange text-white w-full p-4 text-sm font-bold rounded shadow hover:shadow-lg outline-none focus:outline-none"
                                                type="button"
                                                @click="setMark('Viber')"
                                            >
                                                <span class="flex justify-center">
                                                  <svg class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="currentColor">
                                                      <path d="M12.892 13.745s.427.038.656-.247l.448-.563c.216-.28.738-.458 1.249-.174.676.382 1.55.982 2.149 1.541.33.278.407.688.182 1.121l-.002.009c-.232.408-.541.791-.932 1.148l-.009.006c-.44.367-.946.58-1.487.404l-.01-.014c-.972-.275-3.304-1.464-4.79-2.649-2.431-1.918-4.159-5.082-4.637-6.778l-.015-.01c-.176-.543.039-1.049.404-1.488l.007-.008c.357-.391.739-.701 1.148-.932l.009-.002c.432-.225.842-.149 1.121.182.367.379 1.056 1.291 1.54 2.149.284.51.106 1.033-.173 1.248l-.564.448c-.284.23-.247.657-.247.657s.834 3.156 3.953 3.952zm4.907-2.616c-.167 0-.303-.135-.304-.302-.014-1.83-.564-3.288-1.634-4.332-1.072-1.045-2.427-1.581-4.027-1.592-.168-.001-.303-.138-.301-.306.001-.167.136-.301.303-.301h.002c1.762.012 3.258.606 4.447 1.764 1.19 1.162 1.802 2.765 1.817 4.763.001.167-.133.304-.301.306h-.002zm-1.595-.624h-.007c-.168-.004-.301-.143-.297-.31.024-1.038-.273-1.878-.906-2.569-.63-.689-1.495-1.065-2.645-1.149-.167-.013-.293-.158-.281-.325.013-.167.158-.293.325-.281 1.294.095 2.32.548 3.049 1.345.733.8 1.092 1.807 1.065 2.992-.004.165-.139.297-.303.297zm-1.558-.522c-.161 0-.295-.126-.303-.289-.051-1.03-.537-1.534-1.527-1.588-.168-.009-.296-.152-.287-.319.009-.168.151-.296.319-.287 1.308.07 2.034.819 2.101 2.164.009.167-.12.31-.288.318l-.015.001zm6.817 3.469c-.605 4.877-4.172 5.185-4.83 5.396-.28.09-2.882.737-6.152.524 0 0-2.438 2.94-3.199 3.705-.119.119-.258.167-.352.145-.131-.032-.167-.188-.165-.414l.02-4.016v-.001c-4.762-1.323-4.485-6.295-4.431-8.898.054-2.603.543-4.736 1.996-6.17 2.61-2.364 7.987-2.011 7.987-2.011 4.541.02 6.717 1.387 7.222 1.845 1.675 1.434 2.528 4.867 1.904 9.895zm-.652-11.113c-.597-.548-3.007-2.298-8.375-2.322 0 0-6.33-.382-9.416 2.45-1.718 1.718-2.322 4.231-2.386 7.348-.063 3.118-.146 8.958 5.484 10.542l.006.002-.004 2.416s-.035.979.609 1.179c.779.241 1.236-.502 1.981-1.304.408-.44.971-1.086 1.397-1.58 3.851.322 6.812-.417 7.149-.526.777-.253 5.177-.816 5.893-6.657.738-6.022-.358-9.83-2.338-11.548z"/>
                                                  </svg>
                                                  <span>Viber</span>
                                                </span>
                                            </button>
                                            <button
                                                class="my-3 bg-whatsapp hover:bg-orange text-white w-full p-4 text-sm font-bold rounded shadow hover:shadow-lg outline-none focus:outline-none"
                                                type="button"
                                                @click="setMark('WhatsApp')"
                                            >
                                                <span class="flex justify-center">
                                                  <svg class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="currentColor">
                                                      <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                                  </svg>
                                                  <span>WhatsApp</span>
                                                </span>
                                            </button>
                                        </div>
                                    </template>

                                    <template v-else>
                                        <p class="text-base text-center text-white m-3">
                                            {{ $ml.get('yourChoice') }}
                                            <span
                                                :title="$ml.get('changeChoice')"
                                                class="cursor-pointer text-green"
                                                @click="mark=''"
                                            >{{ mark }}</span>
                                            <br>
                                            {{ $ml.get('enterContacts') }}
                                        </p>
                                        <div class="w-full p-2 relative mb-1">
                                            <span class="text-sm text-white">{{ $ml.get('yourName') }}</span>
                                            <input
                                                type="text" name="name"
                                                v-model="name"
                                                class="border-0 placeholder-grey-20 text-grey-10 bg-white rounded text-xl shadow focus:outline-none focus:ring w-full p-4"
                                                :placeholder="$ml.get('name')"
                                                @blur="$v.name.$touch()"
                                            />
                                            <span v-if="$v.name.$error"
                                                  class="text-xs text-white p-1 rounded opacity-90 bg-red absolute -bottom-2 left-3">{{ $ml.get('enterName') }}</span>
                                        </div>
                                        <!-- phone -->
                                        <input type="text" name="phone" hidden>
                                        <div class="w-full p-2 relative mb-3">
                                            <span class="text-sm text-white">{{ $ml.get('phone') }} {{ phone }}</span>
                                            <input
                                                type="text" name="password" autocomplete="new-password"
                                                v-model="phone"
                                                ref="phone"
                                                class="border-0 placeholder-grey-20 text-grey-10 bg-white rounded text-xl shadow focus:outline-none focus:ring w-full p-4"
                                                :placeholder="$ml.get('phone')"
                                                @blur="$v.phone.$touch()"
                                            />
                                            <span v-if="$v.phone.$error"
                                                  class="text-xs text-white p-1 rounded opacity-90 bg-red absolute -bottom-2 left-3">{{ $ml.get('enterPhone') }}</span>
                                        </div>

                                        <div class="w-full p-2 relative">
                                            <button
                                                class="bg-orange hover:bg-orange-10 text-white w-full p-4 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
                                                type="button"
                                                :disabled="$v.$invalid"
                                                @click="sendForm"
                                            >
                                                <template v-if="$v.$invalid">
                                                    {{ $ml.get('fillForm') }}
                                                </template>
                                                <template v-else>
                                                <span class="flex justify-center">
                                                  <svg v-if="loading" class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm8 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-19 0c0-6.065 4.935-11 11-11v2c-4.962 0-9 4.038-9 9 0 2.481 1.009 4.731 2.639 6.361l-1.414 1.414.015.014c-2-1.994-3.24-4.749-3.24-7.789z"/>
                                                  </svg>
                                                  <span>{{ $ml.get('continue') }}</span>
                                                </span>
                                                </template>
                                            </button>
                                        </div>

                                        <div class="w-full flex text-center justify-center">
                                            <p class="text-sm text-grey-50 m-3">
                                                * {{ $ml.get('formDemotivate') }}
                                            </p>
                                        </div>

                                    </template>
                                </div>
                            </div>
                        </template>
                        <template v-else>
                            <div class="w-full flex text-center justify-center flex-col">
                                <div class="text-2xl font-semibold text-white flex flex-row justify-center">

                                    <svg class="mr-2 text-green-400" xmlns="http://www.w3.org/2000/svg" width="32"
                                         height="32" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"/>
                                    </svg>
                                    <span>{{ $ml.get('ready') }}</span>
                                </div>


                                <p class="text-base text-gray-300 m-3">
                                    {{ $ml.get('sendSuccess') }}
                                </p>

                                <div class="flex justify-center mt-3">
                                    <button
                                        class="bg-orange hover:bg-orange-10 text-white w-full md:w-3/5 p-4 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
                                        type="button"
                                        @click="close"
                                    >
                                        {{ $ml.get('backToSite') }}
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
import {required, maxLength} from "vuelidate/lib/validators";
import {mapGetters} from "vuex";

export default {
    props: ['lang'],
    data() {
        return {
            sended: false,
            sending: false, //индикатор отправки
            loading: false,
            errorshow: false,
            error: '',
            name: '',
            phone: '',
            mark: '',
        }
    },
    methods: {
        sendForm() {
            if (!this.sending) {
                this.sending = true;
                // this.formshow = false;
                this.loading = true;

                this.$store.dispatch('SEND_LEAD', {
                    name: this.name,
                    phone: this.phoneNum,
                    slug: this.slug,
                    mark: this.mark,
                }).then((res) => {
                    // проверяем наличие служебного сообщения из сервера
                    if (res.msg) {
                        this.loading = false;
                        this.errorshow = true;
                        this.error = res.msg;

                        // проверяем облаботал ли сервер запрос
                    } else if (res.success) {

                        // вызываем событие GA
                        gtag('event', 'sendPhone', {'event_category': 'getPhone', 'event_label': this.slug});

                        this.loading = false;
                        this.sended = true;

                        // в противном случае показываем сообщение об ошибке
                    } else {
                        this.loading = false;
                        this.errorshow = true;
                        this.error = 'Возникла ошибка. Данные не удалось отправить. Попробуйте повторить попытку немного позже.';
                        // console.log(res);
                    }
                })
            }
        },
        close() {
            this.$store.dispatch('TUGGLE_FORM', false);
        },
        setMark(mark) {
            this.mark = mark
            gtag('event', 'selectMessager', {'event_category': 'mainFlow', 'event_label': mark});
        }
    },
    computed: {
        ...mapGetters(['formstatus']),
        ...mapGetters(['slug']),

        phoneNum: function () {
            var str = this.phone;
            str = str.replace(/[^0-9.]/g, '');
            str = str.substr(2);
            return str;
        },
    },
    created: function(){
        this.$ml.change(this.lang);
    },
    mounted() {
        var im = new Inputmask('+' + '[9][9][9-][9][9-][9][9][9-][9][9][9][9][9][9][9][9][9]');
        im.mask(this.$refs.phone);
    },
    validations: {
        phone: {
            required,
            // validFormat: val => /^\+ \d{3}\-\d{2}\-\d{3}\-\d{*}$/.test(val),
        },
        name: {
            required,
        },
    },
}
</script>
