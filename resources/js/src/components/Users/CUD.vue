<template>
    <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
        v-model="modal.active"
        persistent
    >
        <template v-slot:default="dialog">
            <v-card>
                <v-toolbar>{{ modal.type }} - Users</v-toolbar>
                <div class="p-4">
                    <form @submit.prevent="submitForm">
                        <v-text-field
                            v-model="modal.form.username"
                            label="Username"
                            filled
                            :error-messages="modal.form.errors.username"
                        ></v-text-field>
                        <v-text-field
                            v-model="modal.form.email"
                            label="Email"
                            filled
                            type="email"
                            :error-messages="modal.form.errors.email"
                        ></v-text-field>

                        <v-text-field
                            v-model="modal.form.password"
                            label="Password"
                            type="password"
                            :error-messages="modal.form.errors.password"
                        ></v-text-field>
                        <v-card-actions class="justify-end">
                            <v-btn  v-if="modalType !== 'Delete'" type="submit">Submt</v-btn>
                            
                            <v-btn  type="submit" v-else color="error">Delete</v-btn>
                            <v-btn text @click="close" >Close</v-btn>
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
    computed:{
        modalType(){
            return this.modal.type
        }
    },
    methods: {
        async submitForm() {
            switch (this.modalType) {
                case "Add":
                    await this.modal.form.post("/app/users");
                    break;
                case "Update":
                    await this.modal.form.patch(`/app/users/${this.modal.form.id}`);
                    break;
                case "Delete":
                    await this.modal.form.delete(`/app/users/${this.modal.form.id}`);
                    break;
                default:
                    break;
            }
            this.close();
        },
    },
};
</script>
