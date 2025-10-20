<script>
    import { base } from "$app/paths";
    import Tarjeta from "$lib/components/tarjeta.svelte";
    import Modal from "$lib/components/modal.svelte";
  
    // script para envio de datos 

    let nombres= '';
    let apellidos= '';
    let correo = '';
    let telefono= '';
</script>


    <!-- Contenido || sección 1-->

    <div
        class="flex flex-wrap space-x-5 justify-center items-center bg-sepia-100 h-[500px] md:h-[400px]"
    >
        <div>
            <div class="">
                <div
                    class="shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30 h-52 w-52 rounded-full"
                >
                    <img
                        src="{base}/img/img_secc1.png"
                        alt=""
                        class="rounded-full w-full h-full"
                    />
                </div>
            </div>
        </div>

        <div class="w-11/12 md:w-[600px]">
            <p class="text-justify md:text-xl text-sky-950">
                Si eres egresada o egresado de la UNAM, te invitamos a crear
                soluciones tecnológicas para nuestra universidad con las
                prácticas más utilizadas en el sector.
            </p>
            <div class="flex justify-center mt-3 md:mt-2">
                <div
                    class="grid place-content-center shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30 h-10 w-40 rounded-xl"
                >
                    <a href="https://acortar.link/NkEccB" class="text-center text-orange-700" target="_blank"
                        >Ver convocatoria</a
                    >
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido de tarjetas | sección 2 -->
    <div
        class="p-2  "
        id="seccion2"
        style=""
    >
        <div class="flex flex-wrap space-x-5 justify-center">
            <div
                class="flex flex-wrap justify-center gap-3 md:w-[700px] lg:w-[1200px] p-20"
            >
                <Tarjeta
                    titulo={"Capacitación práctica"}
                    texto={"Aprende a desarrollar sistemas con enfoque ágil, ¡listo para la industria!"}
                    img="{base}/img/img1.png"
                />
                <Tarjeta
                    titulo={"Experiencia Real"}
                    texto={"Colabora en proyectos multidiciplinarios que impactan directamente a la comunidad universitaria"}
                    img="{base}/img/img2.png"
                />
                <Tarjeta
                    titulo={"Retribución económica"}
                    texto={"Gana mientras adquieres nuevas habilidades y creas soluciones tecnológicas de calidad"}
                    img="{base}/img/img3-1.png"
                />
                <Tarjeta
                    titulo={"Crecimiento profesional"}
                    texto={"Fortalece tus competencias trabajando en equipos, resolviendo desafíos reales y atumatizando procesos clave"}
                    img="{base}/img/img4.png"
                />
            </div>
        </div>
    </div>

    <!-- Contenido objetivos | sección 3 -->
    <div class="grid justify-center  "
    id="seccion3"
    >
    <div class="wrapper">
            <h1 id="acerca" class="px-5">
                Acerca del programa Institucional de Desarrollo de Software y
                Soluciones Técnicas
            </h1>
            <div class="flex flex-wrap items-center px-5">
                <div class="w-full md:w-auto lg:w-[800px]" >
                    <h2 class="text-xl">Objetivos del programa</h2>
                    <p class="">
                        Generar un programa de desarrollo de software y soluciones
                        tecnológicas que ayude en la automatización de procesos
                        institucionales universitarios con la aplicación de métodos
                        formales de ingeniería de software, que contemplan la
                        evaluación de laternativas como la adaptación, adquisición o
                        desarrollo da la medida, con la participación de grupos de
                        trabajo integrados por personal especialista y perfiles de
                        egresados en formación, capacitados en prácticas formales
                        adecuadas por la universidad para la construcción de
                        software.
                    </p>
                </div>
                <div class="mx-auto mt-5 ">
                    <div class="shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30 h-52 w-52 rounded-full">
                        <img
                            src="{base}/img/img1.png"
                            alt=""
                            class="rounded-full w-full h-full"
                        />
                    </div>
                </div>
            </div>
    </div>
       
    </div>



    <!-- Contenido objetivos | sección 4 -->
    <div class="flex flex-wrap justify-center mt-20" id="seccion4">
        <div class="w-full md:w-[1093px]  px-5">
            <h1 id="beneficios" class="">Beneficios</h1>
            <p class="mt-3">Con el programa se espera tener una mejor atención y respuesta a la comunidad universitaria, la simplificación de las formas de trabajo, mayor consistencia en los resultados, reducción en los tiempos de respuesta y mejora en la experiencia de la comunidad universitaria, la validación de datos, incorporación de otros mecanismos institucionales como puede ser el firmado de documentos. Algunos beneficios son:</p>

            <h3 class="text-2xl text-sky-800 mt-10">Beneficios institucionales</h3>
            <ul class="list-disc px-10">
                <li>Mejora de las soluciones de software existentes en la UNAM.</li>
                <li>Fortalecimiento de las competencias y especialización técnica de los egresados, para que cuenten con un perfil profesional más sólido y valorado.</li>
                <li>Apoyo a la automatización y transformación de procesos universitarios.</li>
                <li>Extensión de prácticas y marcos de trabajo de desarrollo de productos de software con diferentes perfiles técnicos.</li>
            </ul>

            <h3 class="text-2xl text-sky-800 mt-10">Beneficios de los participantes</h3>
            <ul class="list-disc px-10">
                <li>Mejora de las soluciones de software existentes en la UNAM.</li>
                <li>Fortalecimiento de las competencias y especialización técnica de los egresados, para que cuenten con un perfil profesional más sólido y valorado.</li>
                <li>Apoyo a la automatización y transformación de procesos universitarios.</li>
                <li>Extensión de prácticas y marcos de trabajo de desarrollo de productos de software con diferentes perfiles técnicos.</li>
            </ul>
        </div>
    </div>

    <!-- Contenido objetivos | sección 5 -->
    
    <div class="flex flex-wrap justify-center mt-20" id="seccion5">
        <div class="w-full md:w-[1093px] px-5">
            <h1 id="informes" class="">Informes</h1>
            <p class="mt-3">¿Quieres participar en el programa? Deja tus datos</p>
            <div class="mt-5">
                <Modal/>
            </div>
        </div>
    </div>
           