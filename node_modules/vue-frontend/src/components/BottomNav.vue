<template>
  <div class="nav">
    <router-link to="/anggaran">Kelola Anggaran</router-link>
    <router-link to="/target">Target Tabungan</router-link>
  </div>
</template>

<style scoped>
.nav {
  position: fixed;
  bottom: 0;
  width: 100%;
  padding: 12px;
  display: flex;
  justify-content: space-around;
  border-top: 1px solid #ddd;
  background: white;
}
a {
  text-decoration: none;
  color: #1eb854;
  font-weight: 500;
}
</style>
