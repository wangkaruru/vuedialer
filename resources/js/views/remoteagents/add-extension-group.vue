<template>
 <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Extension Group Entry</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add Extension Group Entry</h4>
                                        

                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Extension Group</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="(no spaces)">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Extension</label>
                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="(numbers only)">
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                               
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Rank</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>0</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Campaign Groups</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder=" (pipe-delimited list)">
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