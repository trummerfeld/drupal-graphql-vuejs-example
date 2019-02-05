<template>
  <div id="app">
    <news-list></news-list>
  </div>
</template>

<script>
  import NewsList from './components/NewsList'

  export default {
    name: 'app',
    components: {
      NewsList
    }
  }
</script>
