<template>

    <div class="top">
    
     <!-- Блок вывода ссылок в шапке-->
        <ul class="topnav">
            <li v-for="link of links" :key="link.title">
                <router-link class="lot" :to="link.href">{{ link.title }}</router-link>
            </li>
        </ul>

      <!-- Кнопка разлогинивания Logout -->
        <button type="button" @click="loGout" class="btn btn-primary">
            Logout
        </button>

    </div>

</template>


<script>

    export default {


        data() {
            return {
                links: [{
                        title: "Home",
                        href: "/"
                    },
                    {
                        title: "Login",
                        href: "/login"
                    },
                    {
                        title: "Register",
                        href: "/register"
                    },
                    {
                        title: "Profile",
                        href: "/profile"
                    }

                ],
                
            }
           
        },
          methods: {
        loGout() {
            
            axios.get("/logout/submit").then(response => {
               auth.logout();
                 delete axios.defaults.headers.common['Authorization'];
                     window.location.replace("/");
               
            });
        }
    }

        
    }

</script>

<style>

    /*   Блок стилизации  шапки Header.vue*/
    .top {
        background-color: #333;
        overflow: hidden;
        margin-bottom: 10px;
    }


    /* Стиль ссылок внутри панели навигации */
    .topnav li {
        float: left;
        padding: 16px 18px;
        font-size: 17px;
        list-style: none;
    }

  /* Убираем подчеркивание ссылок */
    .topnav a {
        text-decoration: none;
    }

    /* Изменить цвет ссылок при наведении */
    .topnav li:hover {
        background-color: #ddd;
        color: black;
    }

   /* Центрирование ссылок в шапке */
     .top ul {
        margin-left: 30%;
    }

</style>
