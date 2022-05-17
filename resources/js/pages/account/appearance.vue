<template>
    <admin-layout>
        <v-row>
            <v-col cols="6">
                <v-banner class="mb-4">
                <div class="d-flex flex-wrap justify-space-between">
                    <h5 class="text-h5 font-weight-bold">Color Style</h5>
                </div>
                </v-banner>
                <v-card class="pa-5">
                    <v-row>
                        <v-spacer></v-spacer>
                        <v-col
                            cols="12"
                            sm="6"
                            md="3"
                        >
                            <v-card class="d-flex flex-column align-center justify-center white" height="240">
                                <div>
                                    <div class="grey link-bg mb-2"></div>
                                    <div class="grey link-bg mb-2"></div>
                                    <div class="grey link-bg"></div>
                                </div>
                            </v-card>
                        </v-col>
                        <v-col
                            cols="12"
                            sm="6"
                            md="3"
                        >
                            <v-card class="d-flex flex-column align-center justify-center light-blue lighten-4" height="240">
                                <div>
                                    <div class="grey lighten-5 link-bg mb-2"></div>
                                    <div class="grey lighten-5 link-bg mb-2"></div>
                                    <div class="grey lighten-5 link-bg"></div>
                                </div>
                            </v-card>
                        </v-col>
                        <v-col
                            cols="12"
                            sm="6"
                            md="3"
                        >
                            <v-card class="d-flex flex-column align-center justify-center grey lighten-5" height="240">
                                <div>
                                    <div class="white link-bg mb-2"></div>
                                    <div class="white link-bg mb-2"></div>
                                    <div class="white link-bg"></div>
                                </div>
                            </v-card>
                        </v-col>
                        <v-col
                            cols="12"
                            sm="6"
                            md="3"
                        >
                            <v-card class="d-flex flex-column align-center justify-center blue darken-4" height="240">
                                <div>
                                    <div class="cyan lighten-5 link-bg mb-2"></div>
                                    <div class="cyan lighten-5 link-bg mb-2"></div>
                                    <div class="cyan lighten-5 link-bg"></div>
                                </div>
                            </v-card>
                        </v-col>
                        <v-col
                            cols="12"
                            sm="6"
                            md="3"
                        >
                            <v-card class="d-flex flex-column align-center justify-center white" height="240">
                                <div>
                                    <div class="black link-bg mb-2"></div>
                                    <div class="black link-bg mb-2"></div>
                                    <div class="black link-bg"></div>
                                </div>
                            </v-card>
                        </v-col>
                        <v-col
                            cols="12"
                            sm="6"
                            md="3"
                        >
                            <v-card class="d-flex flex-column align-center justify-center blue lighten-2" height="240">
                                <div>
                                    <div class="grey lighten-5 link-bg mb-2"></div>
                                    <div class="grey lighten-5 link-bg mb-2"></div>
                                    <div class="grey lighten-5 link-bg"></div>
                                </div>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-card>
            </v-col>
            <v-col cols="6">
                <v-banner class="mb-4">
                    <div class="d-flex flex-wrap justify-space-between">
                        <h5 class="text-h5 font-weight-bold">MyCookie: <a href="http://dev.cookielink.co/account/flynn" target="_blank">Cookie.link/{{ user.name }}</a></h5>
                    </div>
                </v-banner>
                <div class="mobile-view d-flex justify-center align-center">
                    <div class="view-container">
                    <iframe name="mobile-preview" width="100%" height="100%" scrolling="no" src="http://dev.cookielink.co/account/flynn">
                    </iframe>
                    </div>
                </div>
            </v-col>
        </v-row>
    </admin-layout>
</template>


<style scoped>
.link-bg {
    width: 100px;
    height: 15px;
    border-radius: 5px;
}

.view-container {
  background-image: url(/images/mobile_Surround.png);
  width: 350px;
  height: 705px;
  background-size: contain;
  padding: 13px 18px;
}

iframe {
  border: none;
  border-radius: 40px;
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
    computed: {
        user() {
        return this.$page.props.auth.user;
        },
    }
}
</script>