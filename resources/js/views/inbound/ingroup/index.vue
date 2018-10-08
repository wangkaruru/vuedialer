<template>
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">List</h4>
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
                                            <th>IN GROUP</th>
                                            <th>NAME</th>
                                            <th>PRIORITY</th>
                                            <th>ACTIVE</th>
                                            <th>ADMIN GROUP</th>
                                            <th>TIME</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         <tr v-for="inbound in inbounds.data">
                                            <td>{{inbound.group_id}}</td>
                                            <td>{{inbound.group_name }}</td>
                                            <td>{{ inbound.queue_priority}}</td>
                                            <td>{{inbound.active}}</td>
                                            <td>{{inbound.active}}</td>
                                            
                                            <td>
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
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
                inbounds: {},
            }
        },

        created() {
            this.getInbounds();
        },

        methods: {
            getInbounds(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                axios.get('/api/inbounds?page=' + page)
                    .then(response => this.inbounds = response.data);
            }
        },
    } 
</script>