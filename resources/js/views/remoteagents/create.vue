<template>
 <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Remote Agent</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add A Remote Agent</h4>
                                        

                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">User ID Start</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="User ID Start">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Number of Lines</label>
                                                    <input type="text" class="form-control" id="inputPassword4" placeholder="(numbers only)">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                               
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Server IP</label>
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
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">External Extension</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder=" (dial plan number dialed to reach agents)">
                                            </div>

                                            

                                            <div class="form-row">
                                               
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Status</label>
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
                                                    <label for="inputState" class="col-form-label">Campaign</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>yes</option>
                                                        <option>no</option>
                                                     
                                                    </select>
                                                </div>
                                                
                                            </div>
                                       
                                                <div class="mt-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"><a href="">AGENT DIRECT </a>  Single Agent Direct Queue - 99 </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"><a href="">AGENT DIRECT_CHAT </a> Agent Direct Queue for Chats - 99 </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"><a href="">COLLECTORS </a> Collectors Group - 0 </label>
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