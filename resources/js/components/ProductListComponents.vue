<template>
    <div>
             <div><br/><br/>
                   <h2 class="productlisttitle">Latest Products</h2>
                 
                 <table class="border border-dark">

                   <tr >
                       <td v-for="product in products" :key="product.product_id ">
                 
  <b-card style="text-align:center">
  
   <img style="width:150px"  v-bind:src=" product.image_file" />
  
    <b-card-text  >
    
      {{ product.product_type }}<br>
      {{ product.product_name }}<br>
      {{ product.product_price }}
    </b-card-text>

    <b-button  href="#" variant="dark">View Detail</b-button>
  </b-card>
  
                       </td>
                       
  </tr>

  
  </table>
  
</div>

</div>
</template>
 
<script>
    export default {
        data() {
            return {
                products: [],
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/products')
                .then(response => {
                    this.products = response.data;
                });
        }
        
    }
</script>

<style>
table {
 border-spacing: 80px;
border-collapse: separate;
};

img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

.productlisttitle{
 text-align: center;

}

</style>