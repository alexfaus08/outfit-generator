<template>
  <div class="columns is-centered is-mobile">
    <div class="column is-half has-text-centered">
      <ClothingArticle :clothing-item="top" />
      <b-button
        type="is-primary"
        @click="getAllClothes"
      >
        Test
      </b-button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import ClothingArticle from '../components/ClothingArticle.vue';

export default {
  name: 'GeneratorShow',
  components: { ClothingArticle },
  data() {
    return {
      top: '',
      topActive: true,
      bottom: '',
      bottomActive: true,
      shoes: '',
      shoesActive: true,
    };
  },
  mounted() {
    axios.get('/api/clothing_article').then((res) => {
      console.log(res);
    });
  },
  methods: {
    getAllClothes() {
      this.getTop();
    },
    getTop() {
      axios.get('/api/top/random').then((res) => {
        console.log(res.data.data.image_path);
        this.top = res.data.data.image_path;
      });
    },
    getBottom() {

    },
    getShoes() {

    },
  },
};
</script>

<style scoped>

</style>
