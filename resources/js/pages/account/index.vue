<template>
    <admin-layout>
        <v-banner class="mb-4">
          <div class="d-flex flex-wrap justify-space-between">
            <h5 class="text-h5 font-weight-bold">Profile</h5>
          </div>
        </v-banner>
        <v-responsive max-width="640px" class="mx-auto white">
            <div class="d-flex justify-space-between pa-4">
                <div class="text-h5">Profile</div>
                <v-btn small rounded @click="goToPage('account.appearance')">Edit profile</v-btn>
            </div>
            <v-divider></v-divider>
            <div class="d-flex flex-column align-center pa-5">
                <v-avatar size="96px" class="mb-3">
                    <img src="images/man.png"/>
                </v-avatar>
                <div class="mb-10 text-center">
                    <div class="font-weight-bold mb-3">Chongus</div>
                    <div class="mb-3">@sweetchongus</div>
                    <div>here there this is my bio</div>
                </div>
                <div class="d-flex flex-column full-width text-center">
                    <div class="mb-5 pa-3 rounded-md grey lighten-3 rounded-lg">This is my 1st link</div>
                    <div class="mb-5 pa-3 grey lighten-3 rounded-lg">Instagram</div>
                    <div class="pa-3 grey lighten-3 rounded-lg">Twitter</div>
                </div>
            </div>
        </v-responsive>
    </admin-layout>
</template>

<style scoped>
.full-width {
    width: 100%;
}
</style>

<script>
import AdminLayout from "../../layouts/AdminLayout.vue";

export default {
    components: { AdminLayout },
    data() {
        return {
            dates: ['2019-09-10', '2019-09-20'],
        }
    },
    computed: {
      dateRangeText () {
        return this.dates.join(' ~ ')
      },
    },
    methods: {
        goToPage(page) {
            console.log(page, 'page')
            this.$inertia.visit(this.route(page));
        },
    }
}
</script>