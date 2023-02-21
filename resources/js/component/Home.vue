<template>
  <!-- <router-link to="/Home">Home</router-link> | -->
  <div class="container-fluid py-">
        <div class="row">
          <div class="col md-8" id="index">
             
            <!-- <img :src="'./uploads/products/banner1.jpg'" class="d-block w-200" height="980" width="1185"> -->
   
  <div id="app">
    <div class="container py-5">
      <h1 class="sign mx-5 text-uppercase" >sign up</h1>
      <form @submit.prevent="add">
        <div class="row">
          <div class="col">
            <label class="pwd  ">Name:</label>
            <input
              type="text"
              placeholder="Name"
              v-model="app.name"
              class="for-content"
            /><br /><br />
             
            <label class="pwd">Email:</label>
           
            <input
              type="email"
              placeholder="Email"
              v-model="app.email"
            />
            <br /><br />
            <label class="mx-2">Password:</label>
            <input
              type="password"
              placeholder="Password"
              v-model="app.password"
            /><br /><br />
            <label class="button mx-5">
              <input type="submit" value="sign up" class="btn btn-primary" />
            </label>
          </div>
        </div>
      </form>
    </div>
    <!-- <router-link to="/Login">Login</router-link> -->
    <!-- <router-link class="navbar-brand bg-info mx-5" to="Login" id="login"
      >Login</router-link
    > -->
     <div class="col">   
            Login?
         <a href ="#/login"> Click me </a>
        </div> 

    <router-view></router-view>
  </div>
         </div>
        </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "App",
  data() {
    return {
      app: {
        name: "",
        email: "",
        password: "",
      },
    };
  },
  methods: {
    async add() {
     
      await axios
        .post("/api/create", this.app)
        .then((response) => {
          this.app.name="";
           this.app.email="";
            this.app.password="";
          this.$router.push({ name: "Home" });
          alert("Data Add successfully");
        })
        .catch((error) => {
           this.message =error.response.message
           console.log("hii",this.message)
          
          alert("failed to Register!");
          console.log(error);
        });
    },
  },
};

</script>

<style scoped>
#app {
  /* background-color: rgb(161, 161, 180); */

  background: lightblue;
  height: 2%;
  width: 25%;
  margin-left: 35%;
  border-radius: 10%;
  border-radius: 40px;
  border-width: 5px;
  padding: 3%;
  rotate: 0deg;
  /* background-image: url("./uploads/products/banner1.jpg"); */
}
.pwd {
  padding-left: 2.5%;
}
h1 {
  margin-left: 4%;
  padding: 2%;
}
#login {
  width: 1%;
}
#app {
  padding-top: 4%;
  margin-top: 151px;
}
#index{
  width: 1%;
  height: 20%;
   /* background-image: url("./uploads/products/banner1.jpg");width: 100%; */
}
#sign{
  margin-right: 2%;
}
</style>
