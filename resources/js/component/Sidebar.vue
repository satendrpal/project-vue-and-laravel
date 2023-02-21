<template>

    <div class="sidebar">
      <img :src ="'/uploads/products/img_avatar.png'" width="100" height="80" class="mx-5 rounded-circle">
      <!-- <img
                      :src="'/uploads/products/blog3.jpg' "
                      alt="..."
                    />  -->
  <a class="active" href="#/Path">Create_Data</a>
  <a href="#/Fetch">AllData</a>
  <a href="">USER</a>
  <a href="#/about">About</a>
</div>
</template>
<script>

export default {
    name:"Siderbar",
    
}
</script>


<style scoped>
.sidebar {
  margin: 0;
  padding-top: 2px;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>