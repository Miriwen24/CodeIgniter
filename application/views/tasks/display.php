<div class="col-xs-9">


    <h1>ID pracovnej zmeny: <?php echo $project_data->ID; ?></h1>

    <table class="table table-bordered">
        <h3>Podrobnosti:</h3>
        <thead>
        <tr>
            <td><b><i class="fa fa-key" aria-hidden="true"></i> ID zamestnanca: </b></td>
            <td><?php echo $project_data->Zamestnanec_ID; ?></td>
        </tr>

        <tr>
            <td><b><i class="fa fa-key" aria-hidden="true"></i> ID detailov zmien: </b></td>
            <td><?php echo $project_data->Detaily_zmeny_ID; ?></td>
        </tr>

        <tr>
            <td><b><i class="fa fa-key" aria-hidden="true"></i> ID auta: </b></td>
            <td><?php echo $project_data->Auto_ID; ?></td>
        </tr>


        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>tasks" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Späť</a>

</div>



<div class="col-xs-3 pull-right">
    <ul class="list-group">
        <h4> <i class="fa fa-cogs" aria-hidden="true"></i> </h4>

        <!--<li class="list-group-item"><a href="<?php //echo base_url(); ?>tasks/create/<?php //echo $project_data->ID; ?>">Vytvoriť</a></li>-->
        <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/edit/<?php echo $project_data->ID; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Upraviť</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $project_data->ID; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Vymazať</a></li>


</ul>

</div>