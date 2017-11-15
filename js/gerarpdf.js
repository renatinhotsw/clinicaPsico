var table = $('#myTable').DataTable();<font></font>
<font></font>
new $.fn.dataTable.Buttons( table, {<font></font>
    buttons: [<font></font>
        'copy', 'excel', 'pdf'<font></font>
    ]<font></font>
} );<font></font>
<font></font>
table.buttons().container()<font></font>
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );<font></font>