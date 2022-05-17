<template>
  <admin-layout>
    
    <VRow>
      <VCol cols="6">
        <v-banner class="mb-4">
          <div class="d-flex flex-wrap justify-space-between">
            <h5 class="text-h5 font-weight-bold">Home</h5>
          </div>
        </v-banner>
        <v-card>
          <VToolbar flat>
            <v-toolbar-title class="font-weight-bold" name="links">Links</v-toolbar-title>
            <VSpacer></VSpacer>
            <VBtn color="primary">Add New Link</VBtn>
          </VToolbar>
          <VDivider></VDivider>
          <VRow class="px-4 py-10" no-gutters>
            <VCol cols="1" class="d-flex mr-n6"><VIcon>mdi-dots-vertical</VIcon></VCol>
            <VDivider vertical></VDivider>
            <VCol cols="11">
              <VRow class="d-flex ml-6">
                <div class="justify-start mr-auto">
                  <div class="mb-3">
                    <VTextfield>This is my first link</VTextfield>
                    <VIcon size="20px">mdi-pencil</VIcon>
                  </div>
                  <div class="mb-4">
                    <VTextfield>http://somelink.com</VTextfield>
                    <VIcon size="20px">mdi-pencil</VIcon>
                  </div>
                  <div>
                    <VIcon>mdi-shield-check-outline</VIcon>
                  </div>
                </div>
                <div class="d-flex align-end flex-column">
                  <div class="d-flex mb-auto">
                    <VSwitch class="mt-0" inset flat input-value="true" color="success"></VSwitch>
                  </div>
                  <div class="d-flex">
                    <span></span>
                    <VIcon class="">mdi-delete-outline</VIcon>
                  </div>
                </div>
              </VRow>
            </VCol>
            <!-- <VResponsive width="50"><VIcon>mdi-dots-vertical</VIcon></VResponsive>
            <VResponsive justify-end>sdfsd</VResponsive> -->
          </VRow>
          <VDivider></VDivider>
          <VRow class="px-4 py-10" no-gutters>
            <VCol cols="1" class="d-flex mr-n6"><VIcon>mdi-dots-vertical</VIcon></VCol>
            <VDivider vertical></VDivider>
            <VCol cols="11">
              <VRow class="d-flex ml-6">
                <div class="justify-start mr-auto">
                  <div class="mb-3">
                    <VTextfield>This is my first link</VTextfield>
                    <VIcon size="20px">mdi-pencil</VIcon>
                  </div>
                  <div class="mb-4">
                    <VTextfield>http://somelink.com</VTextfield>
                    <VIcon size="20px">mdi-pencil</VIcon>
                  </div>
                  <div>
                    <VIcon>mdi-shield-check-outline</VIcon>
                  </div>
                </div>
                <div class="d-flex align-end flex-column">
                  <div class="d-flex mb-auto">
                    <VSwitch class="mt-0" inset flat color="success"></VSwitch>
                  </div>
                  <div class="d-flex">
                    <span></span>
                    <VIcon class="">mdi-delete-outline</VIcon>
                  </div>
                </div>
              </VRow>
            </VCol>
            <!-- <VResponsive width="50"><VIcon>mdi-dots-vertical</VIcon></VResponsive>
            <VResponsive justify-end>sdfsd</VResponsive> -->
          </VRow>
          <VDivider></VDivider>
          <VToolbar flat>
            <v-toolbar-title class="font-weight-bold" name="apperance">Apperance</v-toolbar-title>
          </VToolbar>
          <VRow no-gutters class="px-4 py-1 mb-7">
            <VCol cols="2" class="mr-n7">
              <VAvatar size="96px">
                <img src="images/man.png"/>
              </VAvatar>
            </VCol>
            <VCol cols="10" class="hidden-xs-only ml-7 d-flex flex-column justify-center">
              <div class="mb-3">
                <span>Name:</span>
                <VIcon size="20px">mdi-pencil</VIcon>
              </div>
              <div>
                <span>Bio:</span>
                <VIcon size="20px">mdi-pencil</VIcon>
              </div>
            </VCol>
          </VRow>
          <VResponsive content-class="d-flex align-center px-4 py-1 mb-3">
            <VTextfield class="mr-auto">Color Style</VTextfield>
            <VTextfield class="blue--text text--darken-2">Change Color</VTextfield>
          </VResponsive>
          <VResponsive content-class="d-flex align-center px-4 py-1">
            <VTextfield class="mr-auto">Compact social icons</VTextfield>
            <VSwitch class="mt-0" color="success" inset flat></VSwitch>
          </VResponsive>
        </v-card>
      </VCol>
      <VCol cols="6">
        <div style="height: calc(100vh - 12px)">
          <v-banner class="mb-4">
            <div class="d-flex flex-wrap justify-space-between">
              <h5 class="text-h5 font-weight-bold">MyCookie: <a href="http://dev.cookielink.co/account/flynn" target="_blank">Cookie.link/{{ user.name }}</a></h5>
            </div>
          </v-banner>
          <!-- <v-card>
            <VResponsive content-class="d-flex flex-column align-center justify-center">
              <div class="d-flex flex-column align-center">
                <VAvatar size="96px">
                  <img src="images/man.png"/>
                </VAvatar>
                <VTextfield class="font-weight-black" size="24px">Chongus</VTextfield>
                <VTextfield>@sweetchongus</VTextfield>
                <VTextfield>hey there is my bio</VTextfield>
                <VLink>This is my 1st link</VLink>
                <VLink>Instgram</VLink>
                <VLink>Twitter</VLink>
              </div>
              <div>
                <VTextfield>Do you have a question or feature suggestion? Get in touch</VTextfield>
              </div>
            </VResponsive>
          </v-card> -->
          <div class="mobile-view d-flex justify-center align-center">
              <div class="view-container">
                <iframe name="mobile-preview" width="100%" height="100%" scrolling="no" src="http://dev.cookielink.co/account/flynn">
                </iframe>
              </div>
          </div>
        </div>
      </VCol>
    </VRow>
  </admin-layout>
</template>

<style scoped>
.mobile-view {
  height: calc(100% - 94px);
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
import { Link } from '@inertiajs/inertia-vue'
import AdminLayout from "../layouts/AdminLayout.vue";

export default {
  components: { AdminLayout, Link },
  data() {
    return {
      breadcrumbs: [
        {
          text: "App",
          disabled: false,
          href: "/home",
        },
        {
          text: "Home",
          disabled: true,
          href: "/home",
        },
      ],
    }
  },
  computed: {
    user() {
      return this.$page.props.auth.user;
    },
  }
};
</script>
