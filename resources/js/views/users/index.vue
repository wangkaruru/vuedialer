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
                                            <a href="#" @click="editModal(user)" type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit blue"> </i>edit</a> /
                                            <a href="#" @click="deleteUser(user.id)" type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fa fa-trash red" >delete</i></a>
                                 
                                             
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
    </div>
</template>

<script>
    export default {
        

        mounted() {
        },

        data() {
            return {
                users: {},
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
            },
             
    updateUser(){
      this.$Progress.start();
        this.form.put('api/user/'+this.form.id)
        .then(()=>{
            //success
        swal(
                'Updated!',
                'User Updated',
                'success'
            )
            $("#addNew").modal("hide");
        this.$Progress.finish();
         Fire.$emit('AfterCreate');
          }).catch(
      ()=>{
    this.$Progress.fail();
      });

    },       
        editModal(user){
            this.editMode=true;
            this.form.reset();
            $("#addNew").modal("show");
            this.form.fill(user)
        },
         newModal(){
          this.editMode=false;
        this.form.reset();
        $("#addNew").modal("show");
        },
    loadUsers() {
      axios.get("api/user").then(({ data }) => (this.users = data.data));
    },
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
//start
deleteUser(id){
  swal({
    title: 'Are you sure?',
    text:"You wont be able to rvert this",
    type:'warning',
    showCancelButton:true,
    confirmButtonColor:'#3085d6',
    cancelButtonColor:'#d33',
    confirmButtonText:'Yes,delete it!'
  }).then((cancel)=>{
    //send the request to server
    this.form.delete('api/users/'+id).then(()=>{
      swal(
        'Deleted!',
        'Your file has been deleted',
        'success'
    )
     Fire.$emit('AfterCreate');
    }).catch(()=>{
      swal("Failed","There was an eror", "warning");
    });
  })}

            
            
            

        },
        
    }
</script>


