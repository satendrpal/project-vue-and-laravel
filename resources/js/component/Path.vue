<template id="full">
    <Header />
    <div class="container " id="container">
        <div class="row justify-content-center">
            <div class="col-md-8 path">
                <div class="row ">
                         
                       <!-- <label class="switch">
                        <input type="checkbox" checked  id="checkbox">
                        <span class="slider round"></span>
                        </label> -->
                  
                            <h1 class="text-primary ">Contact Form</h1>
                            <div class="card-body ">
                            <div class="form-group">
                            <label>First_name:</label>
                            <input type="text" class="form-control" placeholder="First_name" v-model="First_name">
                            <label>Last_name:</label>
                            <input type="text" class="form-control" placeholder="Last_name" v-model="Last_name">
                            <label>phone:</label>
                            <input type="number" class="form-control" placeholder="phone" v-model="phone" maxlength="10" >
                            <label>Select Country:</label>
                            <select class='form-control' v-model='Country' @change='getStates()'>
                            <option value="" >Select Country</option>
                            <option v-for='data in countries' :value='data.id'>{{ data.shortname }}</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label>Select State:</label>
                            <select class='form-control' v-model='State' @change='getcitys()'>
                            <option value="" >Select State</option>
                            <option v-for='data in states' :value='data.id'>{{ data.name }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select city:</label>
                            <select class='form-control' v-model='City'>
                            <option value="" >Select city</option>
                            <option v-for='data in cities' :value='data.id'>{{data.names }}</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary form-control" @click="my()" id="btn3">click me</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>  
import Header from "./Header.vue";
    export default {
        name:"path",
        components: {
          Header
 
  },
        mounted() {
            console.log('Component mounted.')
        },
        data(){
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
                       
                }
           
        },
        methods:{
           
            getCountries: function(){
              axios.get('/api/dropdown')
              .then(function (response) {
                 this.countries = response.data.data;
                 console.log(this.countries,"hii")
              }.bind(this));
            },

            getStates: function() {
                axios.get('/api/getStates',{
                 params: {
                   country_id: this.Country
                 }
              }).then(function(response){
                    this.states = response.data.data;
                    console.log(this.states,"fdsjkfdl")
                }.bind(this));
            },
       
            getcitys: function() { 
                axios.get('/api/getcity',{  params: { state_id: this.State}
              }).then(function(response){
    
                this.cities = response.data.data;
                    console.log(this.city,"hello")
                }.bind(this));
            },
            my :function(){
                axios.post('/api/Addpage',this).then((res)=>{
                  console.log(res)
                  alert("Data Add successfully");
                  this.First_name = "",
                  this.Last_name = "";
                    this.phone = "";
                    this.City = "";
                    this.State = "";
                    this.Country= "";
                });
            }, 
      
                   
        
        },
        created: function(){
            this.getCountries()
            
        },
      
      
    }
  
</script>
<style>
#btn3{
    margin-right: 2px;
}
.form-control{
    text-transform: capitalize;
}
.path{
        border-style: solid;
        border-color: #dfe5e9;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-left: 1200px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
#container{
    padding-top: 8px;
}
</style>