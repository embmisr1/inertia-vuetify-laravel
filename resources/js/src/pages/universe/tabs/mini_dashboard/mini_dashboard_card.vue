<template>
    <div v-if="dashboard_header === 'permit'" class="primary text-white rounded-lg" style="box-shadow: -3px 3px 3px #9C9C9C;">
        <div class="text-lg border-b p-2 text-center">
            Permits: {{ctr_file.ctr_permit}}
        </div>
        <div class="text-lg p-4">
            <div class="text-lg">
                PD 1586: {{ctr_file.ctr_permit_pd1586}}
            </div>
            <div class="text-lg">
                RA 8749: {{ctr_file.ctr_permit_ra8749}}
            </div>
            <div class="text-lg">
                RA 9275: {{ctr_file.ctr_permit_ra9275}}
            </div>
            <div class="text-lg">
                Active: 3
            </div>
            <div class="text-lg">
                Inactive: 0
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    props:{
        ctr_file: Object,
        dashboard_header: String,
    },
    components:{
    },
    data () {
        return{
            
        }
    },
  }
</script>