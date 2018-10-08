<template>
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Campaign List</h4>
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
                                            <th>CAMPAIGN ID</th>
                                            <th>NAME</th>
                                            <th>ACTIVE</th>
                                            <th>GROUP</th>
                                            <th>DIAL METHOD</th>
                                            <th>LEVEL</th>
                                            <th>LEAD ORDER</th>
                                            <th>DIAL</th>
                                            <th>STATUSES</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="campaign in campaigns.data">
                                            <td>{{campaign.campaign_id}}</td>
                                            <td>{{ campaign.campaign_name }}</td>
                                            <td>{{campaign.active}}</td>
                                            <th>{{campaign.dial_method}}</th>
                                            <th>{{campaign.auto_dial_level}}</th>
                                            <th>{{campaign.lead_order}}</th>
                                            <th>{{campaign.dial_status_a}}</th>
                                            <th>{{campaign.dial_status_b}}</th>
                                            <th>{{campaign.dial_status_c}}</th>
                                            <th>{{campaign.dial_status_d}}</th>
                                            <th>{{campaign.dial_status_e}}</th>
                                            
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
 export default {
        mounted() {
        },

        data() {
            return {
                campaigns: {},
            }
        },

        created() {
            this.getCampaigns();
        },

        methods: {
            getCampaigns(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                axios.get('/api/campaigns?page=' + page)
                    .then(response => this.campaigns = response.data);
            }
        },
    }   
</script>