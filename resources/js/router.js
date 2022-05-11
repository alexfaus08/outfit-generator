import VueRouter from 'vue-router';
import GeneratorShow from './views/GeneratorShow.vue';
import UploadImage from './views/UploadImage.vue';

export default new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: GeneratorShow,
      props: true,
    },
    {
      path: '/upload',
      component: UploadImage,
    },
  ],
});
