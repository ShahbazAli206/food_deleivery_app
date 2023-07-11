
<?php $__env->startSection('title', 'Edit Profile'); ?>
<?php $__env->startSection('content'); ?>
<div class="container" >
    <div class="text-end mb-5">
    </div>
    <div class="row">
        <div class="col-11">
            <div class="container">
            <div class="row mb-5">
            <div class="card">
                <div class="card-header">
                    <h5>Edit profile here</h5>
                </div>
                <form action="<?php echo e(route('technicianpanel.pages.store')); ?>" method="post" role="form text-left" enctype="multipart/form-data"  style="background-color: rgb(177, 161, 189)">
                    <?php echo csrf_field(); ?>
                <div class="card-body" >
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label"><?php echo e(__('Full Name')); ?></label>
                                <div class="<?php $__errorArgs = ['user.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <input class="form-control" value="<?php echo e(auth()->user()->name); ?>" style=" color: rgb(1, 0, 0); font-size: 16px;" type="text" placeholder="Name" id="user-name" name="name">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger text-xs mt-2"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label"><?php echo e(__('Email')); ?></label>
                                <div class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <input class="form-control" value="<?php echo e(auth()->user()->email); ?>" style=" color: rgb(1, 0, 0); font-size: 16px;" type="email" placeholder="@example.com" id="user-email" name="email">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger text-xs mt-2"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label"><?php echo e(__('Phone Number')); ?></label>
                                <div class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <input class="form-control" style=" color: rgb(1, 0, 0); font-size: 16px;" value="<?php echo e(auth()->user()->ph_no); ?>" type="text" placeholder="03000000000" id="user-ph_no" name="ph_no">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger text-xs mt-2"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <h4 style="color: rgb(0, 0, 0)">Location</h4>
                        <input style="color: rgb(209, 32, 32)" type="text" name="latitude" id="latitude" value="">
                        <input style="color: rgb(209, 32, 32)" type="text" name="longitude" id="longitude" value="">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="<?php $__errorArgs = ['longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
      
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content">
                            <button type="button" onclick="getLocation()" class="btn bg-gradient-dark btn-md mt-4 mb-4"><?php echo e('Get Location'); ?></button>
                        </div>
                        <div class="form-group">
                            <label for="user.phone" class="form-control-label"><?php echo e(__('Profile Image')); ?></label>
                        <div class="<?php $__errorArgs = ['user.phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input name="profile_photo_path" class="form-control" type="file" placeholder="upload your picture here" id="image">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger text-xs mt-2"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        </div>
                       
                        <div class="d-flex justify-content">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"><?php echo e('Save Changes'); ?></button>
                        </div>
                </div>

            </form>
              
              <script>
            
              function getLocation() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                  x.innerHTML = "Geolocation is not supported by this browser.";
                }
              }
              
              function showPosition(position) {
                document.getElementById("latitude").value = position.coords.latitude;
                document.getElementById("longitude").value = position.coords.longitude;
                latitudeInput.value = position.coords.latitude;
              }
              </script>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.technician', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\group_repo\resources\views/technician/pages/profile.blade.php ENDPATH**/ ?>