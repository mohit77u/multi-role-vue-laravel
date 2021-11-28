<template>
  <div id="app">
    <Header/>
      <div id="main">
        <vue-topprogress ref="topProgress"></vue-topprogress>
          <router-view/>
      </div>
    <Footer/>
  </div>
</template>

<script>
import Footer from './components/parts/Footer.vue'
import Header from './components/parts/Header.vue'
import AOS from 'aos'
import { vueTopprogress } from 'vue-top-progress'

export default {
  name: 'App',
  components: {
    Header, Footer, vueTopprogress,
  },
  data () {
    return {
      
    }
  },
  created(){
    AOS.init({
      once: true
    });
  },
  mounted () {
    this.$refs.topProgress.start()
    setTimeout(() => {
      this.$refs.topProgress.done()
    }, 2000)
  },

}
</script>
