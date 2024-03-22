<template>
    <div class="w-50 mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="fruit in fruits">
                <th scope="row">{{ fruit.id }}</th>
                <td>{{ fruit.name }}</td>
                <td>{{ fruit.price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
import axios from "axios";

export default {
    name: 'Index',

    data(){
        return {
            fruits: null
        }
    },

    methods: {
        getFruits(){
            console.log(this.fruits)
            axios.get('/api/fruits')
                .then(res => {
                    this.fruits = res.data.data;
                    console.log(res);
                })
        }
    },

    mounted() {
        this.getFruits();
    }
}
</script>



<style scoped>

</style>
