<template>
  <div class="min-h-screen bg-gradient-to-b from-teal-300 to-white p-4">

    <!-- Tombol Kembali -->
    <button
      @click="$router.back()"
      class="bg-white shadow-md rounded-full w-10 h-10 flex items-center justify-center mb-4"
    >
      ←
    </button>

    <!-- Dropdown Bulan -->
    <div class="flex justify-center mb-4">
      <select
        v-model="selectedMonth"
        class="px-4 py-2 bg-white rounded-lg shadow-md border"
      >
        <option v-for="m in months" :key="m">{{ m }}</option>
      </select>
    </div>

    <!-- Judul -->
    <h2 class="text-center text-xl font-bold text-gray-800 mb-6">
      Statistik Harga Tiap Pasar
    </h2>

    <!-- Chart -->
    <div class="w-full max-w-md mx-auto">
      <canvas ref="chartCanvas" height="180"></canvas>
    </div>

    <!-- Kartu Pasar 1 -->
    <div class="mt-10 max-w-md mx-auto p-4 bg-white rounded-xl shadow-md border">
      <div class="flex items-center gap-2">
        <div class="w-5 h-5 rounded-full bg-green-400"></div>
        <p class="font-semibold">Pasar Hegarmanah</p>
      </div>

      <button
        class="w-10 h-10 bg-gray-100 rounded-lg shadow flex items-center justify-center mt-3"
      >
        ⋮
      </button>
    </div>

    <!-- Kartu Pasar 2 -->
    <div class="mt-4 max-w-md mx-auto p-4 bg-white rounded-xl shadow-md border">
      <div class="flex items-center gap-2">
        <div class="w-5 h-5 rounded-full bg-red-400"></div>
        <p class="font-semibold">Pasar Sumber Berkah</p>
      </div>

      <button
        class="w-10 h-10 bg-gray-100 rounded-lg shadow flex items-center justify-center mt-3"
      >
        ⋮
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import Chart from "chart.js/auto";

const chartCanvas = ref(null);

const months = ["Januari","Februari","Maret","April","Mei","Juni"];
const selectedMonth = ref("Maret");

onMounted(() => {
  new Chart(chartCanvas.value, {
    type: "bar",
    data: {
      labels: ["Beras", "Minyak", "Gula", "Telur", "Daging"],
      datasets: [
        {
          label: "Pasar 1",
          backgroundColor: "#22c55e",
          data: [12, 9, 10, 14, 20],
        },
        {
          label: "Pasar 2",
          backgroundColor: "#ef4444",
          data: [14, 11, 9, 13, 18],
        }
      ]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: { beginAtZero: true },
      }
    }
  });
});
</script>

<style>
/* Agar efek mobile seperti desain */
body {
  background-color: #fff;
}
</style>
