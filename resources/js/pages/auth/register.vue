<template>
  <guest-layout>
    <v-main>
      <v-container fluid>
        <v-row style="height: 100vh;">
          <v-col lg="7" class="white">
            <div class="d-flex justify-space-between pl-16 pr-12 py-12">
              <div><v-img src="/images/logo.png" width="60px"/></div>
              <div class="d-flex text-h5">
                  <div class="mr-15">Contact</div>
                  <div class="toLogin" @click="goToPage('login')">Login<v-icon>mdi-login</v-icon></div>
              </div>
            </div>
            <div class="pl-16 pr-12 py-10">
              <h4 class="text-h4 mb-12">Create an account 👋🏻</h4>
              <div>
                <v-form @submit.prevent="register">
                  <v-text-field
                    v-model="form.name"
                    :error-messages="form.errors.name"
                    type="text"
                    prefix="cookie.link/"
                    label="username"
                    :append-icon="form.errors.name ? 'mdi-close-circle' : 'mdi-checkbox-marked-circle'"
                    background-color="grey lighten-3"
                    height="50"
                    solo
                    flat
                  ></v-text-field>
                  <v-text-field
                    v-model="form.email"
                    :error-messages="form.errors.email"
                    height="50"
                    solo
                    flat
                    label="Email"
                    :append-icon="form.errors.email ? 'mdi-close-circle' : 'mdi-checkbox-marked-circle'"
                    background-color="grey lighten-3"
                  ></v-text-field>
                  <v-text-field
                      v-model="form.password"
                      label="Password"
                      height="50"
                      solo
                      flat
                      background-color="grey lighten-3"
                      :error-messages="form.errors.password"
                      :append-icon="(form.errors.name ? 'mdi-close-circle' : 'mdi-checkbox-marked-circle', showPassword ? 'mdi-eye' : 'mdi-eye-off')"
                      :type="showPassword ? 'text' : 'password'"
                      @click:append="showPassword = !showPassword"
                    />
                    <v-text-field
                      v-model="form.password_confirmation"
                      label="Password Confirmation"
                      :error-messages="form.errors.password_confirmation"
                      solo
                      flat
                      background-color="grey lighten-3"
                      :append-icon="(form.errors.name ? 'mdi-close-circle' : 'mdi-checkbox-marked-circle', showPassword ? 'mdi-eye' : 'mdi-eye-off')"
                      :type="showPassword ? 'text' : 'password'"
                      @click:append="showPassword = !showPassword"
                    />
                    <div class="mt-5">By creating an account you are agreeing to our Terms and Conditions.</div>
                    <v-btn :loading="form.processing" type="submit" block color="primary rounded-lg" class="mt-7 mb-10" height="60"
                      >Sign Up</v-btn>
                </v-form>
                <v-divider/>
                <div class="text-center mt-10">Already have an account?</div>
              </div>
            </div>
          </v-col>
          <v-col lg="5">
              <div class="mobile-view d-flex justify-center align-center">
                <div class="view-container">
                  <iframe name="mobile-preview" width="100%" height="100%" scrolling="no" src="http://dev.cookielink.co/account/flynn">
                  </iframe>
                </div>
              </div>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </guest-layout>
</template>

<style scoped>
.mobile-view {
  height: calc(100% - 94px);
}

.view-container {
  background-image: url(/images/mobile_Surround.png);
  width: 264px;
  height: 530px;
  background-size: contain;
  padding: 10px 13px;
}

iframe {
  border: none;
  border-radius: 30px;
}

.toLogin {
  cursor: pointer;
}
</style>

<script>
import ApplicationLogo from "../../components/ApplicationLogo.vue";
import GuestLayout from '../../layouts/GuestLayout.vue';
export default {
  components: { ApplicationLogo, GuestLayout },
  data() {
    return {
      showPassword: false,
      isLoading: false,
      form: this.$inertia.form({
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
      }),
    };
  },
  methods: {
    register() {
      this.form.post("/register");
    },
    goToPage(page) {
        this.$inertia.visit(this.route(page));
    },
  },
};
</script>
