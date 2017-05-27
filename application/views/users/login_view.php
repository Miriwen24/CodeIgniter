<?php if($this->session->userdata('logged_in')): ?>

    <h2>Logout</h2>

<?php echo form_open('users/logout'); ?>

    <p>
    <?php if($this->session->userdata('meno')): ?>
    <?php echo "Ste prihlásený ako " . $this->session->userdata('meno'); ?>
        <?php endif; ?>
        </p>

    <?php
    $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Odhlásiť sa'
    );
    ?>

    <?php echo form_submit($data); ?>

    <?php echo form_close(); ?>

<?php else: ?>

<h2>Login form</h2>

<?php $attributes = array('ID' => 'login_form', 'class' => 'form_horizontal'); ?>
<?php if($this->session->flashdata('errors')): ?>
    <?php echo $this->session->flashdata('errors') ?>
<?php endif; ?>
<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">

    <?php echo form_label('Meno');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'meno',
        'placeholder' => 'Zadaj prihlasovanie meno'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Heslo');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'heslo',
        'placeholder' => 'Zadaj heslo'

    );

    ?>

    <?php echo form_password($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Potvrď heslo');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'confirm_heslo',
        'placeholder' => 'Potvrď heslo'

    );

    ?>

    <?php echo form_password($data); ?>


</div>

<div class="form-group">

    <?php

    $data = array(

        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Prihlásiť'

    );

    ?>

    <?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>


<?php endif; ?>