<template>
    <div class="container">
        <Header/>
            <h1 class="title" style="position:relative;left:42%;color:white">Cập nhật</h1>
            <main>
                <form method="POST">
                    <input type="hidden" name="id" />
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input
                            class="form-control"
                            name="name"
                            placeholder="name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input
                            class="form-control"
                            name="username"
                            placeholder="username"
                        />
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input
                            class="form-control"
                            name="email"
                            placeholder="email"
                        />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Password"
                        />
                    </div>

                    <button
                        type="submit"
                        name="submit"
                        value="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                </form>
            </main>
        <Footer/>
    </div>
</template>
<script>
import Header from './Header';
import Footer from './Footer';
export default {
    name : 'Edit.vue',
    components : {
        Header,
        Footer,
    },
};
</script>
<style scoped>


</style>
