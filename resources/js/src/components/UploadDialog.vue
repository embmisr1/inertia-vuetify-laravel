<template>
    <v-dialog v-model="modal" max-width="800">
        <v-card>
            <v-card-title class="text-h5"> Upload A File/s </v-card-title>

            <v-card-text>
               <div class="flex justify-between">
                    <b-field>
                        <b-upload v-model="attachments" multiple drag-drop expanded type="is-dark" accept=".pdf,.docx,.jpeg,.jpg,.png">
                            <section class="section">
                                <div class="content has-text-centered">
                                    <p>
                                        <b-icon
                                            icon="upload"
                                            size="is-medium"
                                        ></b-icon>
                                    </p>
                                    <p>Drop your files here or click to upload</p>
                                </div>
                            </section>
                        </b-upload>
                    </b-field>
                    <div class="h-56 overflow-y-auto" v-if="attachments.length">
                        <v-list dense>
                            <v-list-item-group>
                                <template>
                                    <div
                                        v-for="(item, index) in attachments"
                                        :key="item.name"
                                    >
                                        <v-list-item>
                                            <template v-slot:default="{ active }">
                                                <v-list-item-content>
                                                    <v-list-item-title
                                                        v-text="item.name"
                                                    ></v-list-item-title>
                                                </v-list-item-content>

                                                <v-list-item-action>

                                                  <box-icon type='solid' name='trash' animation="tada-hover"  ></box-icon>
                                                </v-list-item-action>
                                            </template>
                                        </v-list-item>

                                        <v-divider
                                            v-if="
                                                index < attachments.length - 1
                                            "
                                            :key="index"
                                        ></v-divider>
                                    </div>
                                </template>
                            </v-list-item-group>
                        </v-list>
                    </div>
                </div>
            </v-card-text>

            <v-card-actions>
                <v-spacer></v-spacer>

                <v-btn color="red darken-1" text @click="close">
                    Close
                </v-btn>

                <v-btn color="green darken-1" text @click="submitUpload">
                    Submit
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
export default {
    props: {
        modal: Boolean,
        close: Function,
        submit: Function,
    },
    data(){
        return{
            attachments:[]
        }
    },
    methods:{
        async submitUpload(){
            try {
                // this.$emit('submit')
                this.submit(this.attachments)
            } catch (error) {
                console.log(error)
            }
        },
    }
};
</script>

<style></style>
