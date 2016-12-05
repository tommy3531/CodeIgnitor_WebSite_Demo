
<h2>Register</h2>


<?php $attributes = array('id' => 'register_form', 'class'=> 'form_horizontal') ?>


<?php echo validation_errors("<p class='alert alert-danger'>"); ?>

<?php echo form_open('index.php/users/register', $attributes); ?>

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

<!-- Start of the first name input -->
<div class="form-group">

    <?php echo form_label('First name: '); ?>
    <?php $data = array(
        'class' => 'form-control',
        'name' => 'first_name',
        'placeholder' => 'Enter first name'

    );?>

    <?php echo form_input($data); ?>

</div>
<!-- End of the first name input -->

<!-- Start of the last name input -->
<div class="form-group">

    <?php echo form_label('Last name: '); ?>
    <?php $data = array(
        'class' => 'form-control',
        'name' => 'lastname',
        'placeholder' => 'Enter Last name'

    );?>

    <?php echo form_input($data); ?>

</div>
<!-- End of the lasst name input -->

<!-- Start of the email input -->
<div class="form-group">

    <?php echo form_label('Email: '); ?>
    <?php $data = array(
        'class' => 'form-control',
        'name' => 'email',
        'placeholder' => 'Enter Email'

    );?>

    <?php echo form_input($data); ?>

</div>
<!-- End of the email input -->


<!-- Start of the Submit input -->
<div class="form-group">

    <?php $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Register'

    );?>

    <?php echo form_submit($data); ?>

</div>
<!-- End of the Password input -->


<?php echo form_close(); ?>