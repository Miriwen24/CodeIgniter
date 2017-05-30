<p class="bg-success">
    <?php if($this->session->flashdata('login_success')): ?>
        <?php echo $this->session->flashdata('login_success'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo $this->session->flashdata('user_registered'); ?>
    <?php endif; ?>
</p>

<p class="bg-danger">
    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo $this->session->flashdata('login_failed'); ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('no_access')): ?>
        <?php echo $this->session->flashdata('no_access'); ?>
    <?php endif; ?>

</p>

<!--<div class="jumbotron">

        <h1 class="text-center">Vitajte !</h1>

</div>-->
<?php if (!$this->session->userdata('logged_in')):?>

<?php else:?>

    <!DOCTYPE html>
    <head>
        <title>Charts</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var jsonData1 = $.ajax({
                    url: "<?php echo base_url().'grafs/getdata1' ?>",
                    dataType: "json",
                    async: false
                }).responseText;
                var jsonData2 = $.ajax({
                    url: "<?php echo base_url().'grafs/getdata2' ?>",
                    dataType: "json",
                    async: false
                }).responseText;
                var jsonData3 = $.ajax({
                    url: "<?php echo base_url().'grafs/getdata3' ?>",
                    dataType: "json",
                    async: false
                }).responseText;
                var jsonData4 = $.ajax({
                    url: "<?php echo base_url().'grafs/getdata4' ?>",
                    dataType: "json",
                    async: false
                }).responseText;

                var data1 = new google.visualization.DataTable(jsonData1);
                var data2 = new google.visualization.DataTable(jsonData2);
                var data3 = new google.visualization.DataTable(jsonData3);
                var data4 = new google.visualization.DataTable(jsonData4);

                var chart1 = new google.visualization.PieChart(document.getElementById('chart_div1'));
                chart1.draw(data1, {title:'Graf 4: Počet jázd jednotlivých zamestnancov.', width: 400, height: 300});

                var chart2 = new google.visualization.BarChart(document.getElementById('chart_div2'));
                chart2.draw(data2, {title:'Graf 2: Počet najazdených KM jednotlivých zamestnancov.', width: 400, height: 300});

                var chart3 = new google.visualization.BarChart(document.getElementById('chart_div3'));
                chart3.draw(data3, {title:'Graf 3: Počet najazdených KM jednotlivých vozidiel.', width: 400, height: 300});

                var chart4 = new google.visualization.PieChart(document.getElementById('chart_div4'));
                chart4.draw(data4, {title:'Graf 1: Počet zamestnancov na jednotlivých pracovných zmenách.', width: 400, height: 300});

            }

        </script>

    </head>

    <body>

    <table class="columns">
           <tr>
        <td><div id="chart_div4" style="border: 1px solid #CCCCCC"></div></td>
        <td><div id="chart_div2" style="border: 1px solid #CCCCCC"></div></td>
           </tr>
        <tr>
            <td><div id="chart_div3" style="border: 1px solid #CCCCCC"></div></td>
            <td><div id="chart_div1" style="border: 1px solid #CCCCCC"></div></td>
        </tr>
    </table>
    </body>

    </html>
<?php endif;?>



