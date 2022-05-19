<template>
    <div class="primary text-white rounded-lg" style="box-shadow: -3px 3px 3px #9C9C9C;">
        <div class="text-lg border-b p-2 text-center">
            ECC/CNC: {{ctr_file}}
        </div>
        <div class="text-lg p-4">
            <div class="text-lg">
                Active: 2
            </div>
            <div class="text-lg">
                Inactive: 2
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    props:{
        ctr_file: Number,
    },
    components:{
    },
    data () {
        return{
            
        }
    },
  }
</script>