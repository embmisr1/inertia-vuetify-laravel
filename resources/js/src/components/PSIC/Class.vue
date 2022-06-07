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

                    <v-card-text class="space-y-4">
                        <div>
                            <ValidationProvider
                                vid="psic_class_desc"
                                name="Group Class Description"
                                rules="required"
                                v-slot="{ errors }"
                            >
                                <b-field
                                    label="PSIC Group Desc"
                                    :type="{ 'is-danger': errors[0] }"
                                    :message="errors[0]"
                                >
                                    <b-autocomplete
                                        :loading="loading"
                                        :disabled="loading"
                                        v-model="searchClass"
                                        placeholder="Search..."
                                        keep-first
                                        open-onfocus
                                        :data="items"
                                        field="psic_group_desc"
                                        @select="
                                            (option) =>
                                                (modal.form.psic_group_FK =
                                                    option.id)
                                        "
                                        clearable
                                        @typing="
                                            (value) => $emit('search', value)
                                        "
                                    >
                                        <template #empty>
                                            No Data Found
                                        </template>
                                    </b-autocomplete>
                                </b-field>
                            </ValidationProvider>
                        </div>

                        <div>
                            <ValidationProvider
                                vid="psic_class_desc"
                                name="Group Class Description"
                                rules="required|min:6"
                                v-slot="{ errors }"
                            >
                                <v-textarea
                                    :disabled="!modal.form.psic_group_FK"
                                    v-model="modal.form.psic_class_desc"
                                    label="Group Class Description"
                                    filled
                                    clearable
                                    row="3"
                                    outlined
                                    :loading="loading"
                                    :error-messages="errors[0]"
                                    :readonly="
                                        modal.form.request_type === 'delete'
                                    "
                                ></v-textarea>
                            </ValidationProvider>
                        </div>
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
        };
    },
    watch: {
        isModalActive(value) {
            if (!value) return;

            this.searchClass = this.modal.form.searchClass
                ? this.modal.form.searchClass
                : null;
        },
    },
    computed: {
        isModalActive() {
            return this.modal.active;
        },
    },
};
</script>

<style></style>
