<script>
	import favicon from '$lib/assets/favicon.svg';
	import "../app.css";
	import Header from '../components/header.svelte';
    import Navegacion from '../components/navegacion.svelte'
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
