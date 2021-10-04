<template>
    <div class="container">
        <Header/>
        <main>
            <p>List user</p>
        </main>
        <Footer/>
    </div>
</template>

<script>
import Header from './Header';
import Footer from './Footer';
export default {
    name : 'Home.vue',
    components : {
        Header,
        Footer
    }
}
</script>

<style scoped>
body{

}
</style>
