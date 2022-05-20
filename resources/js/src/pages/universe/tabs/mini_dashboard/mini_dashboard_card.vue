<template>
    <div class="text-black bg-white rounded-lg" style="box-shadow: 0px 0px 5px #9C9C9C;">
        <div class="primary text-xl rounded-t-lg text-white border-b p-2 text-center">
            {{dashboard_header_label}}<b class="text-2xl">{{dashboard_header}}</b>
        </div>
        <div class="text-lg p-4">
            <div v-for="(item, index) in dashboard_content" :key="index" class="text-xl text-center">
                {{dashboard_content_label[index]}}<b class="text-2xl">{{dashboard_content[index]}}</b>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    props:{
        dashboard_header_label: String,
        dashboard_header: Number,
        dashboard_content_label: Array,
        dashboard_content: Array,
    },
    components:{
    },
    data () {
        return{
            
        }
    },
  }
</script>