@extends('layouts.default')

@push('content')
<div class="row gy-5 g-xl-8">
  <div class="col-xl-9">
    <div class="card card-xl-stretch">
      <div class="card-header align-items-center">
        <h3 class="card-title align-items-start flex-column">
          <span class="fw-bolder mb-2 text-dark"> Main </span>
          <span class="text-muted fw-bold fs-7"> Datatable Record Index </span>
        </h3>
        <div class="card-toolbar">
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            <span class="svg-icon svg-icon-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                  <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                  <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                  <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                </g>
              </svg>
            </span>
          </button>
          <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6244462fda247">
            <div class="px-7 py-5">
              <div class="fs-5 text-dark fw-bolder">Filter Options</div>
            </div>
            <div class="separator border-gray-200"></div>
            <div class="px-7 py-5">
              <div class="mb-10">
                <label class="form-label fw-bold">Notifications:</label>
                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                  <label class="form-check-label">Enabled</label>
                </div>
              </div>
              <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped-table-bordered table-hover table-checkable" id="exilednoname">
            <thead>
              <tr>
                <th class="text-nowrap"> No. </th>
                @stack('table-header')
                <th class="no-export"> </th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3">
    <div class="card card-xl-stretch">
      <div class="card-header align-items-center">
        <h3 class="card-title align-items-start flex-column">
          <span class="fw-bolder text-dark">Activities</span>
        </h3>
        <div class="card-toolbar">
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            <span class="svg-icon svg-icon-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                  <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                  <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                  <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                </g>
              </svg>
            </span>
          </button>
          <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6244462fda247">
            <div class="px-7 py-5">
              <div class="fs-5 text-dark fw-bolder">Filter Options</div>
            </div>
            <div class="separator border-gray-200"></div>
            <div class="px-7 py-5">
              <div class="mb-10">
                <label class="form-label fw-bold">Notifications:</label>
                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                  <label class="form-check-label">Enabled</label>
                </div>
              </div>
              <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body pt-5">
        <!--  -->
      </div>
    </div>
  </div>


  <!--end::Col-->
</div>
@endpush

@push('js')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
  $('#toast-container').fadeOut(5000);
});

