<template>
        <div>
            <div class="w-25 mt-3">
                <div class="mb-3">
                    <input type="text" class="form-control" v-model="name"  placeholder="name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" v-model="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" v-model="password"  placeholder="password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" v-model="password_confirmation"  placeholder="confirm password">
                </div>
                <input type="submit" @click="store"  value="Submit" class="btn btn-outline-primary">
            </div>
        </div>
</template>


<script >

export default {
    name: "Registration",
    data(){
        return {
            name: null,
            email: null,
            password: null,
            password_confirmation: null
        }
    },

    methods: {
        store() {
            axios.post('/api/users', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            })
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    },
}
</script>


<style scoped>

</style>
