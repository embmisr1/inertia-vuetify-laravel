<template>
    <!-- App.vue -->

    <v-app>
        <v-navigation-drawer
            app
            v-model="drawer"
            clipped
            class="scrollbar-thin overflow-y-scroll"
        >
            <SideNavItems :items="sidebarItems" />
        </v-navigation-drawer>

        <v-app-bar app clipped-left short rounded>
            <!-- -->
            <v-app-bar-nav-icon
                v-if="!drawer"
                @click.stop="drawer = !drawer"
            ></v-app-bar-nav-icon>
            <box-icon
                name="x"
                v-else
                :color="isDark ? 'white' : 'black'"
                @click="drawer = !drawer"
            ></box-icon>
            <v-spacer></v-spacer>
            <!-- <img
                src="http://r1.emb.gov.ph/wp-content/uploads/2016/08/cropped-denr-logo2.png"
                alt="DENR - EMB Region 1"
                class="max-h-12 object-cover"
            /> -->

            <v-menu
                offset-x
                left
                z-index="50"
                origin="center center"
                transition="scale-transition"
                class=""
            >
                <template v-slot:activator="{ on, attrs }">
                    <img
                        src="http://r1.emb.gov.ph/wp-content/uploads/2022/03/cropped-DENR-LOGO.png"
                        alt="DENR - EMB Region 1"
                        class="max-h-12 object-cover"
                        v-bind="attrs"
                        v-on="on"
                    />
                </template>
                <RightMenu :items="items" :themeColor="isDark" />
            </v-menu>
        </v-app-bar>

        <!-- Sizes your content based upon application components -->
        <v-main
            class=""
            style="background-color: #f4f5fa !important; overflow-y: hidden"
        >
            <!-- Provides the application the proper gutter -->
            <v-container fluid class="scrollbar-thin overflow-y-scroll">
                <!-- If using vue-router -->
                <slot />
            </v-container>
        </v-main>

        <v-footer app rounded>
            <v-switch
                v-model="$vuetify.theme.dark"
                inset
                label="Vuetify Theme Dark"
                persistent-hint
            ></v-switch>
            <v-spacer></v-spacer>
            &copy; DENR - EMB REGION 1 - UNISYS
        </v-footer>
    </v-app>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import RightMenu from "../components/RightMenu.vue";
