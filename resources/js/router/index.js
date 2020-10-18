
import List from '../views/admin/users/karyawan/List.vue'
import Form from '../views/admin/users/karyawan/Form.vue'


export default{
    mode: 'history',
    linkActiveClass: 'font-weight-bold text-decoration-none',
    routes: [
                {
                path: '/karyawans',
                name: 'list',
                label:'Karyawan',
                component: List,
            },
           {
                path: '/karyawans/form',
                name: 'form',
                component: Form,
            },
            
       
    ]
}
