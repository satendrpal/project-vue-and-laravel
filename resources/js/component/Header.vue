<template>
<div id="head">
</div>
<Siderbar />
<div id="app">

  <fixed-header>
    <div class="container fixed-top" id="header">
      <div class="row">
        <nav class="navbar navbar-light bg-dark fixed-top">
          <div class="container-fluid">
            <!-- <router-link
              class="navbar-brand text-info"
              :to="{ name: 'Addpage' }"
              >Add_Page</router-link
            >
            <router-link class="navbar-brand text-info" :to="{ name: 'Fetch' }"
              >All Data</router-link
            > -->
            <form @submit.prevent="Logout">
            
              <div class="dropdown">
         <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
     User
        </button> -->
        <button class="btn btn-info" @onclick="Logout()" id="logout">Logout</button>
         <!-- <button class="btn btn-info  " type="submit" id="logout">Logout</button> -->
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>

            </form>
          </div>
        </nav>
      </div>
    </div>
    <router-view></router-view>
  </fixed-header>
  <div class="wel">
  <!-- <img :src="'/uploads/products/welcome-landing-page-with-gradient-landscape_52683-19047.avif'" class="mx-5" width="1800" height="920"> -->
</div>
</div>
</template>

<script>
import Siderbar from './Sidebar.vue'
import Footer from './Footer.vue'

export default {
  name: "Logout",
components:{
  Siderbar,
  Footer,
  
  
},
  methods: {
    Logout() {
      axios.get(`/api/logout`).then((res) => {
        this.$router.push({ name: "Login" });
      });
    },
  },
 
};
</script>
<style>
#head{
  margin-top: 51px;
}
.wel{
  margin-left: 90px;
 
}
</style>