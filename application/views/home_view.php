<p class="bg-success">
    <?php if($this->session->flashdata('login_success')): ?>
        <?php echo $this->session->flashdata('login_success'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo $this->session->flashdata('user_registered'); ?>
    <?php endif; ?>
</p>

<p class="bg-danger">
    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo $this->session->flashdata('login_failed'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('no_access')): ?>
        <?php echo $this->session->flashdata('no_access'); ?>
    <?php endif; ?>

</p>

<div class="jumbotron">

        <h1 class="text-center">Vitajte !</h1>



</div>

<?php if(isset($projects)): ?>

<h1> Autá </h1>

<table class="table table-bordered">

    <thead>
    <tr>
        <th>
            #
        </th>
        <th>
            Značka
        </th>
        <th>
            Model
        </th>
        <th>
            Rok výroby
        </th>
        <th>
            EČV
        </th>
        <th>
            Počet KM
        </th>
    </tr>
    </thead>
    <tbody>


    <?php foreach($projects as $auto): ?>

        <tr>
            <td><?php echo $auto->ID; ?></td>
            <td><?php echo $auto->Znacka; ?></td>
            <td><?php echo $auto->Model; ?></td>
            <td><?php echo $auto->Rok_vyroby; ?></td>
            <td><?php echo $auto->ECV; ?></td>
            <td><?php echo $auto->Pocet_KM; ?></td>
            <td><a href="<?php echo base_url();?>projects">Zobraziť</a></td>
        </tr>

    <?php endforeach; ?>


    </tbody>
</table>

<?php endif; ?>