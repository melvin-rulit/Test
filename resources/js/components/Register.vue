<template>
<div>


<div>
<input label="Name" v-model="form.name" :error-messages="checkError('name')">

</div>
<div>
<input label="email" v-model="form.email" :error-messages="checkError('email')">

</div>
<div>
<input label="password" v-model="form.password" :error-messages="checkError('password')">

</div>
<div>
<input label="password_confirmation" v-model="form.password_confirmation" :error-messages="checkError('password_confirmation')">

</div>
<div>

<button @click="onRegister">Register</button>

</div>


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
                        this.$router.push("/");
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