<div class="col-xs-9">

    <h2>Pracovná zmena: <?php echo $project_data->Typ_zmeny; ?></h2>
    <!--<p>Dátum vytvorenia: <?php echo $project_data->datum; ?> </p>-->
    <h3>Podrobnosti</h3>
    <p><?php echo $project_data->Od; ?></p>
    <p><?php echo $project_data->Do; ?></p>
    <p><?php echo $project_data->Hodinova_mzda; ?></p>

</div>

<div class="col-xs-3 pull-right">
    <ul class="list-group">
        <h4> Project Actions </h4>

        <li class="list-group-item"><a href="">Vytvoriť</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projectsss/edit/<?php echo $project_data->ID; ?>"">Upraviť</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projectsss/delete/<?php echo $project_data->ID; ?>">Vymazať</a></li>


    </ul>
</div>