<template>
  <div class="blocktext">

        <div>
           <p>email</p>  <input label="email" v-model="form.email" :error-messages="checkError('email')">

        </div>
        <div>
           <p>password</p>  <input label="password" v-model="form.password" :error-messages="checkError('password')">

        </div>
       
        <div class="m-top">

            <button @click="onLogin">Login</button>

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

<style>
.m-top{
    margin-top: 10px;
};

.blocktext input{
    margin-left: auto;
    margin-right: auto;

}
</style>