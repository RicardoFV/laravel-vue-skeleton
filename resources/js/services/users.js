import Api from './api'

const route = 'users'
const authRoute = 'auth/user'

export default {
  get() {
    return Api.get(route)
      .then((response) => response)
      .catch((error) => console.log(error))
  },

  store(user) {
    return Api.post(route, user)
      .then((response) => response)
  },

  show(id) {
    return Api.get(`${route}/${id}`)
      .then((response) => response)
  },

  update(id, user) {
    return Api.put(`${route}/${id}`, user)
      .then((response) => response)
  },

  deleteOne(id) {
    return Api.delete(`${route}/${id}`)
      .then((response) => response)
  },

  authenticated() {
    return Api.get(authRoute)
      .then((response) => response)
  },
}
