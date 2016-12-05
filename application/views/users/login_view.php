<!-- If the session is set with logged_in display the logout button -->
<?php if($this->session->userdata('logged_in')): ?>
    <h2>Logout</h2>

    <!-- If session is set display the logout button -->
    <?php echo form_open('users/logout'); ?>

    <!-- Since the session is set display the logged in user name -->
    <p>
        <?php if($this->session->userdata('username')): ?>
            <?php echo "You are logged in as " . $this->session->userdata('username'); ?>
        <?php endif; ?>
    </p>

    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'logout'
    );
    ?>
    <?php echo form_submit($data); ?>
    <?php echo form_close(); ?>
    <!-- Close the logout form -->

    <!-- If the session is not set display the login_form -->
<?php else: ?>

    <!-- This is form attributes -->
    <?php $attributes = array('id' => 'login_form', 'class'=> 'form_horizontal') ?>

    <!-- If the flashdata is set errors are present; show them -->
    <?php if($this->session->flashdata('errors')): ?>
        <?php echo $this->session->flashdata('errors'); ?>

    <?php endif; ?>
    <!-- End if -->

    <?php echo form_open('index.php/users/login', $attributes); ?>

    <!-- Start of the Username input -->
    <div class="form-group">

        <?php echo form_label('Username'); ?>
        <?php $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username'

        );?>

        <?php echo form_input($data); ?>

    </div>
    <!-- End of the Username input -->

    <!-- Start of the Password input -->
    <div class="form-group">

        <?php echo form_label('Password'); ?>
        <?php $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password'

        );?>

        <?php echo form_password($data); ?>

    </div>
    <!-- End of the Password input -->

    <!-- Start of the Confirm input -->
    <div class="form-group">

        <?php echo form_label('Confirm'); ?>
        <?php $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password'

        );?>

        <?php echo form_password($data); ?>

    </div>
    <!-- End of the Password input -->

    <!-- Start of the Submit input -->
    <div class="form-group">

        <?php $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Login'

        );?>

        <?php echo form_submit($data); ?>

    </div>
    <!-- End of the Password input -->


    <?php echo form_close(); ?>




<?php endif; ?>