
<h2>Priadať pracovnú zmenu</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('tasks/create', $attributes); ?>


<div class="form-group">
    <i class="fa fa-key" aria-hidden="true"></i> <?php echo form_label('ID zamestnanca:'); ?>

    <select class="form-control" name="Zamestnanec_ID">
        <?php
        foreach($Zamestnanec_ID as $row) {
            echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
        }
        ?>
    </select>

</div>

<div class="form-group">
    <i class="fa fa-key" aria-hidden="true"></i> <?php echo form_label('ID detailov pracovnej zmeny:'); ?>

    <select class="form-control" name="Detaily_zmeny_ID">
        <?php
        foreach($Detaily_zmeny_ID as $row) {
            echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
        }
        ?>
    </select>

</div>

<div class="form-group">
    <i class="fa fa-key" aria-hidden="true"></i> <?php echo form_label('ID auta:'); ?>

    <select class="form-control" name="Auto_ID">
        <?php
        foreach($Auto_ID as $row) {
            echo '<option value="'.$row->ID.'">'.$row->ID.'</option>';
        }
        ?>
    </select>

</div>

<div class="form-group">

    <?php

    $data = array(

        'class' => 'btn btn-primary pull-right',
        'name' => 'submit',
        'value' => 'Pridať'

    );

    ?>

    <?php echo form_submit($data); ?>

</div>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>tasks" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Späť</a>

<?php echo form_close(); ?>


