<template>

<b-navbar toggleable="md" type="dark" variant="secondary">
  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
  <b-navbar-brand ><router-link to="/" >Home</router-link></b-navbar-brand>
  <b-collapse is-nav id="nav_collapse">
    <b-navbar-nav>
        <router-link class="nav-item" to="/create" >Create News</router-link>
    </b-navbar-nav>
  </b-collapse>
</b-navbar>

</template>

<script>
  export default {
    name: 'App-Header'
  }
</script>