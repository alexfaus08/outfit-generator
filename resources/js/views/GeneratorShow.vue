<template>
  <div class="container is-max-desktop">
    <div class="box outfit-box">
      <div
        class="media"
      >
        <div class="media-left">
          <ClothingArticle :clothing-item="top" />
        </div>
        <div class="media-right">
          <b-checkbox />
        </div>
      </div>
    </div>
    <ClothingArticle :clothing-item="bottom" />
    <ClothingArticle :clothing-item="shoes" />
    <b-button
      type="is-primary"
      @click="getAllClothes"
    >
      Test
    </b-button>
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
      this.getBottom();
      this.getShoes();
    },
    getTop() {
      axios.get('/api/top/random').then((res) => {
        this.top = res.data.data.image_path;
      });
    },
    getBottom() {
      axios.get('/api/bottom/random').then((res) => {
        this.bottom = res.data.data.image_path;
      });
    },
    getShoes() {
      axios.get('/api/shoe/random').then((res) => {
        this.shoes = res.data.data.image_path;
      });
      console.log(this.shoes);
    },
  },
};
</script>

<style scoped>
.outfit-box {
    margin-top: 10px;
    max-width: 30%;

}
</style>
