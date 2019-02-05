<template>
  <div>
    <!-- 1 -->
    <h4 v-if="loading">Loading...</h4>
    <b-card-group deck>
    <news-item
      v-for="link in nodeQuery.entities"
      :key="link.nid"
      :link="link">
    </news-item>
    </b-card-group>
  </div>
</template>

<script>
  import { ALL_NEWS_QUERY } from '../constants/graphql'
  import NewsItem from './NewsItem'

  export default {
    name: 'NewsList',
    data () {
      return {
        nodeQuery: [],
        loading: 0
      }
    },
    components: {
      NewsItem
    },
    apollo: {
      nodeQuery: {
        query: ALL_NEWS_QUERY
      }
    }
  }
</script>
