
<h2>Upraviť</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projectsss/edit/'. $project_data->ID .'', $attributes); ?>


<div class="form-group">

    <?php echo form_label('Typ pracovnej zmeny');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Typ_zmeny',
        'value' => $project_data->Typ_zmeny

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Od');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Od',
        'value' => $project_data->Od

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Do');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Do',
        'value' => $project_data->Do

    );

    ?>

    <?php echo form_input($data); ?>


</div>

<div class="form-group">

    <?php echo form_label('Hodinová mzda');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Hodinova_mzda',
        'value' => $project_data->Hodinova_mzda

    );

    ?>

    <?php echo form_input($data); ?>


</div>


<div class="form-group">

    <?php

    $data = array(

        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Upraviť'

    );

    ?>

    <?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>


