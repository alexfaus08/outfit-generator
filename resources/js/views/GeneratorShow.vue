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
          <b-checkbox v-model="topDisabled" />
        </div>
      </div>
    </div>
    <div class="box outfit-box">
      <div
        class="media"
      >
        <div class="media-left">
          <ClothingArticle :clothing-item="bottom" />
        </div>
        <div class="media-right">
          <b-checkbox v-model="bottomDisabled" />
        </div>
      </div>
    </div>
    <div class="box outfit-box">
      <div
        class="media"
      >
        <div class="media-left">
          <ClothingArticle :clothing-item="shoes" />
        </div>
        <div class="media-right">
          <b-checkbox v-model="shoesDisabled" />
        </div>
      </div>
    </div>
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
      topDisabled: false,
      bottom: '',
      bottomDisabled: false,
      shoes: '',
      shoesDisabled: false,
    };
  },
  mounted() {
    axios.get('/api/clothing_article').then((res) => {
      console.log(res);
    });
  },
  methods: {
    getAllClothes() {
      if (!this.topDisabled) {
        this.getTop();
      }
      if (!this.bottomDisabled) {
        this.getBottom();
      }
      if (!this.shoesDisabled) {
        this.getShoes();
      }
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
