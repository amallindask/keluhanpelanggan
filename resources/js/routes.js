// const KeluhanPelanggan = () => import('./Pages/KeluhanPelanggan.vue')
export const routes = [
    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        component: () => import(/* webpackChunkName: "404" */ './Pages/404.vue')
    },
    {
        path: '/home',
        name: 'home',
        component: () => import(/* webpackChunkName: "home" */ './Pages/Home.vue')
    },
    {
        path: '/keluhan-pelanggan',
        name: 'keluhan_pelanggan',
        component: () => import(/* webpackChunkName: "keluhan_pelanggan" */ './Pages/KeluhanPelanggan.vue')
        // component: KeluhanPelanggan
    },
    {
        path: '/tambah-keluhan',
        name: 'tambah_keluhan_pelanggan',
        component: () => import(/* webpackChunkName: "keluhan_pelanggan" */ './Pages/TambahKeluhan.vue')
        // component: KeluhanPelanggan
    },
    {
        path: '/edit-keluhan/:id',
        name: 'edit_keluhan_pelanggan',
        component: () => import(/* webpackChunkName: "keluhan_pelanggan" */ './Pages/EditKeluhan.vue')
        // component: KeluhanPelanggan
    },
];