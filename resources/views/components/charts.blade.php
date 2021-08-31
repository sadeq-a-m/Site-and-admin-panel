@extends('components.panel')



@section('content')




    <h1>Charts</h1>



    <div    class="row">
    <div    class="col-sm-9">
        <div id="columnchart_values" style="width: 900px; height: 300px;"></div>

    </div>
    </div>

@endsection



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Density", { role: "style" } ],
            ["تعداد کاربران", 3, "#b87333"],
            ["کامنت های تایید شده ", 5, "blue"],
            ["کامنت های تایید نشده ", 5, "black"],
            ["تعداد پست ها", 6, "gold"],
            ["عنوان ها", 4, "color: red"]
        ]);
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            { calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation" },
            2]);
        var options = {
            title: "",
            width: 150,
            height: 80,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
</script>
