<template>
<center>
    <h2>Brand Register</h2>
    <form>
      <table>
        <tbody>
          <tr>
            <td class="right-td">Brand Name</td>
            <td class="left-td"><input v-model="brand.brand_name" type="text"></td>
          </tr> <tr>
            <td class="right-td">Brand Code</td>
            <td class="left-td"> <input  v-model="brand.brand_name" type="text"></td>
          </tr> <tr>
            <td class="right-td">Logo</td>
            <td class="left-td"><input type="file"></td>
          </tr> <tr>
            <td class="right-td">Description</td>
            <td class="left-td"><textarea  v-model="brand.brand_name"></textarea></td>
          </tr><tr>
            <td class="right-td"><input type="button" value="Register"></td>
            <td class="left-td"><input type="button" value="Cancel"></td>
          </tr>
        </tbody>
      </table>
</form>
</center>
</template>

<script>
export default {

  data(){
    return{
       brand: {
        brand_name : '',
        brand_code : '',
        logo : 'photo.png',
        description : ''
       }
    }
  },

  // created(){
  //     axios.get('/api/brand')
  //     .then(response => {
  //       console.log(response);
  //     })
  // },

  mounted() {
    console.log("This is about component");
  },
};                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
</script>

<style scoped>
h2{
  margin-top: 50px;
}
.left-td{
  padding-left: 50px;
}
.right-td{
  padding-right: 50px;
}
td{
  padding-top: 50px;
}
textarea{
  height: 50px;
}
</style>