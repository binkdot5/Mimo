<template>
<div class="container p-5">
    <h1 class="hidden">Search for a Room</h1>
    <div class="row">
        <div class="col-sm">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Location</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
                <option selected>London, ON</option>
            </select>
            </div>
        </div>
    </div>    
    <div class="row">    
        <div class="col-6">
            <label for="example-datepicker">From:</label>
            <b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker>
        </div>
        <div class="col-6">
            <label for="example-datepicker">To:</label>
            <b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <b-button size="lg" variant="primary">Search</b-button>    
    </div>
</div>
</template>

<script>
    export default {
        data() {
            return {
                value: ''
            }
        }
    }
</script>
