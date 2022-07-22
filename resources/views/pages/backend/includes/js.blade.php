<script src="/assets/backend/lib/jquery/jquery.js"></script>
<script src="/assets/backend/lib/popper.js/popper.js"></script>
<script src="/assets/backend/lib/bootstrap/bootstrap.js"></script>
<script src="/assets/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="/assets/backend/lib/moment/moment.js"></script>
<script src="/assets/backend/lib/jquery-ui/jquery-ui.js"></script>
<script src="/assets/backend/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="/assets/backend/lib/peity/jquery.peity.js"></script>

<script src="/assets/backend/lib/highlightjs/highlight.pack.js"></script>
<script src="/assets/backend/lib/datatables/jquery.dataTables.js"></script>
<script src="/assets/backend/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="/assets/backend/lib/select2/js/select2.min.js"></script>

<script src="/assets/backend/js/bracket.js"></script>

<script>
  $(function(){
    'use strict';

    $('#datatable1').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ items/page',
      }
    });

    $('#datatable2').DataTable({
      bLengthChange: false,
      searching: false,
      responsive: true
    });

    // Select2
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

  });
</script>
