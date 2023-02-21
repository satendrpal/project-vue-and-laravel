<template>
     <fixed-header>
    <!-- Header inner -->
    <!-- <div class="container fixed-top " id="headers">
      <div class="row">
        <nav class="navbar navbar-light bg- fixed-top">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="full">
                  <div class="center-desk">
                    <div class="log">
                      <a href="#Headers">
                        <img
                          :src="'../uploads/products/logo.png'"
                          class="img-circle"
                          alt="Services"
                        />
                      </a> 
                                     
                    </div>
                  </div>                    
                </div>
              </div>
                           
            </div>
                    <div class="col-sm-3">
                <h3>Home</h3>
                </div>
            <div class="col-sm-3">
               <a href="#Abouts"> <h3>About</h3></a>
                </div>
                            
          </div>
          
        
     
        </nav>
      
      </div>
    </div> -->  
      
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
     <a href="#Headers">
                        <img
                          :src="'../uploads/products/logo.png'"
                          class="img-circle"
                          alt="Services"
                        />
                      </a> 
                      
  </div>
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item1">
          <a class="navbar-brand" href="#Headers">HOME</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#Abouts">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#Rooms">OUR ROOM</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#Gallerys">GALLERY</a>
        </li>
         <li class="nav-item">
          <a class="navbar-brand" href="#Blog1">BLOG</a>
        </li>
         <li class="nav-item">
          <a class="navbar-brand" href="#">CONTACT US</a>
        </li>
      </ul>
    </div>

  </div>
</nav>
 
    <router-view></router-view>
  </fixed-header>
  <Index />
  <About />
  <Room />
  <Gallery />
  <Blog />
  <Contact />
  <Footer />
</template>
<script>
import Index from './Index.vue'
import About from './About.vue'
import Footer from './Footer.vue'
import Room from './Room.vue'
import Gallery from './Gallery.vue'
import Blog from './Blog.vue'
import Contact from './Contact.vue'
export default {
  name:"Headers",
  components:{
    Index,
    About,
    Room,
    Gallery,
    Blog,
    Contact,
    Footer
  }
}

$(document).ready(function(){
   $('li').hover(
				
               function () {
                  $("li").css({"color":"red"});
               }, 
				
               function () {
                  $("li").css({"color":""});
               }
            );

});


</script>
<style>
a:hover {
   
  text-decoration: underline;
  text-decoration-color: red!important;;
}


</style>