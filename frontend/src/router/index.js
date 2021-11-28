import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/pages/Home'
import About from '../components/pages/About'
import OurProcess from '../components/pages/OurProcess'
import NotFound from '../components/parts/NotFound'
import Career from '../components/pages/Career'
import WorkModel from '../components/pages/WorkModel'
import Faq from '../components/pages/Faqs'
import Services from '../components/pages/Services'
import TechnologyStack from '../components/pages/TechnologyStack'
import Portfolio from '../components/pages/Portfolio'
import Contact from '../components/pages/Contact'
import JobTemplate from '../components/job/JobTemplate'
import Register from '../components/auth/Register'
import Login from '../components/auth/Login'
import ForgotPassword from '../components/auth/ForgotPassword'
import ResetPassword from '../components/auth/ResetPassword'
import AllJob from '../components/admin/AllJob'
import AddNewJob from '../components/admin/AddNewJob'
import EditJob from '../components/admin/EditJob'
import AddNewAdmin from '../components/admin/AddNewAdmin'
import UpdateAdmin from '../components/admin/UpdateAdmin'
import AdminDashboard from '../components/admin/AdminDashboard'
import UserDashboard from '../components/user/UserDashboard'
import StudentDashboard from '../components/student/StudentDashboard'
import AddProduct from '../components/products/AddProduct'
import AllProduct from '../components/products/AllProduct'
import EditProduct from '../components/products/EditProduct'


Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        { path: '/', component: Home, },
        { path: '/about', component: About },
        { path: '/our-process', component: OurProcess },
        { path: '/work-model', component: WorkModel },
        { path: '/faq', component: Faq },
        { path: '/services', component: Services },
        { path: '/technology-stack', component: TechnologyStack },
        { path: '/portfolio', component: Portfolio },
        { path: '/contact', component: Contact },
        { path: '/career', component: Career },
        { path: '/career/apply/:id/:url', name: 'JobTemplate', component: JobTemplate },
        { path: '/register', component: Register },
        { path: '/login', component: Login },
        { path: '/forgot-password', component: ForgotPassword},
        { path: '/reset-password/:token', component: ResetPassword},
        { path: '/dashboard/add-job', component: AddNewJob},
        { path: '/dashboard/add-admin', component: AddNewAdmin},
        { path: '/dashboard/all-job', component: AllJob},
        { path: '/dashboard/edit-job/:id/:url', name: 'edit', component: EditJob},
        { path: '/dashboard/update-user/:id', name: 'update', component: UpdateAdmin},
        { path: '/admin', component: AdminDashboard, meta: { transitionName: 'fade' },},
        { path: '/user', component: UserDashboard},
        { path: '/student', component: StudentDashboard},
        { path: '/dashboard/add-product', component: AddProduct},
        { path: '/dashboard/products', component: AllProduct},
        { path: '/dashboard/edit-product', name: 'EditProduct', component: EditProduct},
        
        { path: '*', component: NotFound },
    ],
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 }
    },
    
})