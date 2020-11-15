<template>
  <div v-if="authenticated && user">
    <p>Hello, {{ user.name }}</p>

    <!-- <router-link to="/logout">Logout</router-link> -->
</div>

<!-- <router-link to="/login" v-else>Login</router-link> -->
</template>

<script>
export default {
    data() {
        return {
            authenticated: auth.check(),
            user: auth.user
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