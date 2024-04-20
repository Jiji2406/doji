$("#docx-table").DataTable({
    responsive: true,
    pagingType: "simple",
    sorting: false,
    oLanguage: {
        sInfo: "Page _PAGE_ of _PAGES_",
        oPaginate: {
            sPrevious: "Prev",
            sNext: "Next"
        }
    },

});