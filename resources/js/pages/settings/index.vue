<template>
    <admin-layout>
        <v-banner class="mb-4">
          <div class="d-flex flex-wrap justify-space-between">
            <h5 class="text-h5 font-weight-bold">Settings</h5>
            <div class="logout" @click="logout">Logout <v-icon>mdi-logout</v-icon></div>
          </div>
        </v-banner>
        <v-responsive max-width="640px" class="mx-auto white">
            <div class="pa-4">
                <div class="text-h5 mb-5">Account Information</div>
                <div class="">
                    <label>Username</label>
                    <v-text-field single-line outlined dense></v-text-field>
                </div>
                <div class="">
                    <label>Email</label>
                    <v-text-field single-line outlined dense></v-text-field>
                </div>
                <div>
                    <v-btn>Save details</v-btn>
                </div>
            </div>
            <v-divider/>
            <div class="pa-4">
                <div class="text-h5 mb-5">Change Password</div>
                <div class="">
                    <label>Old Password</label>
                    <v-text-field single-line outlined dense></v-text-field>
                </div>
                <div class="">
                    <label>New Password</label>
                    <v-text-field single-line outlined dense></v-text-field>
                </div>
                <div class="">
                    <label>Confirm Password</label>
                    <v-text-field single-line outlined dense></v-text-field>
                </div>
                <div>
                    <v-btn>Update password</v-btn>
                </div>
            </div>
            <v-divider/>
            <div class="pa-4">
                <v-btn>Delete Account</v-btn>
            </div>
        </v-responsive>
    </admin-layout>
</template>

<style scoped>
.logout {
    cursor: pointer;
}
</style>

<script>
import AdminLayout from "../../layouts/AdminLayout.vue";

export default {
    components: { AdminLayout },
    data() {
        return {
            
        }
    },
    methods: {
        logout() {
            this.$inertia.post("/logout");
        },
    }
}
</script>