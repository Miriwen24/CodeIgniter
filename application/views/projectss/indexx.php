<h1>Zamestnanci</h1>

<p class="bg-success">

    <?php if($this->session->flashdata('projectt_created')): ?>
        <?php echo $this->session->flashdata('projectt_created'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('projectt_updated')): ?>
        <?php echo $this->session->flashdata('projectt_updated'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('projectt_delete')): ?>
        <?php echo $this->session->flashdata('projectt_deleted'); ?>
    <?php endif; ?>

</p>

<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>projectss/create">Pridať zamestnanca</a>
<br>
<br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>
            #
        </th>
        <th>
            Meno
        </th>
        <th>
            Priezvisko
        </th>
        <th>
            Bydlisko
        </th>
        <th>
            Telefónne číslo
        </th>
    </thead>
    <tbody>

    <?php foreach($projectss as $zamestnanec): ?>
        <tr>
            <?php echo "<td>" .$zamestnanec->ID . "</td>"; ?>
            <?php echo "<td><a href='". base_url() ."projectss/displayy/". $zamestnanec->ID ."'>" .$zamestnanec->Meno . "</a></td>"; ?>
            <?php echo "<td>" .$zamestnanec->Priezvisko . "</td>"; ?>
            <?php echo "<td>" .$zamestnanec->Bydlisko . "</td>"; ?>
            <?php echo "<td>" .$zamestnanec->Tel_cislo . "</td>"; ?>


            <td><a href="<?php echo base_url(); ?>projectss/delete/<?php echo $zamestnanec->ID; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
    <?php endforeach; ?>


    </tbody>

</table>