<script>
  import { base } from "$app/paths";

  let mensaje = " ";
  let exito = false;
  let modalAbierto = false;

  function abrirModal() {
    modalAbierto = true;
  }

  function cerrarModal() {
    modalAbierto = false;
  }
  // @ts-ignore
  async function enviarFormulario(event) {
    event.preventDefault();
    const form = event.target;
    const data = new FormData(form);

    try {
      const response = await fetch(
        "http://132.248.63.171/MAKING25/prueba.php",
        {
          method: "POST",
          body: data,
        },
      );

      
      if (response) {
        mensaje = "Se ha enviado el formulario correctamente.";
        exito = true;
      } else {
        mensaje = "No se pudo enviar el mensaje.";
        exito = false;
      }
    } catch (error) {
      mensaje = "Error al conectar con el servidor", error;
      exito = false;
    }
  }
</script>

<!-- Botón para abrir modal -->
<button
  on:click={abrirModal}
  class="cursor-pointer block rounded-md sm:text-sm md:text-base text-sky-700 hover:text-sky-600"
  >Información</button
>

<!-- Modal super simple -->
{#if modalAbierto}
  <div class="fixed inset-0 bg-gray-500/75  flex items-center justify-center p-4 w-full z-80">
    <div class="flex justify-center bg-white rounded-lg w-full max-w-md  overflow-y-auto z-80">
      <div class="p-6">
        {#if mensaje}
          <div class="rounded-md text-center mb-4">
            <p class="p-2 font-bold">{mensaje}</p>
          </div>
        {/if}

        <div class="flex justify-between items-center mb-4">
          <h3 class="font-semibold text-orange-700 text-xl">Información</h3>
          <button on:click={cerrarModal} class="w-10 text-xl  text-sky-900 hover:bg-sepia-100 rounded-md cursor-pointer  p-2">X</button>
        </div>
        <p class="text-sm text-center mb-4">
          Déjanos tus datos para participar en el programa.
        </p>

        <form
          class="grid justify-center text-center mx-auto mt-3"
          method="post"
          on:submit={enviarFormulario}
        >
          <div class="grid grid-cols-1 mt-2">
            <label for="nombres">Nombres(s)</label>
            <input
              type="text"
              name="nombres"
              id="nombres"
              class="w-auto md:w-70 border rounded-md p-1"
            />
          </div>
          <div class="grid grid-cols-1 mt-2">
            <label for="apellidos">Apellidos</label>
            <input
              type="text"
              name="apellidos"
              id="apellidos"
              class="w-auto md:w-70 border rounded-md p-1"
            />
          </div>
          <div class="grid grid-cols-1 mt-2">
            <label for="correo">Correo electrónico</label>
            <input
              type="text"
              name="correo"
              id="correo"
              class="w-auto md:w-70 border rounded-md p-1"
            />
          </div>
          <div class="grid grid-cols-1 mt-2">
            <label for="telefono">Teléfono de contacto </label>
            <input
              type="text"
              name="telefono"
              id="telefono"
              class="w-auto md:w-70 border rounded-md p-1"
            />
          </div>
          <div class="flex justify-center mt-2">
            <!-- svelte-ignore a11y_missing_attribute -->
            <img src="{base}/img/img_captcha.png" class="w-60 h-30" />
          </div>
          <div class="grid grid-cols-1 mt-2">
            <label for="">Escriba el texto en la imagen </label>
            <input
              type="text"
              name="texto"
              id="texto"
              class="w-auto md:w-70 border rounded-md p-1"
            />
          </div>
          <div class="grid grid-cols-1 mt-2"></div>
          <div class=" flex flex-wrap space-x-5 justify-center p-2">
            <div class="flex justify-center mt-3 md:mt-2">
              <div
                class="grid place-content-center shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30 h-10 w-30 rounded-xl"
              >
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
{/if}


