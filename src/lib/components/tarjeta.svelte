<script>
    let {titulo, texto, img} = $props();
    
</script>

<div class="bg-slate-100 shadow-xl border border-slate-100 rounded-t-full rounded-bl-lg rounded-br-lg h-[400px] w-[230px] p-3">
    <div class="mt-2">
        <img src={img} alt="" class="rounded-full  w-50 h-50">
        <h2 class="text-center">{titulo}</h2>
        <p>{texto}</p>
    </div>
</div>  