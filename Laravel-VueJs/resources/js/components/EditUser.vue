<template>
  <Header />
  <div class="container">
    <h1 class="title">Update</h1>
    <main class="bg-dark">
      <form method="post">
        <input type="hidden" name="id" />
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" name="name" placeholder="name" v-model="user.name" />
        </div>
        <div class="form-group">
          <label for="username">User Name</label>
          <input class="form-control" name="username" placeholder="username" v-model="user.username"/>
        </div>
        <div class="form-group">
          <label for="Email">Email</label>
          <input class="form-control" name="email" placeholder="email" v-model="user.email" />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" v-model="user.password" />
        </div>
        <div class="form-group-btn">
          <button type="submit" name="submit" value="submit" class="btn btn-outline-info" @click.prevent="updateUser" >
            Update
          </button>
        </div>
      </form>
    </main>
  </div>
  <Footer />
</template>
<script>
import Header from "./Header";
import Footer from "./Footer";
export default {
  name: "Edit.vue",
  components: {
    Header,
    Footer,
  },
  data() {
    return {
      user: {
        name: "",
        email: "",
        username: "",
        password: "",
        password_confirmation: "",
      },
    };
  },
  mounted() {
    var current_url = window.location.href;
    var indexOf = current_url.lastIndexOf("/");
    var value_indexOf = current_url.substr(indexOf + 1);
    current_url = "/api/user-id/" + value_indexOf;
    axios.get(current_url).then((response) => {
      if (response.data.id) {
        this.user = response.data;
      } else {
        window.location.href = "/home";
      }
    });
  },
    methods: {
        updateUser(){
            axios
            .post("/edit-user/"+this.user.id+"", {
                name: this.user.name,
                email: this.user.email,
                username: this.user.username,
                password: this.user.password,
            })
            .then((response) => {
                console.log(response.data);
            })
              window.location.href = "/home";
        }
    }
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");
.title {
  margin: 30px 0;
  text-align: center;
  font-weight: 500;
  text-transform: uppercase;
  color: #2b5e90;
  font-family: "Poppins", sans-serif;
}

main[data-v-bc956840] {
  margin: 30px 10px;
  padding: 30px 50px;
  box-shadow: 3px 3px 10px rgb(0 0 0);
  border-radius: 5px;
}

label {
  color: #98a0a7;
  font-size: 18px;
}

.btn {
  padding: 10px 80px;
  background: #17a2b8;
  color: #fff;
  border: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  outline: none;
  position: relative;
  overflow: hidden;
}

.form-group-btn {
  text-align: center;
}

.btn:focus {
  border: red;
}
</style>
