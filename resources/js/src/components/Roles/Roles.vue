<template>
    <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
        v-model="modal.active"
        persistent
    >
        <template v-slot:default="dialog">
            <v-card>
                <v-toolbar>Role Form</v-toolbar>
                <div class="p-4">
                    <ValidationObserver
                        v-slot="{ handleSubmit, invalid }"
                        ref="psic_group_class_observer"
                    >
                        <form @submit.prevent="handleSubmit(submitForm)">
                            <ValidationProvider
                                vid="form_field"
                                name="Role Name"
                                rules="required"
                                v-slot="{ errors }"
                            >
                                <v-text-field
                                    v-model="form_field.access_role"
                                    label="Role Name"
                                    filled
                                    outlined
                                    :error-messages="errors[0]"
                                    :disabled="
                                        modalType === 'Delete' ? true : false
                                    "
                                ></v-text-field>
                            </ValidationProvider>
                            <v-card-actions class="justify-end">
                                <v-btn
                                    v-if="modalType !== 'Delete'"
                                    type="submit"
                                    :disabled="invalid"
                                    dark
                                    >Submt</v-btn
                                >

                                <v-btn type="submit" v-else color="error"
                                    >Delete</v-btn
                                >
                                <v-btn text @click="close" color="red darken-2">Close</v-btn>
                            </v-card-actions>
                        </form>
                    </ValidationObserver>
                </div>
            </v-card>
        </template>
    </v-dialog>
</template>

<script>
export default {
    props: {
        modal: Object,
        close: Function,
        form_field: Object,
        submitForm:Function
    },
    computed: {
        modalType() {
            return this.modal.type;
        },
    },
};
</script>
