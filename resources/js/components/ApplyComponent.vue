<template>
    <div>
        <form @submit="formSubmit">
         <div id="app">
        <button v-if="show" type="submit" class="btn btn-success" style="width: 100%;">Apply</button>
        <div v-else class="alert alert-success">
        Application sent
        </div>
        </div>
        
        </form>
        
    </div>
</template>

<script>
    export default {
        props:["jobid"],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                'show':true
            }
        }
    }
</script>
