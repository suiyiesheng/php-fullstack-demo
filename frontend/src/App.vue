<script setup>
import HelloWorld from './components/HelloWorld.vue'
//import { ref } from 'vue';
// const count = ref(0)
//const msg = "Hello Vue3 with Template!"
</script>

<template>
  <!-- <h1>{{ msg }}</h1>
  <p>当前时间：{{ new Date().toLocaleString() }}</p>
  <button @click="count++">点击了{{ count }}次</button>
  <p v-if="count > 3">点击次数大于3！</p>
  <ul>
    <li v-for="n in count" :key="n">第{{ n }}次点击</li>
  </ul> -->
  <HelloWorld name="小明" />
</template>

<style scoped></style>
