<template>
 <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Filter Phone Group </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add Filter Phone Group form</h4>
                                        

                                        <form>
                                            

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Filter Phone Group ID</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Filter Phone Group ID">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Filter Phone Group Name</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Filter Phone Group Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Filter Phone Group Description</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Filter Phone Group Description">
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
    export default {
        mounted() {
        }
    }
</script>