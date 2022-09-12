<template>
    <div class="overflow-hidden">
        <v-list dense nav class="">
            <div v-if="hasAdminRole || isBasicUserRole">
                <v-subheader>Firm Management</v-subheader>
                <v-list-group prepend-icon="mdi-view-dashboard">
                    <template v-slot:activator>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                Firm Management
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </template>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/universe_dashboard/firm"
                                    as="button"
                                    preserve-scroll
                                    >Universe Dashboard Firm</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/universe_dashboard/lgu"
                                    as="button"
                                    preserve-scroll
                                    >Universe Dashboard LGU</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/universe"
                                    as="button"
                                    preserve-scroll
                                    >Universe
                                </Link>
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense v-if="hasAdminRole || hasCPD">
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/universe_form"
                                    as="button"
                                    preserve-scroll
                                    >Universe Registration</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense v-if="hasAdminRole">
                        <v-list-item-icon>
                            <v-icon> mdi-file </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/universe/logs"
                                    as="button"
                                    preserve-scroll
                                    >Universe Logs</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-group>
            </div>
            <!-- monitoring -->
            <div v-if="hasAdminRole || hasSWM">
                <v-subheader>Monitoring</v-subheader>
                <v-list-item dense>
                    <v-list-item-icon>
                        <v-icon> mdi-trash-can </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-subtitle>
                            <Link
                                href="/app/swm/lce_list"
                                as="button"
                                preserve-scroll
                                >SOLID WASTE</Link
                            >
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
            </div>

            <div v-if="hasAdminRole">
                <!-- legal -->

                <!-- users -->
                <v-subheader>USER MANAGEMENT</v-subheader>
                <v-list-item dense>
                    <v-list-item-icon>
                        <v-icon> mdi-account-group </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-subtitle>
                            <Link href="/app/users" as="button" preserve-scroll
                                >SYSTEM USERS</Link
                            >
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item dense>
                    <v-list-item-icon>
                        <v-icon> mdi-account-supervisor </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-subtitle>
                            <Link
                                href="/app/position"
                                as="button"
                                preserve-scroll
                                >POSITION</Link
                            >
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item dense>
                    <v-list-item-icon>
                        <v-icon> mdi-account-supervisor </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-subtitle>
                            <Link
                                href="/app/division"
                                as="button"
                                preserve-scroll
                                >DIVISION</Link
                            >
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item dense>
                    <v-list-item-icon>
                        <v-icon> mdi-account-supervisor </v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-subtitle>
                            <Link
                                href="/app/unit_section"
                                as="button"
                                preserve-scroll
                                >UNIT SECTION</Link
                            >
                        </v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
                <v-list-group prepend-icon="mdi-account-group">
                    <template v-slot:activator>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                User Access
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </template>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/users_access/users_access_role_list"
                                    as="button"
                                    preserve-scroll
                                    >User Roles</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/users_access/users_access_template_list"
                                    as="button"
                                    preserve-scroll
                                    >User Role Template</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-group>

                <!-- industry conf -->
                <v-subheader>INDUSTRY CONFIGURATION</v-subheader>
                <v-list-group prepend-icon="mdi-file-document-multiple">
                    <template v-slot:activator>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                PROJECT TYPE
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </template>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/project/type"
                                    as="button"
                                    preserve-scroll
                                    >PROJECT TYPE</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/project/subtype"
                                    as="button"
                                    preserve-scroll
                                    >PROJECT SUB-TYPE</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/project/specifictype"
                                    as="button"
                                    preserve-scroll
                                    >PROJECT SPECIFIC TYPE</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/project/specificsubtype"
                                    as="button"
                                    preserve-scroll
                                    >SPECIFIC SUB-TYPE</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-group>
                <v-list-group prepend-icon="mdi-file-document-multiple">
                    <template v-slot:activator>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                2009 PSIC CODES
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </template>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/psic/group"
                                    as="button"
                                    preserve-scroll
                                    >PSIC GROUP</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/sic/class"
                                    as="button"
                                    preserve-scroll
                                    >PSIC CLASS</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item dense>
                        <v-list-item-icon>
                            <v-icon> mdi-link </v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-subtitle>
                                <Link
                                    href="/app/psic/sub-class"
                                    as="button"
                                    preserve-scroll
                                    >PSIC SUB CLASS</Link
                                >
                            </v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-group>
            </div>
        </v-list>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import { page } from "../mixins/";
import _ from "lodash";
export default {
    components: {
        Link,
    },
    mixins: [page],

    props: {
        access: Array,
        items: {
            type: Array,
            require: true,
        },
    },
    data() {
        return {
            selected: 0,
            admins: [
                ["Management", "mdi-account-multiple-outline"],
                ["Settings", "mdi-cog-outline"],
            ],
            cruds: [
                ["Create", "mdi-plus-outline"],
                ["Read", "mdi-file-outline"],
                ["Update", "mdi-update"],
                ["Delete", "mdi-delete"],
            ],
        };
    },
    computed: {
        hasAdminRole() {
            return _.includes(this.access, "ADMIN USER");
        },
        isBasicUserRole() {
            return _.includes(this.access, "BASIC USER");
        },
        hasEMED() {
            return _.includes(this.access, "EMED EDIT");
        },
        hasCPD() {
            return _.includes(this.access, "CPD EDIT");
        },
        hasLEGAL() {
            return _.includes(this.access, "LEGAL EDIT");
        },
        hasMAP() {
            return _.includes(this.access, "MAP EDIT");
        },
        hasSWM() {
            return _.includes(this.access, "SOLIDWASTE EDIT");
        },
    },
};
</script>

<style></style>
