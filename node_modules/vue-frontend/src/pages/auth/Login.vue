<template>
  <div class="container">
    <div class="back" @click="$router.back()">‹ Kembali</div>

    <h2>Loging</h2>
    <p class="subtitle">Masukkan email dan Password</p>

    <label>Email</label>
    <input v-model="email" placeholder="email@gmail.com" type="email" />

    <label>Password</label>
    <div class="password-wrapper">
      <input :type="showPassword ? 'text' : 'password'" v-model="password" />
      <span class="toggle" @click="showPassword = !showPassword">👁</span>
    </div>

    <p class="forgot">Forgot Password?</p>

    <button @click="login">LOGIN</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: "",
      password: "",
      showPassword: false,
    };
  },
  methods: {
    login() {
      this.$router.push("/");
    },
  },
};
</script>

<style scoped>
.container {
  padding: 20px;
}
.back {
  cursor: pointer;
  margin-bottom: 15px;
  font-size: 16px;
}
.subtitle {
  font-size: 12px;
  margin-bottom: 20px;
  color: #777;
}
label {
  margin-top: 10px;
  font-size: 13px;
  display: block;
}
input {
  width: 100%;
  padding: 12px;
  margin-top: 5px;
  border-radius: 5px;
  border: none;
  border-bottom: 1px solid #ddd;
}
.password-wrapper {
  position: relative;
}
.toggle {
  position: absolute;
  right: 10px;
  top: 13px;
  cursor: pointer;
}
.forgot {
  text-align: right;
  margin-top: 5px;
  color: #777;
  font-size: 12px;
  cursor: pointer;
}
button {
  margin-top: 30px;
  width: 100%;
  padding: 12px;
  background: #1eb854;
  border: none;
  border-radius: 25px;
  color: white;
  font-weight: bold;
}
</style>