export default {
  SET_USERS(state, users) {
    state.users = users
  },

  SET_USER(state, user) {
    state.user = user
  },

  SET_AUTHENTICATED_USER(state, authenticatedUser) {
    state.authenticatedUser = authenticatedUser
  },
}
