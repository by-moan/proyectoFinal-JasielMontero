<script setup>
</script>

<template>
    <section class="body_presentation">
        <h1>Donde los lujos se unen a la tranquilidad.</h1>
        <div class="subtext">
            Descubre una comodidad incomparable de nuestros espacios delicadamente diseñados donde todo detalle fue fabricado para tu escape perfecto.
        </div>
    </section>
</template>

<style>
.body_presentation {
    height: 600px;
    background:
    linear-gradient(180deg, transparent 0%, rgb(255, 255, 255) 100%),
    url("../assets/hotel_bg.jpg");
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 20px;
}

.body_presentation h1 {
    font-family: "Akeila";
    font-size: 50pt;
    max-width: 80%;
}

.body_presentation .subtext {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15pt;
    font-weight: lighter;
    max-width: 700px;
}
</style>
