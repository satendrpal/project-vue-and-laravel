<template>
<Header />
  
   
      <div class="container " id="addpage">
         
    <form @submit.prevent="add" enctype="multipart/a-data">
        <div class="row">
          <div class="col md-3 ">
            <label for="group-content" class="path">First_Name:</label>
            <input
              type="text"
              placeholder="First_Name"
              class="form-control"
              v-model="app.First_name"
            />
            <div class="col md-3 mx-">
              <label for="group-content" class="path">Phone:</label>
              <input
                type="number"
                placeholder="Phone"
                class="form-control"
                v-model="app.phone"
                maxlength="10"
              />
              <div class="col md-3">
                <label for="group-content" class="State py-2">State:</label>
                <!-- <input type ="text" placeholder ="State" class="Form-content" v-model="app.State"> -->
                <select
                  name="LeaveType"
                  v-model="app.State"
                  class="form-control "
                >
                  <option value="">Select State</option>
                  <option value="AN">Andaman and Nicobar Islands</option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CH">Chandigarh</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="DN">Dadra and Nagar Haveli</option>
                  <option value="DD">Daman and Diu</option>
                  <option value="DL">Delhi</option>
                  <option value="GA">Goa</option>
                  <option value="GJ">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                  <option value="JH">Jharkhand</option>
                  <option value="KA">Karnataka</option>
                  <option value="KL">Kerala</option>
                  <option value="LA">Ladakh</option>
                  <option value="LD">Lakshadweep</option>
                  <option value="MP">Madhya Pradesh</option>
                  <option value="MH">Maharashtra</option>
                  <option value="MN">Manipur</option>
                  <option value="ML">Meghalaya</option>
                  <option value="MZ">Mizoram</option>
                  <option value="NL">Nagaland</option>
                  <option value="OR">Odisha</option>
                  <option value="PY">Puducherry</option>
                  <option value="PB">Punjab</option>
                  <option value="RJ">Rajasthan</option>
                  <option value="SK">Sikkim</option>
                  <option value="TN">Tamil Nadu</option>
                  <option value="TG">Telangana</option>
                  <option value="TR">Tripura</option>
                  <option value="UP">Uttar Pradesh</option>
                  <option value="UT">Uttarakhand</option>
                  <option value="WB">West Bengal</option>
                </select>
              </div>
             
            </div>
          </div>
          <div class="col md-3 py-">
            <label for="group-content" class="page mx- py-2"  id="last">Last_Name:</label>
            <input
              type="text"
              placeholder="Last_Name"
              class="form-control mx-  "
              v-model="app.Last_name"
            />
            <div class="col md-4 mx- py-">
              <label for="group-content" class="page py-2">City:</label>
              <!-- <input type ="text" placeholder ="City" class="form-control " v-model="app.city"> -->
              <!-- <select name="LeaveType" @change="onChange()" class="form-control " id="City" onchange="onChange(this.value)"> -->
              <select v-model="app.City" class="form-control">
                <option value="">Select City</option>
                <!-- <option value="">Select City</option> -->

                <option value="Alipur">Alipur</option>
                <option value="Bawana">Bawana</option>
                <option value="Central Delhi">Central Delhi</option>
                <option value="Delhi">Delhi</option>
                <option value="Deoli">Deoli</option>
                <option value="East Delhi">East Delhi</option>
                <option value="Karol Bagh">Karol Bagh</option>
                <option value="Najafgarh">Najafgarh</option>
                <option value="Nangloi Jat">Nangloi Jat</option>
                <option value="Narela">Narela</option>
                <option value="New Delhi">New Delhi</option>
                <option value="North Delhi">North Delhi</option>
                <option value="North East Delhi">North East Delhi</option>
                <option value="North West Delhi">North West Delhi</option>
                <option value="Pitampura">Pitampura</option>
                <option value="Rohini">Rohini</option>
                <option value="South Delhi">South Delhi</option>
                <option value="South West Delhi">South West Delhi</option>
                <option value="West Delhi">West Delhi</option>
              </select>
              
              <div class="col md-3 py-1">
                <label for="group-content" class="pag py-2">Countery:</label>
                <!-- <input type ="text" placeholder ="Countery" class="form-control" v-model="app.Country"> -->
                <select
                  name="LeaveType"
                  v-model="app.Country"
                  class="form-control"
                >
                  <option value="">Select Country</option>
                  <option value="Albania">Albania</option>
                  <option value="IND">India</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antartica">Antarctica</option>
                  <option value="Antigua and Barbuda">
                    Antigua and Barbuda
                  </option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                </select>
           
                 
              </div>
            </div>
           
            <div class="submit py-5">
              <input type="submit" value="signup" class="btn btn-success"  />
            </div>
          </div>
        </div>

        <div class="row"></div>
     
    </form>
  </div>
</template>
<script >
import axios from "axios";

import Header from "./Header.vue";
export default {
  name: "Addpage",
  components: {
    Header,
   
  },
  data:() => {
    return {
       file: '',
      app: {
        First_name: "",
        Last_name: "",
        phone: "",
        City: "",
        State: "",
        Country: "",
       
       
      },
    };
  },
  
  methods:{
   onChange(e) {
                this.file = e.target.files[0];
            },
    async add() {
         let data = new FormData();
          data.append('First_name', this.app.First_name);
          data.append('Last_name', this.app.Last_name);
          data.append('phone', this.app.phone);
           data.append('City', this.app.City);
            data.append('State', this.app.State);
             data.append('Country', this.app.Country);
            
          console.log("hii",this.app)
         axios.post('/api/Addpage',this.app).then((res)=>{
          
          console.log(res)
          this.app.First_name = "";
          this.app.Last_name = "";
          this.app.phone = "";
          this.app.City = "";
          this.app.State = "";
          this.app.Country= "";
         
          
        
           
          
      }).catch((e)=>{
          console.log(e);
      })
    },
  },
};
</script>
<style scoped>
#addpage {
  background: #bfe49c;
  height: 2%;
  width: 53%;
  margin-left: 20%;
  border-radius: 10%;
  border-radius: 40px;
  border-width: 5px;
  padding: 4%;
  margin-top: 50px;
  
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
  padding-top: 3% !important;
  margin-left: 9px;
  width: 60%;
}
.page {
  padding-top: 16px !important;
margin-left: 2%!important;
  width: 53%;
}
#City {
  margin: 2%;
}

</style>