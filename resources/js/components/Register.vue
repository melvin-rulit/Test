<template>
   <div class="m-op">
<h2>Register Page</h2>

<!-- Блок выводит ошибки -->
        <div v-if="errors">
            <div v-for="category in errors" :key="category.errors">
                <div class="m-alert m-alert--outline alert alert-danger alert-dismissible" role="alert"
                    v-for="error in category" :key="error.category">
                    <span>{{ error }}</span>
                </div>
            </div>
        </div>
<!-- END -->
        <div class="m-top">
             <input placeholder="Enter name" label="Name" v-model="form.name" :error-messages="checkError('name')">

        </div>
        <div class="m-top">
            <input placeholder="Enter email" label="email" v-model="form.email" :error-messages="checkError('email')">

        </div>
        <div class="m-top">
             <input placeholder="Enter password" label="password" v-model="form.password" :error-messages="checkError('password')">

        </div>
        <div class="m-top">
           <input placeholder="Confirmation password" label="password_confirmation" v-model="form.password_confirmation"
                :error-messages="checkError('password_confirmation')">

        </div>
        <div class="m-top">

            <button class="button4" @click="onRegister">Register</button>

        </div>
        <v-layout row>
            <v-text-field label="Confirm Password" v-model="form.password_confirmation" type="password"></v-text-field>
        </v-layout>

    </div>

</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                    password_confirmation: null
                },

                errors: {}
            };
        },

        methods: {
            onRegister() {
                this.errors = {};

                axios
                    .post("/api/register/submit", this.form)
                    .then(response => {
                        if (response.data.success) {
                            this.$router.push("/")
                        }
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors;
                    });
            },

            checkError(field) {
                return this.errors.hasOwnProperty(field) ? this.errors[field] : [];
            }
        }
    };

</script>

<style>

.m-top{
    margin-top: 20px;
}

.m-op{
/* text-align: center; */
margin-top: 10%;
margin-left: 15%;
}
</style>