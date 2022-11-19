// import './bootstrap';
import { createApp } from 'vue';


const app = createApp({});

/** COMPONENTS */
import DashboardComponent from './components/DashboardComponent.vue';
app.component('dashboard-page', DashboardComponent);
import UserManagementComponent from './components/UserManagementComponent.vue';
app.component('user-management', UserManagementComponent);
import ShopManagementComponent from './components/ShopManagementComponent.vue';
app.component('shop-management', ShopManagementComponent);
/** COMPONENTS END */


app.mount('#app');