var table = $('#exilednoname').DataTable({
  processing: true,
  "language": {
    processing: '<span class="font-weight-bolder text-center"> Please Wait ... </span>'
  },
  serverSide: true,
  searching: true,
  rowId: 'Collocation',
  select: {
    style: 'multi',
    selector: 'td:first-child .checkable',
  },
  ajax: {
    url: "{{ URL::current() }}",
    "data" : function (d) {
      @stack('filter-function')
    }
  },
  "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
  buttons: [
    {
      extend: 'print',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export"
      },
    },
    {
      extend: 'copyHtml5',
      autoClose: 'true',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export"
      },
    },
    {
      extend: 'excelHtml5',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export"
      },
    },
    {
      extend: 'csvHtml5',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export"
      },
    },
    {
      extend: 'pdfHtml5',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export"
      },
    },
    {
      extend: 'pdfHtml5',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export",
        rows: { selected: true }
      },
    },
    {
      extend: 'excelHtml5',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export",
        rows: { selected: true }
      },
    },
    {
      extend: 'copyHtml5',
      autoClose: 'true',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export",
        rows: { selected: true }
      },
    },
    {
      extend: 'print',
      exportOptions: {
        columns: "thead th:not(.no-export)",
        orthogonal: "Export",
        rows: { selected: true }
      },
    },
  ],
  columns: [
    {
      data: 'autonumber', orderable: false, orderable: false, searchable: false, 'width': '1',
      render: function (data, type, row, meta) {
        return meta.row + meta.settings._iDisplayStart + 1;
      }
    },
    @stack('table-body')
    {
      data: 'action', orderable: false, orderable: false, searchable: false, 'width': '1',
      render : function ( data, type, row) {
        return ''+
        '<div class="dropdown dropdown-inline">'+
        '<button type="button" class="btn btn-hover-light-dark btn-icon btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ki ki-bold-more-ver"></i></button>'+
        '<div class="dropdown-menu dropdown-menu-xs" style=""><ul class="navi navi-hover py-5">'+
        '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '" class="navi-link"><span class="navi-icon"><i class="flaticon2-expand"></i></span><span class="navi-text">{{ trans("default.label.view") }}</span></a></li>'+
        '<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '/edit" class="navi-link"><span class="navi-icon"><i class="flaticon2-contract"></i></span><span class="navi-text">{{ trans("default.label.edit") }}</span></a></li>'+
        '<li class="navi-item"><a href="javascript:void(0);" class="navi-link delete" data-id="' + row.id + '"><span class="navi-icon"><i class="flaticon2-trash"></i></span><span class="navi-text"> {{ trans("default.label.delete") }} </span></a></li>';
      },
    },
  ],
});
// FILTER
@if ( !empty($daterange) && $daterange == 'true')
$('#date_start').change(function () { table.draw(); });
$('#date_end').change(function () { table.draw(); });
@endif
$('.filter-active').change(function () {
  table.column(-2).search( $(this).val() ).draw();
});
@if ( !empty($status) && $status == 'true')
$('.filter-status').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
@endif
@stack('filter-body')
// END FILTER
$('#reset').click(function(){
  $('.filter-active').val('');
  $('.filter-status').val('');
  $('#date_start').val('');
  $('#date_end').val('');
  table.search( '' ).columns().search( '' ).draw();
});
$("#table-refresh").on("click", function() {
  $('#toolbar_delete').collapse('hide');
  table.ajax.reload();
});
$('#export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });
$('#export_copy').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
$('#export_excel').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
$('#export_csv').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });
$('#export_pdf').on('click', function(e) { e.preventDefault(); table.button(4).trigger(); });
$("#table-filter-show").on("click", function() {
  $('#toolbar_filter').collapse('show');
  $('#toolbar_filter_show').collapse('hide');
  $('#toolbar_filter_hide').collapse('show');
});
$("#table-filter-hide").on("click", function() {
  $('#toolbar_filter').collapse('hide');
  $('#toolbar_filter_show').collapse('show');
  $('#toolbar_filter_hide').collapse('hide');
});
table.on('change', '.group-checkable', function() {
  var set = $(this).closest('table').find('td:first-child .checkable');
  var checked = $(this).is(':checked');
  $(set).each(function() {
    if (checked) {
      $(this).prop('checked', true);
      table.rows($(this).closest('tr')).select();
      var checkedNodes = table.rows('.selected').nodes();
      var count = checkedNodes.length;
      $('#kt_datatable_selected_records').html(count);
      if (count > 0) { $('#toolbar_delete').collapse('show'); }
    }
    else {
      $(this).prop('checked', false);
      table.rows($(this).closest('tr')).deselect();
      $('#toolbar_delete').collapse('hide');
    }
  });
});
table.on('change', '.checkable', function() {
  var checkedNodes = table.rows('.selected').nodes();
  var count = checkedNodes.length;
  $('#kt_datatable_selected_records').html(count);
  if (count > 0) { $('#toolbar_delete').collapse('show'); }
  else { $('#toolbar_delete').collapse('hide'); }
});
$('body').on('click', '#active', function () {
  var id = $(this).data("id");
  $.ajax({
    type: "get",
    url: "{{ URL::current() }}/active/"+id,
    processing: true,
    serverSide: true,
    success: function (data) {
      var oTable = $('#exilednoname').dataTable();
      $('#toolbar_delete').collapse('hide');
      oTable.fnDraw(false);
      toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
      toastr.success("{{ trans('default.notification.success.active') }}");
    },
    error: function (data) {
      toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
      toastr.error("{{ trans('default.notification.error.restrict') }}!");
    }
  });
});
$('body').on('click', '#inactive', function () {
  var id = $(this).data("id");
  $.ajax({
    type: "get",
    url: "{{ URL::current() }}/inactive/"+id,
    processing: true,
    serverSide: true,
    success: function (data) {
      var oTable = $('#exilednoname').dataTable();
      $('#toolbar_delete').collapse('hide');
      oTable.fnDraw(false);
      toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
      toastr.success("{{ trans('default.notification.success.inactive') }}");
    },
    error: function (data) {
      toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
      toastr.error("{{ trans('default.notification.error.restrict') }}!");
    }
  });
});
$('.delete-all').on('click', function(e) {
  var exilednonameArr = [];
  $(".checkable:checked").each(function() { exilednonameArr.push($(this).attr('data-id')); });
  var strEXILEDNONAME = exilednonameArr.join(",");
  Swal.fire({
    title: "Are you sure?",
    text: "{{ trans('default.label.confirm-deleteall') }}",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes",
    cancelButtonText: "No",
    reverseButtons: false
  }).then(function(result) {
    if (result.value) {
      $.ajax({
        url: "{{ URL::current() }}/deleteall",
        type: 'get',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: 'EXILEDNONAME='+strEXILEDNONAME,
        success: function (data) {
          var oTable = $('#exilednoname').dataTable();
          $('#toolbar_delete').collapse('hide');
          oTable.fnDraw(false);
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.success("{{ trans('default.notification.success.delete-selected') }}");
        },
        error: function (data) {
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.error("{{ trans('default.notification.error.restrict') }}!");
        }
      });
    }
  });
});
$('body').on('click', '.delete', function () {
  var id = $(this).data("id");
  Swal.fire({
    title: "Are you sure?",
    text: "{{ trans('default.label.confirm-delete') }}",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes",
    cancelButtonText: "No",
    reverseButtons: false
  }).then(function(result) {
    if (result.value) {
      $.ajax({
        type: "get",
        url: "{{ URL::current() }}/delete/"+id,
        success: function (data) {
          var oTable = $('#exilednoname').dataTable();
          oTable.fnDraw(false);
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.success("{{ trans('default.notification.success.delete') }}");
        },
        error: function (data) {
          toastr.options = { "positionClass": "toast-bottom-right", "closeButton": true, };
          toastr.error("{{ trans('default.notification.error.restrict') }}!");
        }
      });
    }
  });
});
$('body').on('click', '#delete', function () {
  var id = $(this).data("id");
  if(confirm("Are You sure want to delete !")){
  }
});

</script>
@endpush
