import Users from '../services/users'

export default {
  getUsers(context) {
    Users.get()
      .then(({ data }) => context.commit('SET_USERS', data.data))
  },

  storeUser(context, user) {
    Users.store(user)
      .then(() => context.dispatch('getUsers'))
  },

  showUser(context, id) {
    Users.get(id)
      .then(({ data }) => context.commit('SET_USER', data))
  },

  updateUser(context, user) {
    Users.update(user.id, user)
      .then(() => context.dispatch('getUsers'))
  },

  deleteUser(context, id) {
    Users.delete(id)
      .then(() => context.dispatch('getUsers'))
  },

  getAuthenticatedUser(context) {
    Users.authenticated()
      .then(({ data }) => context.commit('SET_AUTHENTICATED_USER', data))
  },
}
