$(document).ready(function () {
    $('#reportrange').daterangepicker({
        "showDropdowns": true,
        "autoUpdateInput": true,
        "alwaysShowCalendars": false,
        "opens": "right",
        "linkedCalendars": false,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
        }
    });
    $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));

        var startDate = picker.startDate.format('MMM DD,YYYY');
        var endDate = picker.endDate.format('MMM DD,YYYY');
        $.ajax({
            url: '../assets/controller/ajax/teacher/filterdocumentsdate.php',
            method: 'POST',
            data: { startDate: startDate, endDate: endDate },
            success: function (response) {

                $('#filtered-result').html(response);
            },
        });
    });
    $('.daterangepicker').addClass('subfolder-files');
});
