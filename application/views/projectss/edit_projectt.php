
<h2>Upraviť</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projectss/edit/'. $project_data->ID .'', $attributes); ?>


<div class="form-group">

    <?php echo form_label('Meno');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Meno',
        'value' => $project_data->Meno

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
        'value' => $project_data->Priezvisko

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
        'value' => $project_data->Bydlisko

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
        'value' => $project_data->Tel_cislo

    );

    ?>

    <?php echo form_input($data); ?>


</div>


<div class="form-group">

    <?php

    $data = array(

        'class' => 'btn btn-primary pull-right',
        'name' => 'submit',
        'value' => 'Upraviť'

    );

    ?>

    <?php echo form_submit($data); ?>

</div>

<a class="btn btn-default pull-left" href="javascript:history.back(1)"><i class="fa fa-arrow-left" aria-hidden="true"></i> Späť</a>


<?php echo form_close(); ?>


