<template>
	<div>
		<article class="w-auto mt-8 ml-auto mb-0 pt-8 flex flex-shrink justify-center">
			<!--	Parte de la imagen de instagram		-->
			<div
				class="w-72 h-96 bg-no-repeat bg-cover relative"
				style="background-image: url('https://www.instagram.com/static/images/homepage/home-phones.png/43cc71bb1b43.png');"
			>
				<img
					class="img-class"
					src="https://www.instagram.com/static/images/homepage/screenshot1.jpg/d6bf0c928b5a.jpg" alt=""
				/>
			</div>

			<!--	La parte del formulario		-->
			<div class="w-80 px-6 pb-6 mb-2 flex flex-col items-center bg-white shadow-md rounded">
				<!-- Header -->
				<div class="w-full text-center py-2">
					<h3 class="my-2 text-black font-semibold">Clonstagram</h3>
				</div>
				<div class="w-full flex flex-col">
					<p class="text-lg text-center">Please create account or sign up</p>

					<div class="mt-2 flex justify-center" v-if="canLogin">
						<Link
							v-if="$page.props.user"
							:href="route('dashboard')"
							class="text-sm text-gray-700 underline"
						>
							Dashboard
						</Link>
						<template v-else>
							<div class="w-full flex flex-col items-center space-y-2 text-center">
								<Link
									:href="route('login')"
									class="w-3/4 bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-700 text-white font-bold
									rounded focus:outline-none focus:shadow-outline"
								>
									Login
								</Link>
								<Link
									:href="route('register')"
									class="w-3/4 bg-green-500 text-white px-3 py-2 rounded hover:bg-green-700 text-white font-bold
									rounded focus:outline-none focus:shadow-outline"
									v-if="canRegister"
								>
									Register
								</Link>
							</div>
						</template>

					</div>
				</div>
				<!-- Formulario -->
				<!--				<form action="" class="flex justify-center items-center">
									<div class="w-full flex flex-col items-center justify-center">
										<div class="mb-2">
											<input
												class="mt-2 py-2 px-3 bg-grey-lighter no-appearance leading-normal rounded
													border-b border-grey-light focus:outline-none"
												type="email"
												placeholder="username, email or cellphone"
											>
										</div>
										<div class="mb-2">
											<input
												class="mt-2 py-2 px-3 bg-grey-lighter no-appearance leading-normal rounded
													border-b border-grey-light focus:outline-none cursor-pointer"
												name="password" type="password"
												placeholder="password"
											>
										</div>
										<div class="mb-2">
											<input
												class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold
													rounded focus:outline-none focus:shadow-outline"
												type="submit" value="Login!"
											/>
										</div>
									</div>

								</form>
								<div class="flex flex-col justify-center items-center">
									<div class="">
										<p class="text-center text-lg">¿No tienes cuenta?</p>
										<button
											class="w-full py-1 px-2 bg-green-500 hover:bg-green-700 text-white text-sm font-bold
												rounded focus:outline-none focus:shadow-outline"
										>
											Registrate 🤠
										</button>
									</div>
									<div class="mt-2">
										<a href="#" class="text-blue-400">¿Olvidaste tu contraseña?</a>
									</div>
								</div>-->
			</div>
		</article>
	</div>
</template>

<style scoped>
.img-class {
	width: 54%;
	position: absolute;
	bottom: 3rem;
	right: 2.375rem;
}
</style>


<script>
import {defineComponent} from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

export default defineComponent({
	components: {
		Link
	},
	props: {
		canLogin: Boolean,
		canRegister: Boolean,
	}
})
</script>
