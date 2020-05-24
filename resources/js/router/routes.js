import Login from '../pages/auth/login.vue'
import Register from '../pages/auth/register.vue'
import ExampleComponent from '../components/ExampleComponent.vue'

export default [
  { path: '/login', component: Login },
  { path: '/register', component: Register },
  { path: '/home', component: ExampleComponent },
]
