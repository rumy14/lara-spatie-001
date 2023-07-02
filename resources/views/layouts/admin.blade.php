<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans antialiased bg-indigo-50 text-gray-800">
        <div x-data="sidebar()" class="flex">
			<!-- Sidebar -->
			<div
				x-show="isOpen"
				class="bg-gray-800 text-white min-h-screen w-72"
			>
				<!-- Brand -->
				<div class="p-4 flex justify-center bg-gray-900">
					Project Sidebar
				</div>
				<!-- Links -->
				<div>
					<a
						class="flex items-center hover:bg-indigo-500 hover:text-white text-gray-400 p-4"
						href=""
					>
						<svg
							class="h-6 w-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
							/>
						</svg>
						Home</a
					>
					<a
						class="flex items-center hover:bg-indigo-500 hover:text-white text-gray-400 p-4"
						href="{{ route('admin.roles.index') }}"
					>
						<svg
							class="h-6 w-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
							/>
						</svg>
						Roles
					</a>
					<a
						class="flex items-center hover:bg-indigo-500 hover:text-white text-gray-400 p-4"
						href="{{ route('admin.permissions.index') }}"
					>
						<svg
							class="h-6 w-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
							/>
						</svg>
						Permission
					</a>
					<a
						class="flex items-center hover:bg-indigo-500 hover:text-white text-gray-400 p-4"
						href=""
					>
						<svg
							class="h-6 w-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
							/>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
							/>
						</svg>
						Settings</a
					>
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a
						class="flex items-center hover:bg-indigo-500 hover:text-white text-gray-400 p-4"
						href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
					>
                        <svg 
                            class="h-6 w-6 mr-3" 
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            viewBox="0 0 24 20">
                            <path 
                                stroke="currentColor" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"
                            />
                        </svg>
                        
						Logout ({{ Auth::user()->name }})</a
					>
                    </form>
                    
				</div>
			</div>
			<div class="w-full">
				<!--Top bar-->
				<div class="flex w-full bg-white text-gray-400">
					<button
						x-spread="toggle"
						class="hover:bg-indigo-500 hover:text-white p-4"
					>
						<svg
							class="h-6 w-6"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M4 6h16M4 12h16M4 18h16"
							/>
						</svg>
					</button>
					<a
						class="flex items-center p-4 hover:bg-indigo-500 hover:text-white"
						href=""
					>
						<svg
							class="h-6 w-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M13 10V3L4 14h7v7l9-11h-7z"
							/>
						</svg>
						Quick Link</a
					>
				</div>
                <div class="flex w-full bg-slate-50">
                    {{ $slot }}
                </div>
			</div>
		</div>
		<script>
			function sidebar() {
				return {
					isOpen: true,
					open: {
						["@click"]() {
							this.isOpen = true
						},
					},
					close: {
						["@click"]() {
							this.isOpen = false
						},
					},
					toggle: {
						["@click"]() {
							this.isOpen = !this.isOpen
						},
					},
					handleAway: {
						["@click.away"]() {
							this.isOpen = false
						},
					},
				}
			}
		</script>
		<script
			src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
			defer
		></script>
    </body>
</html>
