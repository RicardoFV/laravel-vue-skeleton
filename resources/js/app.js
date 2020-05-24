import Vue from 'vue'
import store from './store'
import router from './router'
import VForm from './util/vForm'
import Swal from './util/sweetAlert'

require('./bootstrap')

window.VForm = VForm
window.Swal = Swal
window.EventBus = new Vue()

/* eslint-disable-next-line no-new */
new Vue({
  el: '#app',
  store,
  router,
})
