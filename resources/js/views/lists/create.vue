<template>
 <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">ListForm</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">ListForm</h4>
                                        

                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">List Id</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="list id">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">List Name</label>
                                                    <input type="text" class="form-control" id="inputPassword4" placeholder="list name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">List Description</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="list description">
                                            </div>

                                            

                                            <div class="form-row">
                                               
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Campaign</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option> 1</option>
                                                        <option> 2</option>
                                                        <option>3</option>
                                                        <option> 4</option>
                                                        <option> 5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>

                                                 <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Active</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>yes</option>
                                                        <option>no</option>
                                                     
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