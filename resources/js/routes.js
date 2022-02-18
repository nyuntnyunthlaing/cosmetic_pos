import AllCategory from './components/AllCategory.vue';
import CreateCategory from './components/CreateCategory.vue';
import Navbar from './components/Navbar.vue';
import ProductListComponents from './components/ProductListComponents.vue';
import CreateProduct from './components/CreateProduct.vue';
import Home from './components/Home.vue';
import AllBrand from './components/AllBrand.vue';
import FooterComponent from './components/FooterComponent.vue';

 
export const routes = [
    {
        name: 'list',
        path: '/list',
        component: AllCategory
    },
    {
        name: 'create',
        path: '/create',
        component: CreateCategory
    },
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'navbar',
        path: '/navbar',
        component: Navbar
    },


    {
        name: 'productList',
        path: '/productList',
        component: ProductListComponents
    },
    {
        name: 'createProducts',
        path: '/createProducts',
        component: CreateProduct
    },

    {
        name: 'brandList',
        path: '/brandList',
        component: AllBrand
    },

    {
        name: 'footer',
        path: '/footer',
        component: FooterComponent
    },
   

];