<template>
 <footer>
         <div id="footer">
            <div class="container ">
               <div class="row">
                  <div class=" col-md-4 ">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker py-2" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile py-4" aria-hidden="true"><a href="tel:7905187174">+91 7905187174</a></i></li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="milto:satendra.pal@team.cliffex.com">  satendra.pal@team.cliffex.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li class="active "><a href="#Headers">Home</a></li>
                        <li><a href="#Abouts"> about</a></li>
                        <li><a href="#Rooms">Our Room</a></li>
                        <li><a href="#Gallerys">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
        
           
         </div>
      </footer>
</template>
<script>
export default {
 name:"Footer" 
}
</script>
<style scoped>


  #footer {
    margin-bottom: 3em;
     background-color: #0f1521;
     padding-bottom: 3%;
  }

  #footer .icon {
    height: 23px;
    display: inline-block;
    margin-bottom: -6px;
    background-color: black;

  }

  .hr {
    border-bottom: 1px solid #dbdbdb;
    margin: 3em 0;
   
  }
  h3{
    text-decoration: underline; 
     text-decoration-color:  red;
    /* border-bottom: 10px solid red; */
  
   color: #dde7dd;
  }
  .conta{
    color: #dde7dd;
    padding-top: 3%;
     margin-left: 20%;
  }
  .link_menu{
    color: #dbdbdb;
    text-decoration-color:  rgb(235, 225, 225);
    text-decoration: none;
  }
  .active{
    text-decoration: none;
  }
  a{
    color: aqua;
    text-decoration: solid;
    /* margin-left: 2%; */
}
.link_menu{
   margin-left: 22%;
}
.bottom_form{
   margin-left: 26%;
}
.social_icon{
    margin-left: 20%;
}
 </style>