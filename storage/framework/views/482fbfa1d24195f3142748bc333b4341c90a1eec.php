<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>examen2eva</title>
</head>

<body>
    <h1>Form</h1>
    <!-- Errors -->
    <?php if($errors->any()): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>
    <form method="post">
        <!-- Company's Name -->
        <div class="form-group form-control-sm">
            <label for="companyName"><?php echo app('translator')->get('Company Name'); ?></label>
            <input type="text" class="form-control" id="companyName" required placeholder="Enter your Company's Name"
                value="<?php echo e(old('companyName')); ?>">
            <div><?php echo $errors->first('companyName','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Document Type -->
        <div class="form-group form-control-sm">
            <label for="docType"><?php echo app('translator')->get('Document Type'); ?></label>
            <select class="form-control" id="docType" required>
                <option value="dni" <?php if(old('docType')==='dni' ): ?> selected <?php endif; ?>>DNI</option>
                <option value="nie" <?php if(old('docType')==='nie' ): ?> selected <?php endif; ?>>NIE</option>
                <option value="passport" <?php if(old('docType')==='passport' ): ?> selected <?php endif; ?>>Pasaporte</option>
                <option value="notSelected" <?php if(old('docType')==='notSelected' ): ?> selected <?php endif; ?>>Not Selected</option>
            </select>
            <div><?php echo $errors->first('docType','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- NIF -->
        <div class="form-group form-control-sm">
            <label for="nif">NIF Number</label>
            <input type="text" class="form-control" id="nif" required placeholder="Enter your NIF number"
                value="<?php echo e(old('nif')); ?>">
            <div><?php echo $errors->first('nif','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Name -->
        <div class="form-group form-control-sm">
            <label for="name"><?php echo app('translator')->get('Name'); ?></label>
            <input type="text" class="form-control" id="name" required placeholder="Enter your name"
                value="<?php echo e(old('name')); ?>">
            <div><?php echo $errors->first('name','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Surname 1 -->
        <div class="form-group form-control-sm">
            <label for="surname1"><?php echo app('translator')->get('First Surname'); ?></label>
            <input type="text" class="form-control" id="surname1" required placeholder="Enter your first surname"
                value="<?php echo e(old('surname1')); ?>">
            <div><?php echo $errors->first('surname1','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Surname 2 -->
        <div class="form-group form-control-sm">
            <label for="surname2"><?php echo app('translator')->get('Second Surname'); ?></label>
            <input type="text" class="form-control" id="surname2" placeholder="Enter your second surname"
                value="<?php echo e(old('surname2')); ?>">
            <div><?php echo $errors->first('surname2','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Document's Country -->
        <div class="form-group form-control-sm">
            <label for="docCountry"><?php echo app('translator')->get('Documents Country'); ?></label>
            <select class="form-control" id="docCountry" required>
                <option value="america" <?php if(old('docCountry')==='america' ): ?> selected <?php endif; ?>>America</option>
                <option value="spain" <?php if(old('docCountry')==='spain' ): ?> selected <?php endif; ?>>Spain</option>
                <option value="uk" <?php if(old('docCountry')==='uk' ): ?> selected <?php endif; ?>>United Kingdom</option>
                <option value="notSelected" <?php if(old('docCountry')==='notSelected' ): ?> selected <?php endif; ?>>Not Selected
                </option>
            </select>
            <div><?php echo $errors->first('docCountry','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Province -->
        <div class="form-group form-control-sm">
            <label for="province"><?php echo app('translator')->get('Province'); ?></label>
            <select class="form-control" id="province" required>
                <option value="cataluna" <?php if(old('province')==='cataluna' ): ?> selected <?php endif; ?>>Cataluña</option>
                <option value="madrid" <?php if(old('province')==='madrid' ): ?> selected <?php endif; ?>>Madrid</option>
                <option value="illesBalears" <?php if(old('province')==='illesBalears' ): ?> selected <?php endif; ?>>Illes Balears
                </option>
                <option value="notSelected" <?php if(old('province')==='notSelected' ): ?> selected <?php endif; ?>>Not Selected</option>
            </select>
            <div><?php echo $errors->first('province','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- County -->
        <div class="form-group form-control-sm">
            <label for="county"><?php echo app('translator')->get('County'); ?></label>
            <select class="form-control" id="county" required>
                <option value="barcelona" <?php if(old('county')==='barcelona' ): ?> selected <?php endif; ?>>Barcelona</option>
                <option value="madrid" <?php if(old('county')==='madrid' ): ?> selected <?php endif; ?>>Madrid</option>
                <option value="palma" <?php if(old('county')==='palma' ): ?> selected <?php endif; ?>>Palma de Mallorca</option>
                <option value="notSelected" <?php if(old('county')==='notSelected' ): ?> selected <?php endif; ?>>Not Selected</option>
            </select>
            <div><?php echo $errors->first('county','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Status -->
        <div class="form-group form-control-sm">
            <label for="status">Status</label>
            <select class="form-control" id="status">
                <option value="active" <?php if(old('status')==='active' ): ?> selected <?php endif; ?>>Active</option>
                <option value="notActive" <?php if(old('status')==='notActive' ): ?> selected <?php endif; ?>>Not Active</option>
                <option value="notSelected" <?php if(old('status')==='notSelected' ): ?> selected <?php endif; ?>>Not Selected</option>
            </select>
            <div><?php echo $errors->first('status','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <!-- Telephone -->
        <div class="form-group form-control-sm">
            <label for="tel"><?php echo app('translator')->get('Telephone Number'); ?></label>
            <input type="text" class="form-control" id="tel" placeholder="Enter your telephone number"
                value="<?php echo e(old('tel')); ?>">
            <div><?php echo $errors->first('tel','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <div class="form-group form-control-sm">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" value="<?php echo e(old('email')); ?>">
            <div><?php echo $errors->first('email','<small class="text-danger">:message</small>'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Send'); ?></button>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\examen2eva-franciscojgsalguero1\resources\views/examen.blade.php ENDPATH**/ ?>