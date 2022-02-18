<template>
  <div>
    <b-table-simple striped hover small caption-top responsive >
    <caption>Category List</caption>
    <colgroup><col><col></colgroup>
    <colgroup><col><col><col></colgroup>
    <colgroup><col><col></colgroup>
    <b-thead head-variant="dark">
    <b-tr>
      
      <b-th>ID </b-th>
      <b-th>Category Name</b-th>
      <b-th>Category Code </b-th>
      <b-th>Category Type</b-th>
      <b-th>Category Description</b-th>
    </b-tr>
  </b-thead>
  <b-tbody>
    <b-tr v-for="category in categories" :key="category.id">
     
      <b-td>{{ category.id }}</b-td>
      <b-td>{{ category.category_name }}</b-td>
      <b-td>{{ category.category_code }}</b-td>
            <b-td>{{ category.category_type }}</b-td>

      <b-td>{{ category.category_description }}</b-td>

      <b-td><div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: category.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteCategory(category.id)">Delete</button>
                    </div></b-td>
    </b-tr>
   
  </b-tbody>
 
    </b-table-simple>

  </div>
</template>
<script>

    export default {
        data() {
            return {
                categories: [],
                
            }
        },
        created() {
      
         this.axios
        .get("http://localhost:8000/api/categories")
        .then(response => {
          this.categories = response.data;
        
        });
          
        },
        methods: {
          deleteCategory(id)
 { 
                Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete it!'
}).then((result) => {
  if (result.isConfirmed) {

        this.axios.delete(`http://localhost:8000/api/categories/${id}`)
                    .then(response => {
          let i = this.categories.map(data => data.id).indexOf(id);
          this.categories.splice(i, 1);
                    });
    Swal.fire({
        title : 'Deleted',icon :'success'
    }
    
      
    );
    Toast.fire({
  icon: 'success',
  title: 'Deleted in successfully'
});
  }
})
               
            }
          

 

        }
    }
</script>