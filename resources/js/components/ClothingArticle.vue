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

<style scoped lang="css">
img {
    width:  150px;
    height: 140px;
    object-fit: scale-down;
}
@media screen and (min-width: 800px){
    img {
        transform: rotate(90deg);
    }
}
</style>
