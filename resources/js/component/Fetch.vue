<template>
  <Header />
  
  <!-- <tr v-for="login in products" :key="login.id">
 
  <td><h1>Welcome:{{login.name}}</h1></td>
   </tr> -->
   
   <div class="Sidebar">
  <div id="fetch">
    <h2 class="text-center py- text-uppercase ">details List</h2>
 <!-- <h1>Welcome:{{$name}}</h1> -->
  
        <label></label>
        <input type="search" v-model="app.search" placeholder="Search" class="search"/>
        
        <button @click="reverseMessage(app.search)" class="btn btn-success">search</button>
    
    <table class="table table-striped " id="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>First_Name</th>
          <th>Last_Name</th>
          <th>Phone</th>
         
           <th>Countery</th>
          <th>State</th>
         <th>city</th>
          <!-- <th>Image</th> -->
        </tr>
      </thead>

      <tbody v-if=" products &&  products.length > 0">
        <tr v-for="product in products" :key="product">
             
          <td>{{ product.id}}</td>
          <td>{{ product.First_name }}</td>
          <td>{{ product.Last_name }}</td>
          <td>{{ product.phone }}</td>
         
           <td>{{product.shortname }}</td>
          <td>{{ product.name }}</td>
          <td>{{ product.names }}</td>
          <td>
            <!-- <img v-bind:src="`../uploads/products/${product.file}`" class="rounded-circle bg-dark" width="180" height=""> -->
          </td>
          <td>
            <button @click="deleteProduct(product.id)" class="btn btn-danger mx-3" ><i class="fa fa-trash"></i></button>
           
            <!-- <button class="btn btn-danger" @click="deleteProduct(product.id)"> 
              Delete
            </button> -->
            <!-- <button class="btn btn-success" @click="Edit(product.id)" ><i class="fa fa-edit"></i></button> -->
            <div class="btn-group" role="group">
              <router-link
                :to="{ name: 'Edit', params: { id: product.id } }"
                class="btn btn-success"
                ><i class="fa fa-edit" target="__black"></i></router-link
              >
            </div>
            
          </td>
        </tr>
        
      </tbody>
    </table>
   
  </div>
  
  </div>
    

     
</template>

<script>
 
import Header from "./Header.vue";

import axios from "axios";
export default {
  name: "Fetch",
  components: {
    Header,
 
  },
   
  data() {
    return {
       type:Object,
       default:null,
      products: [],
        products:{
                    type:Object,
                    default:null
                },
      app:{
        search:"",
      },
    };
  },

  created(){
         
      axios.get("/api/jointable").then((response) => {
              this.products = response.data.data;
              console.log(this.products);
            })
            .catch((error) => {
              console.log(error);
              this.products = [];
            });
        },
        
  methods: {
      fetch(){
        axios.get("/api/jointable").then((response) => {
              this.products = response.data.data;
              console.log(this.products);
            })
      },
  deleteProduct(id)
    {
      axios.delete(`/api/delete/${id}`).then((res) => {
          // alert(res.data.msg);
          if(res.data.data)
          {
            this.fetch();

          }
      });
    },
    reverseMessage() {
      console.log(this.app.search,"hii")
      axios.get(`/api/searchjoin?First_name=${this.app.search}`).then((response) => {
          this.products = response.data.data
        console.log( this.products,"book")
          // this.$router.push({ name: "Fetch" });
         
    });
    }
   },          
}


  
  


</script>
<style>
h1{
  margin-left: 70%;
}
.page{
  margin-left: 30%;
}
.search{
  padding: 2px;
  margin-left: 78%;
  justify-content: end;
}
#peg{
  margin-top: 20px;
}
#table{
  text-transform: capitalize;
}
</style>