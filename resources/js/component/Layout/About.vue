<template>
   <div class="container py-5">
    <div class="row ">
                <div class="col-sm-4 ">
                  <h2 class="mx-3">ABOUT US</h2>
                 <p>
                  The passage experienced a surge in popularity during the 1960s when 
                  Letraset used it on their dry-transfer sheets, and again during the 90s 
                  as desktop publishers bundled the text with their software. 
                  Today it's seen all around the web; on templates, websites, 
                  and stock designs. Use our generator to get your own, or read 
                  on for the authoritative history of lorem ipsum.
                 </p>
                 <a href="#Abouts">
                  <button class="w3-button w3-green mx-4" onclick="w3.hide('#Paris')">Read More</button>
                  <!-- <button class="btn btn-dark" type="button" id="p1">Read More</button> -->
                 </a>
                 </div>
                  <div class="col-md-3 imgSmile" id="">
                  <img :src="'/uploads/products/about.png'"  />
                
                </div>
              </div>
            </div>
</template>
<script>
export default {
  name:"About"
}
$(document).ready(function(){
  $("#p1").mouseover(function(){
   $("#p1").css("background-color", "red")
  });
  $("#p1").mouseout(function(){
    $("#p1").css("background-color","black")
  });
  
      $("#imgSmile").mouseover(function(){
      $(this).css("cursor","pointer")
      $(this).animate({zoom: '107%'}, 'fast')

   }).mouseout(function(){
      $(this).animate({zoom: '100%'}, 'fast') 

   });
});
</script>
<style>
#p1{
  border-radius: 2%;
  border-radius:3%;
  
}
#imgSmile{
 width: 250%;
}
.imgSmile:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(.9); 
}
h2{
  text-decoration: underline;
  text-decoration-color: red;
}
p{
text-transform: capitalize;
}
</style>