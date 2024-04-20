$('#select-all').click(function (event) {
    if (this.checked) {
        $(':checkbox').prop('checked', true);
    } else {
        $(':checkbox').prop('checked', false);
    }

});

$('.form-check-input').click(function (event) {
    updatecount();
});

function updatecount() {
    var num_selected = $('.form-check-input:checked').not('#select-all').length;
    $('#count-checkbox-checked').text(num_selected + ' ' + 'Selected');
    if (num_selected > 0) {
        $('.selected-action').removeClass('d-none');
    } else {
        $('.selected-action').addClass('d-none');
    }
}