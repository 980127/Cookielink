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
            <div class="pl-16 pr-12 pt-15">
              <h4 class="text-h2 font-weight-bold mb-12">Make the most of your social traffic.</h4>
              <p class="mb-10 text-cmt">Track which of your social pages are generating you the most traffic and drive that audience to the right place.</p>
              <v-row>
                <v-col cols="5">
                  <v-text-field
                    v-model="form.name"
                    :error-messages="form.errors.name"
                    type="text"
                    prefix="cookie.link/"
                    label="username"
                    background-color="grey lighten-3"
                    height="60"
                    solo
                    flat
                  ></v-text-field>
                </v-col>
                <v-col cols="3">
                  <v-btn height="60" :color="form.name == null ? 'blue lighten-3' : 'blue darken-2'" class="white--text">Start My Page</v-btn>
                </v-col>
              </v-row>
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

.text-cmt {
  font-size: 1.5em;
}

.toLogin {
  cursor: pointer;
}
</style>

<script>
import ApplicationLogo from '../components/ApplicationLogo.vue'
import GuestLayout from '../layouts/GuestLayout.vue'
export default {
  components: { ApplicationLogo, GuestLayout },
  data() {
    return {
      form: this.$inertia.form({
        name: null
      }),
    }
  },
  computed: {
    appName() {
      return this.$page.props.appName
    },
  },
  methods: {
    goToPage(page) {
        this.$inertia.visit(this.route(page));
    },
  }
}
</script>
