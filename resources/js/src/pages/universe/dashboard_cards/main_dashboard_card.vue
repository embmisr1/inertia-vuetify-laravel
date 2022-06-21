<template>
    <div class="text-black bg-white rounded-lg" style="box-shadow: 0px 0px 5px #9C9C9C;">
        <div class="primary text-xl rounded-t-lg text-white border-b p-2 text-center">
            <b class="text-xl">
                <v-icon dark class="float-left mt-1"> mdi-folder</v-icon> {{label}}
            </b>
        </div>
        <div class="text-lg p-4">
            <div v-if="(query_counter_expired == null)" class="text-xl text-center grid grid-cols-1">
                <!--<b class="text-2xl">{{query_counter_total}}</b>-->
                <div class="text-xl text-center grid grid-cols-1">
                    <div>
                        Total: <b class="text-2xl">{{query_counter_total}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-1 mt-7">
                    <div>&nbsp;</div>
                </div>
            </div>
            <div v-else>
                <div class="text-xl text-center grid grid-cols-1">
                    <div>
                        Total: <b class="text-2xl">{{query_counter_total}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500">
                    <div>
                        Active: <b class="text-2xl">{{query_counter_valid}}</b>
                    </div>
                    <div>
                        Expired: <b class="text-2xl">{{query_counter_expired}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    props:{
        label: String,
        query_counter_total: Number,
        query_counter_valid: Number,
        query_counter_expired: Number,
    },
    components:{
    },
    data () {
        return{
            
        }
    },
  }
</script>