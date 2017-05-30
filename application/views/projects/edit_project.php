
<h2>Upraviť</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projects/edit/'. $project_data->ID .'', $attributes); ?>

<!-- #Bolí ma žebro -->

<div class="form-group">

    <?php echo form_label('Značka');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Znacka',
        'value' => $project_data->Znacka

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
        'value' => $project_data->Model

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
        'value' => $project_data->Rok_vyroby

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
        'value' => $project_data->ECV

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
        'value' => $project_data->Pocet_KM

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


