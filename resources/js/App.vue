<template>
<div class="flex items-center justify-center space-y-4 min-h-screen flex-col">
  <div class="min-w-full">
    <h1 class="text-6xl text-center ">Gratitude Journal</h1>
  </div>

  <div class="rounded overflow-hidden min-w-md min-h-md bg-white shadow-lg p-4" v-for="gratitude in this.gratitudes" :key="gratitude.id">
      <div class="font-bold text-xl mb-2">{{ gratitude.name }}</div>
        <div class="rounded overflow-hidden bg-gray-200 p-2">
          <p class="text-black text-base">
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