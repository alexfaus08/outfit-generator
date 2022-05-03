<template>
    <div class="columns is-centered is-mobile">
        <div class="column is-half has-text-centered">
            <ClothingArticle />
            <ClothingArticle />
            <ClothingArticle />
            <b-button type="is-primary" >
                Test
            </b-button>
        </div>
    </div>
</template>

<script>
import ClothingArticle from "../components/ClothingArticle";
import axios from 'axios';

export default {
    name: "GeneratorShow",
    components: {ClothingArticle},
    mounted() {
        axios.get('/api/clothing_article').then((res) => {
            console.log(res);
        });
    }
}
</script>

<style scoped>

</style>
