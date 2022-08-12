<template>
    <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
        v-model="modal.active"
        persistent
        :fullscreen="isFullScreen"
    >
        <template v-slot:default="dialog">
            <form @submit.prevent="submitForm">
                <v-card>
                    <v-toolbar>
                        <v-toolbar-title>Users Role/s</v-toolbar-title>

                        <v-spacer></v-spacer>
                        <b-tooltip
                            label="Toggle FullScreen"
                            position="is-left"
                            type="is-dark"
                        >
                            <box-icon
                                :name="
                                    isFullScreen
                                        ? 'exit-fullscreen'
                                        : 'fullscreen'
                                "
                                @click="isFullScreen = !isFullScreen"
                                class="cursor-pointer"
                            ></box-icon>
                        </b-tooltip>
                        <!-- <box-icon name="exit-fullscreen"></box-icon> -->
                    </v-toolbar>

                    <!-- item-value="access_role_assigned.id" -->
                    <v-card-text>
                        <v-select
                            :items="templates"
                            filled
                            label="Select Role Template"
                            v-model="selected_template"
                            item-text="access_template"
                            return-object
                        ></v-select>
                        <div class="grid grid-cols-2 gap-2">
                            <div v-for="role in roles" :key="role.id">
                                <v-checkbox
                                    v-model="selected_roles"
                                    :label="role.access_role"
                                    :value="role.id"
                                    hide-details
                                    color="dark"
                                ></v-checkbox>
                            </div>
                        </div>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="red lighten-1" @click="close"
                            >Close</v-btn
                        >
                        <v-btn color="success" type="submit" :disabled="!selected_roles">Save</v-btn>
                    </v-card-actions>
                </v-card>
            </form>
        </template>
    </v-dialog>
</template>

<script>
import { thisExpression } from "@babel/types";

export default {
    props: {
        modal: Object,
        close: Function,
    },
    data() {
        return {
            isFullScreen: false,
            selected_template: {},
            selected_roles: [],
            form_type: "create",
        };
    },
    computed: {
        active_modal() {
            return this.modal.active;
        },
        templates() {
            return this.modal.data.query_access_template;
        },
        roles() {
            return this.modal.data.query_access_role;
        },
        user_FK() {
            return this.modal.data.users_info.id;
        },
        user_access() {
            return this.modal.data.user_access
                ? this.modal.data.user_access
                : null;
        },
    },
    methods: {
        async submitForm() {
            let data = {
                users_FK: this.user_FK,
                access_role_assigned: this.selected_roles,
            };
            if (this.form_type === "create") {
                await this.$inertia.post(
                    "/app/users_access/users_access_register_process",
                    data
                );
            }
            if (this.form_type === "patch") {
                const { id } = this.user_access[0];
                data.id = id;
                await this.$inertia.post(
                    "/app/users_access/users_access_update_process",
                    data
                );
            }
            this.close();
        },
    },
    watch: {
        selected_template(value) {
            this.selected_roles = JSON.parse(value.access_role_assigned);
        },
        active_modal(value) {
            if (!value) {
                this.selected_roles = [];
                return;
            }
            if (!this.user_access.length) return;
            else {
                this.form_type = "patch"
                const { access_role_assigned } = this.user_access[0];
                this.selected_roles = JSON.parse(access_role_assigned);
            }
        },
    },
};
</script>
