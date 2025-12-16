<template>
  <div class="landing">

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar">
      <div class="nav-left">
        <h2 class="brand">KeuanganKita</h2>
      </div>

      <div class="nav-right">
        <button class="btn-text" @click="$router.push('/register')">Daftar</button>
        <button class="btn-primary small" @click="$router.push('/login')">Login</button>
      </div>
    </nav>

    <!-- ================= HERO SECTION ================= -->
    <section class="hero">
      <div class="hero-content">
        <h1 class="title">Kendalikan Pengeluaranmu, Sekarang Juga!</h1>
        <p class="subtitle">
          Temukan cara cerdas mengatur uang di saat semuanya mahal.
        </p>

        <button class="btn-primary" @click="$router.push('/anggaran')">Mulai Sekarang</button>

        <div class="hero-buttons">
          <button class="btn-outline" @click="$router.push('/statistik-harga')">
            Statistik Harga
          </button>

          <button class="btn-outline" @click="$router.push('/target')">
            Target Tabungan
          </button>
        </div>
      </div>
    </section>

  </div>
</template>

<script>
export default {
  name: "LandingPage",
};
</script>

<style scoped>
/* ======= GENERAL LAYOUT ======= */
.landing {
  padding: 20px;
  font-family: "Poppins", sans-serif;
  background: #f5f7f8;
  min-height: 100vh;
}

/* ======= NAVBAR ======= */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 15px;
}

.brand {
  font-size: 22px;
  font-weight: bold;
  color: #009f4d;
}

.nav-right {
  display: flex;
  gap: 12px;
}

/* ======= BUTTON STYLES ======= */
.btn-primary {
  background: #009f4d;
  color: white;
  padding: 12px 22px;
  border-radius: 25px;
  border: none;
  font-size: 15px;
  cursor: pointer;
  transition: 0.2s;
}
.btn-primary:hover {
  background: #00833f;
}

.btn-primary.small {
  padding: 7px 16px;
  font-size: 13px;
}

.btn-text {
  background: transparent;
  border: none;
  font-size: 14px;
  cursor: pointer;
  color: #444;
  transition: 0.2s;
}
.btn-text:hover {
  color: #009f4d;
}

.btn-outline {
  background: white;
  color: #009f4d;
  padding: 10px 20px;
  border-radius: 25px;
  border: 1.5px solid #009f4d;
  width: 200px;
  font-size: 14px;
  cursor: pointer;
  margin-top: 10px;
  transition: 0.2s;
}
.btn-outline:hover {
  background: #009f4d;
  color: white;
}

/* ======= HERO SECTION ======= */
.hero {
  text-align: center;
  margin-top: 70px;
}

.title {
  font-size: 32px;
  font-weight: 700;
  color: #222;
}

.subtitle {
  margin-top: 10px;
  font-size: 16px;
  color: #555;
}

.hero-buttons {
  margin-top: 15px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* ======= RESPONSIVE ======= */
@media (min-width: 768px) {
  .hero-buttons {
    flex-direction: row;
    gap: 15px;
  }

  .btn-outline {
    margin-top: 0;
    width: auto;
  }
}
</style>
