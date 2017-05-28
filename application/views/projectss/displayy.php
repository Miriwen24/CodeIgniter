<div class="col-xs-9">

    <h2>Meno zamestnanca: <?php echo $project_data->Meno; ?> <?php echo $project_data->Priezvisko; ?></h2>
    <!--<p>Dátum vytvorenia: <?php echo $project_data->datum; ?> </p>-->
    <h3>Podrobnosti</h3>
    <p><?php echo $project_data->Bydlisko; ?></p>
    <p><?php echo $project_data->Tel_cislo; ?></p>

</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
    <h4> Project Actions </h4>

    <li class="list-group-item"><a href="">Vytvoriť</a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projectss/edit/<?php echo $project_data->ID; ?>"">Upraviť</a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>projectss/delete/<?php echo $project_data->ID; ?>">Vymazať</a></li>


</ul>
        </div>