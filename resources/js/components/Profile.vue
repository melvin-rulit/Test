<template>
    <div class="m-t-w">

        <!-- Блок, который виден если прошла  Авторизация -->
        <div v-if="authenticated && user">
            <h4>Приветствую <span>{{ user.name}}</span></h4>

            <ul class="m-t-w">
                <li class="">
                    <p>Ваш идентификатор - {{ user.id }}</p>
                </li>
                <li class="m-t-w">
                    <p>Вы зарегестрировались - {{ user.created_at }}</p>
                </li>
                <li class="m-t-w">
                    <p>Ваш email - {{ user.email }}</p>
                </li>
            </ul>
        </div>

        <!-- Блок, который виден если нет Авторизации -->
        <div class="danger" v-else>
            <h4>Вы не вошли в сиситему и поэтому не видите сожержимое этой страницы</h4>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                authenticated: auth.check(),
                user: auth.user,

            };
        },

        mounted() {
            Event.$on('userLoggedIn', () => {
                this.authenticated = true;
                this.user = auth.user;
            });
        },
    }

</script>

<style>
    /* Стиль для блока, который виден если нет Авторизации  */
    .danger {
        padding: 20px;
        background-color: rgb(240, 168, 168);
        color: white;
        margin-bottom: 15px;
        width: 60%;
    }

</style>
