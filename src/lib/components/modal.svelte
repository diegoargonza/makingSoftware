<button
  command="show-modal"
  commandfor="dialog"
  class="border p-2 rounded-md cursor-pointer">información</button
>

<el-dialog>
  <dialog
    id="dialog"
    aria-labelledby="dialog-title"
    class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent"
  >
    <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"
    ></el-dialog-backdrop>

    <div class="flex  items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
      <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8  sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
        <div class="bg-white px-20 pt-5 pb-4 sm:p-4 sm:pb-4">
          <div class="">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <div class="flex items-center justify-between gap-5">
                <h3
                  id="dialog-title"
                  class="font-semibold text-sky-800 text-2xl"
                >
                  Información
                </h3>
                <button 
                class="w-10 text-xl border-1 rounded-md cursor-pointer  p-2"
                commandfor="dialog"
                command="close">X</button>
              </div>
              <!-- <div class="mt-2">
                <p class="text-sm ">Déjanos tus datos para participar en el programa.</p>
              </div> -->
              <div class="mt-3">
                <form
                  class="grid justify-center text-center mt-3"
                  method="post"
                  action="http://localhost/makingSoftware/making-software/static/prueba.php"
                >
                  <div class="grid grid-cols-1 mt-2">
                    <label for="nombres">Nombres(s)</label>
                    <input type="text" name="nombres" id="nombres" />
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" />
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="correo">Correo electrónico</label>
                    <input type="text" name="correo" id="correo" />
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="telefono">Teléfono de contacto </label>
                    <input type="text" name="telefono" id="telefono" />
                  </div>
                  <div class="grid grid-cols-1 mt-2">
                    <label for="">Escriba el texto en la imagen </label>
                    <input type="text" name="texto" id="texto" />
                  </div>
                  <div class="grid grid-cols-1 mt-2"></div>
                  <div class=" flex flex-wrap space-x-5 justify-center p-2">
                    <div class="flex justify-center mt-3 md:mt-2">
                      <div class="grid place-content-center shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30 h-10 w-30 rounded-xl">
                        <button
                          class="text-center text-orange-700 cursor-pointer"
                          type="submit"
                          command="close"
                          commandfor="dialog">Aceptar</button
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