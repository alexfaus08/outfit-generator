<template>
  <div class="container main-container has-text-centered is-max-desktop">
    <div class="title">
      Upload
    </div>
    <section>
      <b-field label="Clothing Type">
        <b-select placeholder="Select a clothing type">
          <option value="top">
            Top
          </option>
          <option value="bottom">
            Bottom
          </option>
          <option value="shoes">
            Shoes
          </option>
          <option value="fullbody">
            Fullbody
          </option>
        </b-select>
      </b-field>
      <div v-if="!isUploaded">
        <b-upload
          v-model="file"
          drag-drop
          @input="isUploaded = true"
        >
          <section class="section">
            <div class="content has-text-centered">
              <p>
                <b-icon
                  icon="upload"
                  size="is-large"
                />
              </p>
              <p>Drop your image here or click to upload</p>
            </div>
          </section>
        </b-upload>
      </div>
      <div v-else>
        <img
          class="preview-img"
          :src="imgUrl"
          alt="uploaded image"
        >
      </div>
      <b-button type="is-primary">
        Save Clothing Item
      </b-button>
    </section>
  </div>
</template>

<script>
export default {
  name: 'UploadImage',
  data() {
    return {
      file: {},
      isUploaded: false,
    };
  },
  computed: {
    imgUrl() {
      let url = '';
      if (this.isUploaded) {
        url = URL.createObjectURL(this.file);
      }
      return url;
    },
  },
};
</script>

<style scoped>
.preview-img {
    max-width: 50vw;
    max-height: 35vh;
}
</style>
