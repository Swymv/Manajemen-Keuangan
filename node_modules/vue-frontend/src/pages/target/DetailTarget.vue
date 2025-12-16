<template>
  <div class="container">
    <div class="back" @click="$router.back()">‹ Kembali</div>

    <h2>Target Tabungan</h2>

    <h3>{{ nama }}</h3>
    <p class="green">Rp. {{ terkumpul.toLocaleString() }}</p>
    <p>Target: Rp. {{ target.toLocaleString() }}</p>

    <div class="progress-wrapper">
      <div class="progress" :style="{ width: progress + '%' }"></div>
    </div>

    <p class="percent">{{ progress }}%</p>

    <h4>Rincian</h4>
    <div class="detail-row">
      <span>Dana Tersisa</span>
      <span>Rp. {{ sisa.toLocaleString() }}</span>
    </div>

    <div class="detail-row">
      <span>Sisa Waktu</span>
      <span>1 Bulan</span>
    </div>

    <BottomNav />
  </div>
</template>

<script>
import BottomNav from "../../components/BottomNav.vue";

export default {
  components: { BottomNav },
  data() {
    return {
      nama: "Membeli Sepatu",
      target: 1000000,
      terkumpul: 500000,
    };
  },
  computed: {
    progress() {
      return Math.round((this.terkumpul / this.target) * 100);
    },
    sisa() {
      return this.target - this.terkumpul;
    },
  },
};
</script>

<style scoped>
.container {
  padding: 20px;
}
.back {
  font-size: 16px;
  cursor: pointer;
  margin-bottom: 10px;
}
.green {
  color: #1eb854;
  font-size: 18px;
  font-weight: bold;
}
.progress-wrapper {
  width: 100%;
  height: 14px;
  background: #e5e5e5;
  border-radius: 20px;
  margin-top: 15px;
}
.progress {
  height: 100%;
  background: #1eb854;
  border-radius: 20px;
}
.percent {
  text-align: center;
  margin-top: 5px;
  font-weight: bold;
}
.detail-row {
  display: flex;
  justify-content: space-between;
  margin-top: 8px;
}
</style>
