<template>
  <div>
    <b-navbar>
      <template #brand>
        <b-navbar-item
          tag="router-link"
          :to="{ path: '/' }"
        >
          <div class="title">
            Outfit Generator
          </div>
        </b-navbar-item>
      </template>
      <template #start>
        <b-navbar-item
          tag="router-link"
          :to="{ path: '/' }"
        >
          Home
        </b-navbar-item>
        <b-navbar-item
          tag="router-link"
          :to="{ path: '/upload' }"
        >
          Upload
        </b-navbar-item>
      </template>
    </b-navbar>
    <router-view />
  </div>
</template>

<script>
import GeneratorShow from './GeneratorShow.vue';

export default {
  name: 'App',
  components: { GeneratorShow },
};
</script>

<style scoped>

</style>
