
    <h2>Registrácia</h2>

    <?php $attributes = array('ID' => 'register_form', 'class' => 'form_horizontal'); ?>

    <?php echo validation_errors("<p class='bg-danger'>"); ?>

    <?php echo form_open('users/register', $attributes); ?>


    <div class="form-group">

        <?php echo form_label('Krstné meno');?>

        <?php

        $data = array(

            'class' => 'form-control',
            'name' => 'krstne_meno',
            'placeholder' => 'Zadaj krstné meno'

        );

        ?>

        <?php echo form_input($data); ?>


    </div>

    <div class="form-group">

        <?php echo form_label('Priezvisko');?>

        <?php

        $data = array(

            'class' => 'form-control',
            'name' => 'priezvisko',
            'placeholder' => 'Zadaj priezvisko'

        );

        ?>

        <?php echo form_input($data); ?>


    </div>

    <div class="form-group">

        <?php echo form_label('E-mail');?>

        <?php

        $data = array(

            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Zadaj e-mail'

        );

        ?>

        <?php echo form_input($data); ?>


    </div>

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
            'value' => 'Registrovať'

        );

        ?>

        <?php echo form_submit($data); ?>

    </div>

    <?php echo form_close(); ?>


