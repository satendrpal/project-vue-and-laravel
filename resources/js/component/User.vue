<template>
  <Header />
  <div class="Sidebar">
<div id="fetch">
  <table class="table table-striped " id="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
       <th>Email</th>
      </tr>
    </thead>
    <tr v-for="product in products" :key="product">
           
           <td>{{ product.id}}</td>
           <td>{{ product.name }}</td>
           <td>{{ product.email }}</td>
           <td>
             <!-- <img v-bind:src="`../uploads/products/${product.file}`" class="rounded-circle bg-dark" width="180" height=""> -->
           </td>
           <td>
             <button @click="deleteProduct(product.id)" class="btn btn-danger mx-3" ><i class="fa fa-trash"></i></button>
             <div class="btn-group" role="group">
               <router-link
                 :to="{ name: 'Edit', params: { id: product.id } }"
                 class="btn btn-success"
                 ><i class="fa fa-edit" target="__black"></i></router-link
               >
             </div>
             </td>
             </tr>
    </table>
    </div>
    </div>

</template>
<script>
import Header from './Header.vue'
export default {
  name:"User",
  components:{
       Header,
  },
     data(){
      return{
        products:[]

      }

     },
     created(){
       axios.get("/api/userdata").then((response) => {
               this.products = response.data.data;
               console.log(this.products);
             })
             .catch((error) => {
               console.log(error);
               this.products = [];
             });
         },
          
}
</script>