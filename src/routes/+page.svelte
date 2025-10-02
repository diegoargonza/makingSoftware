<script>
    import img_sec1 from '../img/img_secc1.png'
    import Tarjeta from '../components/tarjeta.svelte';
    import img2 from '../img/img2.png'
    import img1 from '../img/img1.png'
    import img3 from '../img/img3.png'
    import img4 from '../img/img4.png'
  

</script>





<!-- Contenido || sección 1-->

   <div class="flex space-x-5 justify-center items-center p-20 bg-sepia-100">
       <img src={img_sec1} alt="" class="rounded-full  w-50 h-50">
       <div class=" w-[600px]">
           <p class="text-xl text-sky-950">Si eres egresada o egresado de la UNAM, te invitamos a crear soluciones tecnológicas para nuestra universidad con las prácticas más utilizadas en el sector</p>
           <div class="mt-5 text-center">
               <a href=" " class="border border-gray-200  shadow-md rounded-md text-orange-700 p-2">Ver Convocatoria</a>
           </div>
       </div>
   </div>


<!-- Contenido de tarjetas | sección 2 -->
<div class="relative flex h-[500px]">
    <div class="bg-[url(./img/bg_secc2.png)] w-1/2 h-full bg-cover"></div>
    <div class="bg-[url(./img/bg_secc2.png)] w-1/2 h-[500px]  bg-cover bg-right "></div>
    
    <div class="absolute inset-0 flex items-center justify-center space-x-5">
        <Tarjeta
            titulo={'Capacitación práctica'}
            texto={'Aprende a desarrollar sistemas con enfoque ágil, ¡listo para la industria!'}
            img={img1}
        />
        <Tarjeta
            titulo={'Experiencia Real'}
            texto={'Colabora en proyectos multidiciplinarios que impactan directamente a la comunidad universitaria'}
            img={img2}
        />
        <Tarjeta
            titulo={'Retribución económica'}
            texto={'Gana mientras adquieres nuevas habilidades y creas soluciones tecnológicas de calidad'}
            img={img3}
        />
        <Tarjeta
            titulo={'Crecimiento profesional'}
            texto={'Fortalece tus competencias trabajando en equipos, resolviendo desafíos reales y atumatizando procesos clave'}
            img={img4}
        />
    </div>
</div>

<!-- Contenido objetivos | sección 3 -->

<div class="relative flex">
    <div class="bg-[url(./img/bg_secc3.png)]  w-1/2 h-[500px] bg-cover "></div>
    <div class="bg-[url(./img/bg_secc3.png)]  w-1/2 h-[500px]  bg-cover bg-right "></div>
    <div class="absolute inset-0 items-center justify-center  ">
        <div class="w-[1000px] mx-auto">
            <h1 class="mt-10 ">Acerca del programa Institucional de Desarrollo  de Software y Soluciones Técnicas </h1>
            <div class="flex items-center space-x-5 ">
                <div>
                    <h2 class="text-xl">Objetivos del programa </h2>
                    <p>Generar un programa de desarrollo de software y soluciones tecnológicas que ayude en la automatización de procesos institucionales universitarios con la aplicación de métodos formales de ingeniería de software, que contemplan la evaluación de laternativas como la adaptación, adquisición o desarrollo da la medida, con la participación de grupos de trabajo integrados por personal especialista y perfiles de egresados en formación, capacitados en prácticas formales adecuadas por la universidad para la construcción de software.</p>
                </div>
               <img src={img1} alt="" class="rounded-full  w-50 h-50">
            </div>
        </div>
    </div>
</div>