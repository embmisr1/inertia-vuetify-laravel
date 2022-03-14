<template>
    <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
        v-model="modal.active"
        persistent
    >
        <template v-slot:default="dialog">
            <v-card>
                <v-toolbar>{{ modal.type }} - Unit Section</v-toolbar>
                <div class="p-4">
                    <ValidationObserver
                        v-slot="{ handleSubmit, pristine }"
                        ref="validation_observer"
                    >
                        <form @submit.prevent="submitForm">
                            <ValidationProvider
                                vid="name"
                                name="Name"
                                rules="required|min:6"
                                v-slot="{ errors }"
                            >
                                <v-text-field
                                    v-model="modal.form.name"
                                    label="Name"
                                    prepend-icon="mdi-account-details"
                                    filled
                                    outlined
                                    :error-messages="errors[0]"
                                    :disabled="
                                        modalType === 'Delete' ? true : false
                                    "
                                ></v-text-field>
                            </ValidationProvider>

                            <ValidationProvider
                                vid="division"
                                name="Division"
                                rules="required"
                                v-slot="{ errors }"
                            >
                                <v-select
                                    v-model="modal.form.division_id"
                                    :items="division_data.data"
                                    :item-text="(item) => item.name"
                                    :item-value="(item) => item.id"
                                    outlined
                                    filled
                                    prepend-icon="mdi-account-details"
                                    label="Select Division"
                                    :error-messages="errors[0]"
                                    clearable
                                ></v-select>
                            </ValidationProvider>

                            <v-card-actions class="justify-end">
                                <v-btn
                                    v-if="modalType !== 'Delete'"
                                    type="submit"
                                    >Submt</v-btn
                                >

                                <v-btn type="submit" v-else color="error"
                                    >Delete</v-btn
                                >
                                <v-btn text @click="close">Close</v-btn>
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
        division_data: Object,
    },
    computed: {
        modalType() {
            return this.modal.type;
        },
    },
    methods: {
        async submitForm() {
            switch (this.modalType) {
                case "Add":
                    await this.modal.form.post("/app/unit_section");
                    break;
                case "Update":
                    await this.modal.form.patch(
                        `/app/unit_section/${this.modal.form.id}`
                    );
                    break;
                case "Delete":
                    await this.modal.form.delete(
                        `/app/unit_section/${this.modal.form.id}`
                    );
                    break;
                default:
                    break;
            }
            this.close();
        },
    },
};
</script>
