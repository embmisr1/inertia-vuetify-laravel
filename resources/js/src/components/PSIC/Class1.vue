<template>
    <v-dialog v-model="modal.active" max-width="500" persistent>
        <ValidationObserver
            v-slot="{ handleSubmit, invalid }"
            ref="psic_group_class_observer"
        >
            <form @submit.prevent="submit">
                <v-card :loading="loading">
                    <v-card-title class="text-h5">
                        PSIC Group Class Description
                    </v-card-title>

                    <v-card-text>
                        {{ modal.form }}
                        <ValidationProvider
                            vid="psic_class_desc"
                            name="Group Class Description"
                            rules="required"
                            v-slot="{ errors }"
                        >
                            <v-autocomplete
                                v-model="modal.form.psic_group_FK"
                                :items="items"
                                :loading="loading"
                                :search-input.sync="searchClass"
                                color="primary"
                                hide-no-data
                                hide-selected
                                filled
                                outlined
                                :disabled="loading"
                                :error-messages="errors[0]"
                                dense
                                item-text="psic_group_desc"
                                item-value="id"
                                label="Search PSIC Group"
                            ></v-autocomplete>
                        </ValidationProvider>

                        <ValidationProvider
                            vid="psic_class_desc"
                            name="Group Class Description"
                            rules="required|min:6"
                            v-slot="{ errors }"
                        >
                            <v-textarea
                                v-if="modal.form.psic_group_FK"
                                v-model="modal.form.psic_class_desc"
                                label="Group Class Description"
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
                            class="cursor-pointer"
                            color="green darken-1"
                            text
                            @click="submit"
                        >
                            {{
                                modal.form.request_type === "delete"
                                    ? "Delete"
                                    : "Submit"
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
        items: Array,
    },
    data() {
        return {
            searchClass: null,
            // searchClass: this.modal.form.searchClass
            //     ? this.modal.form.searchClass
            //     : null,
        };
    },
    watch: {
        searchClass(value) {
            this.$emit("search", value);
        },
    },
    mounted(){
        // alert("component mounted")
    }
};
</script>

<style></style>
