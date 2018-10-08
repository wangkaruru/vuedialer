<template>
 <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Filter Form</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Filter Form</h4>
                                        

                                        <form @submit.prevent="createUser()">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Filter Id</label>
                                                    <input v-model="form.name" type="text" name="name" placeholder="Filter Id"
                                                     class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                                    <has-error :form="form" field="name"></has-error>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Filter Name</label>
                                                    <input v-model="form.group" type="text" name="group" placeholder="Filter Name"
                                                    class="form-control" :class="{ 'is-invalid': form.errors.has('group') }">
                                                     <has-error :form="form" field="group"></has-error>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Filter Comments</label>
                                                <input v-model="form.level" type="text" name="level" placeholder="Level"
                                                  class="form-control" :class="{ 'is-invalid': form.errors.has('level') }">
                                                    <has-error :form="form" field="level"></has-error>
                                            </div>

                                            

                                            <div class="form-row">
                                                
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Admin User group</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>

                                                 
                                            </div>
                                            <div class="form-group mb-3">
                                                        <label for="example-textarea">Filter SQL</label>
                                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
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