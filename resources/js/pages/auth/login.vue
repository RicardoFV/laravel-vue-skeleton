<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Laravel Vue Skeleton - Login</div>

            <div class="card-body">
              <form @submit.prevent="login()">
                <div class="form-group row">
                  <label
                    for="email"
                    class="col-md-4 col-form-label text-md-right"
                  >
                    E-Mail Address
                  </label>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      id="email"
                      name="email"
                      v-model="user.email"
                      :class="{ 'is-invalid': user.errors.has('email') }"
                    />
                    <has-error :form="user" field="email"></has-error>
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="password"
                    class="col-md-4 col-form-label text-md-right"
                  >
                    Password
                  </label>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      id="password"
                      name="password"
                      type="password"
                      v-model="user.password"
                      :class="{ 'is-invalid': user.errors.has('password') }"
                    />
                    <has-error :form="user" field="password"></has-error>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        id="remember"
                        name="remember"
                        type="checkbox"
                        v-model="user.remember"
                        :class="{ 'is-invalid': user.errors.has('remember') }"
                      />
                      <has-error :form="user" field="remember"></has-error>

                      <label
                        for="remember"
                        class="form-check-label"
                        >
                        Remember Me
                      </label>
                    </div>
                  </div>
                </div>


                <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      Login
                    </button>

                    <a class="btn btn-link" href="">
                      Forgot Your Password?
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loginRoute: '/login',
      destinationPage: '/home',
      user: new window.VForm({
        email: '',
        password: '',
        remember: '',
      }),
    }
  },
  methods: {
    login() {
      this.user.post(this.loginRoute)
        .then(() => { window.location.href = this.destinationPage })
    },
  },
}
</script>

<style></style>
