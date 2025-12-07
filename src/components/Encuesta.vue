<script setup>
import RevistarReservacion from './header/RevistarReservacion.vue';

    
    const checarReservacion = ()=>{
        let reservationFormCheck = document.getElementById("reservationFormCheck");
        let bgForm = document.getElementById("bgForm");
        bgForm.style.display = "block";
        reservationFormCheck.style.display = "block";
        let tmOut = setTimeout(()=>{
            bgForm.style.filter = "opacity(1)";
            reservationFormCheck.style.filter = "opacity(1)";
            clearTimeout(tmOut);
        },10);
    }

</script>

<template>
    <section id="AskRegion">
        <h1>¿Listo para experimentar lujo?</h1>
        <h3>Reserva hoy y descubre porqué <b>El santuario</b> es más que un hotel</h3>
        <br><br>
        <a @click="checarReservacion()" class="link">¿Ya hiciste tu reservación?</a>
    </section>
    <RevistarReservacion/>
</template>

<style scoped>
    section {
        background-color: #4d3129;
        padding-top: 100px;
        padding-bottom: 150px;
        text-align: center;
        color: rgb(255, 225, 225);
    }
</style>