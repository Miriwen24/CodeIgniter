
<h2>Priadať Auto</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projects/create', $attributes); ?>


<div class="form-group">

    <?php echo form_label('Značka');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Znacka',
        'placeholder' => 'Zadaj značku'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Model');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Model',
        'placeholder' => 'Zadaj model'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Rok výroby');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Rok_vyroby',
        'placeholder' => 'Zadaj rok výroby'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('EČV');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'ECV',
        'placeholder' => 'Zadaj EČV'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Počet KM');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Pocet_KM',
        'placeholder' => 'Zadaj počet KM'

    );

    ?>

    <?php echo form_input($data); ?>


</div>


<div class="form-group">

    <?php

    $data = array(

        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Pridať'

    );

    ?>

    <?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>


