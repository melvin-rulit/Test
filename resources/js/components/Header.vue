<template>

    <div class="top">
        <ul class="topnav">
            <li v-for="link of links" :key="link.title">
                <router-link class="lot" :to="link.href">{{ link.title }}</router-link>
            </li>
            
        </ul>

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
                        title: "App",
                        href: "/App"
                    }
                ]
            }
         },
          methods: {
            loGout() {

                axios.get("/api/logout/submit").then(response => {
                    if (response.data.success) {
                        // Auth.logout();
                        this.$router.push("/");
                    }
                });
            }
        }
    }

</script>

<style scoped>
    /* Header*/
    .top {
        background-color: #333;
        overflow: hidden;
        margin-bottom: 10px;

    }

    .top ul {
        margin-left: 30%;

    }


    /* Style the links inside the navigation bar */
    .topnav li {
        float: left;

        /* text-align: center; */
        padding: 16px 18px;

        font-size: 17px;
        list-style: none;
    }

    .topnav a {

        text-decoration: none;

    }

    /* Change the color of links on hover */
    .topnav li:hover {
        background-color: #ddd;
        color: black;
    }

    /* Add a color to the active/current link
.topnav li.active {
    background-color: #4CAF50;
    color: white;
} */

</style>
