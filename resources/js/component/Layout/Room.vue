<template>
<div id="room">
    <div class="container ">
        <div class="row">
            <div class="col-sm6-6 py-5">
                <h1>OUR ROOM</h1>
               <h4 class="">Lorem Ipsum available, but the majority have suffered</h4>
            </div>
            <div class="col-sm-4 rooms">
              <a href="#Rooms"><img
                      :src="'/uploads/products/room1.jpg' "
                      alt="..."
                    />
              </a>
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
            <div class="col-sm-4 rooms">
               <a href="#Rooms1"><img
                      :src="'/uploads/products/room2.jpg' "
                      alt="..."
                    />
               </a>
                    <h3>Bed Room</h3>
                    <p>
                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    </p>
           
            </div>
            <div class="col-sm-4 rooms">
              <a href="#Rooms2"><img
                      :src="'/uploads/products/room3.jpg' "
                      alt="..."
                    />
              </a>
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
</template>
<script>
export default {
    
}
</script>
<style>
#room{
    background-color: aquamarine;
}
h4{
    margin-left: 30%;
}
h1{
        margin-left: 41%!important;
}
h3{
    margin-left: 26%;
}
.rooms:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(.9); 
}
p{
  margin-right: 14%;
}
</style>