<template>
    <div class="with-block">

        <div class="m-op">
            <h2>Login Page</h2>

            <!-- Блок выводит ошибки -->
            <div class="position " v-if="errors">
                <div v-for="category in errors" :key="category.errors">
                    <div v-for="error in category" :key="error.category">
                        <span>{{ error.category }}</span>
                    </div>
                </div>
            </div>
            <!-- END -->

            <div class="m-top">
                <input placeholder="Enter email" type="email" v-model="form.email"
                    :error-messages="checkError('email')">

            </div>
            <div class="m-top">
                <input placeholder="Enter password" type="password" v-model="form.password"
                    :error-messages="checkError('password')">

            </div>

            <div class="m-top">

                <button class="button4" @click="onLogin">Login</button>

            </div>

        </div>


    </div>
</template>
<script>
    import Auth from "../helpers/Auth";
    export default {
        data() {
            return {
                form: {
                    email: null,
                    password: null
                },

                errors: {},


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
                          Auth.login(response.data.user);
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
    /* Кнопка */
    .button4 {
        position: relative;
        display: inline-block;
        font-family: Arial, Helvetica, FreeSans, "Liberation Sans", "Nimbus Sans L", sans-serif;
        font-size: 1em;
        font-weight: 700;
        color: rgb(245, 245, 245);
        text-shadow: 0 -1px rgba(0, 0, 0, .1);
        text-decoration: none;
        user-select: none;
        padding: .3em 1em;
        outline: none;
        border: none;
        border-radius: 3px;
        background: #2c0b77 linear-gradient(#0f78ff, #0f78ff);
        box-shadow: inset #0f78ff 0 -1px 1px, inset 0 1px 1px #98ff98, #0f78ff 0 0 0 1px, rgba(0, 0, 0, .3) 0 2px 5px;
        -webkit-animation: pulsate 1.2s linear infinite;
        animation: pulsate 1.2s linear infinite;
    }

    .button4:hover {
        -webkit-animation-play-state: paused;
        animation-play-state: paused;
        cursor: pointer;
    }

    .button4:active {
        top: 1px;
        color: #fff;
        text-shadow: 0 -1px rgba(0, 0, 0, .3), 0 0 5px #ffd, 0 0 8px #fff;
        box-shadow: 0 -1px 3px rgba(0, 0, 0, .3), 0 1px 1px #fff, inset 0 1px 2px rgba(0, 0, 0, .8), inset 0 -1px 0 rgba(0, 0, 0, .05);
    }

    @-webkit-keyframes pulsate {
        50% {
            color: #fff;
            text-shadow: 0 -1px rgba(0, 0, 0, .3), 0 0 5px #ffd, 0 0 8px #fff;
        }
    }

    @keyframes pulsate {
        50% {
            color: #fff;
            text-shadow: 0 -1px rgba(0, 0, 0, .3), 0 0 5px #ffd, 0 0 8px #fff;
        }
    }


    /* блок ошибок */
    span {
        color: red;
    }

</style>
