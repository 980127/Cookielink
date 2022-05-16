<template>
    <admin-layout>
        <v-banner class="mb-4">
          <div class="d-flex flex-wrap justify-space-between">
            <h5 class="text-h5 font-weight-bold">Feedback</h5>
          </div>
        </v-banner>
        <v-responsive max-width="640px" class="mx-auto">
            <div class="text-center">Do you have a question or feature suggestion? Get in touch!</div>
            <div class="pa-4">
                <v-textarea flat filled rows="10"></v-textarea>
                <div class="d-flex justify-center">
                    <v-btn color="primary" width="200px">Send</v-btn>
                </div>
            </div>
        </v-responsive>
    </admin-layout>
</template>


<script>
import AdminLayout from "../../layouts/AdminLayout.vue";

export default {
    components: { AdminLayout },
    data() {
        return {

        }
    },
}
</script>