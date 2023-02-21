<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <carousel v-if="imgData.length > 0">
                            <div v-for="product in imgData" :key="product.id">
                                 <td>{{product.id}}</td>
                                <img v-bind:src="`../uploads/products/${product.file}`" class="rounded-circle bg-dark" width="180" height="">
                            </div>
                        </carousel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    
    import carousel from 'vue-owl-carousel'
    export default {
        components: {
            carousel
        },
        props: {
            msg: String
        },
        data() {
            return {
                imgData: []
            }
        },          
        mounted() {
            axios
            .get('/api/imagefatch')
            .then(res => {
                this.imgData = res.data.data;
                console.log("hii",this.imgData)
            });
        }      
    }
</script>