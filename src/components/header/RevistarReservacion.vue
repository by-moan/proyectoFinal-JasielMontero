<script setup>
    import { PHP } from '../PHP'
    
    const Reservar = ()=> {
        PHP.POST("proyectoFinal-JasielMontero/backend/process.php",
        {
            action: "REVISAR_RESERVACION",
            correo: document.getElementById("rMailInput").value,
        },
        //Lo que se ejecuta cuando el servidor manda la respuesta
        (message)=>{
            if(message.status == "OK") {
                document.getElementById("rMailInput").value = ""
                if(!!message.data && message.data.constructor.name == "Array" && message.data.length != 0){
                    // alert(``);
                    alert(`${message.data[0][0]} tienes una reservación para el ${message.data[0][1]}, y su habitación es: ${message.data[0][2]}.`)
                    
                }else{
                    alert("No tienes ninguna reservación.");
                }

                cerrarFormato()
            }
        }
        )
    }
    
    const cerrarFormato = ()=>{
        let bgForm = document.getElementById("bgForm");
        let reserveForm = document.getElementById("reservationFormCheck");
        bgForm.style.filter = "opacity(0)";
        reserveForm.style.filter = "opacity(0)";
        setTimeout(()=>{
            bgForm.style.display = "none";
            reserveForm.style.display = "none";
        },400);
    }
</script>

<template>
    <div id="reservationFormCheck" class="reservationFormCheck">
        Correo:<br>
        <input type="email" name="" id="rMailInput">
        <br><br>
        <section class="centerButton">
            <button @click='Reservar()'>Enviar reservación</button>
        </section>
    </div>
</template>

<style scoped>
    .reservationFormCheck {
        display: none;
        filter: opacity(0);
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border: 1px solid rgba(0, 0, 0, 0.411);
        border-radius: 10px;
        transition: 0.4s;
        z-index: 600;

        width: 400px;
        height: 100px;

        input {
            width: calc(100% - 10px);
            height: 25px;
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
