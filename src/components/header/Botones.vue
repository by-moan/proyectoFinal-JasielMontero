<script setup>
</script>

<template>
    <section class="section-2 botones">
        <input type="button" value="Inicio" onclick="window.scrollTo({top:0,behavior:'smooth'});">
        <input type="button" value="Cuartos" onclick="window.scrollTo({top:(document.getElementById('roomSection').getBoundingClientRect().top + window.scrollY - 100),behavior:'smooth'});">
        <input type="button" value="Reservar" onclick="window.scrollTo({top:(document.getElementById('AskRegion').getBoundingClientRect().top + window.scrollY - 100),behavior:'smooth'});">
        <input type="button" value="Contacto" onclick="window.scrollTo({top:(document.getElementById('footer').getBoundingClientRect().top + window.scrollY),behavior:'smooth'});">
    </section>
</template>

<style scoped>
</style>
