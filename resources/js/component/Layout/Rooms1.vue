<template>

<fixed-header>
    
    <div class="container-fluid">
      <div class="row py-">
        <nav class="navbar navbar-light bg-dark fixed-">
        
            <h1 class="text-white">OUR ROOM</h1>
             </nav>
           <div id="room">
             <div class="container">
        <div class="row">
            <div class="col-md- py-5 ">
                <h1></h1>
               <h4 class="">Lorem Ipsum available, but the majority have suffered</h4>
            </div>
            <div class="col-sm-4 rooms ">
               <img
                      :src="'/uploads/products/Rooms1.jpeg' "
                      alt="..."
                    />
                   
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
            <div class="col-sm-4 rooms">
               <img
                      :src="'/uploads/products/Rooms2.jpeg' "
                      alt="..."
                    />
                   
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
            <div class="col-sm-3 rooms">
               <img
                      :src="'/uploads/products/room3.jpg' "
                      alt="..."
                    />
                   
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
            <div class="col-sm-4 rooms">
               <img
                      :src="'/uploads/products/room4.jpg' "
                      alt="..."
                    />
                   
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
            <div class="col-sm-4 rooms">
               <img
                      :src="'/uploads/products/room5.jpg' "
                      alt="..."
                    />
                   
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
            <div class="col-sm-4 rooms">
               <img
                      :src="'/uploads/products/room6.jpg' "
                      alt="..."
                    />
                   
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
        </div>
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