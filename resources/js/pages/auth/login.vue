<template>
  <guest-layout>
    <v-main>
      <v-container fluid>
        <v-row align="center" justify="center" style="height: 100vh">
          <v-col cols="12" sm="12" md="10" lg="3">
            <v-card flat>
              <v-card-text class="pa-5 pt-10">
                <p class="font-weight-semibold text--primary text-h5 text-center mb-2">
                  Log in to your Cookie account
                </p>
              </v-card-text>
              <v-card-text class="px-10">
                <v-form @submit.prevent="login">
                  <v-text-field
                    v-model="form.email"
                    label="Email"
                    type="email"
                    flat
                    solo
                    background-color="grey lighten-3"
                    :error-messages="form.errors.email"
                  />
                  <v-text-field
                    v-model="form.password"
                    label="Password"
                    flat
                    solo
                    background-color="grey lighten-3"
                    :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                    :type="showPassword ? 'text' : 'password'"
                    :error-messages="form.errors.password"
                    @click:append="showPassword = !showPassword"
                  />
                  <div
                    class="d-flex align-center justify-space-between flex-wrap"
                  >
                    <v-checkbox
                      v-model="form.remember_me"
                      label="Remember me"
                    />
                    <Link :href="route('password.request')">
                      Forgot Password?
                    </Link>
                  </div>
                  <v-btn :loading="form.processing" type="submit" block color="primary" class="mt-3"
                    >Login</v-btn
                  >
                </v-form>
              </v-card-text>
              <v-card-text
                class="d-flex align-center justify-center flex-wrap mt-2"
              >
                <span class="me-2"> Don't have an account? </span>
                <span class="toRegister" @click="goToPage('register')"> Create one </span>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </guest-layout>
</template>

<style scoped>
.toRegister {
  cursor: pointer;
  text-decoration: underline;
}
</style>

<script>
import ApplicationLogo from "../../components/ApplicationLogo.vue";
import GuestLayout from "../../layouts/GuestLayout.vue"

export default {
  components: { ApplicationLogo, GuestLayout },
  data() {
    return {
      showPassword: false,
      isLoading: false,
      form: this.$inertia.form({
        email: null,
        password: null,
        remember_me: false,
      }),
    };
  },
  methods: {
    login() {
      this.form.post("/login");
    },
    goToPage(page) {
        this.$inertia.visit(this.route(page));
    },
  },
};
</script>
