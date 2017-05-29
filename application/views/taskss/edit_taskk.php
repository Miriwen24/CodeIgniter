
<h2>Upraviť</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('taskss/edit/'. $project_data->ID .'', $attributes); ?>



<div class="form-group">

    <?php echo form_label('Odkiaľ');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Odkial',
        'value' => $project_data->Odkial

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
        'value' => $project_data->Kam

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
        'value' => $project_data->Datum

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

    <?php echo form_label('Cena');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Cena',
        'value' => $project_data->Cena

    );

    ?>

    <?php echo form_input($data); ?>

</div>

<div class="form-group">

    <?php echo form_label('Pracovna zmena ID:'); ?>

    <select class="form-control" name="Pracovna_zmena_ID">
        <?php foreach($Pracovna_zmena_ID as $row): ?>
            <?php if ($row->ID == $project_data->Pracovna_zmena_ID): ?>
                <?php
                echo '<option selected value="'.$row->ID.'">'.$row->ID.'</option>';
                ?>
            <?php else: ?>
                <?php
                echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
                ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>

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


