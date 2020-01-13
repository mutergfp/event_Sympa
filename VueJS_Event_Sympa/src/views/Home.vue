<template>
  <div class="home">

      <Events />
  </div>
</template>

<script>
// @ is an alias to /src
import Events from '@/components/Events.vue'

export default {
  name: 'home',
  components: {
    Events
  }
}
</script>

<style>
  @import '../assets/css/main.css';
  @import '../assets/css/noscript.css';
</style>