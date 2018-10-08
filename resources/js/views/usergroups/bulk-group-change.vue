<template>
 <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Group Hourly Reports </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">User Group Bulk Change</h4>
                                        

                                        <form>
                                            

                                            <div class="form-row">
                                               
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Change Users in this group</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                                <i class="mdi mdi-arrow-right-bold-circle-outline"></i>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">To this group</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>

                                            </div>
                                              <button type="submit" class="btn btn-primary">Submit</button>

                                           
                                            <div class="form-row">
                                               
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Change ALL non-Admin Users to this group: </label>
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