<template>
  <div id="app">
    <app-header></app-header>
    <router-view></router-view>
  </div>
</template>

<script>
  import AppHeader from './components/AppHeader'

  export default {
    name: 'app',
    components: {
      AppHeader
    }
  }
</script>
