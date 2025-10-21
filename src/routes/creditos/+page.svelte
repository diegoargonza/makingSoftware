<script>
    import { onMount } from 'svelte';
    import { goto } from '$app/navigation';


    let titulo = 'Créditos'
    const cargos = {
        rector: 'Rector',
        sdi: 'Secretaría de Desarrollo Institucional',
        DGCyTIyC: 'Director General de Cómputo y de Tecnologías de Información y Comunicación',
        sitioWeb :{
            DCyV: 'Directora de Colaboración y Vinculación',
            DSW: 'Desarrollo del sitio web',
        }
    }

    onMount(()=>{
        if(window.location.hash === '#beneficios'){
            goto('/');
        }
    });

</script>
<div class="text-center mt-5 w-11/12 md:w-full mx-auto">
    <h1 class=" text-orange-700">{titulo}</h1>
    <div class="grid gap-10 mt-5 md:text-xl">
        <div>
            <p>Dr Leonardo Lomelí Vanegas</p>
            <p class="font-bold">{cargos.rector}</p>
        </div>
        <div>
            <p>Dra. Diana Tamara Martínez Ruíz</p>
            <p class="font-bold">{cargos.sdi}</p>
        </div>
        <div>
            <p>Dr. Héctor Benítez Pérez</p>
            <p class="font-bold">{cargos.DGCyTIyC}</p>
        </div>
    </div>
    <h2 class="text-xl md:text-3xl mt-10">Coordinación del sitio web </h2>
    <div class="grid gap-10 mt-5  md:text-xl">
        <div>
            <p>Dra. Ana Yuri Ramírez Molina</p>
            <p class="font-bold">{cargos.sitioWeb.DCyV}</p>
        </div>
        <div>
            <p>L.C.G. Edgar Vargas Zermeño</p>
            <p class="font-bold">{cargos.sitioWeb.DSW}</p>
        </div>
    </div>
        
</div>