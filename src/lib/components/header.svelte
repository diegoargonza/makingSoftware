<script>
    import {base} from '$app/paths';
    // import logo from '../../../static/img/logoUNAM.png';
    import UNAM from "../../lib/assets/UNAM.svg";
    import MS_logo from "../../lib/assets/MS_logo.svg";
</script>


<header class="relative flex">
    <div class="bg-[url(/img/bg_head.png)] w-full bg-cover p-12 hidden sm:block "></div> 
    <div class="absolute inset-0 flex items-center justify-between wrapper ">
        <div class="flex space-x-10 items-center ">
            <img src={UNAM} alt="logo-unam" class="h-50 w-50 hidden sm:inline text-left text-sm lg:text-xl ">
            <div class="w-[200px] md:w-full hidden sm:block">
                <p class="text-orange-700">Programa institucional deDesarrollo de Software y Soluciones Tecnológicas</p>
            </div>
        </div>
        <div class=" fixed top-0 right-0 py-2  sm:relative sm:top-0 sm:left-0 md:relative md:top-0 md:left-0  z-80  ">
            <img src={MS_logo} alt="logo-msoftware" class="h-10 w-50 sm:h-40 sm:w-40 md:h-40 md:w-40">
        </div>
   </div>
</header>
