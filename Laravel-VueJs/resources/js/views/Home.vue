<template>

    <Home v-if="load"/>
</template>
<script>
import Home from '../components/Home';
export default {
    name : 'Home-views',
    data() {
        return {
            load : true
        }
    },
    components : {
        Home
    },
    mounted() {
        var user = localStorage.getItem('user');
        if(user == null){
            this.load = false;
            window.location.href = '/login';
        }
    },
}
</script>

<style scoped>

</style>
