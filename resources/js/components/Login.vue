<template>
    <div>

<div class="m-op">
        <h2>Login Page</h2>

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
            <input placeholder="Enter email" type="email" v-model="form.email" :error-messages="checkError('email')">

        </div>
        <div class="m-top">
            <input placeholder="Enter password" type="password" v-model="form.password"
                :error-messages="checkError('password')">

        </div>

        <div class="m-top">

            <button @click="onLogin">Login</button>

        </div>

    </div>


    </div>
</template>
<script>
    // import Auth from "../helpers/Auth";
    export default {
        data() {
            return {
                form: {
                    email: null,
                    password: null
                },

                errors: {}
            };
        },

        methods: {
            onLogin() {
                this.errors = {};

                axios
                    .post("/api/login/submit", this.form)
                    .then(response => {
                        if (response.data.success) {
                            this.$router.push("/");
                            //  Auth.login(response.data.user);
                        }
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors;
                    });
            },

            checkError(field) {
                return this.errors.hasOwnProperty(field) ? this.errors[field] : [];
            },

            onKeyup(e) {
                if (e.code === "Enter") {
                    this.onLogin();
                }
            }
        }
    };

</script>
