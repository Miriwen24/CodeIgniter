<div class="col-xs-9">


    <h1>Značka vozidla: <?php echo $project_data->Znacka; ?></h1>
    <p>Dátum vytvorenia: <?php echo $project_data->datum; ?> </p>

    <table class="table table-bordered">
        <h3>Podrobnosti:</h3>
        <thead>
        <tr>
            <td><b>Model vozidla: </b></td>
            <td><?php echo $project_data->Model; ?></td>
        </tr>

        <tr>
            <td><b>Rok výroby: </b></td>
            <td><?php echo $project_data->Rok_vyroby; ?></td>
        </tr>

        <tr>
            <td><b>Evidenčné číslo vozidla: </b></td>
            <td><?php echo $project_data->ECV; ?></td>
        </tr>

        <tr>
            <td><b>Počet KM: </b></td>
            <td><?php echo $project_data->Pocet_KM; ?> km</td>
        </tr>


        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>


</div>



<div class="col-xs-3 pull-right">
<ul class="list-group">
    <h4> Project Actions </h4>

    <!--<li class="list-group-item"><a href="<?php //echo base_url(); ?>tasks/create/<?php //echo $project_data->ID; ?>">Vytvoriť</a></li>-->
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->ID; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Upraviť</a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->ID; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Vymazať</a></li>
    <li class="list-

</ul>

</div>