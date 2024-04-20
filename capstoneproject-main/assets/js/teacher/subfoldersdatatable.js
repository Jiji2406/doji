$("#docx-table").DataTable({
    responsive: false,
    pagingType: "simple",
    sorting: false,
    ordering: false,
    oLanguage: {
        sInfo: "Page _PAGE_ of _PAGES_",
        oPaginate: {
            sPrevious: "Prev",
            sNext: "Next"
        }
    },
    columnDefs: [{
        targets: [1, 2],
        searchable: true
    }, {
        targets: '_all',
        searchable: false
    }],
});