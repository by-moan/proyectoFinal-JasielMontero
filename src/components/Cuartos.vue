<script setup>
import Card from './cuartos/Card.vue';
</script>

<template>
	<section class="roomSection" id="roomSection">
		<div class="roomPresentation">
			<h2>Nuestras habitaciones</h2>
			<h3>Cada habitacion es un santuario de comfort, diseñado cuidadosamente para proporcionarte con la mejor relajación.</h3>
		</div>
		
	
		<div class="roomCards">
			<Card imagePath="./src/assets/cuarto_deluxe.jpg" subtitle="Cuarto deluxe" precio="3199.99" moneda="MXN"/>
			<Card imagePath="./src/assets/suite_ejecutivo.jpg" subtitle="Suite ejecutivo" precio="4899.99" moneda="MXN"/>
			<Card imagePath="./src/assets/penthouse.jpg" subtitle="Penthouse" precio="7999.99" moneda="MXN"/>
		</div>
	</section>
</template>

<style scoped>
.roomSection {
	h2{
		font-size: 3rem;
		font-family: "Akeila";
	}
	h3{
		font-size: 1.5rem;
		font-family: Arial, Helvetica, sans-serif;
		font-weight: lighter;
		max-width: 900px;
	
	}
	
	display: flex;
	flex-direction: column;
	justify-content: center;
	text-align: center;
	align-items: center;
	gap: 2rem;
	padding: 2rem;
}
.roomCards {
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	gap: 2rem;
	flex-wrap: wrap;
}
</style>
