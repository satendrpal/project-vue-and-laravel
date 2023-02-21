<template>

<fixed-header>
    
    <div class="container ">
      <div class="row py-4">
        <nav class="navbar navbar-light bg-dark fixed-top">
          <div class="container-fluid">
            <h1 class="text-white">ABOUT US</h1>
            <!-- <router-link
              class="navbar-brand text-info"
              :to="{ name: 'Addpage' }"
              >Add_Page</router-link
            >
            <router-link class="navbar-brand text-info" :to="{ name: 'Fetch' }"
              >All Data</router-link
            > -->
            <!-- <form @submit.prevent="Logout">
              <button class="btn btn-info " type="submit" id="logout">Logout</button>
              
            </form> -->
          </div>
        </nav>
      </div>
    </div>
    <router-view></router-view>
  </fixed-header>
    <About />


    <Footer />
</template>
<script>
import About from './About.vue'
import Footer from './Footer.vue'

export default {
    name:"Abouts",
    components:{
     
       About,
       Footer
    }

}
</script>
<style>
h1{
     
     text-decoration-color:  rgb(240, 218, 218);
}
</style>