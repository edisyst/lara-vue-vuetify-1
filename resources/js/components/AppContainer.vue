<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <!--  -->
            elementi del menu
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>Qui ho il titolo</v-toolbar-title>
        </v-app-bar>

        <v-main>
            <!--  -->
            qui ho il main

            <p>HomeController invece che linkare alla view home.blade linka a spa.blade</p>
            <p>spa.blade non estende nessun layout e il body è interamente occupato dal
                div#app</p>
            <p>Passando per HomeController, ho la protezione auth in spa.blade</p>
        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({ drawer: null }),
}
</script>
