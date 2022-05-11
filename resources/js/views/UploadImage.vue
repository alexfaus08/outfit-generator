<template>
  <div class="container main-container has-text-centered is-max-desktop">
    <div class="title">
      Upload
    </div>
    <section>
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
      <b-select
        v-model="clothingType"
        placeholder="Select a clothing type"
        class="mt-2"
      >
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
      <b-message
        type="is-danger"
        class="mt-2"
      >
        <div
          v-for="error in errors"
          :key="error.length"
        >
          <p>
            {{ error }}
          </p>
        </div>
      </b-message>
      <b-button
        type="is-primary"
        @click="uploadImg"
      >
        Save Clothing Item
      </b-button>
    </section>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'UploadImage',
  data() {
    return {
      clothingType: null,
      file: undefined,
      isUploaded: false,
      errors: [],
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
  methods: {
    validateUpload() {
      this.errors = [];
      if (this.clothingType === null) {
        this.errors.push('Please select a clothing type.');
      }
      if (!this.file) {
        this.errors.push('Please upload a file.');
      }
    },

    uploadImg() {
      this.validateUpload();
      console.log(this.file);
      if (this.errors.length === 0) {
        const formData = new FormData();
        formData.append('image', this.file);
        formData.append('clothing_article_type', this.clothingType);
        formData.append('user_id', 1);
        axios.post('/api/clothing_article', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        });
      }
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
