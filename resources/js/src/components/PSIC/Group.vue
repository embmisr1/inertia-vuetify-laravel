<template>
    <v-dialog v-model="modal.active" max-width="500" persistent>
        <ValidationObserver
            v-slot="{ handleSubmit, invalid }"
            ref="psic_group_observer"
        >
            <form @submit.prevent="submit">
                <v-card :loading="loading">
                    <v-card-title class="text-h5">
                        PSIC Group Description
                    </v-card-title>

                    <v-card-text>
                        <ValidationProvider
                            vid="psic_group_desc"
                            name="Group Description"
                            rules="required|min:6"
                            v-slot="{ errors }"
                        >
                            <v-textarea
                                v-model="modal.form.psic_group_desc"
                                label="Group Description"
                                filled
                                clearable
                                row="3"
                                outlined
                                :loading="loading"
                                :error-messages="errors[0]"
                                :readonly="modal.form.request_type === 'delete'"
                            ></v-textarea>
                        </ValidationProvider>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>

                        <v-btn
                            color="red darken-1"
                            text
                            @click="close"
                            class="cursor-pointer"
                            :loading="loading"
                        >
                            Close
                        </v-btn>

                        <v-btn
                            :disabled="invalid"
                            :loading="loading"
                            class="cursor-pointer white--text"
                            color="green darken-1"
                            @click="submit"
                        >
                            {{
                                modal.form.request_type === "delete" ? "Delete" : "Submit"
                            }}
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </form>
        </ValidationObserver>
    </v-dialog>
</template>

<script>
export default {
    props: {
        modal: Object,
        close: Function,
        submit: Function,
        loading: {
            type: Boolean,
            default: true,
        },
    },
};
</script>

<style></style>
