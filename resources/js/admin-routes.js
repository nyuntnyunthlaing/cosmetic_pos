import Dashboard from "./components/AdminHomeComponent.vue";
import UList from "./components/UserListComponent.vue";
import Brand from "./components/BrandListComponent.vue";
import Category from "./components/CategoryListComponent.vue";
import Product from "./components/ProductListComponent.vue";

export const routes = [
    {
        path: "/",
        component: Dashboard,
        children: [
            {
                path: "ulist",
                component: UList,
            },
            {
                path: "brand",
                component: Brand,
            },
            {
                path: "category",
                component: Category,
            },
            {
                path: "product",
                component: Product,
            },
        ],
    },
];
