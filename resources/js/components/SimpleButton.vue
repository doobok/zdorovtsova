<template>
    <button
      class="bg-orange hover:bg-orange-10 font-header font-bold text-white flex justify-center rounded items-center uppercase"
      :class="cls"
      type="button"
      style="transition: all 0.15s ease 0s;"
      @click="opnForm"
    >
      {{txt}}
    </button>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  props: ['cls', 'txt'],
  methods:{
    opnForm(){
      this.$store.dispatch('TUGGLE_FORM', true);
      this.$store.dispatch('PUSH_SLUG', this.txt );
    },
  },

}


</script>
