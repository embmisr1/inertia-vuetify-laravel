<template>
    <v-app>
        <!-- v-model="drawer" -->
        <v-navigation-drawer absolute clipped bottom permanent app >
            <v-list nav dense>
                <v-list-item-group
                    active-class="deep-purple--text text--accent-4"
                >
                    <v-list-item>
                        <v-list-item-title>Foo</v-list-item-title>
                    </v-list-item>

                    <v-list-item>
                        <v-list-item-title>Bar</v-list-item-title>
                    </v-list-item>

                    <v-list-item>
                        <v-list-item-title>Fizz</v-list-item-title>
                    </v-list-item>

                    <v-list-item>
                        <v-list-item-title>Buzz</v-list-item-title>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>
        <v-app-bar app clipped-left flat>
            <!-- <v-switch
                v-model="$vuetify.theme.dark"
                hint="This toggles the global state of the Vuetify theme"
                inset
                label="Vuetify Theme Dark"
                persistent-hint
            ></v-switch> -->
        </v-app-bar>

        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-container fluid>
                <!-- <flash-messages /> -->
                <slot />
            </v-container>
        </v-main>

        <!-- <v-footer app>
        </v-footer> -->
    </v-app>
</template>

<script>
import FlashMessages from '../components/FlashMessages.vue'
export default {
    components:{
        FlashMessages
    },
    data() {
        return {
            drawer: false,
        };
    },
};
</script>

<style></style>
