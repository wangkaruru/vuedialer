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
                                            <th>LIST ID</th>
                                            <th>LIST NAME</th>
                                            <th>LIST DESCRIPTION</th>
                                            <th>RESET TIME</th>
                                            <th>LEAD COUNTS</th>
                                            <th>CALL TIME</th>
                                             <th>LAST CALL DATE</th>
                                              <th>CAMPAIGN</th>
                                               <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="list in lists.data">
                                            <td>{{list.list_id}}</td>
                                            <td>{{list.list_name }}</td>
                                            <td>{{ list.list_description}}</td>
                                            <td>{{list.reset_time}}</td>
                                            <td></td>
                                            <td></td>
                                            <td>{{list.list_lastcalldate}}</td>
                                            <td>{{list.campaign_id}}</td>
                                            <td>{{list.active}}</td>
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
                lists: {},
            }
        },

        created() {
            this.getLists();
        },

        methods: {
            getLists(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                axios.get('/api/lists?page=' + page)
                    .then(response => this.lists = response.data);
            }
        },
    }
</script>