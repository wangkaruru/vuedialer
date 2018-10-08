import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        component: require('./layouts/app'),
        children: [
            {
                path: '/',
                name: 'home',
                component: require('./views/home')
            },
            {
                path: '/report',
                name: 'report',
                component: require('./views/report')
            },
            {
                path: '/users',
                name: 'users',
                component: require('./views/users/index'),
            },
            {
                path: '/users/create',
                name: 'users.create',
                component: require('./views/users/create')
            },
            {
                path: '/campaigns',
                name: 'campaigns.index',
                component: require('./views/campaigns/index')
            },
            {
                path: '/campaigns/create',
                name: 'campaigns.create',
                component: require('./views/campaigns/create')
            },
            {
                path: '/campaigns/auto-alt-dial',
                name: 'campaigns.autoaltdial',
                component: require('./views/campaigns/autoaltdial')
            },
            {
                path: '/campaigns/hot-keys',
                name: 'campaigns.hotkeys',
                component: require('./views/campaigns/hotkeys')
            },
            {
                path: '/campaigns/list-mix',
                name: 'campaigns.listmix',
                component: require('./views/campaigns/listmix')
            },
            {
                path: '/campaigns/pause-codes',
                name: 'campaigns.pausecodes',
                component: require('./views/campaigns/pausecodes')
            },
            {
                path: '/campaigns/presets',
                name: 'campaigns.presets',
                component: require('./views/campaigns/presets')
            },
            {
                path: '/campaigns/recycles',
                name: 'campaigns.recycles',
                component: require('./views/campaigns/recycles')
            },
            {
                path: '/campaigns/statuses',
                name: 'campaigns.statuses',
                component: require('./views/campaigns/statuses')
            },
            {
                path: '/lists',
                name: 'lists.index',
                component: require('./views/lists/index')
            },
            {
                path: '/lists/create',
                name: 'lists.create',
                component: require('./views/lists/create')
            },
            {
                path: '/scripts',
                name: 'scripts.index',
                component: require('./views/scripts/index')
            },
            {
                path: '/scripts/create',
                name: 'scripts.create',
                component: require('./views/scripts/create')
            },
            {
                path: '/filters',
                name: 'filters.index',
                component: require('./views/filters/index')
            },
            {
                path: '/filters/create',
                name: 'filters.create',
                component: require('./views/filters/create')
            },
            {
                path: '/in-bound/in-group',
                name: 'inbound.ingroup.index',
                component: require('./views/inbound/ingroup/index')
            },
            {
                path: '/in-bound/in-group/create',
                name: 'inbound.ingroup.create',
                component: require('./views/inbound/ingroup/create')
            },
            {
                path: '/in-bound/call-menus',
                name: 'inbound.callmenus.index',
                component: require('./views/inbound/callmenus/index')
            },
            {
                path: '/in-bound/call-menus/create',
                name: 'inbound.callmenus.create',
                component: require('./views/inbound/callmenus/create')
            },
            {
                path: '/in-bound/chat-groups',
                name: 'inbound.chatgroups.index',
                component: require('./views/inbound/chatgroups/index')
            },
            {
                path: '/in-bound/chat-groups/create',
                name: 'inbound.chatgroups.create',
                component: require('./views/inbound/chatgroups/create')
            },
            {
                path: '/in-bound/dids',
                name: 'inbound.dids.index',
                component: require('./views/inbound/dids/index')
            },
            {
                path: '/in-bound/dids/create',
                name: 'inbound.dids.create',
                component: require('./views/inbound/dids/create')
            },
            {
                path: '/in-bound/filter-phone-groups',
                name: 'inbound.filterphonegroups.index',
                component: require('./views/inbound/filterphonegroups/index')
            },
            {
                path: '/in-bound/filter-phone-groups/create',
                name: 'inbound.filterphonegroups.create',
                component: require('./views/inbound/filterphonegroups/create')
            },
            {
                path: '/user-groups',
                name: 'usergroups.index',
                component: require('./views/usergroups/index')
            },
            {
                path: '/user-groups/create',
                name: 'usergroups.create',
                component: require('./views/usergroups/create')
            },
            {
                path: '/user-groups/bulk-group-change',
                name: 'usergroups.bulk-group-change',
                component: require('./views/usergroups/bulk-group-change')
            },
            {
                path: '/user-groups/group-hourly-reports',
                name: 'usergroups.group-hourly-reports',
                component: require('./views/usergroups/group-hourly-reports')
            },
            {
                path: '/remotea-gents/create',
                name: 'remoteagents.create',
                component: require('./views/remoteagents/create')
            },
            {
                path: '/remote-agents/add-extension-group',
                name: 'remoteagents.add-extension-group',
                component: require('./views/remoteagents/add-extension-group')
            },
            {
                path: '/remote-agents/index',
                name: 'remoteagents.index',
                component: require('./views/remoteagents/index')
            },
            {
                path: '/remote-agents/extension-groups',
                name: 'remoteagents.extension-groups',
                component: require('./views/remoteagents/extension-groups')
            },
            {
                path: '/settings/call-times',
                name: 'settings.call-times',
                component: require('./views/settings/call-times')
            },
            {
                path: '/reports/main-report',
                name: 'reports.main-report',
                component: require('./views/reports/main-report')
            }

        ]
    },
    /* {
         path: '*',
         component: require('./layouts/error-page'),
         children: [
             {
                 path: '*',
                 component: require('./views/errors/page-not-found')
             }
         ]
     }*/
];

const router = new VueRouter({
    routes,
    mode: 'history'
});


export default router;