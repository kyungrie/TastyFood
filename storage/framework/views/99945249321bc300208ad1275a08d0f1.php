<div class="overflow-hidden bg-white rounded-xl shadow-2xl">
    <img src="<?php echo e($src); ?>" alt="card image" class="h-[50%] w-[100%] object-cover">
    <div class="flex flex-col h-[50%] p-5">
        <h1 class="font-bold text-center md:text-xl"> <?php echo e($title); ?> </h1>
        <div class="h-[50%] text-sm text-gray-500 overflow-y-hidden"> <?php echo e($slot); ?> </div>
        <div class="flex flex-row justify-between items-center mt-auto">
            <a href="#" class="text-sm text-yellow-600">Lihat Selengkapnya</a>
            <div class="size-8 flex flex-row items-center justify-between transition-all duration-150 hover:rotate-[360deg] hover:scale-150 cursor-pointer">
                <div class="size-[0.5rem] rounded-full bg-gray-300"></div>
                <div class="size-[0.5rem] rounded-full bg-gray-300"></div>
                <div class="size-[0.5rem] rounded-full bg-gray-300"></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/kyungrie/TastyFood/resources/views/components/news-card.blade.php ENDPATH**/ ?>