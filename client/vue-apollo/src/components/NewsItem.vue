<template>
  <div style="padding: 10px;">
    <b-card :title=link.title
      bg-variant="dark"
      text-variant="white"
      tag="article">
    <p class="card-text">
      {{link.fieldText | truncateDesc}} ..
    </p>
    <b-button href="#" variant="primary">Link</b-button>
    </b-card>
  </div>
</template>

<script>
  export default {
    name: 'NewsItem',
    props: ['link'],
    filters: {
        truncateDesc (value) {
            return value.substring(0, 50)
        }
    },
  }
</script>
