<nav class="menu">
    <img class="logo" src="<?php echo e(asset('images/ali_logo.PNG')); ?>" alt="hiii">
    
    <ul>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa fa-bell"></i>
                <span class="info-count" id="navbarDropdownn"><?php echo e(auth()->user()->unreadNotifications->count()); ?></span>
            </a>
            <ul class="dropdown-menu" id="notificationDropdownn" style="min-width: 290px;">
                        <?php if(auth()->user()->unreadNotifications): ?>
                        <li class="d-flex justify-content-end mx-1 my-2">
                            <a href="<?php echo e(route('mark-as-read')); ?>" style="color: #ffffff; font-size: 14px;width: 80px; border-radius: 5px; background-color: #4CAF50; padding: 5px 5px; border: none; cursor: pointer;"
                            onmouseover="this.style.backgroundColor='#45a049'" 
                            onmouseout="this.style.backgroundColor='#4C4F90'">Mark all as Read</a>
                        </li>
                        <?php endif; ?>
        
                        <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <form action="<?php echo e(route('mark-read', $notification->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="data" value="<?php echo e($notification->data['data']); ?>">
                            <input type="hidden" name="dataa" value="<?php echo e($notification->id); ?>">

                            <button type="submit" style="color: #cf2222; font-size: 16px; width: 280px; border-radius: 5px; background-color: #4CAF50; padding: 5px; margin-bottom: 20px; cursor: pointer;"><?php echo e($notification->data['data']); ?></button>
                        </form>
                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        <?php
                            $admin_id_list = [1, 2, 35]; // Manually define the admin IDs
                        ?>
                        <?php $__currentLoopData = \App\Models\Notification::where('notifiable_id', 'IN', $admin_id_list)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($notification->data['data']); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                        <?php $__currentLoopData = auth()->user()->readNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="color: #171515; font-size: 16px;width: 280px; border-radius: 5px; background-color: #8bdfee; padding: 5px 5px; margin-bottom: 20px;"> <?php echo e($notification->data['data']); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
        <li>
            <a href="<?php echo e(route('home2')); ?>">
                
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/osuxyevn.json"
    trigger="hover"
    colors="primary:#121331"
    style="width:40px;height:40px">
</lord-icon>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('wishlist')); ?>">
                <?php if(auth()->guard()->check()): ?>
                <span class="info-count"><?php echo e(count(auth()->user()->wishlist)); ?></span>

                <?php endif; ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M10 19q-.425 0-.713-.288T9 18q0-.425.288-.713T10 17h10q.425 0 .713.288T21 18q0 .425-.288.713T20 19H10Zm0-6q-.425 0-.713-.288T9 12q0-.425.288-.713T10 11h10q.425 0 .713.288T21 12q0 .425-.288.713T20 13H10Zm0-6q-.425 0-.713-.288T9 6q0-.425.288-.713T10 5h10q.425 0 .713.288T21 6q0 .425-.288.713T20 7H10ZM5 20q-.825 0-1.413-.588T3 18q0-.825.588-1.413T5 16q.825 0 1.413.588T7 18q0 .825-.588 1.413T5 20Zm0-6q-.825 0-1.413-.588T3 12q0-.825.588-1.413T5 10q.825 0 1.413.588T7 12q0 .825-.588 1.413T5 14Zm0-6q-.825 0-1.413-.588T3 6q0-.825.588-1.413T5 4q.825 0 1.413.588T7 6q0 .825-.588 1.413T5 8Z"/></svg>            </a>
        </li>
        <li>
            <a href="<?php echo e(route('cart')); ?>">
                <span class="info-count"><?php echo e(session()->has('cart') ? count(session('cart')) : 0); ?></span>
                
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/hyhnpiza.json"
                    trigger="hover"
                    colors="primary:#121331"
                    style="width:40px;height:40px">
                </lord-icon>
            </a>
        </li>
        
        <li>
            <a href="<?php echo e(route('account')); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M472 48H40a24.028 24.028 0 0 0-24 24v368a24.028 24.028 0 0 0 24 24h88v-58.822a20.01 20.01 0 0 1 10.284-17.478l91.979-51.123L200 260.919V200a56 56 0 0 1 112 0v60.919l-30.263 75.655l91.979 51.126A20.011 20.011 0 0 1 384 405.178V464h88a24.028 24.028 0 0 0 24-24V72a24.028 24.028 0 0 0-24-24Zm-8 384h-48v-26.822a52.027 52.027 0 0 0-26.738-45.451L321.915 322.3L344 267.081V200a88 88 0 0 0-176 0v67.081l22.085 55.219l-67.347 37.432A52.027 52.027 0 0 0 96 405.178V432H48V80h416Z"/></svg>
            </a>
        </li>
    </ul>

</nav><?php /**PATH C:\xampp\htdocs\group_repo\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>