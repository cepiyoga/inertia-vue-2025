<script setup>

defineProps({
    data: Object,

})


</script>

<template>
    <div>
        <h1>Hallow Word : {{ data.JudulHalaman }}</h1>

        <ul>
            <li v-for="mh in data.Mhs" :key="mh.NIM">{{ mh.Nama }} - Nim : {{ mh.NIM }}</li>
        </ul>
    </div>
</template>
