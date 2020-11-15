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
// import Auth from "./Layout";
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
                    // this.$router.push("/");
                     window.location.replace("/");
               
            });
        }
    }

        
    }

</script>

<style>
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

.danger {
    padding: 20px;
    background-color:rgb(240, 168, 168);
    color: white;
    margin-bottom: 15px;
    width: 60%;
}

</style>
