<h1>Pracovné zmeny <a class="btn btn-default pull-right" href="<?php echo base_url(); ?>tasks/create" ><i class="fa fa-plus" aria-hidden="true"></i> Pridať pracovnú zmenu</a></h1>

<p class="bg-success">

    <?php if($this->session->flashdata('task_created')): ?>
        <?php echo $this->session->flashdata('task_created'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('task_updated')): ?>
        <?php echo $this->session->flashdata('task_updated'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('task_deleted')): ?>
        <?php echo $this->session->flashdata('task_deleted'); ?>
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
            ID zamestnanca <i class="fa fa-key" aria-hidden="true"></i>
        </th>
        <th>
            ID detailov zmien <i class="fa fa-key" aria-hidden="true"></i>
        </th>
        <th>
            ID auta <i class="fa fa-key" aria-hidden="true"></i>
        </th>

    </tr>
    </thead>
    <tbody>

    <?php foreach($tasks as $pracovna_zmena): ?>

        <tr>
       <?php echo "<td><a href='". base_url() ."tasks/display/". $pracovna_zmena->ID ."'>" .$pracovna_zmena->ID . "</a></td>"; ?>
       <?php echo "<td><a href='". base_url() ."projectss/displayy/". $pracovna_zmena->Zamestnanec_ID ."'>" .$pracovna_zmena->Zamestnanec_ID . "</a></td>"; ?>
       <?php echo "<td><a href='". base_url() ."projectsss/displayyy/" .$pracovna_zmena->Detaily_zmeny_ID . "'>" .$pracovna_zmena->Detaily_zmeny_ID ."</a></td>"; ?>
       <?php echo "<td><a href='". base_url() ."projects/display/" .$pracovna_zmena->Auto_ID ."'>" .$pracovna_zmena->Auto_ID ."</a></td>"; ?>


            <td><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $pracovna_zmena->ID; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>

    <?php endforeach; ?>




    </tbody>
</table>
