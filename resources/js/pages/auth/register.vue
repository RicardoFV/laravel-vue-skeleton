<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Register VUEJS</div>

            <div class="card-body">
              <form @submit.prevent="register()">
                <div class="form-group row">
                  <label
                    for="name"
                    class="col-md-4 col-form-label text-md-right"
                  >
                    Name
                  </label>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      id="name"
                      name="name"
                      v-model="user.name"
                      :class="{ 'is-invalid': user.errors.has('name') }"
                    />
                    <has-error :form="user" field="name"></has-error>
                  </div>
                </div>

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
                  <label
                    for="password_confirmation"
                    class="col-md-4 col-form-label text-md-right"
                  >
                    Confirm Password
                  </label>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      id="password_confirmation"
                      name="password_confirmation"
                      type="password"
                      v-model="user.password_confirmation"
                      :class="{ 'is-invalid': user.errors.has('password_confirmation') }"
                    />
                    <has-error :form="user" field="password_confirmation"></has-error>
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      Register
                    </button>
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
      registerRoute: '/register',
      destinationPage: '/home',
      user: new window.VForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
      }),
    }
  },
  methods: {
    register() {
      this.user.post(this.registerRoute)
        .then(() => { window.location.href = this.destinationPage })
    },
  },
}
</script>

<style></style>
