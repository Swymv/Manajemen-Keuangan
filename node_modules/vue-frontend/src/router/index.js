import { createRouter, createWebHistory } from "vue-router";

// Pages
import LandingPage from "../pages/LandingPage.vue";

// Auth
import Login from "../pages/auth/Login.vue";
import Register from "../pages/auth/Register.vue";

// Anggaran
import InputAnggaran from "../pages/anggaran/InputAnggaran.vue";
import DetailAnggaran from "../pages/anggaran/DetailAnggaran.vue";

// Target Tabungan
import InputTarget from "../pages/target/InputTarget.vue";
import DetailTarget from "../pages/target/DetailTarget.vue";

// Statistik Harga
import StatistikHarga from "../pages/StatistikHarga.vue";

const routes = [
  { path: "/", component: LandingPage },

  // Auth
  { path: "/login", component: Login },
  { path: "/register", component: Register },

  // Anggaran
  { path: "/anggaran", component: InputAnggaran },
  { path: "/anggaran/detail", component: DetailAnggaran },

  // Target Tabungan
  { path: "/target", component: InputTarget },
  { path: "/target/detail", component: DetailTarget },

  // Statistik Harga ––– kamu tambahkan ROUTE INI
  { path: "/statistik-harga", component: StatistikHarga },
];

export default createRouter({
  history: createWebHistory(),
  routes,
});