import SideNavItems from "../components/SideNavItems.vue";
export default {
    components: {
        Link,
        RightMenu,
        SideNavItems,
    },
    metaInfo: {
        // if no subcomponents specify a metaInfo.title, this title will be used
        title: "Unisys",
        // all titles will be injected into this template
        titleTemplate: "%s | EMB - Region 1 - Unisys",
        link: [
            {
                rel: "icon",
                href: "http://r1.emb.gov.ph/wp-content/uploads/2022/03/DENR-LOGO.png",
            },
        ],
        author: [
            {
                name: "Allan Daryl Ancheta",
                email: "allandaryl.dev@gmail.com",
                github: "allandaryldev",
            },
        ],
    },
    data() {
        return {
            drawer: true,

            items: [
                {
                    title: "Profile",
                    icon: "mdi-account",
                    link: "/app/profile/",
                },
                { title: "Log Out", icon: "mdi-logout", link: "/app/" },
            ],
            sidebarItems: [
                {
                    header: "Firm Management",

                    child: [
                        {
                            name: "Firm Management",
                            link: null,
                            icon: "mdi-view-dashboard",
                            child: [
                                {
                                    name: "Universe Dashboard",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "Universe",
                                    link: "/app/universe/",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "Universe Registration",
                                    link: "/app/universe_form/",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "Activity Log",
                                    link: "",
                                    icon: "mdi-link",
                                },
                            ],
                        },
                    ],
                },
                {
                    header: "Monitoring",

                    child: [
                        {
                            name: "ECC/NCC",
                            link: null,
                            icon: "mdi-clipboard-file",
                            child: [],
                        },
                        {
                            name: "AIR",
                            link: null,
                            icon: "mdi-air-filter",
                            child: [],
                        },
                        {
                            name: "WATER",
                            link: null,
                            icon: "mdi-water",
                            child: [],
                        },
                        {
                            name: "AMBIENT",
                            link: null,
                            icon: "mdi-shield-alert",
                            child: [],
                        },
                        {
                            name: "SOLID WASTE",
                            link: null,
                            icon: "mdi-trash-can",
                            child: [],
                        },
                        {
                            name: "HAZARDOUS WASTE",
                            link: null,
                            icon: "mdi-biohazard",
                            child: [],
                        },
                    ],
                },
                {
                    header: "LEGAL UNIT",

                    child: [
                        {
                            name: "VIOLATIONS",
                            link: null,
                            icon: "mdi-ticket",
                            child: [
                                {
                                    name: "MASTER LIST",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "ACTIVE",
                                    link: "",
                                    icon: "mdi-link",
                                },
                            ],
                        },
                        {
                            name: "TECHNICAL CONFIRENCE",
                            link: null,
                            icon: "mdi-account-group",
                            child: [
                                {
                                    name: "MASTER LIST",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "ACTIVE",
                                    link: "",
                                    icon: "mdi-link",
                                },
                            ],
                        },
                        {
                            name: "COMPLAINTS",
                            link: null,
                            icon: "mdi-clipboard-file",
                            child: [],
                        },
                    ],
                },
                {
                    header: "USER MANAGEMENT",

                    child: [
                        {
                            name: "SYSTEM USERS",
                            link: "/app/users/",
                            icon: "mdi-account-group",
                            child: [],
                        },
                        {
                            name: "USER GROUPS",
                            link: null,
                            icon: "mdi-account-supervisor",
                            child: [],
                        },
                        {
                            name: "POSITION",
                            link: '/app/position',
                            icon: "mdi-account-supervisor",
                            child: [],
                        },
                        {
                            name: "DIVISION",
                            link: '/app/division',
                            icon: "mdi-account-supervisor",
                            child: [],
                        },
                          {
                            name: "UNIT SECTION",
                            link: '/app/unit_section',
                            icon: "mdi-account-supervisor",
                            child: [],
                        },
                    ],
                },
                {
                    header: "INDUSTRY CONFIGURATION",

                    child: [
                        {
                            name: "PROJECT TYPE",
                            link: null,
                            icon: "mdi-file-document-multiple",
                            child: [
                                {
                                    name: "PROJECT TYPE",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "PROJECT SUB-TYPE",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "PROJECT SPECIFIC TYPE",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "PROJECT SPECIFIC SUB-TYPE",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "DETAILED DESCRIPTION",
                                    link: "",
                                    icon: "mdi-link",
                                },
                            ],
                        },
                        {
                            name: "2009 PSIC CODES",
                            link: null,
                            icon: "mdi-file-document-multiple",
                            child: [
                                {
                                    name: "PSIC GROUP",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "PSIC CLASS",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "PSIC SUB CLASS",
                                    link: "",
                                    icon: "mdi-link",
                                },
                            ],
                        },
                    ],
                },
                {
                    header: "APP CONFIGURATION",
                    child: [
                        {
                            name: "REFERENCE PLACES",
                            link: null,
                            icon: "mdi-map",
                            child: [
                                {
                                    name: "REGION ",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "PROVINCE",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "DISTRICT",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "TOWN/CITY",
                                    link: "",
                                    icon: "mdi-link",
                                },
                                {
                                    name: "BARANGAY",
                                    link: "",
                                    icon: "mdi-link",
                                },
                            ],
                        },
                    ],
                },
            ],
        };
    },
    computed: {
        isDark() {
            return this.$vuetify.theme.dark;
        },
    },
};
</script>

<style></style>
