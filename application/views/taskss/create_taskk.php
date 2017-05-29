
<h2>Priadať jazdu</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('taskss/create', $attributes); ?>


<div class="form-group">

    <?php echo form_label('Odkiaľ');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Odkial',
        'placeholder' => 'Zadaj odkial'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Kam');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Kam',
        'placeholder' => 'Zadaj kam'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Dátum');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Datum',
        'type' => 'date'

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

    <?php echo form_label('Cena');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Cena',
        'placeholder' => 'Zadaj cenu'

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">
    <?php echo form_label('ID pracovnej zmeny:'); ?>

    <select class="form-control" name="Pracovna_zmena_ID">
        <?php
        foreach($Pracovna_zmena_ID as $row) {
            echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
        }
        ?>
    </select>

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


