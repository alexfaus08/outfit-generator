<template>
  <body>
    <div class="container main-container has-text-centered is-max-desktop">
      <h1 class="title mt-5">
        Outfit Generator
      </h1>
      <div class="columns is-centered is-mobile">
        <div class="column is-half">
          <div class="box outfit-box">
            <div class="box-content">
              <div class="my-checkbox">
                🔒
                <b-checkbox v-model="topDisabled" />
              </div>
              <div>
                <ClothingArticle :clothing-item="top" />
              </div>
            </div>
          </div>
          <div class="box outfit-box">
            <div class="box-content">
              <div class="my-checkbox">
                🔒
                <b-checkbox v-model="bottomDisabled" />
              </div>
              <div>
                <ClothingArticle :clothing-item="bottom" />
              </div>
            </div>
          </div>
          <div class="box outfit-box">
            <div class="box-content">
              <div class="my-checkbox">
                🔒
                <b-checkbox v-model="shoesDisabled" />
              </div>
              <div>
                <ClothingArticle :clothing-item="shoes" />
              </div>
            </div>
          </div>
          <b-button
            type="is-primary"
            @click="getAllClothes"
            @keyup.space="getAllClothes"
          >
            Generate Outfit!
          </b-button>
        </div>
      </div>
    </div>
  </body>
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
    this.getAllClothes();
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
    },
  },
};
</script>

<style scoped lang="scss">
.box-content {
    display: flex;
    flex-direction: column;
    align-content: center;
}
.outfit-box {
    margin-top: 10px;
    align-content: center;
}
.my-checkbox {
    align-self: end;
    display: flex;
    flex-direction: row;
    align-content: center;
}
</style>
