import Vue from 'vue'
import Router from 'vue-router'
import CreateNews from '../components/CreateNews'
import NewsList from '../components/NewsList'

Vue.use(Router)

/* eslint-disable */ 
export default new Router({
  routes: [
    {
      path: '/',
      component: NewsList
    },
    {
      path: '/create',
      component: CreateNews
    }
  ],
  mode: 'history'
})