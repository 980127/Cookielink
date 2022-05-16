<template>
    <guest-layout>
        <v-responsive width="640px" class="mx-auto">
            <div class="d-flex flex-column align-center pa-5">
                <v-avatar size="96px" class="mb-3">
                    <img src="/images/man.png"/>
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
    </guest-layout>
</template>

<style scoped>
.full-width {
    width: 100%;
}
</style>

<script>
import GuestLayout from "../../layouts/GuestLayout.vue";

export default {
    components: { GuestLayout },
    data() {
        
    },
}
</script>