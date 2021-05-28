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
        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({ drawer: null }),
}
</script>
