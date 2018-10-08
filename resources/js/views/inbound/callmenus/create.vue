<template>
 <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">User Form</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">User Form</h4>
                                        

                                        <form @submit.prevent="createUser()">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">User Number</label>
                                                    <input v-model="form.name" type="text" name="name" placeholder="Full Name"
                                                     class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                                    <has-error :form="form" field="name"></has-error>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Password</label>
                                                    <input v-model="form.group" type="text" name="group" placeholder="Group"
                                                    class="form-control" :class="{ 'is-invalid': form.errors.has('group') }">
                                                     <has-error :form="form" field="group"></has-error>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Fullname</label>
                                                <input v-model="form.level" type="text" name="level" placeholder="Level"
                                                  class="form-control" :class="{ 'is-invalid': form.errors.has('level') }">
                                                    <has-error :form="form" field="level"></has-error>
                                            </div>

                                            

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="col-form-label">Phone Login</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="col-form-label">Phone Password</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">User group</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>

                                                 <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">User level</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                          

                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        </div>
</template>
<script>
   import { Form, HasError, AlertError } from "vform";

    export default {
        data(){
    return{   users: {},
      form: new Form({
        id:'',
        name: "",             
        level: "",
        group: ""
        
        }) } },
        methods:{
createUser() {
      this.$Progress.start();
      this.form
        .post("api/user")
        .then(() => {
          $("#addNew").modal("hide");
          this.$Progress.finish();

          Fire.$emit('AfterCreate');
          toast({
            type: "success",
            title: "User Created"
          });
          this.$Progress.finish();
        })
        .catch(() => {});
    },
        },

        mounted() {
        }
    }
</script>