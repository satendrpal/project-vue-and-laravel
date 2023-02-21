<template>
<div id="index">
    <div class="container-fluid py-3 ">
         
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      :src="'/uploads/products/banner1.jpg' "
                      class="d-block w-20" height="600" width="1529"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      :src="'/uploads/products/banner1.jpg'"
                      class="d-block w-100"
                      alt="..."
                      
                    />
                    
                  </div>
                  <div class="carousel-item">
                    <img
                      :src="'/uploads/products/banner2.jpg'"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div>
  
</div>
     </div>
</div>
</template>


<style>
#index{
  background-image: url("/uploads/products/banner.jpg");
  background-repeat:no-repeat;
}
</style>