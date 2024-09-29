<?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => ['title' => 'TENTANG KAMI']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'TENTANG KAMI']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>

<section class="bg-[#f4f4f4] px-5 md:px-32 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 w-[100vw] justify-between">
    <div class="">
        <h1 class="text-[3rem] font-semibold mb-10">TASTY FOOD</h1>
        <p class="text-lg font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad dignissimos
            porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus tenetur enim
            vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit porro! Minus ea,
            corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
        <p class="text-lg mt-[2rem]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad dignissimos
            porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus tenetur enim
            vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit porro! Minus ea,
            corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
    </div>
    <div class="flex flex-row gap-2">
        <img src="<?php echo e(asset('images/brooke-lark-oaz0raysASk-unsplash.jpg')); ?>" alt="" class="rounded-xl w-[50%]">
        <img src="<?php echo e(asset('images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg')); ?>" alt=""
            class="rounded-xl object-cover w-[50%]">
    </div>
</section>
<section class="bg-[#ffffff] px-5 md:px-32 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 w-[100vw] justify-between">
    <div class="flex flex-row gap-3">
        <img src="<?php echo e(asset('images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg')); ?>" alt=""
            class="rounded-xl object-cover size-[30vh] md:size-[40vh] w-[50%]">
        <img src="<?php echo e(asset('images/michele-blackwell-rAyCBQTH7ws-unsplash.jpg')); ?>" alt=""
            class="rounded-xl object-cover size-[30vh] md:size-[40vh] w-[50%]">
    </div>
    <div class="">
        <h1 class="text-[3rem] font-semibold mb-10">VISI</h1>
        <p class="md:text-[1.5rem] text-xl mt-[2rem]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad
            dignissimos porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus
            tenetur enim vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit
            porro! Minus ea, corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
    </div>
</section>
<section class="bg-[#ffffff] px-5 md:px-32 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 w-[100vw] justify-between">
    <div class="">
        <h1 class="text-[3rem] font-semibold mb-10">MISI</h1>
        <p class="md:text-[1.5rem] text-xl mt-[2rem]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad
            dignissimos porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus
            tenetur enim vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit
            porro! Minus ea, corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
    </div>
    <div class="flex flex-row gap-3">
        <img src="<?php echo e(asset('images/sanket-shah-SVA7TyHxojY-unsplash.jpg')); ?>" alt=""
            class="rounded-xl object-cover w-full h-[40vh]">
    </div>
</section>

<?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php /**PATH /home/kyungrie/TastyFood/resources/views/about.blade.php ENDPATH**/ ?>