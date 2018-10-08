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
                                        <h4 class="header-title">Please enter the group you want to get hourly stats for:</h4>
                                        

                                        <form>
                                            

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
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Status</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Status">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Date with hour</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="2004-06-25 14">
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