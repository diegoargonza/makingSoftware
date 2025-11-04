<script>
  import { base } from "$app/paths";
  import { onMount } from 'svelte';

  let mensaje = " ";
  let exito = false;
  
   // @ts-ignore
   async function enviarFormulario(event) {
    event.preventDefault(); // evita el redireccionamiento

    const form = event.target;
    const data = new FormData(form);


    try {
      const response = await fetch("http://132.248.63.171/MAKING25/prueba.php", {
        method: "POST",
        body: data
      });
      const resultado = await response.json();
      if(resultado.succes){
        mensaje = "Se ha enviado el formulario correctamente.";
      }else{
        mensaje = "No se pudo enviar el mensaje.";
        exito = false
      }
    } catch (error) {
      mensaje = "Error al conectar con el servidor";
      exito = false;
      
    }

   
    
  }
  


</script>

<button
  command="show-modal"
  commandfor="dialog"
  class="cursor-pointer block rounded-md  sm:text-sm md:text-base  text-sky-700 hover:text-sky-600">Información</button>

<el-dialog>
  <dialog
    id="dialog"
    aria-labelledby="dialog-title"
    class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent"
  >
    <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"
    ></el-dialog-backdrop>

    <div class="flex  items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0 mt-10 ">
      <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white w-[500px] ">
        <div class="bg-white px-20 pt-5 pb-4 sm:p-4 sm:pb-4 ">
          <div class="">


                {#if mensaje}
                  <div  class=" rounded-md text-center " id="mensaje">
                    <p class="p-2 font-bold">{mensaje}</p>
                  </div>
                 
                {/if}


            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left ">
              <div class="flex items-center justify-between mx-auto">
                <h3
                  id="dialog-title"
                  class="font-semibold text-orange-700 text-2xl"
                >
                  Información
                </h3>
                <button 
                class="w-10 text-xl  text-sky-900 hover:bg-sepia-100 rounded-md cursor-pointer  p-2"
                commandfor="dialog"
                command="close">X</button>
              </div>
              <div class="mt-2">
                <p class="text-sm text-center">Déjanos tus datos para participar en el programa.</p>
              </div> 
              <div class="mt-3">
                <form
                  class="grid justify-center text-center mx-auto  mt-3"
                  method="post"
                  on:submit={enviarFormulario}
                >
                  <div class="grid grid-cols-1 mt-2">
                    <label for="nombres">Nombres(s)</label>
                    <input type="text" name="nombres" id="nombres" class="w-auto md:w-70 border  rounded-md p-1" />
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="w-auto md:w-70 border  rounded-md p-1"/>
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="correo">Correo electrónico</label>
                    <input type="text" name="correo" id="correo" class="w-auto md:w-70 border  rounded-md p-1" />
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="telefono">Teléfono de contacto </label>
                    <input type="text" name="telefono" id="telefono" class="w-auto md:w-70 border  rounded-md p-1"/>
                  </div>
                  <div class="flex justify-center mt-2">
                    <!-- svelte-ignore a11y_missing_attribute -->
                    <img src="{base}/img/img_captcha.png" class="w-60 h-30">
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="">Escriba el texto en la imagen </label>
                    <input type="text" name="texto" id="texto" class="w-auto md:w-70 border  rounded-md p-1"/>
                  </div>
                  <div class="grid grid-cols-1 mt-2"></div>
                  <div class=" flex flex-wrap space-x-5 justify-center p-2">
                    <div class="flex justify-center mt-3 md:mt-2">
                      <div class="grid place-content-center shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30 h-10 w-30 rounded-xl">
                        <button
                          class="text-center text-orange-700 cursor-pointer"
                          type="submit"
                          value="aceptar" 
                          name="aceptar"
                          id="aceptar">Aceptar</button
                        >
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </el-dialog-panel>
    </div>
  </dialog>
</el-dialog>
