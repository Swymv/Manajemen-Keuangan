<template>
  <div class="flex items-center space-x-3 p-3 rounded-lg shadow bg-white mb-3 w-full">
    <div :style="{ background: color }" class="w-10 h-5 rounded"></div>
    <p class="flex-1 font-medium">{{ name }}</p>
    <button class="text-gray-400 text-lg">⋮</button>
  </div>
</template>

<script>
export default {
  props: {
    color: String,
    name: String
  }
};
</script>
