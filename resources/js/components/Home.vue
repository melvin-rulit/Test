<template>
    <div>
                   <!-- вывод сообшений о успешной регистрации-->
         
            <div class="alert alert-success" v-if="success">
                <p>Вы успешно авторизованны </p>
            </div>


    </div>
</template>

<script>
    export default {
data() {
            return {
                
                success : false


            };
    },
    // props: ['success']
    }
    

</script>

<style>

</style>

