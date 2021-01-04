//karyawan
import List from '../views/admin/users/karyawan/List.vue'
import Form from '../views/admin/users/karyawan/Form.vue'
import Edit from '../views/admin/users/karyawan/Edit.vue'
//pelanggan
import ListPelanggan from '../views/admin/users/pelanggan/List_pelanggan.vue'
import FormPelanggan from '../views/admin/users/pelanggan/Form_pelanggan.vue'
import EditPelanggan from '../views/admin/users/pelanggan/Edit_pelanggan.vue'

//petugas
//catat
import ListCatat from '../views/petugas/catat/list_catat.vue'

export default{
    mode: 'history',
    linkActiveClass: 'font-weight-bold text-decoration-none',
    routes: [
            //karyawan
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
            //Pelanggan
            {
                path: '/Pelanggans',
                name: 'listPelanggan',
                label:'Pelanggan',
                component: ListPelanggan,
            },
            {
                path: '/pelanggans/create',
                name: 'createpelanggan',
                component: FormPelanggan,
            },
            {
                path: '/pelanggans/:pelangganNama/edit',
                name: 'Pelanggans.edit',
                component: EditPelanggan,
            },

            //petugas
            //catat
            {
                path: '/catat',
                name: 'Listcatat',
                component: ListCatat,
            },

    ]
}
