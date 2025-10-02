<script>
    import logo from '../img/logoUNAM.png';
    import logoMSoftware from "../img/logoMSoftware.png";
</script>

<header class="relative flex ">
    <div class="bg-[url(./img/bg_head.png)]   w-full bg-cover p-10"></div>
    <div class="absolute inset-0 flex items-center justify-between ">
        <div class="flex space-x-3 items-center">
        <img src={logo} alt="logo-unam" class="h-10 w-30">
            <div>
                <p class="text-orange-700">Programa institucional de</p>
                <p class="text-orange-700">Desarrollo de Software y Soluciones Tecnológicas</p>
            </div>
        </div>
        <div>
            <img src={logoMSoftware} alt="logo-msoftware" class="h-10 w-30">
        </div>
   </div>
</header>
