<template>
  <div class="flex items-center justify-center">
    <select v-model="selected" class="bg-transparent text-black text-lg font-semibold">
      <option v-for="bulan in months" :key="bulan" :value="bulan">
        {{ bulan }}
      </option>
    </select>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selected: "Oktober",
      months: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"]
    };
  }
};
</script>
