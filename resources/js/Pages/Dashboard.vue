<template>
	<main-layout>
		<!--	Aqui ira el contenido y esto va a heredar estilos de tu MainLayout	-->
	</main-layout>

</template>

<script>
import {defineComponent} from 'vue'
import MainLayout from '@/Layouts/MainLayout.vue'
import PxIconEllipsi from "@/Pages/Components/Icons/PxIconEllipsi";
import PxIconMessage from "@/Pages/Components/Icons/PxIconMessage";
import PxIconLike from "@/Pages/Components/Icons/PxIconLike";
import PxIconComment from "@/Pages/Components/Icons/PxIconComment";
import PxIconBookMark from "@/Pages/Components/Icons/PxIconBookMark";
import PxIconSmile from "@/Pages/Components/Icons/PxIconSmile";

export default defineComponent({
	components: {
		// PxIconSmile,
		// PxIconBookMark,
		MainLayout,
		// PxIconMessage,
		// PxIconEllipsi,
		// PxIconLike,
		// PxIconComment
	},
})
</script>

<style scoped>

</style>