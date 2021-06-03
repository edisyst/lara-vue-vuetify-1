import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Dashboard from '../components/spa/dashboard/Container'
import Contacts from '../components/spa/contacts/Container'

const routes = [
    {
        path: '/',
        name: 'Dashboard',
        component: Dashboard
    },
    {
        path: '/contacts',
        name: 'Contacts',
        component: Contacts
    },
]

export default new VueRouter({ routes});
