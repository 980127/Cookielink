<template>
  <guest-layout>
    <v-main>
      <v-container>
        <v-card>
          <v-card-title>Welcome to Laravel Inertia Vuetify</v-card-title>
        </v-card>
      </v-container>
    </v-main>
  </guest-layout>
</template>

<script>
import ApplicationLogo from '../components/ApplicationLogo.vue'
import GuestLayout from '../layouts/GuestLayout.vue'
export default {
  components: { ApplicationLogo, GuestLayout },
  computed: {
    appName() {
      return this.$page.props.appName
    },
  },
}
</script>
