@extends('layouts.default')
@push('title', 'PROFILE')

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
        <table id="example" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th><b> NAME </b></th>
              <th><b> POSITION </b></th>
              <th><b> OFFICE </b></th>
              <th><b> AGE </b></th>
              <th><b> START </b></th>
              <th><b> SALARY </b></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011-04-25</td>
              <td>$320,800</td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011-07-25</td>
              <td>$170,750</td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              <td>2009-01-12</td>
              <td>$86,000</td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2012-03-29</td>
              <td>$433,060</td>
            </tr>
            <tr>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>33</td>
              <td>2008-11-28</td>
              <td>$162,700</td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td>New York</td>
              <td>61</td>
              <td>2012-12-02</td>
              <td>$372,000</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3">
    <!--begin::List Widget 5-->
    <div class="card card-xl-stretch">
      <!--begin::Header-->
      <div class="card-header align-items-center">
        <h3 class="card-title align-items-start flex-column">
          <span class="fw-bolder text-dark">Activities</span>

        </h3>
        <div class="card-toolbar">
          <!--begin::Menu-->
          <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
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
            <!--end::Svg Icon-->
          </button>
          <!--begin::Menu 1-->
          <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6244462fda247">
            <!--begin::Header-->
            <div class="px-7 py-5">
              <div class="fs-5 text-dark fw-bolder">Filter Options</div>
            </div>
            <!--end::Header-->
            <!--begin::Menu separator-->
            <div class="separator border-gray-200"></div>
            <!--end::Menu separator-->
            <!--begin::Form-->
            <div class="px-7 py-5">
              <div class="mb-10">
                <label class="form-label fw-bold">Notifications:</label>
                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                  <label class="form-check-label">Enabled</label>
                </div>
                <!--end::Switch-->
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
