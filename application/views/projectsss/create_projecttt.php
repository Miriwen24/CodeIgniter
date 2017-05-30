
<h2>Pridať pracovnú zmenu</h2>

<?php $attributes = array('ID' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projectsss/create', $attributes); ?>


<div class="form-group">

    <?php echo form_label('Typ pracovnej zmeny');?>

    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'Typ_zmeny',
        'placeholder' => 'Zadaj pracovnú zmenu'

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
        'type' => 'time'

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
        'type' => 'time'

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
        'placeholder' => 'Zadaj hodinovú mzdu'

    );

    ?>

    <?php echo form_input($data); ?>


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
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>projectsss" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Späť</a>

<?php echo form_close(); ?>


