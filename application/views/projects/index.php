<h1>Autá<a class="btn btn-default pull-right" href="<?php echo base_url(); ?>projects/create" ><i class="fa fa-plus" aria-hidden="true"></i> Pridať Auto</a></h1>

<p class="bg-success">

    <?php if($this->session->flashdata('project_created')): ?>
        <?php echo $this->session->flashdata('project_created'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('project_updated')): ?>
        <?php echo $this->session->flashdata('project_updated'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('project_delete')): ?>
        <?php echo $this->session->flashdata('project_deleted'); ?>
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
            <?php echo "<td>" .$auto->ID . "</td>"; ?>
            <?php echo "<td><a href='". base_url() ."projects/display/". $auto->ID ."'>" .$auto->Znacka . "</a></td>"; ?>
            <?php echo "<td>" .$auto->Model . "</td>"; ?>
            <?php echo "<td>" .$auto->Rok_vyroby . "</td>"; ?>
            <?php echo "<td>" .$auto->ECV . "</td>"; ?>
            <?php echo "<td>" .$auto->Pocet_KM . "</td>"; ?>

            <td><a href="<?php echo base_url(); ?>projects/delete/<?php echo $auto->ID; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>

    <?php endforeach; ?>




    </tbody>
</table>
