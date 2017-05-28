<h1>Pracovné zmeny</h1>

<p class="bg-success">

    <?php if($this->session->flashdata('projecttt_created')): ?>
        <?php echo $this->session->flashdata('projecttt_created'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('projecttt_updated')): ?>
        <?php echo $this->session->flashdata('projecttt_updated'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('projecttt_delete')): ?>
        <?php echo $this->session->flashdata('projecttt_deleted'); ?>
    <?php endif; ?>

</p>

<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>projectsss/create">Pridať pracovnú zmenu</a>
<br>
<br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>
            #
        </th>
        <th>
            Pracovná zmena
        </th>
        <th>
            Od
        </th>
        <th>
            Do
        </th>
        <th>
            Hodinová mzda
        </th>
    </thead>
    <tbody>

    <?php foreach($projectsss as $detaily_zmeny): ?>
        <tr>

            <?php echo "<td><a href='". base_url() ."projectsss/displayyy/". $detaily_zmeny->ID ."'>" .$detaily_zmeny->ID . "</a></td>"; ?>
            <?php echo "<td>" .$detaily_zmeny->Typ_zmeny . "</td>"; ?>
            <?php echo "<td>" .$detaily_zmeny->Od . "</td>"; ?>
            <?php echo "<td>" .$detaily_zmeny->Do . "</td>"; ?>
            <?php echo "<td>" .$detaily_zmeny->Hodinova_mzda . "</td>"; ?>


            <td><a href="<?php echo base_url(); ?>projectsss/delete/<?php echo $detaily_zmeny->ID; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
    <?php endforeach; ?>


    </tbody>

</table>