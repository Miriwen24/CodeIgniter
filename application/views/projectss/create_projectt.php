
<h2>Pridať zamestnanca</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projectss/create', $attributes); ?>


<div class="form-group">

    <?php echo form_label('Meno');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Meno',
        'placeholder' => 'Zadaj meno'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Priezvisko');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Priezvisko',
        'placeholder' => 'Zadaj priezvisko'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Bydlisko');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Bydlisko',
        'placeholder' => 'Zadaj bydlisko'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Telefónne číslo');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Tel_cislo',
        'placeholder' => 'Zadaj telefónne číslo'

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


