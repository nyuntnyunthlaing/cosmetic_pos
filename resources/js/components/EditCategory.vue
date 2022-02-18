<template>
    <div>
         <h3 class="text-center">Update Category</h3>
             <b-form @submit.prevent="updateCategory">
      <b-form-group id="example-input-group-1" label=" Category Name" label-for="example-input-1">
        <b-form-input
          id="example-input-1"
          name="example-input-1"
          v-model="$v.category.category_name.$model"
          :state="validateState('category_name')"
          aria-describedby="input-1-live-feedback"
          style="width:300px;"
        ></b-form-input>

        <b-form-invalid-feedback
          id="input-1-live-feedback"
        >This is a required field and must be at least 3 characters.</b-form-invalid-feedback>
      </b-form-group>

      <b-form-group id="example-input-group-2" label="Category Type" label-for="example-input-2">
        <b-form-input
          id="inputType"
          name="inputType"
          v-model="$v.category.category_type.$model"
          :state="validateState('category_type')"
          aria-describedby="input-1-live-feedback"
           style="width:300px;"
        ></b-form-input>

        <b-form-invalid-feedback
          id="input-1-live-feedback"
        >This is a required field and must be at least 3 characters.</b-form-invalid-feedback>
      </b-form-group>

       <b-form-group id="example-input-group-3" label="Category Description" label-for="example-input-3">
        <b-form-input
          id="inputDescription"
          name="inputDescription"
          v-model="$v.category.category_description.$model"
          :state="validateState('category_description')"
          aria-describedby="input-1-live-feedback"
           style="width:300px;"
        ></b-form-input>

        <b-form-invalid-feedback
          id="input-1-live-feedback"
        >This is a required field and must be at least 3 characters.</b-form-invalid-feedback>
      </b-form-group>

      <b-button type="submit" variant="primary">Submit</b-button>
    
    </b-form>
      
    </div>
</template>
 
<script>

import { validationMixin } from "vuelidate";
import { required, minLength } from "vuelidate/lib/validators";

    export default {
         mixins: [validationMixin],
        data() {
        //    v$ : null
            return {
                category: new Form({
                 category_name : '',
                 category_code : '',
                 category_type : '',
                 category_description : '',
                })
            };
        }, 
        validations: {
    category: {
      category_name: {
        required,
        minLength: minLength(3)
      },
      category_type: {
        required,
        minLength: minLength(3)
      },
       category_description: {
        required,
        minLength: minLength(3)
      }
    }
  },
  created() {
            this.axios
                .get(`http://localhost:8000/api/categories/${this.$route.params.id}`)
                .then((res) => {
                    this.category = res.data;
                });
        },
        methods: {
            validateState(category_name) {
      const { $dirty, $error } = this.$v.category[category_name];
      return $dirty ? !$error : null;
    },
      validateState(category_type) {
      const { $dirty, $error } = this.$v.category[category_type];
      return $dirty ? !$error : null;
    },
      validateState(category_description) {
      const { $dirty, $error } = this.$v.category[category_description];
      return $dirty ? !$error : null;
    },
      updateCategory() {
               this.axios
                    .patch(`http://localhost:8000/api/categories/${this.$route.params.id}`, this.category)
                    .then((res) => {
                         Toast.fire({
  icon: 'success',
  title: 'Updated in successfully'
});
     this.$router.push({ name: 'home' })
  

                    });
                    
                  
                    
                    
            }
    
        }
    }
</script>
