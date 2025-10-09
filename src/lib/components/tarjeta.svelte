<script>
    let {titulo, texto, img} = $props();
    
</script>

<div class="h-[400px] w-[230px] p-3 border border-gray-300 bg-white rounded-t-full rounded-b-xl shadow-xl  ">
    <div class="flex justify-center mp-10 items-center  " >
        <div class="shadow-[-2px_-2px_3px_#fff,2px_2px_3px_#ccc] bg-rose-50/30 w-[200px] h-[200px] rounded-full ">
            <img src={img} alt="" class="rounded-full  w-full h-full ">
        </div>
    </div>
    <h2 class="text-center mt-2 text-sky-700 font-semibold">{titulo}</h2>
    <p class="text-justify">{texto}</p>
</div>

<!-- 
<div class="bg-slate-100 shadow-xl border border-slate-100 rounded-t-full rounded-bl-lg rounded-br-lg h-[400px] w-[230px] p-3">
    <div class="mt-2">
        <img src={img} alt="" class="rounded-full  w-50 h-50">
        <h2 class="text-center">{titulo}</h2>
        <p>{texto}</p>
    </div>
</div>   -->