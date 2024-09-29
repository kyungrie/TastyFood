<?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => ['title' => 'KONTAK KAMI']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'KONTAK KAMI']); ?>
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

<section class="bg-[#ffffff]">
    <div class="px-5 py-3 md:px-28 md:py-28">
        <h1 class="font-semibold text-[2rem]">KONTAK KAMI</h1>
        <form class="flex flex-col grid-cols-2 gap-5 mt-10 text-lg md:grid" action="/contact" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="grid grid-cols-1 gap-5">
                <input type="text" placeholder="Subject" name="subject" id="subject"
                    class="block px-2 py-2 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="text" placeholder="Name" name="name" id="name" autocomplete="given-name"
                    class="block px-2 py-2 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="email" placeholder="E-mail" name="email" id="email" autocomplete="email"
                    class="block px-2 py-2 w-full text-gray-600 rounded-md border-2 form-input placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

                <textarea placeholder="Message" name="message" id="message"
                    class="block px-2 text-gray-600 rounded-md border-2 resize-none form-textarea placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>

                <div class="flex flex-col col-span-2">
                    <input class="py-3 font-bold text-center text-white bg-black rounded-xl hover:scale-110" type="submit" value="SUBMIT">
                </div>
        </form>
    </div>

    <div class="flex flex-col gap-5 py-10 md:flex-row md:justify-evenly">
        <div class="flex flex-col items-center px-5 md:gap-4">
            <img src="<?php echo e(asset('images/Group 66.png')); ?>" alt="mail icon" class="size-20 md:size-[unset]">
            <h1 class="text-lg font-bold uppercase">email</h1>
            <p class="text-xs uppercase md:text-base">tastyfood@gmail.com</p>
        </div>
        <div class="flex flex-col items-center px-5 md:gap-4">
            <img src="<?php echo e(asset('images/Group 67.png')); ?>" alt="mail icon" class="size-20 md:size-[unset]">
            <h1 class="text-lg font-bold uppercase">telepon</h1>
            <p class="text-xs md:text-base">+62 1234 5432 2343</p>
        </div>
        <div class="flex flex-col items-center px-5 md:gap-4">
            <img src="<?php echo e(asset('images/Group 68.png')); ?>" alt="mail icon" class="size-20 md:size-[unset]">
            <h1 class="text-lg font-bold uppercase">lokasi</h1>
            <p class="text-xs md:text-base">CyberLabs</p>
        </div>
    </div>
</section>

<section class="flex justify-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558806840755!2d107.66140701036342!3d-6.943211393027936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs!5e0!3m2!1sen!2sid!4v1722998621647!5m2!1sen!2sid"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
    class="w-full md:w-[80vw] md:h-[80vh] h-[50vh] py-10 px-5 md:px-16"></iframe>
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
<?php /**PATH /home/kyungrie/TastyFood/resources/views/contact.blade.php ENDPATH**/ ?>