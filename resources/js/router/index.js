
import Home from '../views/Home.vue'
import About from '../views/About.vue'


export default{
    mode: 'history',
    linkActiveClass: 'font-weight-bold text-decoration-none',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
    ]
}
