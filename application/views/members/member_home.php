<?php if ($this->session->userdata('logged_in')): ?>

<?php if($this->session->flashdata('login_success')): ?>
    <p class="alert alert-success">
        <?php echo $this->session->flashdata('login_success') ?>
    </p>
<?php endif; ?>

<?php $attributes = array('id' => 'legislator_form', 'class'=> 'form_horizontal') ?>

<?php echo validation_errors("<p class='alert alert-danger'>"); ?>

<!-- If the flashdata is set errors are present; show them -->
<?php if($this->session->flashdata('errors')): ?>
    <?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>
<!-- End if -->

<?php echo form_open('index.php/Legislator/search', $attributes); ?>

<!-- Start of the UserState input -->
<div class="form-group">

    <?php echo form_label('state'); ?>
    <?php $data = array(
        'class' => 'form-control',
        'name' => 'userstate',
        'placeholder' => 'Enter two digit state (example: If you wanted to search for missouri enter mo'

    );?>

    <?php echo form_input($data); ?>

</div>
<!-- End of the Username input -->

<!-- Start of the send input -->
<div class="form-group">

    <?php $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'send'

    );?>

    <?php echo form_submit($data); ?>

</div>
<!-- End of the Password input -->
<h1>Member Area</h1>
<?php else: ?>

    <?php redirect('index.php/home/index'); ?>

<?php endif; ?>