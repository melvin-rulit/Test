<template>
    <div class="m-to">

    <!-- Блок, который виден если прошла  Авторизация -->
        <div v-if="authenticated && user">
            <h4>Приветствую <span>{{ user.name}}</span></h4>

            <ul class="m-top">
                <li class="">
                    <p>Ваш идентификатор - {{ user.id }}</p>
                </li>
                <li class="m-top">
                    <p>Вы зарегестрировались - {{ user.created_at }}</p>
                </li>
                <li class="m-top">
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

.m-to{
       margin-top: 10%;
        margin-left: 15%;
}

.danger {
    padding: 20px;
    background-color:rgb(240, 168, 168);
    color: white;
    margin-bottom: 15px;
    width: 60%;
}

    /* Style the container with a rounded border, grey background and some padding and margin */
    .container {
        border: 2px solid #ccc;
        background-color: #eee;
        border-radius: 5px;
        padding: 16px;
        margin: 16px 0;
    }

    /* Clear floats after containers */
    .container::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Float images inside the container to the left. Add a right margin, and style the image as a circle */
    .container img {
        float: left;
        margin-right: 20px;
        border-radius: 50%;
    }

    /* Increase the font-size of a span element */
    .container span {
        font-size: 20px;
        margin-right: 15px;
    }

    /* Add media queries for responsiveness. This will center both the text and the image inside the container */
    @media (max-width: 500px) {
        .container {
            text-align: center;
        }

        .container img {
            margin: auto;
            float: none;
            display: block;
        }
    }

</style>
