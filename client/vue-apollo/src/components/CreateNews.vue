<template>
  <div>
      <input
        v-model="title"
        type="text"
        placeholder="News Title">
      <input
        v-model="field_text"
        type="text"
        placeholder="Text for News">
    <button @click="createNews()">Submit</button>
  </div>
</template>

<script>
  import { ALL_NEWS_QUERY, CREATE_NEWS_MUTATION } from '../constants/graphql'

  export default {
    name: 'CreateNews',
    data () {
      return {
        title: '',
        field_text: ''
      }
    },
    methods: {
        createNews () {
            const { title, field_text } = this.$data
            this.$apollo.mutate({
                mutation: CREATE_NEWS_MUTATION,
                variables: {
                    input: {title, field_text}
                },
                refetchQueries: [{
                  query: ALL_NEWS_QUERY
                  }],
                }).then((data) => {
                this.$router.push({path: '/'})
                }).catch((error) => {
                console.error(error)
            })
        }
    }
  }
</script>