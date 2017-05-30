<div class="col-xs-9">

    <h2>Meno zamestnanca: <?php echo $project_data->Meno; ?> <?php echo $project_data->Priezvisko; ?></h2>
    <!--<p>Dátum vytvorenia: <?php echo $project_data->datum; ?> </p>-->

    <table class="table table-bordered">
        <h3>Podrobnosti:</h3>
        <thead>
        <tr>
            <td><b>Bydlisko: </b></td>
            <td><?php echo $project_data->Bydlisko; ?></td>
        </tr>

        <tr>
            <td><b>Telefónne číslo: </b></td>
            <td><?php echo $project_data->Tel_cislo; ?></td>
        </tr>



        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>projectss" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Späť</a>



</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">

    <h4> <i class="fa fa-cogs" aria-hidden="true"></i> </h4>

    <li class="list-group-item"><a href="<?php echo base_url(); ?>projectss/edit/<?php echo $project_data->ID; ?>""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Upraviť</a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projectss/delete/<?php echo $project_data->ID; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Vymazať</a></li>


</ul>
        </div>