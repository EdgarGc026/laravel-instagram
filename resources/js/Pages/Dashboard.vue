<template>
	<main-layout title="Dashboard">
		<template #header>
			<ul class="flex pl-3 space-x-6">
				<li class="flex flex-col items-center space-y-1">
					<div class="relative bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
						<a href="#" class="block bg-white p-1 rounded-full transform transition hover:-rotate-6">
							<img class="w-12 h-12 sm:w-24 sm:h-24 rounded-full" src="https://placekitten.com/200/200"
							     alt="instagram-stories-profile">
						</a>
						<button class="button-create-story">+</button>
					</div>
					<a href="#" class="text-xs sm:text-lg">You</a>
				</li>
				<li class="flex flex-col items-center space-y-1">
					<div class="bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
						<a href="#" class="block bg-white p-1 rounded-full transform transition hover:-rotate-6">
							<img class="w-12 h-12 sm:w-24 sm:h-24 rounded-full" src="https://placekitten.com/200/202"
							     alt="instagram-stories-profile">
						</a>
					</div>
					<a href="#" class="text-xs sm:text-lg">Kitty two</a>
				</li>
				<li class="flex flex-col items-center space-y-1">
					<div class="bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
						<a href="#" class="block bg-white p-1 rounded-full transform transition hover:-rotate-6">
							<img class="w-12 h-12 sm:w-24 sm:h-24 rounded-full" src="https://placekitten.com/200/205"
							     alt="instagram-stories-profile">
						</a>
					</div>
					<a href="#" class="text-xs sm:text-lg">Kitty Three</a>
				</li>
				<li class="flex flex-col items-center space-y-1">
					<div class="bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
						<a href="#" class="block bg-white p-1 rounded-full transform transition hover:-rotate-6">
							<img class="w-12 h-12 sm:w-24 sm:h-24 rounded-full" src="https://placekitten.com/200/208"
							     alt="instagram-stories-profile">
						</a>
					</div>
					<a href="#" class="text-xs sm:text-lg">Kitty Four</a>
				</li>
			</ul>
		</template>

		<div class="bg-gray-100 bg-opacity-25">
			<div class="max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
				<section class="flex justify-center">
					<article class="bg-white w-96">
						<header class="p-3 flex items-center justify-between">
							<div class="flex items-center font-bold">
								<span class="mr-2">
									<img
										class="w-10 rounded-full"
										src="https://i.pravatar.cc/48"
										alt="avatar-logo"
									/>
								</span>
								<span>Edgar Gc</span>
							</div>
							<div>
								<a href="#" class="float-right">
									<px-icon-ellipsi></px-icon-ellipsi>
								</a>
							</div>
						</header>
						<div>
							<img src="https://picsum.photos/500" alt="post-image">
						</div>
						<div class="p-3">
							<div class="flex justify-between items-center mb-2">
								<div class="flex items-center">
									<a href="#" class="mr-4">
										<px-icon-like></px-icon-like>
									</a>
									<a href="#" class="mr-4">
										<px-icon-comment></px-icon-comment>
									</a>
									<a href="#" class="mr-4">
										<px-icon-message></px-icon-message>
									</a>
								</div>
								<div class="flex items-center">
									<a href="">
										<px-icon-book-mark></px-icon-book-mark>
									</a>
								</div>
							</div>
							<div class="font-bold">1234,3123 likes</div>
							<div class="">
								<a href="#" class="text-gray-300">View all commets</a>
							</div>
							<div>
								<div class="mt-1">
									<span class="font-bold">foouser</span>
									<span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										Cupiditate harum in iure nemo officia rem repellendus tempora, tenetur.
									</span>
								</div>
								<div class="mt-1">
									<span class="font-bold">foouser</span>
									<span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										Cupiditate harum in iure nemo officia rem repellendus tempora, tenetur.
									</span>
								</div>
							</div>
							<small class="text-gray-400">2 Hours Ago</small>
							<div class="flex justify-between items-center mt-3">
								<div class="flex items-center">
									<a href="#" class="px-3 py-2">
										<px-icon-smile></px-icon-smile>
									</a>
									<input
										class="w-full py-2 px-3 appearance-none bg-transparent border-none text-gray-700 leading-tight focus:outline-none"
										type="text" placeholder="Comment"/>
								</div>
								<button class="px-3 py-2 text-purple-500 focus:text-gray-700 focus:text-lg">Post</button>
							</div>
						</div>
					</article>
				</section>
			</div>
		</div>
	</main-layout>
</template>

<script>
import {defineComponent} from 'vue'
import MainLayout from '@/Layouts/MainLayout.vue'
import PxIconEllipsi from "@/Pages/Components/PxIconEllipsi";
import PxIconMessage from "@/Pages/Components/PxIconMessage";
import PxIconLike from "@/Pages/Components/PxIconLike";
import PxIconComment from "@/Pages/Components/PxIconComment";
import PxIconBookMark from "@/Pages/Components/PxIconBookMark";
import PxIconSmile from "@/Pages/Components/PxIconSmile";

export default defineComponent({
	components: {
		PxIconSmile,
		PxIconBookMark,
		MainLayout,
		PxIconMessage,
		PxIconEllipsi,
		PxIconLike,
		PxIconComment
	},
})
</script>

<style scoped>
.outline-zero {
	outline: none;
	border: 0;
	background: none;
}
</style>