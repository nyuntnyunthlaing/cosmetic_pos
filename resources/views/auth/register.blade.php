<template>
    <div class="p-0">
        <div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createUserModalLabel" v-show="!editMode">Create User</h5>
                        <h5 class="modal-title" id="createUserModalLabel" v-show="editMode">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="!editMode ? createUser() : updateUser()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label> Name </label>
                                <input v-model="form.name" type="text" name="name" placeholder="Name"
                                    class="form-control" :class="{'is-invaild': form.errors.has('name')}">
                                <has-error :form="form" field="name"></has-error>
                            </div>

                            <div class="form-group">
                                <label> Email </label>
                                <input v-model="form.email" type="text" name="email" placeholder="Email"
                                    class="form-control" :class="{'is-invaild': form.errors.has('email')}">
                                <has-error :form="form" field="email"></has-error>
                            </div>

                            <div class="form-group">
                                <label> Phone Number </label>
                                <input v-model="form.phone" type="text" name="phone" placeholder="Phone Number"
                                    class="form-control" :class="{'is-invaild': form.errors.has('phone')}">
                                <has-error :form="form" field="phone"></has-error>
                            </div>

                            <div class="form-group">
                                <label> Choose Role </label>
                                <b-form-select
                                    v-model="form.role"
                                    :options="roles"
                                    text-field="name"
                                    value-field="id"

                                ></b-form-select>
                                <has-error :form="form" field="role"></has-error>

                            </div>

                            <div class="form-group">
                                <label> Password </label>
                                <input v-model="form.password" type="password" name="password" placeholder="Password"
                                    class="form-control" :class="{'is-invaild': form.errors.has('password')}">
                                <has-error :form="form" field="password"></has-error>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button"  class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                            </b-button>
                            <button type="submit" v-if="load" v-show="!editMode" class="btn btn-lg btn-primary">Save User</button>
                            <button type="submit" v-if="load" v-show="editMode" class="btn btn-lg btn-success">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            action: '',
            searchWord: '',
            loading: false,
            editMode: false,
            load: true,
            img: 'http://localhost:8000/img/user.jpg',
            user: {},
            users: [],
            roles: [],
            form: new Form({
                'id' : '',
                'name': '',
                'phone': '',
                'password': '',
                'email': '',
                'role': 2,
            })
        }
    },
    methods:{
        createMode(){
            this.editMode = false;
            $('#createUser').modal('show');
        },
        getUsers(){
            this.loading = true;
            axios.get('/getAllUsers').then((response) =>{
                this.loading = false;
                this.users = response.data.users
            }).catch(()=>{
                this.loading = false;
                this.$toastr.e("Cannot load users", "Error");
            })
        },
        getRoles(){
            axios.get('/getAllRoles').then((response) =>{
                this.roles = response.data.roles
            });
        },
        createUser(){
            this.action = 'Creating user ...'
            this.load = false;
            this.form.post("/account/create").then((response) => {
                this.load = true;
                this.$toastr.s("user create succefully", "Created");
                Fire.$emit("loadUser");
                $("#createUser").modal("hide");
                this.form.reset();
            }).catch(() => {
                this.load = true;
                this.$toastr.e("Cannot create user, try again", "Error");
            });
        },
    },
    created(){
        this.getUsers();
        this.getRoles();
        Fire.$on('loadUser', () => {
            this.getUsers();
        });
    }
}
</script>