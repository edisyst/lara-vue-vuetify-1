<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <v-list dense>
                <v-subheader>Menu Laterale</v-subheader>
                <v-list-item-group
                    v-model="selectedItem"
                    color="primary"
                >
                    <v-list-item
                        v-for="(item, i) in items"
                        :key="i"
                        :to="item.link"
                    >
                        <v-list-item-icon>
                            <v-icon right v-text="item.icon"></v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title v-text="item.text"></v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Titolo della mia app SPA</v-toolbar-title>
        </v-app-bar>

        <v-main>
            <h3>Qui ho il main content</h3>
            <p>HomeController invece che linkare alla view home.blade linka a spa.blade</p>
            <p>spa.blade non estende nessun layout e il body è interamente occupato dal
                div#app</p>
            <p>Passando per HomeController, ho la protezione auth in spa.blade</p>

            <router-view></router-view>
        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: null,
        selectedItem: 1,
        items: [
            { text: 'Dashboard', icon: 'mdi-home', link: '/' },
            { text: 'Contacts', icon: 'mdi-account', link: 'contacts' },
            { text: 'Log Out', icon: 'mdi-logout', link: '/logout' },
        ],
    }),
}
</script>
