<template>
  <div class="vue-tempalte">
    <div class="container">
           <h1 class="title">Log In</h1>
      <div class="main-center">
        <form>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control form-control-lg" />
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control form-control-lg" />
          </div>

          <button type="submit" class="btn btn-dark btn-lg btn-block">
            Sign In
          </button>

          <p class="forgot-password text-right mt-2 mb-4">
            <a href="/register">Sign up</a>
            <router-link to="#">Forgot password ?</router-link>
          </p>

          <div class="social-icons">
            <ul>
              <li>
                <a href="#"><i class="fa fa-google"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
};
</script>
<style scoped>
body,
html {
  height: 100%;
  background-repeat: no-repeat;
  background-color: #d3d3d3;
  font-family: "Oxygen", sans-serif;
}

.main {
  margin-top: 30px;
}

h1.title {
  font-size: 50px;
  font-family: "Passion One", cursive;
  font-weight: 400;
  color: #fff;
  text-align: center;
  margin: 40px 0;
}

hr {
  width: 20%;
  height: 4px;
  color: #fff;
  background: #fff;
  border-radius: 6px;
  margin-bottom: 30px;
}

.form-group {
  margin-bottom: 10px;
}

.main-center[data-v-6bdc8b8e] {
  max-width: 500px;
  margin-bottom: 30px;
  border-radius: 15px;
  padding: 25px 40px;
  background: #fff;
}

label {
  margin-bottom: 10px;
  font-weight: 500;
}

label.lable-success {
  text-align: center;
  display: inherit;
  background: antiquewhite;
  padding: 15px 0;
  border-radius: 15px;
  color: brown;
  font-weight: 600;
  letter-spacing: 0.5px;
}

input.form-control {
  border: 1px solid #ced4da;
  border-radius: 7px !important;
  font-size: 15px;
}

input,
input::-webkit-input-placeholder {
  font-size: 15px;
  padding-top: 3px;
}

.form-control:focus {
  border-color: #2554ff;
  box-shadow: none;
}

.main-login {
  background-color: #fff;
  /* shadows and rounded borders */
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  /* -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
  /* -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
  /* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
}

.main-center {
  margin-top: 30px;
  margin: 0 auto;
  max-width: 330px;
  padding: 40px 40px;
}

.login-button {
  margin-top: 5px;
}

.login-register {
  font-size: 11px;
  text-align: center;
}
ul{
    display: flex;
    justify-content: center;
}

li{
    border: 1px solid #2554ff;
    padding: 10px 15px;
    list-style: none;
    margin: 0 20px;
    text-align: center;
    width: 100%;
}
.forgot-password a{
    text-decoration: none;
    margin-left: 20px;
}

</style>
