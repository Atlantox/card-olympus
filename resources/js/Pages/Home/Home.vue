<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';

defineOptions({layout: MainLayout})

const props = defineProps({
    'articles': Array
})

console.log(props.articles[0])
</script>


<template>
    <h1>Card Olympus</h1>

    <h2>Articles</h2>
    <div>
        <div v-for="article in props.articles" :key="article.id">
            {{ article.type }}
        </div>
    </div>
</template>


<style scoped>
body{
    background-color: #ababab;
}
</style>    