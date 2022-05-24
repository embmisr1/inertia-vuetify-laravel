<template>
    <div>
        <v-menu
            ref="menu"
            v-model="menu"
            :close-on-content-click="false"
            :return-value.sync="date_content_alter"
            transition="scale-transition"
            offset-y
            min-width="auto"
        >
            <template v-slot:activator="{ on, attrs }">
                <v-text-field
                    v-model="date_content_alter"
                    :label="date_label"
                    readonly
                    v-bind="attrs"
                    v-on="on"
                    clearable
                ></v-text-field>
            </template>
            <v-date-picker
                v-model="date_content_alter"
                no-title
                scrollable
            >
            <v-spacer></v-spacer>
            <v-btn
                text
                color="primary"
                @click="menu = false"
            >
                Cancel
            </v-btn>
            <v-btn
                text
                color="primary"
                @click="$refs.menu.save(date_content_alter)"
            >
                OK
            </v-btn>
            </v-date-picker>
        </v-menu>
        {{date_content.toString()}}
    </div>
</template>
<script>
  export default {
    props:{
        date_label: String,
        date_content: String,
    },
    components:{
    },
    data () {
        return{
            menu: false,
            date_label_alter: this.date_label,
            date_content_alter: this.date_content.toString(),
        }
    },
    // computed:{
    //     date_content_alter(){
    //         return this.date_content
    //     }
    // }
  }
</script>