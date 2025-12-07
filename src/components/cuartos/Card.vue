<script setup>

defineProps({
    imagePath: String,
    subtitle: {
        type: String,
        default: "No description provided"
    },
    precio: {
        type: Number,
        default: 0
    },
    moneda: {
        type: String,
        default: "MXN"
    }
});
</script>

<template>
    <section class="roomCard">
        <img v-bind:src="imagePath" alt="">
        <div class="cardBody">
            <p>{{subtitle}}</p>
            <p>Precio: ${{precio}}{{moneda}} por noche</p>
        </div>
    </section>
</template>

<style scoped>
    .roomCard{
        border: 1px solid rgba(0, 0, 0, 0.116);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.212);
        width: 300px;
        overflow: hidden;
        border-radius: 10px;
        transition: 0.5s;


        img{
            width: 100%;
            height: auto;
        }


        .cardBody {
            margin: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
        }
    }

    .roomCard:hover{
        transform: scale(1.05);
        transition: 0.5s;
    }
</style>
