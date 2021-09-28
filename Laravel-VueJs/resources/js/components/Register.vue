<template>
    <div class="container">
        <div class="main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title">Sign Up</h1>
                    <hr />
                </div>
            </div>
            <div class="main-login main-center">
                <form class="form-horizontal" method="post">

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Username</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" @click.prevent="register" class="btn btn-dark btn-lg btn-block login-button">Register</button>
                    </div>
                    <div class="form-group">
                        <p>Already registered <a href="#">Login?</a></p>
                    </div>
                    <!-- <div class="login-register">
                        <a href="index.php">Login</a>
                        </div> -->
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Register.vue",
    data() {
        return {
            email: "",
            username: "",
        };
    },
    methods: {
        register() {
            axios
                .post("register_test", {
                    email: this.email,
                    username: this.username,
                })
                .then((response) => console.log(response));
        },
    },
};
</script>

<style scoped>
/*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

body,
html {
    height: 100%;
    background-repeat: no-repeat;
    background-color: #d3d3d3;
    font-family: "Oxygen", sans-serif;
}

.main{
 	margin-top: 30px;
}

h1.title {
	font-size: 50px;
	font-family: 'Passion One', cursive;
	font-weight: 400;
    color: #fff;
}

hr{
	width: 20%;
    height: 4px;
    color: #fff;
    background: #fff;
    border-radius: 6px;
    margin-bottom: 30px;
}

.form-group{
	margin-bottom: 10px;
}

.main-center[data-v-97358ae4]{
    max-width: 500px;
    margin-bottom: 30px;
    border-radius: 15px;
    padding: 25px 40px;
}

label{
	margin-bottom: 10px;
    font-weight: 500;
}

input.form-control{
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
  border-color: #2554FF;
  box-shadow: none;
}

.main-login{
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
</style>
