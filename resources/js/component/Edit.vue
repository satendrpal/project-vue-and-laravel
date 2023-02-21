<template>
  <Header />
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="row">
                               <h1 class="text-danger">Contact Form Update</h1>
                            <div class="card-body bg-light">
                            <div class="form-group">
                              <label>First_name:</label>
                            <input type="text" class="form-control" placeholder="First_name" v-model="product.First_name">
                            <label>Last_name:</label>
                            <input type="text" class="form-control" placeholder="Last_name" v-model="product.Last_name">
                            <label>phone:</label>
                            <input type="text" class="form-control" placeholder="phone" v-model="product.phone" maxlength="10" :disabled="product.disabled">
                         <!-- <div class="card-body">
                         <div class="form-group"> -->
                          <label>Select Country:</label>
                          <select class='form-control' v-model='product.Country' @change='getStates()'>
                            <option value="" >Select Country</option>
                            <option v-for='data in countries' :value='data.id' >{{ data.shortname }}</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Select State:</label>
                          
                          <select class='form-control' v-model='product.State' @change='getcitys()'>
                            <option value="">Select State</option>
                            <option v-for='data in states' :value='data.id'>{{ data.name }}</option>
                          </select>
                      </div>
                         
                      <div class="form-group">
                          <label>Select city:</label>
                          <select class='form-control' v-model='product.City'>
                            <option value="" >Select city</option>
                            <option v-for='data in cities' :value='data.id'>{{data.names }}</option>
                          </select>
                      </div>
                  </div>
                  <button class="btn btn-primary form-control" @click="updateProduct()" id="btn3">click me</button>
              </div>
          </div>
      </div>
  </div>
</template>
 





<script>
import Header from './Header.vue'
export default {
  name: "Edit",
  components:{
     Header
  },
  data() {
    return {
      Country:0,
      countries: [],
      State: 0,
      states: [],
      city: 0,
      cities: [], 
      First_name:"",
      Last_name:"",
      phone:"",
      Country:"",
      State: "",
      City: "",
      product: {},
    };
  },
  
  created() {
    axios.get(`/api/edit/${this.$route.params.id}`).then((res) => {
      this.product = res.data.data;
      console.log(res.data.data);
      if(res.data.data){
       this.getCountries()
       {
        this.getStates()
        {
          this.getcitys()
        }
       }
       
    }
    });
    
  },
  methods: {
    getCountries: function(){
              axios.get('/api/dropdown')
              .then(function (response) {
                 this.countries = response.data.data;
                 console.log(this.countries,"hii")
              }.bind(this));
            },
                      getStates: function() {
                       
                              console.log(this.product.Country,"cooo")
                axios.get('/api/getStates',{ params: {country_id: this.product.Country}
              }).then(function(response){
                    this.states = response.data.data;
                    console.log(this.states,"fdsjkfdl")
    
                }.bind(this));
            },
            getcitys: function() { 
              console.log(this.product.State,"hooooo")
                axios.get('/api/getcity',{  params: { state_id: this.product.State}
              }).then(function(response){
                this.cities = response.data.data;
                    console.log(this.city,"hello")
                }.bind(this));
            },
    updateProduct() {
      axios
        .patch(`/api/update/${this.$route.params.id}`, this.product)
        .then((res) => {
          this.$router.push({ name: "Fetch" });
        });
    },
    
  },
};
</script>
<style scoped>
#App {
  background: #bfe49c;
  height: 2%;
  width: 53%;
  margin-left: 20%;
  border-radius: 10%;
  border-radius: 40px;
  border-width: 5px;
  padding: 1%;
}
#app {
  width: 10%;
  padding: 10%;
}
.path {
  padding-top: 2% !important;
  margin: 2%;
  width: 60%;
}
.State {
  padding-top: 5% !important;
  margin-left: 4%;
  width: 60%;
}
.page {
  padding-top: 3% !important;

  width: 53%;
}
#City {
  margin: 2%;
}
.form-control{
 text-transform: capitalize;
}
</style>
