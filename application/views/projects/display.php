<div class="col-xs-9">


    <h1>Značka vozidla: <?php echo $project_data->Znacka; ?></h1>
    <p>Dátum vytvorenia: <?php echo $project_data->datum; ?> </p>
    <h3>Podrobnosti</h3>
    <p><?php echo $project_data->Model; ?></p>
    <p><?php echo $project_data->Rok_vyroby; ?></p>
    <p><?php echo $project_data->ECV; ?></p>
    <p><?php echo $project_data->Pocet_KM; ?></p>


</div>



<div class="col-xs-3 pull-right">
<ul class="list-group">
    <h4> Project Actions </h4>

    <li class="list-group-item"><a href="">Vytvoriť</a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->ID; ?>">Upraviť</a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->ID; ?>">Vymazať</a></li>
    <li class="list-

</ul>

</div>