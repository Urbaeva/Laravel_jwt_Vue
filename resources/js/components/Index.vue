<template>
    <div>
        index
        <router-link :to="{ name: 'fruit.index' }">Fruits</router-link>
        <router-link :to="{ name: 'user.login' }">Login</router-link>
        <router-link :to="{ name: 'user.registration' }">Register</router-link>
        <router-view></router-view>
    </div>
</template>

<script setup>

</script>


<style scoped>

</style>
