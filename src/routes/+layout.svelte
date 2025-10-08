<script>
	import favicon from '$lib/assets/favicon.svg';
	import "../app.css";
	import Navegacion from '$lib/components/navegacion.svelte';
	import Header from '$lib/components/header.svelte';
	let { children } = $props();
</script>

<svelte:head>
	<link rel="icon" href={favicon} />
</svelte:head>
<!-- Header-->


	<Header/>    
	
	<!-- Navegación -->
	
	<Navegacion/>
	
	{@render children?.()}

