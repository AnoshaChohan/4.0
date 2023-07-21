<form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>

    <!-- Email -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    
    <!-- Remember Me -->
    <div>
        <input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
        <label for="remember">Remember Me</label>
    </div>
    <div>
    <!-- <label for="User_Type">Dropdown 1</label>
        <select name="User_Type" id="dropdown1">
            <option value="unpaiduser">Free_User</option>
            <option value="subscriber">Subscriber </option>
           
        </select>
</div> -->
    <!-- Submit Button -->
    <button type="submit">Log In</button>
</form>
<?php /**PATH C:\Users\anosh\Desktop\TeamProjects\4\4\resources\views/auth/login.blade.php ENDPATH**/ ?>