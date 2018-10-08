<template>
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!-- LOGO -->
            <a href="/" class="logo text-center">
                        <span class="logo-lg">
                            <img src="images/logo.png" alt="" height="16">
                        </span>
                <span class="logo-sm">
                            <img src="images/logo_sm.png" alt="" height="16">
                        </span>
            </a>

            <!--- Sidemenu -->
            <ul class="metismenu side-nav">

                <li class="side-nav-title side-nav-item">Navigation</li>

                <li class="side-nav-item">
                    <router-link to="/" class="side-nav-link"><i class="dripicons-meter"></i>Dashboard</router-link>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="mdi mdi-account-multiple"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <router-link to="/users">Show List</router-link>
                        </li>

                        <li>
                            <router-link :to="{ name: 'users.create' }">Add New</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-copy"></i>
                        <span> Campaigns </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <router-link :to="{ name: 'campaigns.index' }">Show List</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'campaigns.create' }">Add Campaign</router-link>
                        </li>
                        <li>
                            <a href="#">Real Time</a>
                        </li>
                        <li>
                            <router-link :to="{ name: 'campaigns.statuses' }">Statuses</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'campaigns.hotkeys' }">Hot Keys</router-link>
                        </li>
                        <li>
                           <router-link :to="{ name: 'campaigns.recycles' }">Lead Recycle</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'campaigns.autoaltdial' }">Auto Alt Dial</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'campaigns.listmix' }">List Mix</router-link>
                        </li>
                        <li>
                           <router-link :to="{ name: 'campaigns.pausecodes' }">Pause Codes</router-link>
                        </li>
                        <li>
                           <router-link :to="{ name: 'campaigns.presets' }">Presets</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span> Lists </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                             <router-link :to="{ name: 'lists.index' }">Show List</router-link>
                        </li>
                        <li>
                             <router-link :to="{ name: 'lists.create' }">Create List</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="mdi mdi-book-open"></i>
                        <span> Scripts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <router-link :to="{ name: 'scripts.index' }">Show Script</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'scripts.create' }">Add Scripts</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class=" mdi mdi-filter"></i>
                        <span> Filters </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <router-link :to="{ name: 'filters.index' }">Show List</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'filters.create' }">Add Filter</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class=" mdi mdi-phone-incoming"></i>
                        <span> Inbound </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" aria-expanded="false">In-Groups
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-third-level" aria-expanded="false">
                                <li>
                                    <router-link :to="{ name: 'inbound.ingroup.index' }">Show List</router-link>
                                </li>
                                <li>
                                     <router-link :to="{ name: 'inbound.ingroup.create' }">Add New</router-link>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="side-nav-second-level" aria-expanded="false">

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" aria-expanded="false">Chat Groups
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-third-level" aria-expanded="false">
                                <li>
                                    <router-link :to="{ name: 'inbound.chatgroups.index' }">Show List</router-link>

                                </li>
                                <li>
                                    <router-link :to="{ name: 'inbound.chatgroups.create' }">Add List</router-link>

                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="side-nav-second-level" aria-expanded="false">

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" aria-expanded="false">DIDs
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-third-level" aria-expanded="false">
                                <li>
                                 <router-link :to="{ name: 'inbound.dids.index' }">Show List</router-link>

                                </li>
                                <li>
                                  <router-link :to="{ name: 'inbound.dids.create' }">Add DIDs</router-link>

                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="side-nav-second-level" aria-expanded="false">

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" aria-expanded="false">Call Menus
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-third-level" aria-expanded="false">
                                <li>
                                    <router-link :to="{ name: 'inbound.callmenus.index' }">Show List</router-link>

                                </li>
                                <li>
                                   <router-link :to="{ name: 'inbound.callmenus.create' }">Add New</router-link>

                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="side-nav-second-level" aria-expanded="false">

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" aria-expanded="false">Filter Phone Groups
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-third-level" aria-expanded="false">
                                <li>
                                   <router-link :to="{ name: 'inbound.filterphonegroups.index' }">Show List</router-link>

                                </li>
                                <li>
                                    <router-link :to="{ name: 'inbound.filterphonegroups.create' }">Add New</router-link>

                                </li>
                                <li>
                                    <a href="#">Add-Delete FPG Number</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="mdi mdi-account-group"></i>
                        <span> User Groups </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                           <router-link :to="{ name: 'usergroups.index' }">Show List</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'usergroups.create' }">Add New</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'usergroups.bulk-group-change' }">Bulky Group Change</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'usergroups.group-hourly-reports' }">Group Hourly Reports</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="mdi mdi-account-switch"></i>
                        <span> Remote Agents </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <router-link :to="{ name: 'remoteagents.index' }">Show List</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'remoteagents.create' }">Add New</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'remoteagents.extension-groups' }">Extension Groups</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name: 'remoteagents.add-extension-group' }">Add Extension Group</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-title side-nav-item mt-1">ADMIN</li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="mdi mdi-brightness-7"></i>
                        <span> Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <router-link :to="{ name: 'settings.call-times' }">Call Times</router-link>
                        </li>
                    </ul>
                </li>

                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="mdi mdi-chart-areaspline"></i>
                        <span> Reports </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <router-link :to="{ name: 'report' }">Real Time Reports</router-link>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>

</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
