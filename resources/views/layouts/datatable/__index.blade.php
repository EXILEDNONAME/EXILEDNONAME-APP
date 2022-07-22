@extends('layouts.default')

@push('content')

<td class="text-end">
  <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
    <span class="svg-icon svg-icon-5 m-0">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
      </svg>
    </span>
    <!--end::Svg Icon--></a>
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true" style="">
      <!--begin::Menu item-->
      <div class="menu-item px-3">
        <a href="../../demo1/dist/apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
      </div>
      <!--end::Menu item-->
      <!--begin::Menu item-->
      <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
      </div>
      <!--end::Menu item-->
    </div>
    <!--end::Menu-->
  </td>

  <div class="row gy-5 g-xl-8">
    <div class="col-xl-12">
      <div class="card shadow-sm">
        <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
          <h3 class="card-title align-items-start flex-column">
            <span class="fw-bolder text-dark"> Main </span>
            <span class="text-muted fw-bold fs-7"> Datatable Record Index </span>
          </h3>
          <div class="card-toolbar rotate-180" >
            <i class="bi bi-caret-up-fill"></i>
          </div>
        </div>
        <div id="kt_docs_card_collapsible" class="collapse show">
          <div class="card-body">

            <a href="#" class="btn btn-icon btn-primary btn-sm"><i class="bi bi-plus-lg fs-3"></i></i></a>
            <a href="#" class="btn btn-icon btn-primary btn-sm"><i class="bi bi-arrow-repeat fs-3"></i></a>
            <a href="#" class="btn btn-icon btn-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"><i class="bi bi-download fs-3"></i></a>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
              <div class="menu-item px-3">
                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4"> Export </div>
              </div>
              <div class="separator mb-3 opacity-75"></div>
              <div class="menu-item px-3"><a href="#" class="menu-link px-3"> COPY </a></div>
              <div class="menu-item px-3"><a href="#" class="menu-link px-3"> EXCEL </a></div>
              <div class="menu-item px-3"><a href="#" class="menu-link px-3"> PDF </a></div>
              <div class="menu-item px-3"><a href="#" class="menu-link px-3"> CSV </a></div>
              <div class="menu-item px-3"><a href="#" class="menu-link px-3"> PRINT </a></div>
            </div>
            <a href="#" class="btn btn-icon btn-primary btn-sm"><i class="bi bi-filter fs-3"></i></a>

            <div>
              <button type="button" class="btn btn-primary rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"> Click to open menu </button>
              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                <div class="menu-item px-3"><a href="#" class="menu-link px-3"> View </a></div>
                <div class="menu-item px-3"><a href="#" class="menu-link px-3"> Edit </a></div>
              </div>
            </div>

            <hr>

            <div class="table-responsive">
              <table width="100%" class="table table-row-bordered" id="exilednoname">
                <thead>
                  <tr class="fw-bolder text-uppercase">
                    <th class="text-nowrap"> No. </th>
                    @stack('table-header')
                    <th> </th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    ajax: {
      url: "{{ URL::current() }}",
    },
    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    columns: [
      {
        data: 'autonumber', orderable: false, orderable: false, searchable: false, 'width': '1', 'className': 'align-middle text-nowrap',
        render: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        }
      },
      @stack('table-body')
      {
        data: 'action', orderable: false, orderable: false, searchable: false, 'width': '1',
        render : function ( data, type, row) {
          return ''+
          '<span class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> Actions </span>'+
          '<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true" style="">'+
          '<div class="menu-item px-3"><a href="../../demo1/dist/apps/user-management/users/view.html" class="menu-link px-3">Edit</a></div>'+
          '<div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a></div>'+
          '</div>';
        },
      },
    ],
  });

</script>
@endpush
