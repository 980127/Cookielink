<template>
  <v-app style="background-color: #f5f5f5">
    <v-navigation-drawer
      :mini-variant.sync="miniVariant"
      clipped
      v-model="drawer"
      fixed
      app
      class="d-flex fill-height"
    >
      
      <v-list nav>
        <v-list-item-group :value="indexMenu">
          <div><v-img src="/images/logo.png" width="36px" class="mb-5"/></div>
          <v-list-item
            v-for="(item, i) in items"
            :key="i"
            :class="i === 4 && 'nav-feedback'"
            @click="goToPage(item.to)"
          >
            <v-list-item-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title v-text="item.title" />
            </v-list-item-content>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
    <v-main>
      <v-container>
        <slot />
      </v-container>
    </v-main>
  </v-app>
</template>

<style scoped>
.v-list {
  height: 100%;
}
.v-item-group {
  height: 100%;
}
.nav-feedback {
  position: absolute;
  width: 100%;
  bottom: 0;
}
</style>

<script>
import ApplicationLogo from "../components/ApplicationLogo.vue";
export default {
  components: { ApplicationLogo },
  data() {
    return {
      drawer: !this.$vuetify.breakpoint.smAndDown,
      items: [
        { icon: "mdi-home-outline", title: "Home", to: "home" },
        { icon: "mdi-google-analytics", title: "Analytics", to: "analytics.index" },
        { icon: "mdi-account-outline", title: "Profile", to: "account.index" },
        { icon: "mdi-cog-outline", title: "Settings", to: "account.settings" },
        { icon: "mdi-message-text-outline", title: "Feedback", to: "account.feedback" },
      ],
      miniVariant: false,
    };
  },
  computed: {
    appName() {
      return this.$page.props.appName;
    },
    user() {
      return this.$page.props.auth.user;
    },
    indexMenu() {
      const inertiaUrl = this.$inertia.page.url.split("?")[0];
      const index = this.items.findIndex((item) => {
        const windowUrl = this.route(item.to);
        return windowUrl.includes(inertiaUrl);
      });
      return index;
    },
  },
  watch: {
    $page: {
      handler() {
        const message = this.$page.props.flash.message;
        if (message != null) {
          switch (message.type) {
            case "success":
              this.$toast.success(message.text);
              break;
            case "error":
              this.$toast.error(message.text);
              break;
          }
        }
      },
    },
  },
  methods: {
    logout() {
      this.$inertia.post("/logout");
    },
    goToPage(page) {
      this.$inertia.visit(this.route(page));
    },
  },
};
</script>
