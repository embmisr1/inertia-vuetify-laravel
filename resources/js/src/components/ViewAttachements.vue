<template>
    <v-list two-line subheader class="h-40 overflow-y-auto">
        <v-subheader>Attachments </v-subheader>
        <v-list-item-group active-class="black--text">
            <template>
                <div v-for="(item, index) in attachments" :key="index">
                    <v-list-item>
                        <template v-slot:default="{ active }">
                            <v-list-item-content>
                                <v-list-item-title>
                                    Attachment
                                    {{ index + 1 }}
                                </v-list-item-title>

                                <v-list-item-subtitle
                                    class="text--primary"
                                    v-text="item.size"
                                ></v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-action class="flex flex-col">
                                <b-tooltip
                                    label="View Attachement"
                                    type="is-dark"
                                    position="is-left"
                                >
                                    <box-icon
                                        name="link"
                                        animation="tada-hover"
                                        @click="goTo(item.url)"
                                    ></box-icon>
                                </b-tooltip>
                                <b-tooltip
                                    label="Remove Attachement"
                                    type="is-dark"
                                    position="is-left"
                                >
                                    <box-icon
                                        color="red "
                                        type="solid"
                                        name="trash"
                                        animation="tada-hover"
                                        @click="removeFile(item.id)"
                                    ></box-icon>
                                </b-tooltip>
                            </v-list-item-action>
                        </template>
                    </v-list-item>
                </div>
            </template>
        </v-list-item-group>
    </v-list>
</template>

<script>
export default {
    props: {
        attachments: Array,
        goTo: Function,
        removeFile: Function,
    },
};
</script>

<style></style>
