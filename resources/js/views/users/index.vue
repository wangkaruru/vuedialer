<template>
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">User List</h4>
                     </div>
                   
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-hover" v-if="users">
                                    
                                        <thead>
                                        <tr>
                                            <th>USER ID</th>
                                            <th>FULL NAME</th>
                                            <th>LEVEL</th>
                                            <th>GROUP</th>
                                            <th>ACTIVE</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="user in users.data">
                                            <td>{{user.user_id}}</td>
                                            <td>{{ user.full_name }}</td>
                                            <td>{{ user.user_level}}</td>
                                            <td>{{user.user_group}}</td>
                                            <td>{{user.active}}</td>
                                            <td>
                                            
                                             <span class="table-remove"><button @click="editModal(user)"  type="button" class="btn btn-primary btn-rounded btn-sm my-0">Edit</button></span>
                                            <span class="table-remove"><button  @click="deleteUser(user.user_id)" type="button" class="btn btn-danger btn-rounded btn-sm my-0">Delete</button></span>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <pagination :data="users" v-on:pagination-change-page="getUsers"></pagination>
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>
        


        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New</h5>
                    <h5 class="modal-title" v-show="editmode" id="addNewLabel">Update User's Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editmode ? updateUser() : createUser()">
                <div class="modal-body">
                     
                      
              <div class="form-group">
                  <input type="text" v-model="form.user" name="user" placeholder="user"
                 class="form-control" >
                
              </div>
              <div class="form-group">
                 <input v-model="form.pass" type="password" name="pass" placeholder="Password"
                  class="form-control" >
                
              </div>
              

              <div class="form-group">
                  <input v-model="form.full_name" name="full_name" placeholder="Full Name"
                 class="form-control" >
                
              </div>

              <div class="form-group">
                  <input v-model="form.user_level" name="user_level" placeholder="user level"
                 class="form-control" >
                
              </div>

              <div class="form-group">
                  <input v-model="form.user_group" name="user_group" placeholder="user group"
                 class="form-control" >
                
              </div>
              
              <div class="form-group">
                  <input v-model="form.phone_login" name="phone_login" placeholder="phone login"
                 class="form-control" >
                
              </div>

               <div class="form-group">
                  <input v-model="form.phone_pass" name="phone_pass" placeholder="phone_pass"
                 class="form-control" >
                
              </div>

                </div>
                <div class="modal-footer">
                    <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
                </div>

                </form>

                </div>
            </div>
            </div>
    </div>
</template>

<script>
import { Form, HasError, AlertError } from "vform";
    export default {
        
 
        mounted() {
        },

        data() {
            return {
                users: {},
                editmode: false,
                users : {},
                form: new Form({
                    user_id:'',
                    user : '',
                    pass: '',
                    full_name: '',
                    user_group: '',
                    user_level: '',
                    phone_login: '',
                    phone_pass:''
                })
            }
        },

        created() {
            this.getUsers();
        },

        methods: {
            getUsers(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                axios.get('/api/users?page=' + page)
                    .then(response => this.users = response.data);
                     //$('#loader').success('hide')
            },
            updateUser(){
                //this.$Progress.start();
                // console.log('Editing data');
                //alert(id);
                this.form.put('api/users/'+this.form.user_id)
                .then(() => {
                    // success
                    $('#addNew').modal('hide');
                     swal(
                        'Updated!',
                        'Information has been updated.',
                        'success'
                        )
                        this.$Progress.finish();
                         Fire.$emit('AfterCreate');
                })
                .catch(() => {
                    this.$Progress.fail();
                });

            },
            editModal(user){
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(user);
            },
            newModal(){
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },
            deleteUser(id){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {

                        // Send request to the server
                         if (result.value) {

                             //alert(id);
                                this.form.delete('api/users/'+id).then(()=>{
                                        swal(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                        )
                                    Fire.$emit('AfterCreate');
                                }).catch(()=> {
                                    swal("Failed!", "There was something wrong.", "warning");
                                });
                         }
                    })
            },
            createUser(){
                //this.$Progress.start();

                this.form.post('api/users')
                .then(()=>{
                    Fire.$emit('AfterCreate');
                    $('#addNew').modal('hide')

                    toast({
                        type: 'success',
                        title: 'User Created in successfully'
                        })
                    this.$Progress.finish();

                })
                .catch(()=>{

                })
            },
            
            say: function (message) {
            alert(message)
                }

        },
        
        
        
    }
</script>


