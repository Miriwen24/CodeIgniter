<div class="col-xs-9">


    <h2>Odkiaľ->Kam: <?php echo $project_data->Odkial; ?> -> <?php echo $project_data->Kam; ?></h2>

    <table class="table table-bordered">
        <h3>Podrobnosti:</h3>
        <thead>
            <tr>
                <td><b> Dátum: </b></td>
                <td><?php echo $project_data->Datum; ?></td>

            <tr>
            <td><b> Počet KM: </b></td>
                <td><?php echo $project_data->Pocet_KM; ?> km</td>
            </tr>

            <tr>
            <td><b>Cena: </b></td>
                <td><?php echo $project_data->Cena; ?> €</td>
            </tr>

            <tr>
            <td><b> <i class="fa fa-key" aria-hidden="true"></i> ID pracovnej zmeny: </b></td>
                <td><?php echo $project_data->Pracovna_zmena_ID; ?></td>
            </tr>

        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>taskss" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Späť</a>

</div>



<div class="col-xs-3 pull-right">
    <ul class="list-group">
        <h4> <i class="fa fa-cogs" aria-hidden="true"></i> </h4>

        <li class="list-group-item"><a href="<?php echo base_url(); ?>taskss/edit/<?php echo $project_data->ID; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Upraviť</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>taskss/delete/<?php echo $project_data->ID; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Vymazať</a></li>


</ul>

</div>