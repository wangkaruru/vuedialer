<template>
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Script List</h4>
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
                                            <th>SCRIPT ID</th>
                                            <th>SCRIPT NAME</th>
                                            <th>ACTIVE</th>
                                            <th>ADMIN GROUP</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         <tr v-for="script in scripts.data">
                                            <td>{{script.script_id}}</td>
                                            <td>{{script.script_name }}</td>
                                            <td>{{ script.active}}</td>
                                            <td>{{script.user_group}}</td>
                                            
                                            
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
                scripts: {},
            }
        },

        created() {
            this.getScripts();
        },

        methods: {
            getScripts(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                axios.get('/api/scripts?page=' + page)
                    .then(response => this.scripts = response.data);
            }
        },
    }
    
</script>