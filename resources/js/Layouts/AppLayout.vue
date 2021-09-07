<template>
	<div>
		<Head :title="title"/>
		<jet-banner/>

		<div class="min-h-screen bg-gray-100">
			<nav class="bg-white border-b border-gray-100">
				<!-- Primary Navigation Menu -->
				<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
					<div class="flex justify-between h-16">
						<div class="flex px-4">
							<!-- Instagram Logo -->
							<!--Have two pictures in this section
							  - Image from SM < query
							  - Image from SM > query
							 -->
							<div class="flex-shrink-0 flex items-center">
								<Link :href="route('dashboard')">
									<img
										class="block lg:hidden h-8 w-auto"
										src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png"
										alt="Instagram-logo"
									/>
									<img
										class="hidden lg:block h-8 w-auto"
										src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png"
										alt="Instagram-logo"
									/>
								</Link>
							</div>

							<!-- Navigation Links -->
							<!--
							<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
								<jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
									Dashboard
								</jet-nav-link>
							</div>-->
						</div>

						<!-- Input text -->
						<div class="hidden sm:flex sm:items-center sm:justify-center px-2">
							<div class="max-w-xs">
								<label for="search" class="sr-only">Search</label>
								<div class="relative">
									<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
										<!--Aqui va el SVG de la lupa-->
										<px-icon-search></px-icon-search>
									</div>
									<input
										class="w-full block pl-10 pr-3 py-2 border border-gray-400 rounded-md leading-5
                            bg-gray-100 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400
	                          focus:border-blue-300 focus:shadow-outline-blue sm:text-sm transition
	                          duration-150 ease-in-out"
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
						<div class="px-2 flex items-center justify-center ml-6">
							<div class="relative flex flex-shrink-0 px-2">
								<a href="#">
									<px-icon-home></px-icon-home>
								</a>
							</div>
							<div class="relative flex flex-shrink-0 px-2">
								<a href="#">
									<px-icon-message></px-icon-message>
								</a>
								<div id="notifications"></div>
							</div>
							<div class="relative flex flex-shrink-0 px-2">
								<a href="#">
									<px-icon-explore></px-icon-explore>
								</a>
							</div>
							<div class="relative flex flex-shrink-0 px-2">
								<a href="#" class="">
									<px-icon-like></px-icon-like>
								</a>
							</div>

							<!-- Teams Dropdown -->
							<!--	<div class="relative flex flex-shrink-0 px-2">
											&lt;!&ndash; Teams Dropdown &ndash;&gt;
											<jet-dropdown align="right" width="60" v-if="$page.props.jetstream.hasTeamFeatures">
												<template #trigger>
													<span class="w-6 h-6 inline-flex rounded-md">
														<button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
															{{ $page.props.user.current_team.name }}

															<svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
																	<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
															</svg>
														</button>
													</span>
												</template>

												<template #content>
													<div class="w-60">
														&lt;!&ndash; Team Management &ndash;&gt;
														<template v-if="$page.props.jetstream.hasTeamFeatures">
															<div class="block px-4 py-2 text-xs text-gray-400">
																Manage Team
															</div>

															&lt;!&ndash; Team Settings &ndash;&gt;
															<jet-dropdown-link :href="route('teams.show', $page.props.user.current_team)">
																Team Settings
															</jet-dropdown-link>

															<jet-dropdown-link :href="route('teams.create')" v-if="$page.props.jetstream.canCreateTeams">
																Create New Team
															</jet-dropdown-link>

															<div class="border-t border-gray-100"></div>

															&lt;!&ndash; Team Switcher &ndash;&gt;
															<div class="block px-4 py-2 text-xs text-gray-400">
																Switch Teams
															</div>

															<template v-for="team in $page.props.user.all_teams" :key="team.id">
																<form @submit.prevent="switchToTeam(team)">
																	<jet-dropdown-link as="button">
																		<div class="flex items-center">
																			<svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
																			<div>{{ team.name }}</div>
																		</div>
																	</jet-dropdown-link>
																</form>
															</template>
														</template>
													</div>
												</template>
											</jet-dropdown>
										</div>-->

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
												class="h-6 w-6 rounded-full object-cover"
												:src="$page.props.user.profile_photo_url"
												:alt="$page.props.user.name"/>
										</button>

										<span v-else class="inline-flex rounded-md">
                      <button
	                      type="button"
	                      class="inline-flex items-center px-3 py-2 border border-transparent text-sm
                          leading-4 font-medium rounded-md text-gray-500 bg-white
                          hover:text-gray-700 focus:outline-none transition"
                      >
                        {{ $page.props.user.name }}

                        <svg
	                        class="ml-2 -mr-0.5 h-4 w-4"
	                        xmlns="http://www.w3.org/2000/svg"
	                        viewBox="0 0 20 20"
	                        fill="currentColor">
                          <path
	                          fill-rule="evenodd"
	                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
	                          clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                    </span>
									</template>

									<template #content>
										<!-- Account Management -->
										<div class="block px-4 py-2 text-xs text-gray-400">
											Manage Account
										</div>

										<jet-dropdown-link :href="route('profile.show')">
											Profile
										</jet-dropdown-link>

										<jet-dropdown-link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures">
											API Tokens
										</jet-dropdown-link>

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
						<!--	<div class="-mr-2 flex items-center sm:hidden">
										<button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
											<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
												<path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
												<path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
											</svg>
										</button>
									</div>-->
					</div>
				</div>

				<!-- Responsive Navigation Menu -->
				<div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
					<div class="pt-2 pb-3 space-y-1">
						<jet-responsive-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
							Dashboard
						</jet-responsive-nav-link>
					</div>

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
							<jet-responsive-nav-link :href="route('profile.show')" :active="route().current('profile.show')">
								Profile
							</jet-responsive-nav-link>

							<jet-responsive-nav-link :href="route('api-tokens.index')" :active="route().current('api-tokens.index')"
							                         v-if="$page.props.jetstream.hasApiFeatures">
								API Tokens
							</jet-responsive-nav-link>

							<!-- Authentication -->
							<form method="POST" @submit.prevent="logout">
								<jet-responsive-nav-link as="button">
									Log Out
								</jet-responsive-nav-link>
							</form>

							<!-- Team Management -->
							<template v-if="$page.props.jetstream.hasTeamFeatures">
								<div class="border-t border-gray-200"></div>

								<div class="block px-4 py-2 text-xs text-gray-400">
									Manage Team
								</div>

								<!-- Team Settings -->
								<jet-responsive-nav-link :href="route('teams.show', $page.props.user.current_team)"
								                         :active="route().current('teams.show')">
									Team Settings
								</jet-responsive-nav-link>

								<jet-responsive-nav-link :href="route('teams.create')" :active="route().current('teams.create')"
								                         v-if="$page.props.jetstream.canCreateTeams">
									Create New Team
								</jet-responsive-nav-link>

								<div class="border-t border-gray-200"></div>

								<!-- Team Switcher -->
								<div class="block px-4 py-2 text-xs text-gray-400">
									Switch Teams
								</div>

								<template v-for="team in $page.props.user.all_teams" :key="team.id">
									<form @submit.prevent="switchToTeam(team)">
										<jet-responsive-nav-link as="button">
											<div class="flex items-center">
												<svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400"
												     fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												     stroke="currentColor" viewBox="0 0 24 24">
													<path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
												</svg>
												<div>{{ team.name }}</div>
											</div>
										</jet-responsive-nav-link>
									</form>
								</template>
							</template>
						</div>
					</div>
				</div>
			</nav>

			<!-- Page Heading -->
			<header class="bg-white shadow" v-if="$slots.header">
				<div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
					<slot name="header"></slot>
				</div>
			</header>

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
import PxIconSearch from "@/Pages/Components/PxIconSearch";
import PxIconHome from "@/Pages/Components/PxIconHome";
import PxIconMessage from "@/Pages/Components/PxIconMessage";
import PxIconExplore from "@/Pages/Components/PxIconExplore";
import PxIconLike from "@/Pages/Components/PxIconLike";

export default defineComponent({
	props: {
		title: String,
	},

	components: {
		PxIconLike,
		PxIconExplore,
		PxIconMessage,
		PxIconHome,
		PxIconSearch,
		Head,
		JetApplicationMark,
		JetBanner,
		JetDropdown,
		JetDropdownLink,
		JetNavLink,
		JetResponsiveNavLink,
		Link,
	},

	data() {
		return {
			showingNavigationDropdown: false,
		}
	},

	methods: {
		switchToTeam(team) {
			this.$inertia.put(route('current-team.update'), {
				'team_id': team.id
			}, {
				preserveState: false
			})
		},

		logout() {
			this.$inertia.post(route('logout'));
		},
	}
})
</script>
