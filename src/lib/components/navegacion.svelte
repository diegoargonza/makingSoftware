<script>
    import {base} from '$app/paths';
    import Modal from "$lib/components/modal.svelte";
</script>

<nav class="  sticky top-0 z-50 bg-sepia-100">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8  bg-gradient-to-r from-transparent  via-white to-transparent via-50% to-90%">
    <div class="relative flex h-16 items-center ">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
       
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-black focus:outline-2 focus:-outline-offset-1 focus:outline-sky-700">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center">
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-10 ">
            <a href="{base}" aria-current="page" class="text-sky-700">Inicio</a>
            <a href="#acerca" class="text-sky-700">Acerca del programa</a>
            <a href="{base}/convocatoria2026.pdf" class="text-sky-700" target="_blank">Convocatoria</a>
            <a href="#beneficios" class="text-sky-700">Beneficios</a>
            <Modal/>
          </div>
        </div>
      </div>
     
    </div>
  </div>

  <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <a href="{base}" aria-current="page" class="block rounded-md  px-3 py-2 text-base font-medium text-sky-700 hover:text-sky-600">Inicio</a>
      <a href="#acerca" class="block rounded-md px-3 py-2 text-base font-medium text-sky-700 hover:text-sky-600 ">Acerca del programa</a>
      <a href="/convocatoria.pdf" target="_blank" class="block rounded-md px-3 py-2 text-base font-medium text-sky-700 hover:text-sky-600">Convocatoria</a>
      <span  class="block rounded-md px-3 py-2 text-base font-medium text-sky-700 hover:text-sky-600"><Modal/></span>
    </div>
  </el-disclosure>
</nav>


