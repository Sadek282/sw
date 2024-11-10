<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bikes List</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <style>
        /* Additional styling for status badges */
        .status-active {
            background-color: #4ade80; /* Green */
            color: #ffffff;
        }
        .status-inactive {
            background-color: #f87171; /* Red */
            color: #ffffff;
        }
    </style>
</head>
<body class="bg-gray-100">

    <h1 class="text-red-500 text-3xl text-center font-bold py-4 mb-5 bg-red-100">Test - 2 (CRUD Operation)</h1>

    <div class="p-10">
        <div class="w-full p-8 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4 text-gray-900">Bikes List</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Model</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                <?php $__currentLoopData = $database; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="<?php echo e(asset($a->image)); ?>" alt="Bike Image" class="w-24 h-auto rounded-md border border-gray-300" />
                        </td>
                    
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->name); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->brand); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->model); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->year); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">$<?php echo e($a->price); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full status-active"><?php echo e($a->status); ?></span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($a->description); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <a href="<?php echo e(route('editBike',$a->id)); ?>" class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?php echo e(route('Delete',$a->id)); ?>" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\Users\AC\Desktop\t1\app\resources\views/bikelist.blade.php ENDPATH**/ ?>