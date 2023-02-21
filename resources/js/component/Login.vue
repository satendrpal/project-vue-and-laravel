<template>
           
      <div class="container-fluid py-">
        <div class="row">
          <div class="col md-8" id="login">
            <img :src="'./uploads/products/banner1.jpg'" class="d-block w-200" height="980" width="1185">
        
          <div id="app">
          <div class="col md-4" id="log">
            <form @submit.prevent="add">
             {{csrf}}
          <h1 class="pwd mx-5 py- text-primary">LOGIN</h1>
          
               <p id="message" class="text-danger"></p>
            <label class="pwd">Email:</label>
            <input
              type="email"
              placeholder="Email" 
              v-model="app.email"  
            /><font-awesome-icon icon="fa-solid fa-user" /><br /><br />
            
            <label>Password:</label>
            
            <input
              type="password"
              placeholder="Password"
              v-model="app.password"
            /><br /><br />
             
            <div class="col md-4" id="btn3">
            <button type="submit" class="btn btn-success ">Login</button>
        </div>
         </form>
          
          <div class="col">   
            Forget Password
         <a href ="#fsf/"> Click me </a>
        </div> 
       
         
        <div class="col py-4">   
            Create_Account?
         <a href ="#/"> Click me </a>
        
        </div> 
          </div>
      </div>
        </div>
      </div>
   
  </div>
  
</template>
<script >
import axios from "axios";
export default {
  props: ['messages'],
  name: "Login",
  data() {
    return {
      app: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    async add() {
      console.log(this.app);
      await axios
        .post("/api/path", this.app)
        .then((response) => {
            this.message = response.errors; 
          console.log("hii",this.message)
         
          this.$router.push({ name: "Header" });
          // alert("Data Add successfully")
        })
        // .catch((error) => {
          
        //   console.log(error);

        //   alert("Not match");
        // });
        .catch(error => {
      //  this.messages = e.response.data.message;
        this.message = error.message.errors; 
       console.log("hii",this.message)
       document.getElementById("message").innerHTML = this.message;
    });
    },
  },
};
</script>
<style scoped>
#app {
  justify-content: end;
  background: #e6e9e4;
  height: 2%;
  width: 36%;
margin-left: 1185px;
  /* border-radius: 10%;
  border-radius: 40px; */
  border-width: 5px;
  padding: 11%;
  padding-top: 24%;
  margin-top: -987px;
  min-height: 100%;
 
}
h1 {
  margin-left: 34%;
}
#avt {
  height: 10% !important;
}
#login{
  width: 20%;
  min-height: 100%;
}
#btn3{
  margin-left: 3px;
  
}
#log{
  padding-inline: 6%;
}
</style>