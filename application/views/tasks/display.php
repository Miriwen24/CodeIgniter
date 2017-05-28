<h1>Task display view</h1>

<table class="table table-bordered">

    <thead>
    <tr>
        <th>
            #
        </th>
        <th>
            ID zamestnanca
        </th>
        <th>
            ID pracovnej zmieny
        </th>
        <th>
            ID auta
        </th>

    </tr>
    </thead>
    <tbody>


        <tr>
            <td><?php echo $task->ID; ?></td>
            <td><?php echo $task->Zamestnanec_ID; ?></td>
            <td><?php echo $task->Detaily_zmeny_ID; ?></td>
            <td><?php echo $task->Auto_ID; ?></td>

        </tr>




    </tbody>
</table>
