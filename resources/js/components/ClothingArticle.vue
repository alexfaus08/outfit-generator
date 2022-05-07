<template>
  <div class="clothing-article">
    <img
      v-if="clothingItem !== ''"
      :src="clothingItem"
      alt="outfit"
      width="150px"
    >
  </div>
</template>

<script>
export default {
  name: 'ClothingArticle',
  props: {
    clothingItem: {
      type: String,
      required: true,
    },
  },
};
</script>

<style scoped>
img {
    width:  150px;
    height: 140px;
    object-fit: scale-down;
}
</style>
