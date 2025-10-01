<script>
    import logo from '../../img/logoUNAM.png';
    import logoMSoftware from "../../img/logoMSoftware.png";
    import imgPrueba from '../../img/imgprueba.png';

</script>



<!-- Navegación -->


<header class="relative flex ">
    <div class="bg-[url(./img/fondo-making.jpg)]  w-1/2 p-5"></div>
    <div class="bg-[url(./img/Fondo2.jpg)]  w-1/2 p-5"></div>
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


<!-- Navegación -->

<nav class="bg-[url(./img/fondo-making.jpg)] ">
    <ul class="flex space-x-10 justify-center">
        <li>Inicio</li>
        <li>Acerca del programa</li>
        <li>Convocatoria</li>
        <li>Beneficios</li>
        <li>Informes</li>
    </ul>
</nav>






<!-- Contenido -->

   <div class="flex space-x-5 justify-center items-center p-20 bg-[url(./img/fondo-making.jpg)]">
       <img src={imgPrueba} alt="" class="rounded-full  w-50 h-50">
       <div class=" w-[600px]">
           <p class="text-xl">Si eres egresada o egresado de la UNAM, te invitamos a crear soluciones tecnológicas para nuestra universidad con las prácticas más utilizadas en el sector</p>
           <div class="mt-5 text-center">
               <a href=" " class="border border-gray-200  shadow-md rounded-md text-orange-700 p-2">Ver Convocatoria</a>
           </div>
       </div>
   </div>


<!-- Contenido de tarjetas -->
<main class="relative flex">
    <div class="bg-[url(./img/fondo-making.jpg)]  w-1/2 h-[1000px] bg-cover"></div>
    <div class="bg-[url(./img/Fondo2.jpg)]  w-1/2 h-[1000px] bg-cover"></div>
    <div class="absolute inset-0 items-center justify-center mt-5">
        <div class="flex  inset-0 space-x-5 items-center justify-center">
            <div class="bg-slate-100 shadow-xl border border-slate-100 rounded-t-full rounded-bl-lg rounded-br-lg h-[400px] w-[230px] p-3">
                <div class="mt-2">
                    <img src={imgPrueba} alt="" class="rounded-full  w-50 h-50">
                    <h2 class="text-center">Capacitación práctica</h2>
                    <p>Aprende a desarrollar sistemas con enfoque ágil, ¡listo para la industria!</p>
                </div>
            </div>
        
            <div class=" bg-slate-100 border border-slate-100 shadow-xl rounded-t-full rounded-bl-lg  h-[400px] w-[230px] p-3" >
                <img src={imgPrueba} alt="" class="rounded-full  w-50 h-50">
                <div class="mt-2">
                    <h2 class="text-center">Experiencia Real</h2>
                    <p>Colabora en proyectos multidiciplinarios que impactan directamente a la comunidad universitaria</p>
                </div>
            </div>
            <div class=" bg-slate-100 border border-slate-100 shadow-xl rounded-t-full  h-[400px] w-[230px] p-3 ">
                <img src={imgPrueba} alt="" class="rounded-full  w-50 h-50">
                <div class="mt-2">
                    <h2 class="text-center">Retribución económica</h2>
                    <p>Gana mientras adquieres nuevas habilidades y creas soluciones tecnológicas de calidad</p>
                </div>
            </div>
            <div class=" bg-slate-100 border border-slate-100 shadow-xl rounded-t-full  h-[400px] w-[230px] p-3 ">
                <img src={imgPrueba} alt="" class="rounded-full  w-50 h-50">
                <div class="mt-2">
                    <h2 class="text-center ">Crecimiento profesional</h2>
                    <p>Fortalece tus competencias trabajando en equipos, resolviendo desafíos reales y atumatizando procesos clave</p>
                </div>
            </div>
        </div>
        
        
        <div class=" wrapper">
            <h1 class="mt-10">Acerca del programa Institucional de Desarrollo  de Software y Soluciones Técnicas </h1>
            <div>
                <div class="flex items-center space-x-5 ">
                    <div>
                        <h2 class="text-xl">Objetivos del programa </h2>
                        <p>Generar un programa de desarrollo de software y soluciones tecnológicas que ayude en la automatización de procesos institucionales universitarios con la aplicación de métodos formales de ingeniería de software, que contemplan la evaluación de laternativas como la adaptación, adquisición o desarrollo da la medida, con la participación de grupos de trabajo integrados por personal especialista y perfiles de egresados en formación, capacitados en prácticas formales adecuadas por la universidad para la construcción de software.</p>
                    </div>
                   <img src={imgPrueba} alt="" class="rounded-full  w-50 h-50">
                </div>
            </div>
        </div>
    </div>

 


   
</main>