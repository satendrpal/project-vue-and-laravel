<template>

<fixed-header>
    
    <div class="container-fluid">
      <div class="row py-">
        <nav class="navbar navbar-light bg-dark fixed-">
            <h1 class="text-white">GALLERY</h1>
            </nav>
           <div id="ro">
    <div class="container">
        <div class="row">
            <div class="col-md- py-5 ">
                <h1></h1>
               <h4 class="">Lorem Ipsum available, but the majority have suffered</h4>
            </div>
           <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery1.jpg' "
                      alt="..."
                    />
            </div>
            <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery2.jpg' "
                      alt="..."
                    />
            </div>
            <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery3.jpg' "
                      alt="..."
                    />
            </div>
            <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery4.jpg' "
                      alt="..."
                    />
            </div>
            <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery5.jpg' "
                      alt="..."
                    />
            </div>
            <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery6.jpg' "
                      alt="..."
                    />
            </div>
            <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery7.jpg' "
                      alt="..."
                    />
            </div>
            <div class="col-sm-3 img rooms">
                 <img
                      :src="'/uploads/products/gallery8.jpg' "
                      alt="..."
                    />
            </div>
        </div>
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
           </div> 
      
      </div>
    
    </div>
    <router-view></router-view>
  </fixed-header>
   


    <Footer />
</template>
<script>

import Footer from './Footer.vue'
export default {
    name:"Abouts",
    components:{
       
       Footer
    }

}
</script>
<style>
h1{
     
     text-decoration-color:  rgb(240, 218, 218);
}
</style>