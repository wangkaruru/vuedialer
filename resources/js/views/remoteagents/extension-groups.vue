<template>
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Remote Group List</h4>
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
                                    <table class="table table-hover" >
                                        <thead>
                                        <tr>
                                            <th>GROUP</th>
                                            <th>EXTENSION </th>
                                            <th>RANK </th>
                                            <th>RESTRICT</th>
                                            <th>COUNT</th>
                                            <th>LAST CALL</th>
                                            <th>LAST ID</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
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
   
</script>