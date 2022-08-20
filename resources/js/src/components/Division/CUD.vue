<template>
    <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
        v-model="modal.active"
        persistent
    >
        <template v-slot:default="dialog">
            <v-card>
                <v-toolbar>{{ modal.type }} - DIvision</v-toolbar>
                <div class="p-4">
                    <form @submit.prevent="submitForm">
                        <v-text-field
                            v-model="modal.form.name"
                            label="DIvision Name"
                            filled
                            outlined
                            :error-messages="modal.form.errors.name"
                            :disabled="modalType === 'Delete' ? true : false"
                        ></v-text-field>
                        <v-card-actions class="justify-end">
                            <v-btn v-if="modalType !== 'Delete'" type="submit"
                                >Submt</v-btn
                            >

                            <v-btn type="submit" v-else color="error"
                                >Delete</v-btn
                            >
                            <v-btn text @click="close">Close</v-btn>
                        </v-card-actions>
                    </form>
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
                    await this.modal.form.post("/app/division");
                    break;
                case "Update":
                    await this.modal.form.patch(
                        `/app/division/${this.modal.form.id}`
                    );
                    break;
                case "Delete":
                    await this.modal.form.delete(
                        `/app/division/${this.modal.form.id}`
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
