<script setup>
import Botones from './header/Botones.vue';
import BotonReservar from './header/BotonReservar.vue';
</script>

<template>
    <header>
        <section class="section-1 headerSections">El santuario</section>
        <Botones/>
        <section class="section-3 headerSections">
        </section>
    </header>
    <BotonReservar/>
</template>

<style scoped>
header{
    z-index: 100;
	position: fixed;
	display: flex;
	padding: 10px;
	justify-content: center;
	align-items: center;
	height: 60px;
	width: 100%;
	background-color: rgba(255, 228, 222, 0.596);
	backdrop-filter: blur(5px);
	.headerSections {
		display: flex;
		justify-content: center;
	}
	
	.section-1 {
		font-family: "Akeila";
		justify-content: left;
		margin-left: 50px;
		font-size: 27pt;
		font-weight: lighter;
		color: var(--TitleColor);
		flex:1;
	}
	.section-2 {
		display: flex;
		justify-content: center;
		flex:3;
		
	}
	.section-3{
		flex:1;
	}
}

header :deep(section.section-2){
	input{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 13pt;
		color: var(--SectionColors);
		background-color: transparent;
		border: none;
		padding: 20px;
		margin-left: 5px;
		margin-right: 5px;
	}
}

</style>
