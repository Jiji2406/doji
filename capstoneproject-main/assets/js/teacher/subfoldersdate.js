$(document).ready(function () {
    $('#subfolderdate').daterangepicker({
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
    $('#subfolderdate').on('apply.daterangepicker', function (ev, picker) {
        var startDate = picker.startDate.format('MMM DD,YYYY');
        var endDate = picker.endDate.format('MMM DD,YYYY');
        var category = $('#category').data('category');
        $.ajax({
            url: '../assets/controller/ajax/teacher/subfoldersdate.php',
            method: 'POST',
            data: { startDate: startDate, endDate: endDate, category:category },
            success: function (response) {
                $('#result').html(response);
            },
        });
    });
    $('.daterangepicker').addClass('subfolder-files');
});