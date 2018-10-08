<template>
<div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        
                                    </div>
                                    <h4 class="page-title">Server Stats and Reports</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                            <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="header-title">Real-Time Reports</h4>
                                                
                                                
                                                <p><u><router-link :to="{ name: 'reports.main-report' }">Real-Time Main Report</router-link></u></p>
                                                <p><u>Real-Time Campaign Summary</u></p>
                                                
                                                
                                                <p><u>Real-Time Whiteboard Report</u></p>
                                                
                                            </div>

                                            
    
                                            <div class="col-sm-6 m-t-sm-50">
                                               <h4 class="header-title">Agent Reports</h4>
                                             


                                             <p><u>Agent Time Detail</u><p>
                                                  <p><u>  Agent Status Detail - Inbound Summary</u></p>
                                                    <p><u>Agent Performance Detail</u></p>
                                                    <p><u>Team Performance Detail</u></p>
                                                   <p><u> Performance Comparison Report</u></p>
                                                   <p><u> Single Agent Daily - Time</u></p>
                                                    <p><u>User Group Login </u></p>
                                                    <p><u>User Group Hourly Report - v2</u></p>
                                                    <p><u>User Stats</u></p>
                                                    <p><u>User Time Sheet</u></p>

                                                
                                            </div>
    
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
    </div>
</template>