<template>
<div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                {{label}}
              </label>
         <input v-model="value" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" :type="inp_type" :placeholder="placeholder">

</div>
    
</template>
<script>

    export default {
        name: "NoeticInputs",
        props:{
            label:String,
            inp_type:String,
            placeholder:String,
            value: '',
        },
       
    }
</script>