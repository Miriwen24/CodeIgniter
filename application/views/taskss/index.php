<h1>Jazdy <a class="btn btn-default pull-right" href="<?php echo base_url(); ?>taskss/create" ><i class="fa fa-plus" aria-hidden="true"></i> Pridať jazdu</a></h1>

<p class="bg-success">

    <?php if($this->session->flashdata('taskk_created')): ?>
        <?php echo $this->session->flashdata('taskk_created'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('taskk_updated')): ?>
        <?php echo $this->session->flashdata('taskk_updated'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('taskk_delete')): ?>
        <?php echo $this->session->flashdata('taskk_deleted'); ?>
    <?php endif; ?>

</p>

<br>
<table class="table table-bordered">

    <thead>
    <tr>
        <th>
            #
        </th>
        <th>
            Odkiaľ
        </th>
        <th>
            Kam
        </th>
        <th>
            Dátum
        </th>
        <th>
            Počet KM
        </th>
        <th>
            Cena
        </th>
        <th>
            ID pracovnej zmeny
        </th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($tasks as $jazda): ?>

        <tr>
            <?php echo "<td><a href='". base_url() ."taskss/display/". $jazda->ID ."'>" .$jazda->ID . "</a></td>"; ?>
            <?php echo "<td>" .$jazda->Odkial . "</td>"; ?>
            <?php echo "<td>" .$jazda->Kam . "</td>"; ?>
            <?php echo "<td>" .$jazda->Datum . "</td>"; ?>
            <?php echo "<td>" .$jazda->Pocet_KM . "</td>"; ?>
            <?php echo "<td>" .$jazda->Cena . "</td>"; ?>
            <?php echo "<td><a href='". base_url() ."/tasks/display/" . $jazda->Pracovna_zmena_ID ."'>" .$jazda->Pracovna_zmena_ID . "</a></td>"; ?>


            <td><a href="<?php echo base_url(); ?>taskss/delete/<?php echo $jazda->ID; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>

    <?php endforeach; ?>




    </tbody>
</table>
