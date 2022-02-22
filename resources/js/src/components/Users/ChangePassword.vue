<template>
    <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
        v-model="modal.active"
        persistent
    >
        <template v-slot:default="dialog">
            <v-card>
                <v-toolbar>Change Password</v-toolbar>
                <div class="p-4">
                    <form @submit.prevent="submitForm">
                         <v-text-field
                            v-model="modal.form.password"
                            label="New Password"
                            type="password"
                            outlined
                            filled
                            :error-messages="modal.form.errors.password"
                        ></v-text-field>

                        <v-text-field
                            v-model="modal.form.confirm_password"
                            label="Confirm Password"
                            type="password"
                            outlined
                            filled
                            :error-messages="modal.form.errors.confirm_password"
                        ></v-text-field>
                        <v-card-actions class="justify-end">
                            <v-btn  type="submit">Submt</v-btn>
                            
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
    methods: {
        async submitForm() {
          // await this.modal.form.post("/app/users");
            this.close();
        },
    },
};
</script>
