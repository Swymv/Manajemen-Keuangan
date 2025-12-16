<template>
  <div class="container">
    <h2>Target Tabungan</h2>

    <label>Nama Target</label>
    <input v-model="nama" placeholder="Contoh: Membeli Sepatu" />

    <label>Jumlah</label>
    <input v-model="jumlah" placeholder="#400.000" type="number" />

    <button @click="konfirmasi">Konfirmasi</button>

    <BottomNav />
  </div>
</template>

<script>
import BottomNav from "../../components/BottomNav.vue";

export default {
  components: { BottomNav },
  data() {
    return {
      nama: "",
      jumlah: "",
    };
  },
  methods: {
    konfirmasi() {
      this.$router.push("/target/detail");
    },
  },
};
</script>

<style scoped>
.container {
  padding: 20px;
}
label {
  display: block;
  font-size: 12px;
  margin-top: 10px;
}
input {
  width: 100%;
  padding: 12px;
  border-radius: 25px;
  border: 1px solid #ddd;
  margin-top: 5px;
}
button {
  margin-top: 20px;
  width: 100%;
  padding: 12px;
  background: #1eb854;
  border: none;
  border-radius: 25px;
  color: white;
  font-weight: bold;
}
</style>
