<h1>This is the list of users</h1>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>User Type</th>
            <!--  <th>Contact Number</th> -->
            <th>Joined Date</th>
            <th>Action</th> 
            
        </tr>
    </thead>updateUser
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
             <th><?php echo e($user->role); ?></th>
            <!-- <th>Contact Number</th>--> 
            <th><?php echo e($user->created_at); ?></th>
            <td>
            <a href=<?php echo e("/updateUser/".$user['id']); ?>>Edit
        </br>
        </br>

        <a href=<?php echo e("deleteUser/".$user['id']); ?>>Delete </td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>


<?php /**PATH C:\Users\anosh\Desktop\TeamProjects\4\4\resources\views/userInner.blade.php ENDPATH**/ ?>