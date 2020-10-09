
import List from '../views/admin/user/List.vue'
import About from '../views/admin/user/About.vue'


export default{
    mode: 'history',
    linkActiveClass: 'font-weight-bold text-decoration-none',
    routes: [
        {
            path: '/',
            name: 'list',
            label:'Dashboard',
            component: List,
        },
        {
            path: '/about',
            name: 'about',
            label:'Laporan',
            component: About,
        },
    ]
}
