<script setup>
    import { ref } from 'vue';
    import { PHP } from '../PHP.js';
    
    const Reservar = ()=> {
        PHP.POST("proyectoFinal-JasielMontero/backend/process.php",
        {
            action: "REGISTRAR_RESERVACION",
            nombre: document.getElementById("nameInput").value,
            email: document.getElementById("emailInput").value,
            cuarto: document.getElementById("roomSelection").value,
            fecha: document.getElementById("reservationDate").value
        },
        //Lo que se ejecuta cuando el servidor manda la respuesta
        (message)=>{
            if(message.status == "OK") {
                document.getElementById("nameInput").value = ""
                document.getElementById("emailInput").value = ""
                document.getElementById("reservationDate").value = ""
                alert(message.message);
            }
        }
        )
    }
    
    const cerrarFormato = ()=>{
        let bgForm = document.getElementById("bgForm");
        let reserveForm = document.getElementById("reserveForm");
        bgForm.style.filter = "opacity(0)";
        reserveForm.style.filter = "opacity(0)";
        setTimeout(()=>{
                console.log("animation ended")
            if(reserveForm.style.filter == "opacity(1)") {
                console.log("it is")
                return;
            };
            bgForm.style.display = "none";
            reserveForm.style.display = "none";
        },400);
    }
    
</script>

<template>
    <div class="bgForm" id="bgForm"></div>
    <section class="reserveForm" id="reserveForm">
        <button class="exitButton" id="exitButton" @click="cerrarFormato()"></button>
        <div>Nombre:</div>
        <input type="text" name="nombre" id="nameInput"><br>
        <div>Correo:</div>
        <input type="text" name="nombre" id="emailInput"><br><br>
        Tipo de cuarto:<br>
        <select id="roomSelection">
            <option value="Cuarto deluxe">Cuarto deluxe</option>
            <option value="Suite Ejecutivo">Suite Ejecutivo</option>
            <option value="Penthouse">Penthouse</option>
        </select><br><br>
        Fecha de reservación:<br>
        <input type="date" name="" id="reservationDate">
        <br><br>
        <section class="centerButton">
            <button @click='Reservar()'>Enviar reservación</button>
        </section>
    </section>
</template>

<style scoped>
    .bgForm {
        position: fixed;
        background-color: rgba(0, 0, 0, 0.349);
        backdrop-filter: blur(4px);
        z-index:500;
        display: none;
        width: 100%;
        height: 100%;
        
        transition: 0.5s;
        
        filter:opacity(0);
    }
    
    .reserveForm {
        font-family: Arial, Helvetica, sans-serif;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: white;
        z-index:510;
        width: 500px;
        height: 350px;
        display: none;
        padding:20px;
        border-radius: 10px;
        
        filter:opacity(0);
        
        transition: 0.5s;
        .exitButton {
            position: absolute;
            right: 10px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: transparent;
            top: 10px;
            width: 30px;
            height: 30px;
        }
        
        input,select {
            border-radius: 7px;
            border: 1px solid rgba(90, 41, 41, 0.350);
            width: calc(100% - 15px);
            height: 30px;
            transition: 0.4s;
        }
        
        input:a {
            border: 2.5px solid rgba(209, 118, 118, 0.35);
            transition: 0.4s;
        }
        
        * {
            padding: 5px;
        }
    }
    
    .centerButton {
        display: flex;
        justify-content: center;
        
        button {
            border-radius: 5px;
            border: 0 solid transparent;
            background-color: rgb(66, 33, 33);
            height: 35px;
            padding: 10px;
            color: white;
        }
    }
</style>
