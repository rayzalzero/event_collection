<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <script src="<?= base_url('assets/plugins/Highcharts-6.1.0/code/highcharts.js')?>"></script>
                <script src="<?= base_url('assets/plugins/Highcharts-6.1.0/code/modules/exporting.js')?>"></script>
                <script src="<?= base_url('assets/plugins/Highcharts-6.1.0/code/modules/export-data.js')?>"></script>
                <script src="<?= base_url('assets/plugins/Highcharts-6.1.0/code/modules/data.js')?>"></script>

                <div id="container" style="min-width: 310px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
</div>
<script>
var dataPertama = <?= $event_data?>;

var dataOne = [];
dataPertama.forEach(element => {
    dataOne.push({name : element.nama, data : [parseInt(element.data)]});
});

Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Acara Akakom'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Acara Akakom'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (Persons)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' Persons'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: dataOne
});
</script>