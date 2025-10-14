<script>
    let { titulo, texto, img } = $props();
</script>

<div class="">
    <div>
        <div class=" bg-gray-100 shadow-2xl rounded-t-full rounded-b-xl w-[250px] h-[430px] p-3">
            <div class="shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30  rounded-full mx-auto w-[226px] h-[226px] ">
                <img src={img} alt="" class="max-w-[228px] max-h-[228px]">
            </div>
            <div class="w-[200px] mx-auto mt-2">
                <h2 class="text-center text-sky-700 font-semibold">{titulo}</h2>    
                <p class="text-left">{texto}</p>
            </div>
        </div>
    </div>
</div>
