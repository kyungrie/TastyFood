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

    <?php if (isset($component)) { $__componentOriginal8c0319c6aafc08c8f0bf15ab5da926eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c0319c6aafc08c8f0bf15ab5da926eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-white','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-white'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c0319c6aafc08c8f0bf15ab5da926eb)): ?>
<?php $attributes = $__attributesOriginal8c0319c6aafc08c8f0bf15ab5da926eb; ?>
<?php unset($__attributesOriginal8c0319c6aafc08c8f0bf15ab5da926eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c0319c6aafc08c8f0bf15ab5da926eb)): ?>
<?php $component = $__componentOriginal8c0319c6aafc08c8f0bf15ab5da926eb; ?>
<?php unset($__componentOriginal8c0319c6aafc08c8f0bf15ab5da926eb); ?>
<?php endif; ?>

    <section class="m-[5rem] md:mb-[28rem]">
        <div class="bg-[#f4f4f4] sm:px-6 lg:px-8  w-[50%]">
            <div class="max-h-[1px] w-[10rem] border-2 border-black"></div>
            <h1 class="text-5xl md:text-7xl">HEALTHY</h1>
            <h1 class="text-5xl font-bold md:text-7xl">TASTY FOOD</h1>
            <p class="max-w-[30rem]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Perferendis explicabo vitae error sapiente repudiandae vel maxime, <br>
                unde veritatis, corrupti odit amet dolorum ab molestiae facilis. <br>
                Dignissimos quoeum ex assumenda.
            </p> <br>
            <a class="inline-block p-3 font-bold text-white bg-black md:px-20 hover:scale-125" href="/about">TENTANG KAMI</a>
        </div>
        <img src="<?php echo e(asset('images/img-4-2000x2000.png')); ?>"
            class="md:size-[80rem] absolute md:left-[67rem] md:-top-[15rem] size-[20rem] left-[15rem] bottom-[35rem] animate-slowspin -z-10">
    </section>

    <section class="bg-[#ffffff] py-24">
        <div class="flex flex-col items-center">
            <h1 class="font-semibold text-[3rem] mt-5">TENTANG KAMI</h1>
            <p class="max-w-[80vw] md:max-w-[30vw] text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Perferendis explicabo vitae error sapiente repudiandae vel maxime,
                unde veritatis, corrupti odit amet dolorum ab molestiae facilis.
                Dignissimos quoeum ex assumenda.
            </p>
            <div class="max-h-[1px] w-[10rem] border-2 border-black mt-10"></div>
        </div>
    </section>

    <section id="menu-list"
        class="flex w-[100vw] h-[140vh] md:h-[80vh] justify-center items-center bg-cover" style="background-image: url('<?php echo e(asset('images/group-70.png')); ?>'); background-repeat: no-repeat;">
        <div class="h-[100vh] md:h-[50vh] items-center justify-center grid grid-cols-2 md:grid-cols-4 place-items-center px-10 md:px-40 py-4 md:py-24 gap-y-16 gap-x-4 md:gap-6">
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['src' => ''.e(asset('images/img-1.png')).'','title' => 'Lorem ipsum']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('images/img-1.png')).'','title' => 'Lorem ipsum']); ?>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['src' => ''.e(asset('images/img-2.png')).'','title' => 'Lorem ipsum']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('images/img-2.png')).'','title' => 'Lorem ipsum']); ?>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['src' => ''.e(asset('images/img-3.png')).'','title' => 'Lorem ipsum']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('images/img-3.png')).'','title' => 'Lorem ipsum']); ?>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['src' => ''.e(asset('images/img-4.png')).'','title' => 'Lorem ipsum']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('images/img-4.png')).'','title' => 'Lorem ipsum']); ?>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
        </div>
    </section>

    <section id="news" class="px-5 py-10 my-20 md:px-20">
        <h1 class="my-5 text-5xl font-bold text-center">BERITA KAMI</h1>
        <?php if(count($news) > 0): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 md:grid-rows-1 gap-5 h-[220vh] md:h-[100vh]">
            <?php if (isset($component)) { $__componentOriginal1a2825a6708c27e00d3538c2a0d29d90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.news-card','data' => ['src' => ''.e(asset('news-picture/' . $news[0]->picture)).'','title' => ''.e($news[0]->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('news-picture/' . $news[0]->picture)).'','title' => ''.e($news[0]->title).'']); ?>
                <?php echo e($news[0]->newscontent); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90)): ?>
<?php $attributes = $__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90; ?>
<?php unset($__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a2825a6708c27e00d3538c2a0d29d90)): ?>
<?php $component = $__componentOriginal1a2825a6708c27e00d3538c2a0d29d90; ?>
<?php unset($__componentOriginal1a2825a6708c27e00d3538c2a0d29d90); ?>
<?php endif; ?>
            <div class="grid grid-cols-2 grid-rows-1 gap-5 md:grid-rows-2">
                <?php for($i = 1; $i < count($news); $i++): ?>
                    <?php if (isset($component)) { $__componentOriginal1a2825a6708c27e00d3538c2a0d29d90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.news-card','data' => ['src' => ''.e(asset('news-picture/' . $news[$i]->picture)).'','title' => ''.e($news[$i]->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('news-picture/' . $news[$i]->picture)).'','title' => ''.e($news[$i]->title).'']); ?>
                        <?php echo e($news[$i]->newscontent); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90)): ?>
<?php $attributes = $__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90; ?>
<?php unset($__attributesOriginal1a2825a6708c27e00d3538c2a0d29d90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a2825a6708c27e00d3538c2a0d29d90)): ?>
<?php $component = $__componentOriginal1a2825a6708c27e00d3538c2a0d29d90; ?>
<?php unset($__componentOriginal1a2825a6708c27e00d3538c2a0d29d90); ?>
<?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="flex justify-center items-center h-[50vh]">
            <p class="text-6xl text-center">Belum ada berita</p>
        </div>
    <?php endif; ?>
        </div>
            <div class="flex justify-center">
                <a class="inline-block p-3 px-20 mt-5 font-bold text-white bg-black hover:scale-110 md:hover:scale-125" href="/news">
                    LIHAT LEBIH BANYAK
                </a>
            </div>
    </section>

    <section class="py-10 bg-white">
        <h1 class="text-center font-semibold text-[3rem] pb-5">GALERI KAMI</h1>
        <?php if(count($pictures) > 0): ?>
        <div class="grid grid-cols-2 gap-6 px-5 py-10 md:grid-cols-3 md:px-20">
        <?php $__currentLoopData = $pictures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $picture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(asset('gallery-picture/' . $picture->getFilename())); ?>" alt="<?php echo e($picture->getFilename()); ?>"
                class="aspect-square w-[100%] object-cover rounded-xl object-center">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <div class="flex justify-center items-center h-[50vh]">
            <p class="text-6xl text-center">Belum ada gambar</p>
        </div>
    <?php endif; ?>
        <div class="flex justify-center mt-5">
            <a class="inline-block p-3 px-20 font-bold text-white bg-black hover:scale-110 md:hover:scale-125" href="/gallery">
                LIHAT LEBIH BANYAK
            </a>
        </div>
    </section>
    </div>



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
<?php /**PATH /home/kyungrie/TastyFood/resources/views/index.blade.php ENDPATH**/ ?>