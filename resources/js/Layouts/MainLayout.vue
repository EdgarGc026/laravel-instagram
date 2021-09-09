<template>
	<div>
		<Head :title="title"/>
		<jet-banner/>

		<div class="min-h-screen">
			<!-- Navigation -->
			<nav class="px-4 py-2 bg-white border-b">
				<!-- Primary Navigation Menu -->
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
					<div class="flex justify-between">
						<div class="flex flex-shrink-0">
							<!-- Instagram Logo -->
							<div class="flex flex-shrink-0 items-center">
								<Link :href="route('dashboard')">
									<img class="h-10"
									     src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/150px-Instagram_logo.svg.png"
									     alt="instagram"
									/>
								</Link>
							</div>
						</div>

						<!-- Input text -->
						<div class="hidden sm:flex sm:items-center sm:justify-center px-2">
							<div class="max-w-xs">
								<label for="search" class="sr-only">Search</label>
								<div class="relative">
									<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
										<!--Search SVG-->
										<px-icon-search></px-icon-search>
									</div>
									<input
										class="input-search-style focus:shadow-outline-blue transition duration-150 ease-in-out"
										id="search"
										placeholder="Search"
										type="search"
									/>
								</div>
							</div>
						</div>

						<!-- Icons Settings -->
						<!--
							We have four logos, such as:
							- Home
							- Like
							- Explore
							- Profile picture
						-->
						<div class="px-2 flex items-center justify-center ml-2 sm:ml-4">
							<div class="relative flex flex-shrink-0 px-1 lg:px-3">
								<a href="#">
									<px-icon-home></px-icon-home>
								</a>
							</div>
							<div class="relative flex flex-shrink-0 px-1 lg:px-3">
								<a href="#">
									<px-icon-message></px-icon-message>
								</a>
								<div id="notifications"></div>
							</div>
							<div class="relative flex flex-shrink-0 px-1 lg:px-3">
								<a href="#">
									<px-icon-explore></px-icon-explore>
								</a>
							</div>
							<div class="relative flex flex-shrink-0 px-1 lg:px-3">
								<a href="#" class="">
									<px-icon-like></px-icon-like>
								</a>
							</div>

							<!-- Teams Dropdown -->

							<!-- Settings Dropdown -->
							<div class="relative flex flex-shrink-0 px-2">
								<jet-dropdown align="right" width="48">
									<template #trigger>
										<button
											v-if="$page.props.jetstream.managesProfilePhotos"
											class="flex text-sm border-2 border-transparent
												rounded-full focus:outline-none focus:border-gray-300 transition"
										>
											<img
												class="h-4 w-4 sm:w-8 sm:h-8 rounded-full object-cover"
												:src="$page.props.user.profile_photo_url"
												:alt="$page.props.user.name"/>
										</button>

										<span v-else class="inline-flex rounded-md">
                      <button
	                      type="button"
	                      class="button-icon-else"
                      >
                        {{ $page.props.user.name }}

                        <px-icon-else></px-icon-else>
                      </button>
                    </span>
									</template>

									<template #content>
										<!-- Account Management -->

										<!-- Config profile account -->
										<jet-dropdown-link :href="route('profile.show')">
											Config
										</jet-dropdown-link>

										<!-- Show Instagram profile -->
										<jet-responsive-nav-link :href="route('home.profile')" :active="route().current('home.profile')">
											Profile
										</jet-responsive-nav-link>
										<!-- API Tokens -->

										<div class="border-t border-gray-100"></div>

										<!-- Authentication -->
										<form @submit.prevent="logout">
											<jet-dropdown-link as="button">
												Log Out
											</jet-dropdown-link>
										</form>
									</template>
								</jet-dropdown>
							</div>
						</div>

						<!-- Hamburger -->
					</div>
				</div>

				<!-- Responsive Navigation Menu -->
				<div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">

					<!-- Responsive Settings Options -->
					<div class="pt-4 pb-1 border-t border-gray-200">
						<div class="flex items-center px-4">
							<div v-if="$page.props.jetstream.managesProfilePhotos" class="flex-shrink-0 mr-3">
								<img class="h-10 w-10 rounded-full object-cover" :src="$page.props.user.profile_photo_url"
								     :alt="$page.props.user.name"/>
							</div>

							<div>
								<div class="font-medium text-base text-gray-800">{{ $page.props.user.name }}</div>
								<div class="font-medium text-sm text-gray-500">{{ $page.props.user.email }}</div>
							</div>
						</div>

						<div class="mt-3 space-y-1">
							<!-- Jetstream Profile Config -->
							<jet-responsive-nav-link :href="route('profile.show')" :active="route().current('profile.show')">
								Config
							</jet-responsive-nav-link>

							<jet-responsive-nav-link :href="route('home.profile')" :active="route().current('home.profile')">
								Profile
							</jet-responsive-nav-link>
							<!-- API Tokens -->

							<!-- Authentication -->
							<form method="POST" @submit.prevent="logout">
								<jet-responsive-nav-link as="button">
									Log out
								</jet-responsive-nav-link>
							</form>
							<!-- Team Management -->
						</div>
					</div>
				</div>
			</nav>

			<!-- Page Heading -->
			<!--			<header class="bg-white shadow" v-if="$slots.header">
							<div class="max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
								<slot name="header"></slot>
							</div>
						</header>-->

			<!-- Page Content -->
			<main>
				<slot></slot>
			</main>
		</div>
	</div>
</template>

<script>
import {defineComponent} from 'vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
import {Head, Link} from '@inertiajs/inertia-vue3';
import PxIconSearch from "@/Pages/Components/Icons/PxIconSearch";
import PxIconHome from "@/Pages/Components/Icons/PxIconHome";
import PxIconMessage from "@/Pages/Components/Icons/PxIconMessage";
import PxIconExplore from "@/Pages/Components/Icons/PxIconExplore";
import PxIconLike from "@/Pages/Components/Icons/PxIconLike";
import PxIconElse from "@/Pages/Components/Icons/PxIconElse";

export default defineComponent({
	props: {
		title: String,
	},

	components: {
		PxIconElse,
		PxIconLike,
		PxIconExplore,
		PxIconMessage,
		PxIconHome,
		PxIconSearch,
		JetApplicationMark,
		JetBanner,
		JetDropdown,
		JetDropdownLink,
		JetNavLink,
		JetResponsiveNavLink,
		Link,
		Head,
	},

	data() {
		return {
			showingNavigationDropdown: false,
		}
	},

	methods: {
		logout() {
			this.$inertia.post(route('logout'));
		},
	}
})
</script>
