<template lang="">
    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
        <img
            style="width: 70px; height: 70px"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa7hM_9p3u_suqo7N50BxD89912rUj3BsCsy0fS0sC9NwYQkzwCKGAO_8OcRseSd7jork&usqp=CAU"
        />
        <form
            class="navbar-form navbar-left"
            style="display: -webkit-inline-box"
        >
            <div class="form-group">
                <input
                    type="text"
                    name="keyword"
                    class="form-control"
                    placeholder="Search cars"
                />
            </div>
            <button type="submit" class="btn btn-outline-info">Search</button>
        </form>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <button type="button" class="btn btn-outline-success">
                    <a href="/login">Logout</a>
                </button>
            </li>
        </ul>
    </nav>
</template>
<script>
export default {};
</script>
<style lang=""></style>
