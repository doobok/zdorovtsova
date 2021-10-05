<template>
  <div>{{ val }}</div>
</template>

<script>
export default {
  props: ['max'],
  data(){
        return{
          val: 0,
        }
    },
  methods: {
    onScroll(e) {
      if (this.$el.offsetTop + this.$el.offsetHeight < window.scrollY + window.innerHeight) {
        this.removeScrollHandler();
        const interval = setInterval(() => {
          if (++this.val === this.max) {
            clearInterval(interval);
          }
        }, 500 / this.max );
      }
    },
    removeScrollHandler() {
      window.removeEventListener('scroll', this.onScroll);
    },
  },
  mounted() {
    window.addEventListener('scroll', this.onScroll);
    this.$on('hook:beforeDestroy', this.removeScrollHandler);
    this.onScroll();
  },
}
</script>
