<template>
    <agile
        autoplay
        :autoplaySpeed="5000"
        :slidesToShow="1"
        :speed="1000"
        :throttleDelay="50"
        :navButtons="false"
        :dots="false"
    >
        <div v-for="item in items" class="flex items-center justify-center">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 text-primary" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392
                        4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141
                        3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149
                        0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z"/>
                </svg>
            </div>
            <div class="mx-4 flex justify-center text-2xl italic my-4 text-center">
                {{ item.txt }}
            </div>
            <div class="flex justify-center text-2xl font-bold">
                — {{ item.name }}
            </div>
        </div>
    </agile>
</template>

<script>
import {VueAgile} from 'vue-agile'
export default {
    props: ['items'],
    components: {
        agile: VueAgile
    }
}
</script>
