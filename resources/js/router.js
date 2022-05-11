import VueRouter from 'vue-router';
import GeneratorShow from './views/GeneratorShow.vue';

export default new VueRouter({
  routes: [
    {
      path: '/',
      components: {
        default: GeneratorShow,
      },
      props: true,
      meta: { title: 'Generator' },
    },
  ],
});
