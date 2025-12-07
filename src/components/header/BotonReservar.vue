<script setup>
import Reservar from './Reservar.vue';
let reservarBoton = null;

let reservarFormBG = null;
let reservarForm = null;

setTimeout(()=>{
    //Para evitar los errores de "undefined"
    reservarBoton = document.getElementById("reservarBoton");
    reservarFormBG = document.getElementById("bgForm");
    reservarForm = document.getElementById("reserveForm");

    reservarBoton.addEventListener("click", ()=>{
        reservarFormBG.style.display = "block"
        reservarForm.style.display = "block"
        let tmOut = setTimeout(()=>{
            reservarFormBG.style.filter = "opacity(1)";
            reservarForm.style.filter = "opacity(1)";
            clearTimeout(tmOut);
        },10);
    });
}, 400);

window.addEventListener("scroll", ()=>{
    let AskRegion = document.getElementById("AskRegion");
    if (!AskRegion || !reservarBoton) return;
    if(window.scrollY + window.innerHeight > 1500){
        reservarBoton.classList.add("atScrolling");
    }else{
        reservarBoton.classList.remove("atScrolling");
    }
    const y = AskRegion.getBoundingClientRect().top + window.scrollY;

    if(window.innerWidth < 507){
        reservarBoton.style.setProperty("--dynamicY",
            (y - 1275) + "px"
        );
        return
    }

    reservarBoton.style.setProperty("--dynamicY",
        (y - 1350) + "px"
    );
});

window.addEventListener("resize", () => {
    let AskRegion = document.getElementById("AskRegion");
    if (!AskRegion) return;
    const y = AskRegion.getBoundingClientRect().top + window.scrollY;

    // console.log(window.innerWidth)
    if(window.innerWidth < 507){
        reservarBoton.style.setProperty("--dynamicY",
            (y - 1275) + "px"
        );
        return
    }
    reservarBoton.style.setProperty("--dynamicY",
        (y - 1350) + "px"
    );
});


</script>

<template>
    <Reservar/>
    <button id="reservarBoton">Reservar ahora</button>
</template>

<style scoped>
button{
    z-index: 110;
    background-color: rgba(255, 255, 255, 0.61);
    border: 0px solid transparent;
    border-radius: 10px;
    width: 180px;
    height: 20px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.123);
    position: fixed;
    transform: translate(0,0);
    bottom: 95%;
    top: 20px;
    right: 20px;
    transition: 0.5s;
}

.atScrolling {
    z-index: 90;
    --dynamicY: 0;
    transition: 0.5s;
    width: 300px;
    position: absolute;
    top: 1570px;
    right: 50%;
    transform: translate(50%, var(--dynamicY));
    background-color: rgb(255, 196, 178);
    border-radius: 10px;
    box-shadow: 0 0 0;
}
</style>
