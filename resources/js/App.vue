<template>
<div class="flex flex-col items-center justify-center h-screen w-screen">
<div class="w-full">
  <p class="text-xl">Gratitude Journal</p>
</div>

  <div class="w-full rounded overflow-hidden shadow-lg pb-10" v-for="gratitude in this.gratitudes" :key="gratitude.id">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ gratitude.name }}</div>
      <p class="text-gray-700 text-base">
        {{ gratitude.description }}
      </p>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import axios from 'axios';

export default {
  name: 'App',
  data () {
    return {
      gratitudes: []
    }
  },
  mounted () {
    this.fetchGratitudes();
  },
  methods: {
    fetchGratitudes: function () {
      axios.get('./gratitudes')
      .then(response => {
        this.gratitudes = response.data
      })
    }
  }
};
</script>