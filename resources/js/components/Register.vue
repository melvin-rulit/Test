<template>

    <div class="m-t-w">

        <h2>Register Page </h2>

        <!-- Блок выводит ошибки -->
        <div v-if="errors">
            <div v-for="category in errors" :key="category.errors">
                <div v-for="error in category" :key="error.category">
                    <span>{{ error }}</span>
                </div>
            </div>
        </div>
        <!-- END -->

        <!-- Форма регистрации-->
        <div class="m-top">
            <input placeholder="Enter name" label="Name" v-model="form.name">
        </div>

        <div class="m-top">
            <input placeholder="Enter email" label="email" v-model="form.email">
        </div>

        <div class="m-top">
            <input placeholder="Enter password" label="password" v-model="form.password">
        </div>

        <div class="m-top">
            <input placeholder="Confirmation password" label="password_confirmation"
                v-model="form.password_confirmation">
        </div>
        <!-- END -->

        <!-- Кнопка отправки формы -->
        <div class="m-top">
            <button class="button4" @click="onRegister">Register</button>
        </div>
        <!-- END -->


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


        }
    };

</script>

<style>
    /* Стиль для блока вывода ошибок */
    span {
        color: red;
    }

    /* блок отступа полей ввода и кнопки*/
    .m-top {
        margin-top: 20px;
    }

</style>
