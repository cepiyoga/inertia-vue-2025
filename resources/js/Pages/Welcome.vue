<script setup>

import {ref} from "vue";

defineProps({
    data: Object,
})

let stt = ref(true)


function ambilData() {
    return "Nama Saya Cepi Yoga Asmara"
}

function tggl() {
    stt.value = !stt.value
    console.log('Status sekarang:', stt.value)
}


</script>


<template>
    <div>
        <h1>Hallow Word : {{ data.JudulHalaman }}</h1>
        <button @click="tggl">{{ stt ? 'Hide' : "Show" }}</button>
        <p v-if="stt">{{ ambilData() }}</p>

        <h1>Table</h1>
        <table>
            <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="mm in data.Mhs" :key="mm.NIM">
                <td>{{ mm.nama }}</td>
                <td>{{ mm.nim }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
