
import List from '../views/admin/users/karyawan/List.vue'
import Form from '../views/admin/users/karyawan/Form.vue'
import Edit from '../views/admin/users/karyawan/Edit.vue'


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
                path: '/karyawans/create',
                name: 'create',
                component: Form,
            },
            {
                path: '/karyawans/:karyawanName/edit',
                name: 'karyawans.edit',
                component: Edit,
            },
    ]
}
