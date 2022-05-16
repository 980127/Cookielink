<template>
  <v-navigation-drawer
    :mini-variant.sync="miniVariant"
    clipped
    v-model="drawer"
    fixed
    app
  >
    
  </v-navigation-drawer>
</template>

<script>
export default {
  props: {
    drawer: {
      type: Boolean,
      default: true,
    },
    miniVariant: {
      type: Boolean,
      default: false,
    },
    items: {
      type: Array,
      default: [],
    }
  },
  computed: {
    indexMenu() {
      const inertiaUrl = this.$inertia.page.url.split("?")[0];
      const index = this.items.findIndex((item) => {
        const windowUrl = this.route(item.to);
        return windowUrl.includes(inertiaUrl);
      });
      return index;
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
