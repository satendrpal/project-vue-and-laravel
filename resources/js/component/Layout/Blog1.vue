<template>
<div id ="blog">
    <div class="container-fluid">
        
        <nav class="navbar navbar-light bg-dark fixed-">
            <h1 class="text-white">BLOG</h1>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h1 class="text-white"></h1>
              <h4 class="text-white py-4">Lorem Ipsum available, but the majority have suffered</h4>
            </div>
             <div class="col-md-4 rooms ">
                 <img
                      :src="'/uploads/products/blog1.jpg' "
                      alt="..."
                    />
                    <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
        </div>
         <div class="col-md-4 img rooms">
                 <img
                      :src="'/uploads/products/blog2.jpg' "
                      alt="..."
                    />
                     <div class="blog_room">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
        </div>
         <div class="col-md-4 img rooms">
                 <img
                      :src="'/uploads/products/blog3.jpg' "
                      alt="..."
                    />
                     <div class="blog_room ">
                        <h3>Bed Room</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                     </div>
        </div>
            </div>
    </div>
</div>
<Footer />
</template>

<script>
import  Footer from  './Footer.vue';
export default {
    components:{
        Footer
    }
}
</script>
<style>
#blog{
    background-image: url("/uploads/products/banner1.jpg");
  
}
p{
    margin-left: 4%;
}
.blog_room{
background-color: rgb(229, 243, 238);
margin-right: 40px;
}

</style>