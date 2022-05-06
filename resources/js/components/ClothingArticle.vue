<template>
  <div v-if="clothingItem !== ''">
    <img
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

</style>
