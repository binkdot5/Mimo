<template>
    <div class="row">
        <div class="col">
            <button>Property</button>
            <button>Kitchen</button>
            <button>Bathroom</button>
            <button>Room</button>
        </div>
        <div class="col">
            <div class="card" v-bind:icons="putilities">
                <img src="#">
                <h1>{{putilities.utility_heating}}</h1>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            putilities: []
        };
    },
    mounted() {
        var vm = this;
        axios.get('http://127.0.0.1:8000/api/properties')
        .then(function(response) {
            vm.putilities = response.data.data;
            console.log(vm.putilities);
        })
        .catch(function(err) {
            console.log(err);
        });
    }
};
</script>

<style scoped>

</style>