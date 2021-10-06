<template>
    <Home v-if="load" />
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
        var user = JSON.parse(localStorage.getItem('user'));
        if (Date.now() > user.data.time) {
            //check time now and expire time of localStorage
            localStorage.removeItem("user");
            //window.location.href = '/login';
        }
        if(user == null){
            this.load = false;
            window.location.href = '/login';
        }
    },
}
</script>

<style scoped>

</style>
