<template>
    <div class="text-black bg-white rounded-lg" style="box-shadow: 0px 0px 5px #9C9C9C;">
        <div class="primary text-xl rounded-t-lg text-white border-b p-2 text-center">
            <b class="text-xl">
                <v-icon dark class="float-left mt-1"> mdi-folder</v-icon> {{label}}
            </b>
        </div>
        <div class="text-lg p-4">
            <div v-if="(label == 'REGISTERED FIRMS' || label == 'WITH 1586' || label == 'WITH 6969' || label == 'WITH PCO' || label == 'WITH ORDER' || label == 'COMPLAINT')" class="text-xl text-center grid grid-cols-1">
                <!--<b class="text-2xl">{{query_counter_total}}</b>-->
                <div class="text-xl text-center grid grid-cols-1 pt-6">
                    <div>
                        Total: <b class="text-2xl">{{query_counter_total}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-1">
                    <div>&nbsp;</div>
                </div>
            </div>
            <div v-if="(label == 'WITH 8749' || label == 'WITH 9275')">
                <div class="text-xl text-center grid grid-cols-1">
                    <div>
                        Total: <b class="text-2xl">{{query_counter_total}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500">
                    <div>
                        Active: <br/><b class="text-2xl">{{query_counter_valid}}</b>
                    </div>
                    <div>
                        Expired: <br/><b class="text-2xl text-rose-600">{{query_counter_expired}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-1 mt-5 border-t-2 border-blue-500">
                    <div>
                        Undefined: <b class="text-2xl">{{query_counter_undefined}}</b>
                    </div>
                </div>
            </div>
            <div v-if="(label == 'WITH NOV' || label == 'MONITORING')">
                <div class="text-xl text-center grid grid-cols-1">
                    <div>
                        Total: <b class="text-2xl">{{query_counter_total}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500">
                    <div>
                        PD1586: <br/><b class="text-2xl">{{query_counter_1586}}</b>
                    </div>
                    <div>
                        RA8749: <br/><b class="text-2xl">{{query_counter_8749}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500">
                    <div>
                        RA9275: <br/><b class="text-2xl">{{query_counter_9275}}</b>
                    </div>
                    <div>
                        RA6969: <br/><b class="text-2xl">{{query_counter_6969}}</b>
                    </div>
                </div>
                <div class="text-xl text-left grid grid-cols-1 mt-5 border-t-2 border-blue-500">
                    <div>
                        RA9003: <b class="text-2xl">{{query_counter_9003}}</b>
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
        query_counter_undefined: Number,
        query_counter_1586: Number,
        query_counter_8749: Number,
        query_counter_9275: Number,
        query_counter_6969: Number,
        query_counter_9003: Number,
    },
    components:{
    },
    data () {
        return{
            
        }
    },
  }
</script>