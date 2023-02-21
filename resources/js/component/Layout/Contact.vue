<template>
  <div class="container">
    <div class="row">
      <div class="col-">
        <h1>CONTACT US</h1>
      </div>
      <div class="row">
        <div class="col-md-6" >
          <form  @submit="add">
            <div class="row" id="request">
              <div class="col-md-12 py-3">
                <input
                  class="contactus"
                  placeholder="Name"
                  type="text"
                  
                />
              </div>
              <div class="col-md-12 py-3">
                <input
                  class="contactus"
                  placeholder="Email"
                  type="type"
                  name="Email"
                />
              </div>
              <div class="col-md-12 py-">
                <input
                  class="contactus"
                  placeholder="Phone Number"
                  type="type"
                  name="Phone Number"
                />
              </div>
              <div class="col-md-12 py-3">
                <textarea
                  class="contactus"
                  placeholder="Message"
                  type="type"
                  Message="Name"
                ></textarea>
              </div>
              <div class="col-md-12 ">
                <!-- <button class="send_btn bg-dark" id="p2">Submit</button> -->
                <button class="btn btn-dark" type="button" id="p2">Submit</button>
              </div>
            </div>
          </form>
          
        </div>
       
            <div class="col-md-6">
               <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
            
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};

$(document).ready(function(){
  $("#p2").mouseover(function(){
   $("#p2").css("background-color", "red")
  });
  $("#p2").mouseout(function(){
    $("#p2").css("background-color","black")
  });
});
</script>
<style>
#request {
  width: 10%;
  margin-left: 10%;
}
.contactus {
  padding-top: 10%;
  width: 845%;
  background-color: #ffff;
}
/* #p2{
    height: 200%;
    width: 200%;
     border-radius:23%;
} */
</style>