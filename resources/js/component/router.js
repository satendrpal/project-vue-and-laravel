import { createWebHashHistory, createRouter } from "vue-router";

import Login from "./Login.vue"
import Home from './Home.vue'
import Header from './Header.vue'
import Addpage from './Addpage.vue'
import Fetch from './Fetch.vue'
import Edit from './Edit.vue'
import Sidebar from './Sidebar.vue'
import About from './Layout/About.vue'
import Footer from './Footer.vue'
 import Image from './Layout/Image.vue'

import Headers from './Layout/Headers.vue'
import Abouts from './Layout/Abouts.vue'
import Rooms from './Layout/Rooms.vue'
import Rooms1 from './Layout/Rooms1.vue'
import Gallerys from './Layout/Gallerys.vue'
import Rooms2 from './Layout/Rooms2.vue'
import Blog1 from './Layout/Blog1.vue'
import path from './Layout/path.vue'
import Appointment from './Appointment.vue'
import Path from './Path.vue'

const routes =[
    {
        path :'/login',
        name:"Login",
        component:Login
    },
    {
        path :'/Appointment',
        name:"Appointment",
        component:Appointment
    },
    {
        path :'/Path',
        name:"Path",
        component:Path
    },
    {
        path :'/',
        name:"Home",
        component:Home
    },
    {
        path :'/header',
        name:"Header",
        component:Header
    },
    {
        path :'/Addpage',
        name:"Addpage",
        component:Addpage
    },
    {
    path:'/Fetch',
    name:'Fetch',
    component:Fetch
},
{
    name: 'Edit',
    path: '/edit/:id',
    component: Edit
},
{
    name: 'Sidebar',
    path: '/Sidebar',
    component: Sidebar
},
{
    name: 'About',
    path: '/About',
    component: About
},
{
    name: 'Footer',
    path: '/Footer',
    component: Footer
},
{
    name: 'Image',
    path: '/Image',
    component: Image
},

{
    path :'/headers',
    name:"Headers",
    component:Headers
},
{
    path :'/Abouts',
    name:"Abouts",
    component:Abouts
},
{
    path :'/Rooms',
    name:"Rooms",
    component:Rooms
},
{
    path :'/Rooms1',
    name:"Rooms1",
    component:Rooms1
},
{
    path :'/Gallerys',
    name:"Gallerys",
    component:Gallerys
},
{
    path :'/Rooms2',
    name:"Rooms2",
    component:Rooms2
},
{
    path :'/Blog1',
    name:"Blog1",
    component:Blog1
},
{
    path :'/path',
    name:"path",
    component:path
},
];
const router = createRouter ({
    history:createWebHashHistory(),
    routes
});
export default router;
