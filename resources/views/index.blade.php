<!DOCTYPE html>
<html lang="en">
@include('pages.backend.includes.head')

<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
  <!--begin::Main-->
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      <!--begin::Aside-->
      <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
        <!--begin::Brand-->
        <div class="aside-logo flex-column-auto" id="kt_aside_logo">
          <!--begin::Logo-->
          <a href="../../demo1/dist/index.html">
            <img alt="Logo" src="/assets/backend/media/logos/logo-1-dark.svg" class="h-25px logo" />
          </a>
          <!--end::Logo-->
          <!--begin::Aside toggler-->
          <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </div>
          <!--end::Aside toggler-->
        </div>
        <!--end::Brand-->

        @include('pages.backend.includes.menu-sidebar')
      </div>
      <!--end::Aside-->
      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" style="" class="header align-items-stretch">
          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Aside mobile toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
              <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </div>
            </div>
            <!--end::Aside mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
              <a href="../../demo1/dist/index.html" class="d-lg-none">
                <img alt="Logo" src="/assets/backend/media/logos/logo-2.svg" class="h-30px" />
              </a>
            </div>
            <!--end::Mobile logo-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
              <!--begin::Navbar-->
              <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                  <!--begin::Menu-->
                  @include('pages.backend.includes.menu-top')
                  <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
              </div>
              <!--end::Navbar-->
              <!--begin::Toolbar wrapper-->
              <div class="d-flex align-items-stretch flex-shrink-0">
                @include('pages.backend.includes.topbar-search')
                @include('pages.backend.includes.topbar-activity')
                @include('pages.backend.includes.topbar-notification')
                @include('pages.backend.includes.topbar-chat')
                @include('pages.backend.includes.topbar-quicklink')
                @include('pages.backend.includes.topbar-theme')
                @include('pages.backend.includes.topbar-user')

                <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                  <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                    <span class="svg-icon svg-icon-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
                        <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
              @include('pages.backend.includes.breadcrumb')

              <div class="d-flex align-items-center gap-2 gap-lg-3">
                <div class="m-0">
                  <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                      </svg>
                    </span>
                    Filter</a>
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624445ab67cc1">
                      <!--begin::Header-->
                      <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                      </div>
                      <div class="separator border-gray-200"></div>
                      <div class="px-7 py-5">
                        <div class="mb-10">
                          <label class="form-label fw-bold">Status:</label>
                          <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624445ab67cc1" data-allow-clear="true">
                              <option></option>
                              <option value="1">Approved</option>
                              <option value="2">Pending</option>
                              <option value="2">In Process</option>
                              <option value="2">Rejected</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-10">
                          <label class="form-label fw-bold">Member Type:</label>
                          <div class="d-flex">
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                              <input class="form-check-input" type="checkbox" value="1" />
                              <span class="form-check-label">Author</span>
                            </label>
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                              <span class="form-check-label">Customer</span>
                            </label>
                          </div>
                        </div>
                        <div class="mb-10">
                          <label class="form-label fw-bold">Notifications:</label>
                          <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
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
                <!--end::Actions-->
              </div>
              <!--end::Container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <!--begin::Container-->
              <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card">

                  <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th><b> NAME </b></th>
                        <th><b> POSITION </b></th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
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
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>

                  <div class="card-header border-0 pt-6">
                    <div class="card-title">
                      <!--begin::Search-->
                      <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                      </div>
                      <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                      <!--begin::Toolbar-->
                      <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                          <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                          <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->Filter</button>
                          <!--begin::Menu 1-->
                          <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                              <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="px-7 py-5" data-kt-user-table-filter="form">
                              <!--begin::Input group-->
                              <div class="mb-10">
                                <label class="form-label fs-6 fw-bold">Role:</label>
                                <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                  <option></option>
                                  <option value="Administrator">Administrator</option>
                                  <option value="Analyst">Analyst</option>
                                  <option value="Developer">Developer</option>
                                  <option value="Support">Support</option>
                                  <option value="Trial">Trial</option>
                                </select>
                              </div>
                              <!--end::Input group-->
                              <!--begin::Input group-->
                              <div class="mb-10">
                                <label class="form-label fs-6 fw-bold">Two Step Verification:</label>
                                <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                  <option></option>
                                  <option value="Enabled">Enabled</option>
                                </select>
                              </div>
                              <!--end::Input group-->
                              <!--begin::Actions-->
                              <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                              </div>
                              <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                          </div>
                          <!--end::Menu 1-->
                          <!--end::Filter-->
                          <!--begin::Export-->
                          <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
                                <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->Export</button>
                            <!--end::Export-->
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                  <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->Add User</button>
                              <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                              <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                              </div>
                              <!--end::Group actions-->
                              <!--begin::Modal - Adjust Balance-->
                              <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                  <!--begin::Modal content-->
                                  <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                      <!--begin::Modal title-->
                                      <h2 class="fw-bolder">Export Users</h2>
                                      <!--end::Modal title-->
                                      <!--begin::Close-->
                                      <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                          </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                      </div>
                                      <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                      <!--begin::Form-->
                                      <form id="kt_modal_export_users_form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                          <!--begin::Label-->
                                          <label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                            <option></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Analyst">Analyst</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Support">Support</option>
                                            <option value="Trial">Trial</option>
                                          </select>
                                          <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                          <!--begin::Label-->
                                          <label class="required fs-6 fw-bold form-label mb-2">Select Export Format:</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                            <option></option>
                                            <option value="excel">Excel</option>
                                            <option value="pdf">PDF</option>
                                            <option value="cvs">CVS</option>
                                            <option value="zip">ZIP</option>
                                          </select>
                                          <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="text-center">
                                          <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                          <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                              <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                          </div>
                                          <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                      </div>
                                      <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                  </div>
                                  <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - New Card-->
                                <!--begin::Modal - Add task-->
                                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                  <!--begin::Modal dialog-->
                                  <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                      <!--begin::Modal header-->
                                      <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Add User</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                          <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                              <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                              <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                            </svg>
                                          </span>
                                          <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                      </div>
                                      <!--end::Modal header-->
                                      <!--begin::Modal body-->
                                      <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_add_user_form" class="form" action="#">
                                          <!--begin::Scroll-->
                                          <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                              <!--begin::Label-->
                                              <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                              <!--end::Label-->
                                              <!--begin::Image input-->
                                              <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('/assets/backend/media/svg/avatars/blank.svg')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/backend/media/avatars/300-6.jpg);"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                  <i class="bi bi-pencil-fill fs-7"></i>
                                                  <!--begin::Inputs-->
                                                  <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                  <input type="hidden" name="avatar_remove" />
                                                  <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                  <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                  <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                              </div>
                                              <!--end::Image input-->
                                              <!--begin::Hint-->
                                              <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                              <!--end::Hint-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                              <!--begin::Label-->
                                              <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                              <!--end::Label-->
                                              <!--begin::Input-->
                                              <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
                                              <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                              <!--begin::Label-->
                                              <label class="required fw-bold fs-6 mb-2">Email</label>
                                              <!--end::Label-->
                                              <!--begin::Input-->
                                              <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com" />
                                              <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-7">
                                              <!--begin::Label-->
                                              <label class="required fw-bold fs-6 mb-5">Role</label>
                                              <!--end::Label-->
                                              <!--begin::Roles-->
                                              <!--begin::Input row-->
                                              <div class="d-flex fv-row">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                  <!--begin::Input-->
                                                  <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                                  <!--end::Input-->
                                                  <!--begin::Label-->
                                                  <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bolder text-gray-800">Administrator</div>
                                                    <div class="text-gray-600">Best for business owners and company administrators</div>
                                                  </label>
                                                  <!--end::Label-->
                                                </div>
                                                <!--end::Radio-->
                                              </div>
                                              <!--end::Input row-->
                                              <div class='separator separator-dashed my-5'></div>
                                              <!--begin::Input row-->
                                              <div class="d-flex fv-row">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                  <!--begin::Input-->
                                                  <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
                                                  <!--end::Input-->
                                                  <!--begin::Label-->
                                                  <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                    <div class="fw-bolder text-gray-800">Developer</div>
                                                    <div class="text-gray-600">Best for developers or people primarily using the API</div>
                                                  </label>
                                                  <!--end::Label-->
                                                </div>
                                                <!--end::Radio-->
                                              </div>
                                              <!--end::Input row-->
                                              <div class='separator separator-dashed my-5'></div>
                                              <!--begin::Input row-->
                                              <div class="d-flex fv-row">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                  <!--begin::Input-->
                                                  <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
                                                  <!--end::Input-->
                                                  <!--begin::Label-->
                                                  <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                    <div class="fw-bolder text-gray-800">Analyst</div>
                                                    <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                                  </label>
                                                  <!--end::Label-->
                                                </div>
                                                <!--end::Radio-->
                                              </div>
                                              <!--end::Input row-->
                                              <div class='separator separator-dashed my-5'></div>
                                              <!--begin::Input row-->
                                              <div class="d-flex fv-row">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                  <!--begin::Input-->
                                                  <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
                                                  <!--end::Input-->
                                                  <!--begin::Label-->
                                                  <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                    <div class="fw-bolder text-gray-800">Support</div>
                                                    <div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
                                                  </label>
                                                  <!--end::Label-->
                                                </div>
                                                <!--end::Radio-->
                                              </div>
                                              <!--end::Input row-->
                                              <div class='separator separator-dashed my-5'></div>
                                              <!--begin::Input row-->
                                              <div class="d-flex fv-row">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                  <!--begin::Input-->
                                                  <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
                                                  <!--end::Input-->
                                                  <!--begin::Label-->
                                                  <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                    <div class="fw-bolder text-gray-800">Trial</div>
                                                    <div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
                                                  </label>
                                                  <!--end::Label-->
                                                </div>
                                                <!--end::Radio-->
                                              </div>
                                              <!--end::Input row-->
                                              <!--end::Roles-->
                                            </div>
                                            <!--end::Input group-->
                                          </div>
                                          <!--end::Scroll-->
                                          <!--begin::Actions-->
                                          <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                              <span class="indicator-label">Submit</span>
                                              <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                              </button>
                                            </div>
                                            <!--end::Actions-->
                                          </form>
                                          <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                      </div>
                                      <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                  </div>
                                  <!--end::Modal - Add task-->
                                </div>
                                <!--end::Card toolbar-->
                              </div>
                              <!--end::Card header-->
                              <!--begin::Card body-->
                              <div class="card-body py-4">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                  <!--begin::Table head-->
                                  <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                      <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                          <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                        </div>
                                      </th>
                                      <th class="min-w-125px">User</th>
                                      <th class="min-w-125px">Role</th>
                                      <th class="min-w-125px">Last login</th>
                                      <th class="min-w-125px">Two-step</th>
                                      <th class="min-w-125px">Joined Date</th>
                                      <th class="text-end min-w-100px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                  </thead>
                                  <!--end::Table head-->
                                  <!--begin::Table body-->
                                  <tbody class="text-gray-600 fw-bold">
                                    <!--begin::Table row-->
                                    <tr>
                                      <!--begin::Checkbox-->
                                      <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                          <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                      </td>
                                      <!--end::Checkbox-->
                                      <!--begin::User=-->
                                      <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                          <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                              <img src="/assets/backend/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                            </div>
                                          </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                          <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                          <span>smith@kpmg.com</span>
                                        </div>
                                        <!--begin::User details-->
                                      </td>
                                      <!--end::User=-->
                                      <!--begin::Role=-->
                                      <td>Administrator</td>
                                      <!--end::Role=-->
                                      <!--begin::Last login=-->
                                      <td>
                                        <div class="badge badge-light fw-bolder">Yesterday</div>
                                      </td>
                                      <!--end::Last login=-->
                                      <!--begin::Two step=-->
                                      <td></td>
                                      <!--end::Two step=-->
                                      <!--begin::Joined-->
                                      <td>05 May 2022, 2:40 pm</td>
                                      <!--begin::Joined-->
                                      <!--begin::Action=-->
                                      <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                          <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                              <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                          </span>
                                          <!--end::Svg Icon--></a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                        <!--end::Action=-->
                                      </tr>
                                      <!--end::Table row-->
                                      <!--begin::Table row-->
                                      <tr>
                                        <!--begin::Checkbox-->
                                        <td>
                                          <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                          </div>
                                        </td>
                                        <!--end::Checkbox-->
                                        <!--begin::User=-->
                                        <td class="d-flex align-items-center">
                                          <!--begin:: Avatar -->
                                          <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html">
                                              <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                            </a>
                                          </div>
                                          <!--end::Avatar-->
                                          <!--begin::User details-->
                                          <div class="d-flex flex-column">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                                            <span>melody@altbox.com</span>
                                          </div>
                                          <!--begin::User details-->
                                        </td>
                                        <!--end::User=-->
                                        <!--begin::Role=-->
                                        <td>Analyst</td>
                                        <!--end::Role=-->
                                        <!--begin::Last login=-->
                                        <td>
                                          <div class="badge badge-light fw-bolder">20 mins ago</div>
                                        </td>
                                        <!--end::Last login=-->
                                        <!--begin::Two step=-->
                                        <td>
                                          <div class="badge badge-light-success fw-bolder">Enabled</div>
                                        </td>
                                        <!--end::Two step=-->
                                        <!--begin::Joined-->
                                        <td>21 Feb 2022, 5:30 pm</td>
                                        <!--begin::Joined-->
                                        <!--begin::Action=-->
                                        <td class="text-end">
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                              </svg>
                                            </span>
                                            <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                          <!--end::Action=-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                          <!--begin::Checkbox-->
                                          <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                              <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                          </td>
                                          <!--end::Checkbox-->
                                          <!--begin::User=-->
                                          <td class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                              <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                <div class="symbol-label">
                                                  <img src="/assets/backend/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                                </div>
                                              </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                              <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                                              <span>max@kt.com</span>
                                            </div>
                                            <!--begin::User details-->
                                          </td>
                                          <!--end::User=-->
                                          <!--begin::Role=-->
                                          <td>Developer</td>
                                          <!--end::Role=-->
                                          <!--begin::Last login=-->
                                          <td>
                                            <div class="badge badge-light fw-bolder">3 days ago</div>
                                          </td>
                                          <!--end::Last login=-->
                                          <!--begin::Two step=-->
                                          <td></td>
                                          <!--end::Two step=-->
                                          <!--begin::Joined-->
                                          <td>24 Jun 2022, 10:30 am</td>
                                          <!--begin::Joined-->
                                          <!--begin::Action=-->
                                          <td class="text-end">
                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                              <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                </svg>
                                              </span>
                                              <!--end::Svg Icon--></a>
                                              <!--begin::Menu-->
                                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                            <!--end::Action=-->
                                          </tr>
                                          <!--end::Table row-->
                                          <!--begin::Table row-->
                                          <tr>
                                            <!--begin::Checkbox-->
                                            <td>
                                              <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                              </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::User=-->
                                            <td class="d-flex align-items-center">
                                              <!--begin:: Avatar -->
                                              <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                  <div class="symbol-label">
                                                    <img src="/assets/backend/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                                  </div>
                                                </a>
                                              </div>
                                              <!--end::Avatar-->
                                              <!--begin::User details-->
                                              <div class="d-flex flex-column">
                                                <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                                                <span>sean@dellito.com</span>
                                              </div>
                                              <!--begin::User details-->
                                            </td>
                                            <!--end::User=-->
                                            <!--begin::Role=-->
                                            <td>Support</td>
                                            <!--end::Role=-->
                                            <!--begin::Last login=-->
                                            <td>
                                              <div class="badge badge-light fw-bolder">5 hours ago</div>
                                            </td>
                                            <!--end::Last login=-->
                                            <!--begin::Two step=-->
                                            <td>
                                              <div class="badge badge-light-success fw-bolder">Enabled</div>
                                            </td>
                                            <!--end::Two step=-->
                                            <!--begin::Joined-->
                                            <td>25 Jul 2022, 11:30 am</td>
                                            <!--begin::Joined-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                              <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                  </svg>
                                                </span>
                                                <!--end::Svg Icon--></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                              <!--end::Action=-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                              <!--begin::Checkbox-->
                                              <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                  <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                              </td>
                                              <!--end::Checkbox-->
                                              <!--begin::User=-->
                                              <td class="d-flex align-items-center">
                                                <!--begin:: Avatar -->
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                  <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                    <div class="symbol-label">
                                                      <img src="/assets/backend/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                                    </div>
                                                  </a>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::User details-->
                                                <div class="d-flex flex-column">
                                                  <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                                                  <span>brian@exchange.com</span>
                                                </div>
                                                <!--begin::User details-->
                                              </td>
                                              <!--end::User=-->
                                              <!--begin::Role=-->
                                              <td>Developer</td>
                                              <!--end::Role=-->
                                              <!--begin::Last login=-->
                                              <td>
                                                <div class="badge badge-light fw-bolder">2 days ago</div>
                                              </td>
                                              <!--end::Last login=-->
                                              <!--begin::Two step=-->
                                              <td>
                                                <div class="badge badge-light-success fw-bolder">Enabled</div>
                                              </td>
                                              <!--end::Two step=-->
                                              <!--begin::Joined-->
                                              <td>20 Dec 2022, 9:23 pm</td>
                                              <!--begin::Joined-->
                                              <!--begin::Action=-->
                                              <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                  <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                    </svg>
                                                  </span>
                                                  <!--end::Svg Icon--></a>
                                                  <!--begin::Menu-->
                                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                <!--end::Action=-->
                                              </tr>
                                              <!--end::Table row-->
                                              <!--begin::Table row-->
                                              <tr>
                                                <!--begin::Checkbox-->
                                                <td>
                                                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                  </div>
                                                </td>
                                                <!--end::Checkbox-->
                                                <!--begin::User=-->
                                                <td class="d-flex align-items-center">
                                                  <!--begin:: Avatar -->
                                                  <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                      <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                                    </a>
                                                  </div>
                                                  <!--end::Avatar-->
                                                  <!--begin::User details-->
                                                  <div class="d-flex flex-column">
                                                    <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                                                    <span>mik@pex.com</span>
                                                  </div>
                                                  <!--begin::User details-->
                                                </td>
                                                <!--end::User=-->
                                                <!--begin::Role=-->
                                                <td>Administrator</td>
                                                <!--end::Role=-->
                                                <!--begin::Last login=-->
                                                <td>
                                                  <div class="badge badge-light fw-bolder">5 days ago</div>
                                                </td>
                                                <!--end::Last login=-->
                                                <!--begin::Two step=-->
                                                <td></td>
                                                <!--end::Two step=-->
                                                <!--begin::Joined-->
                                                <td>21 Feb 2022, 9:23 pm</td>
                                                <!--begin::Joined-->
                                                <!--begin::Action=-->
                                                <td class="text-end">
                                                  <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                      </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                  <!--end::Action=-->
                                                </tr>
                                                <!--end::Table row-->
                                                <!--begin::Table row-->
                                                <tr>
                                                  <!--begin::Checkbox-->
                                                  <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                      <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                  </td>
                                                  <!--end::Checkbox-->
                                                  <!--begin::User=-->
                                                  <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                      <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                        <div class="symbol-label">
                                                          <img src="/assets/backend/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                                        </div>
                                                      </a>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                      <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                                                      <span>f.mit@kpmg.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                  </td>
                                                  <!--end::User=-->
                                                  <!--begin::Role=-->
                                                  <td>Trial</td>
                                                  <!--end::Role=-->
                                                  <!--begin::Last login=-->
                                                  <td>
                                                    <div class="badge badge-light fw-bolder">3 weeks ago</div>
                                                  </td>
                                                  <!--end::Last login=-->
                                                  <!--begin::Two step=-->
                                                  <td></td>
                                                  <!--end::Two step=-->
                                                  <!--begin::Joined-->
                                                  <td>25 Jul 2022, 8:43 pm</td>
                                                  <!--begin::Joined-->
                                                  <!--begin::Action=-->
                                                  <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                      <span class="svg-icon svg-icon-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                          <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                        </svg>
                                                      </span>
                                                      <!--end::Svg Icon--></a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                    <!--end::Action=-->
                                                  </tr>
                                                  <!--end::Table row-->
                                                  <!--begin::Table row-->
                                                  <tr>
                                                    <!--begin::Checkbox-->
                                                    <td>
                                                      <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                      </div>
                                                    </td>
                                                    <!--end::Checkbox-->
                                                    <!--begin::User=-->
                                                    <td class="d-flex align-items-center">
                                                      <!--begin:: Avatar -->
                                                      <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                          <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                                        </a>
                                                      </div>
                                                      <!--end::Avatar-->
                                                      <!--begin::User details-->
                                                      <div class="d-flex flex-column">
                                                        <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                                                        <span>olivia@corpmail.com</span>
                                                      </div>
                                                      <!--begin::User details-->
                                                    </td>
                                                    <!--end::User=-->
                                                    <!--begin::Role=-->
                                                    <td>Administrator</td>
                                                    <!--end::Role=-->
                                                    <!--begin::Last login=-->
                                                    <td>
                                                      <div class="badge badge-light fw-bolder">Yesterday</div>
                                                    </td>
                                                    <!--end::Last login=-->
                                                    <!--begin::Two step=-->
                                                    <td></td>
                                                    <!--end::Two step=-->
                                                    <!--begin::Joined-->
                                                    <td>15 Apr 2022, 2:40 pm</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td class="text-end">
                                                      <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                          </svg>
                                                        </span>
                                                        <!--end::Svg Icon--></a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                      <!--end::Action=-->
                                                    </tr>
                                                    <!--end::Table row-->
                                                    <!--begin::Table row-->
                                                    <tr>
                                                      <!--begin::Checkbox-->
                                                      <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                          <input class="form-check-input" type="checkbox" value="1" />
                                                        </div>
                                                      </td>
                                                      <!--end::Checkbox-->
                                                      <!--begin::User=-->
                                                      <td class="d-flex align-items-center">
                                                        <!--begin:: Avatar -->
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                          <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                            <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                                          </a>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::User details-->
                                                        <div class="d-flex flex-column">
                                                          <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                                                          <span>owen.neil@gmail.com</span>
                                                        </div>
                                                        <!--begin::User details-->
                                                      </td>
                                                      <!--end::User=-->
                                                      <!--begin::Role=-->
                                                      <td>Analyst</td>
                                                      <!--end::Role=-->
                                                      <!--begin::Last login=-->
                                                      <td>
                                                        <div class="badge badge-light fw-bolder">20 mins ago</div>
                                                      </td>
                                                      <!--end::Last login=-->
                                                      <!--begin::Two step=-->
                                                      <td>
                                                        <div class="badge badge-light-success fw-bolder">Enabled</div>
                                                      </td>
                                                      <!--end::Two step=-->
                                                      <!--begin::Joined-->
                                                      <td>21 Feb 2022, 6:43 am</td>
                                                      <!--begin::Joined-->
                                                      <!--begin::Action=-->
                                                      <td class="text-end">
                                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                          <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                              <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                            </svg>
                                                          </span>
                                                          <!--end::Svg Icon--></a>
                                                          <!--begin::Menu-->
                                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                        <!--end::Action=-->
                                                      </tr>
                                                      <!--end::Table row-->
                                                      <!--begin::Table row-->
                                                      <tr>
                                                        <!--begin::Checkbox-->
                                                        <td>
                                                          <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                          </div>
                                                        </td>
                                                        <!--end::Checkbox-->
                                                        <!--begin::User=-->
                                                        <td class="d-flex align-items-center">
                                                          <!--begin:: Avatar -->
                                                          <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                              <div class="symbol-label">
                                                                <img src="/assets/backend/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                                              </div>
                                                            </a>
                                                          </div>
                                                          <!--end::Avatar-->
                                                          <!--begin::User details-->
                                                          <div class="d-flex flex-column">
                                                            <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                                                            <span>dam@consilting.com</span>
                                                          </div>
                                                          <!--begin::User details-->
                                                        </td>
                                                        <!--end::User=-->
                                                        <!--begin::Role=-->
                                                        <td>Developer</td>
                                                        <!--end::Role=-->
                                                        <!--begin::Last login=-->
                                                        <td>
                                                          <div class="badge badge-light fw-bolder">3 days ago</div>
                                                        </td>
                                                        <!--end::Last login=-->
                                                        <!--begin::Two step=-->
                                                        <td></td>
                                                        <!--end::Two step=-->
                                                        <!--begin::Joined-->
                                                        <td>19 Aug 2022, 5:20 pm</td>
                                                        <!--begin::Joined-->
                                                        <!--begin::Action=-->
                                                        <td class="text-end">
                                                          <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                              </svg>
                                                            </span>
                                                            <!--end::Svg Icon--></a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                          <!--end::Action=-->
                                                        </tr>
                                                        <!--end::Table row-->
                                                        <!--begin::Table row-->
                                                        <tr>
                                                          <!--begin::Checkbox-->
                                                          <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                              <input class="form-check-input" type="checkbox" value="1" />
                                                            </div>
                                                          </td>
                                                          <!--end::Checkbox-->
                                                          <!--begin::User=-->
                                                          <td class="d-flex align-items-center">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                              <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                                              </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::User details-->
                                                            <div class="d-flex flex-column">
                                                              <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
                                                              <span>emma@intenso.com</span>
                                                            </div>
                                                            <!--begin::User details-->
                                                          </td>
                                                          <!--end::User=-->
                                                          <!--begin::Role=-->
                                                          <td>Support</td>
                                                          <!--end::Role=-->
                                                          <!--begin::Last login=-->
                                                          <td>
                                                            <div class="badge badge-light fw-bolder">5 hours ago</div>
                                                          </td>
                                                          <!--end::Last login=-->
                                                          <!--begin::Two step=-->
                                                          <td>
                                                            <div class="badge badge-light-success fw-bolder">Enabled</div>
                                                          </td>
                                                          <!--end::Two step=-->
                                                          <!--begin::Joined-->
                                                          <td>10 Nov 2022, 10:30 am</td>
                                                          <!--begin::Joined-->
                                                          <!--begin::Action=-->
                                                          <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                              <span class="svg-icon svg-icon-5 m-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                  <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                </svg>
                                                              </span>
                                                              <!--end::Svg Icon--></a>
                                                              <!--begin::Menu-->
                                                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                            <!--end::Action=-->
                                                          </tr>
                                                          <!--end::Table row-->
                                                          <!--begin::Table row-->
                                                          <tr>
                                                            <!--begin::Checkbox-->
                                                            <td>
                                                              <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                              </div>
                                                            </td>
                                                            <!--end::Checkbox-->
                                                            <!--begin::User=-->
                                                            <td class="d-flex align-items-center">
                                                              <!--begin:: Avatar -->
                                                              <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                  <div class="symbol-label">
                                                                    <img src="/assets/backend/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
                                                                  </div>
                                                                </a>
                                                              </div>
                                                              <!--end::Avatar-->
                                                              <!--begin::User details-->
                                                              <div class="d-flex flex-column">
                                                                <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                                                                <span>ana.cf@limtel.com</span>
                                                              </div>
                                                              <!--begin::User details-->
                                                            </td>
                                                            <!--end::User=-->
                                                            <!--begin::Role=-->
                                                            <td>Developer</td>
                                                            <!--end::Role=-->
                                                            <!--begin::Last login=-->
                                                            <td>
                                                              <div class="badge badge-light fw-bolder">2 days ago</div>
                                                            </td>
                                                            <!--end::Last login=-->
                                                            <!--begin::Two step=-->
                                                            <td>
                                                              <div class="badge badge-light-success fw-bolder">Enabled</div>
                                                            </td>
                                                            <!--end::Two step=-->
                                                            <!--begin::Joined-->
                                                            <td>20 Dec 2022, 5:30 pm</td>
                                                            <!--begin::Joined-->
                                                            <!--begin::Action=-->
                                                            <td class="text-end">
                                                              <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                <span class="svg-icon svg-icon-5 m-0">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                  </svg>
                                                                </span>
                                                                <!--end::Svg Icon--></a>
                                                                <!--begin::Menu-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                              <!--end::Action=-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                              <!--begin::Checkbox-->
                                                              <td>
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                  <input class="form-check-input" type="checkbox" value="1" />
                                                                </div>
                                                              </td>
                                                              <!--end::Checkbox-->
                                                              <!--begin::User=-->
                                                              <td class="d-flex align-items-center">
                                                                <!--begin:: Avatar -->
                                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                  <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                    <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                                                  </a>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::User details-->
                                                                <div class="d-flex flex-column">
                                                                  <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Robert Doe</a>
                                                                  <span>robert@benko.com</span>
                                                                </div>
                                                                <!--begin::User details-->
                                                              </td>
                                                              <!--end::User=-->
                                                              <!--begin::Role=-->
                                                              <td>Administrator</td>
                                                              <!--end::Role=-->
                                                              <!--begin::Last login=-->
                                                              <td>
                                                                <div class="badge badge-light fw-bolder">5 days ago</div>
                                                              </td>
                                                              <!--end::Last login=-->
                                                              <!--begin::Two step=-->
                                                              <td></td>
                                                              <!--end::Two step=-->
                                                              <!--begin::Joined-->
                                                              <td>20 Jun 2022, 2:40 pm</td>
                                                              <!--begin::Joined-->
                                                              <!--begin::Action=-->
                                                              <td class="text-end">
                                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                  <span class="svg-icon svg-icon-5 m-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                    </svg>
                                                                  </span>
                                                                  <!--end::Svg Icon--></a>
                                                                  <!--begin::Menu-->
                                                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                <!--end::Action=-->
                                                              </tr>
                                                              <!--end::Table row-->
                                                              <!--begin::Table row-->
                                                              <tr>
                                                                <!--begin::Checkbox-->
                                                                <td>
                                                                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                                  </div>
                                                                </td>
                                                                <!--end::Checkbox-->
                                                                <!--begin::User=-->
                                                                <td class="d-flex align-items-center">
                                                                  <!--begin:: Avatar -->
                                                                  <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                      <div class="symbol-label">
                                                                        <img src="/assets/backend/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                                                      </div>
                                                                    </a>
                                                                  </div>
                                                                  <!--end::Avatar-->
                                                                  <!--begin::User details-->
                                                                  <div class="d-flex flex-column">
                                                                    <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">John Miller</a>
                                                                    <span>miller@mapple.com</span>
                                                                  </div>
                                                                  <!--begin::User details-->
                                                                </td>
                                                                <!--end::User=-->
                                                                <!--begin::Role=-->
                                                                <td>Trial</td>
                                                                <!--end::Role=-->
                                                                <!--begin::Last login=-->
                                                                <td>
                                                                  <div class="badge badge-light fw-bolder">3 weeks ago</div>
                                                                </td>
                                                                <!--end::Last login=-->
                                                                <!--begin::Two step=-->
                                                                <td></td>
                                                                <!--end::Two step=-->
                                                                <!--begin::Joined-->
                                                                <td>24 Jun 2022, 9:23 pm</td>
                                                                <!--begin::Joined-->
                                                                <!--begin::Action=-->
                                                                <td class="text-end">
                                                                  <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                    <span class="svg-icon svg-icon-5 m-0">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                      </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon--></a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                  <!--end::Action=-->
                                                                </tr>
                                                                <!--end::Table row-->
                                                                <!--begin::Table row-->
                                                                <tr>
                                                                  <!--begin::Checkbox-->
                                                                  <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                      <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                  </td>
                                                                  <!--end::Checkbox-->
                                                                  <!--begin::User=-->
                                                                  <td class="d-flex align-items-center">
                                                                    <!--begin:: Avatar -->
                                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                      <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                        <div class="symbol-label fs-3 bg-light-success text-success">L</div>
                                                                      </a>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::User details-->
                                                                    <div class="d-flex flex-column">
                                                                      <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Lucy Kunic</a>
                                                                      <span>lucy.m@fentech.com</span>
                                                                    </div>
                                                                    <!--begin::User details-->
                                                                  </td>
                                                                  <!--end::User=-->
                                                                  <!--begin::Role=-->
                                                                  <td>Administrator</td>
                                                                  <!--end::Role=-->
                                                                  <!--begin::Last login=-->
                                                                  <td>
                                                                    <div class="badge badge-light fw-bolder">Yesterday</div>
                                                                  </td>
                                                                  <!--end::Last login=-->
                                                                  <!--begin::Two step=-->
                                                                  <td></td>
                                                                  <!--end::Two step=-->
                                                                  <!--begin::Joined-->
                                                                  <td>10 Mar 2022, 5:30 pm</td>
                                                                  <!--begin::Joined-->
                                                                  <!--begin::Action=-->
                                                                  <td class="text-end">
                                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                      <span class="svg-icon svg-icon-5 m-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                          <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                        </svg>
                                                                      </span>
                                                                      <!--end::Svg Icon--></a>
                                                                      <!--begin::Menu-->
                                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                    <!--end::Action=-->
                                                                  </tr>
                                                                  <!--end::Table row-->
                                                                  <!--begin::Table row-->
                                                                  <tr>
                                                                    <!--begin::Checkbox-->
                                                                    <td>
                                                                      <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                      </div>
                                                                    </td>
                                                                    <!--end::Checkbox-->
                                                                    <!--begin::User=-->
                                                                    <td class="d-flex align-items-center">
                                                                      <!--begin:: Avatar -->
                                                                      <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                          <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                                                        </a>
                                                                      </div>
                                                                      <!--end::Avatar-->
                                                                      <!--begin::User details-->
                                                                      <div class="d-flex flex-column">
                                                                        <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                                                                        <span>melody@altbox.com</span>
                                                                      </div>
                                                                      <!--begin::User details-->
                                                                    </td>
                                                                    <!--end::User=-->
                                                                    <!--begin::Role=-->
                                                                    <td>Analyst</td>
                                                                    <!--end::Role=-->
                                                                    <!--begin::Last login=-->
                                                                    <td>
                                                                      <div class="badge badge-light fw-bolder">20 mins ago</div>
                                                                    </td>
                                                                    <!--end::Last login=-->
                                                                    <!--begin::Two step=-->
                                                                    <td>
                                                                      <div class="badge badge-light-success fw-bolder">Enabled</div>
                                                                    </td>
                                                                    <!--end::Two step=-->
                                                                    <!--begin::Joined-->
                                                                    <td>20 Jun 2022, 6:05 pm</td>
                                                                    <!--begin::Joined-->
                                                                    <!--begin::Action=-->
                                                                    <td class="text-end">
                                                                      <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                          </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon--></a>
                                                                        <!--begin::Menu-->
                                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                      <!--end::Action=-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                      <!--begin::Checkbox-->
                                                                      <td>
                                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                          <input class="form-check-input" type="checkbox" value="1" />
                                                                        </div>
                                                                      </td>
                                                                      <!--end::Checkbox-->
                                                                      <!--begin::User=-->
                                                                      <td class="d-flex align-items-center">
                                                                        <!--begin:: Avatar -->
                                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                          <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                            <div class="symbol-label">
                                                                              <img src="/assets/backend/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
                                                                            </div>
                                                                          </a>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::User details-->
                                                                        <div class="d-flex flex-column">
                                                                          <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                                                                          <span>max@kt.com</span>
                                                                        </div>
                                                                        <!--begin::User details-->
                                                                      </td>
                                                                      <!--end::User=-->
                                                                      <!--begin::Role=-->
                                                                      <td>Developer</td>
                                                                      <!--end::Role=-->
                                                                      <!--begin::Last login=-->
                                                                      <td>
                                                                        <div class="badge badge-light fw-bolder">3 days ago</div>
                                                                      </td>
                                                                      <!--end::Last login=-->
                                                                      <!--begin::Two step=-->
                                                                      <td></td>
                                                                      <!--end::Two step=-->
                                                                      <!--begin::Joined-->
                                                                      <td>10 Mar 2022, 8:43 pm</td>
                                                                      <!--begin::Joined-->
                                                                      <!--begin::Action=-->
                                                                      <td class="text-end">
                                                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                          <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                              <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                            </svg>
                                                                          </span>
                                                                          <!--end::Svg Icon--></a>
                                                                          <!--begin::Menu-->
                                                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                        <!--end::Action=-->
                                                                      </tr>
                                                                      <!--end::Table row-->
                                                                      <!--begin::Table row-->
                                                                      <tr>
                                                                        <!--begin::Checkbox-->
                                                                        <td>
                                                                          <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                                          </div>
                                                                        </td>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::User=-->
                                                                        <td class="d-flex align-items-center">
                                                                          <!--begin:: Avatar -->
                                                                          <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                            <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                              <div class="symbol-label">
                                                                                <img src="/assets/backend/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
                                                                              </div>
                                                                            </a>
                                                                          </div>
                                                                          <!--end::Avatar-->
                                                                          <!--begin::User details-->
                                                                          <div class="d-flex flex-column">
                                                                            <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                                                                            <span>sean@dellito.com</span>
                                                                          </div>
                                                                          <!--begin::User details-->
                                                                        </td>
                                                                        <!--end::User=-->
                                                                        <!--begin::Role=-->
                                                                        <td>Support</td>
                                                                        <!--end::Role=-->
                                                                        <!--begin::Last login=-->
                                                                        <td>
                                                                          <div class="badge badge-light fw-bolder">5 hours ago</div>
                                                                        </td>
                                                                        <!--end::Last login=-->
                                                                        <!--begin::Two step=-->
                                                                        <td>
                                                                          <div class="badge badge-light-success fw-bolder">Enabled</div>
                                                                        </td>
                                                                        <!--end::Two step=-->
                                                                        <!--begin::Joined-->
                                                                        <td>20 Dec 2022, 10:10 pm</td>
                                                                        <!--begin::Joined-->
                                                                        <!--begin::Action=-->
                                                                        <td class="text-end">
                                                                          <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                              </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon--></a>
                                                                            <!--begin::Menu-->
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                          <!--end::Action=-->
                                                                        </tr>
                                                                        <!--end::Table row-->
                                                                        <!--begin::Table row-->
                                                                        <tr>
                                                                          <!--begin::Checkbox-->
                                                                          <td>
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                              <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                          </td>
                                                                          <!--end::Checkbox-->
                                                                          <!--begin::User=-->
                                                                          <td class="d-flex align-items-center">
                                                                            <!--begin:: Avatar -->
                                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                              <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                                <div class="symbol-label">
                                                                                  <img src="/assets/backend/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
                                                                                </div>
                                                                              </a>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::User details-->
                                                                            <div class="d-flex flex-column">
                                                                              <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                                                                              <span>brian@exchange.com</span>
                                                                            </div>
                                                                            <!--begin::User details-->
                                                                          </td>
                                                                          <!--end::User=-->
                                                                          <!--begin::Role=-->
                                                                          <td>Developer</td>
                                                                          <!--end::Role=-->
                                                                          <!--begin::Last login=-->
                                                                          <td>
                                                                            <div class="badge badge-light fw-bolder">2 days ago</div>
                                                                          </td>
                                                                          <!--end::Last login=-->
                                                                          <!--begin::Two step=-->
                                                                          <td>
                                                                            <div class="badge badge-light-success fw-bolder">Enabled</div>
                                                                          </td>
                                                                          <!--end::Two step=-->
                                                                          <!--begin::Joined-->
                                                                          <td>20 Dec 2022, 10:10 pm</td>
                                                                          <!--begin::Joined-->
                                                                          <!--begin::Action=-->
                                                                          <td class="text-end">
                                                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                              <span class="svg-icon svg-icon-5 m-0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                  <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                                </svg>
                                                                              </span>
                                                                              <!--end::Svg Icon--></a>
                                                                              <!--begin::Menu-->
                                                                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                            <!--end::Action=-->
                                                                          </tr>
                                                                          <!--end::Table row-->
                                                                          <!--begin::Table row-->
                                                                          <tr>
                                                                            <!--begin::Checkbox-->
                                                                            <td>
                                                                              <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                              </div>
                                                                            </td>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::User=-->
                                                                            <td class="d-flex align-items-center">
                                                                              <!--begin:: Avatar -->
                                                                              <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                                <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                                  <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                                                                </a>
                                                                              </div>
                                                                              <!--end::Avatar-->
                                                                              <!--begin::User details-->
                                                                              <div class="d-flex flex-column">
                                                                                <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                                                                                <span>mik@pex.com</span>
                                                                              </div>
                                                                              <!--begin::User details-->
                                                                            </td>
                                                                            <!--end::User=-->
                                                                            <!--begin::Role=-->
                                                                            <td>Administrator</td>
                                                                            <!--end::Role=-->
                                                                            <!--begin::Last login=-->
                                                                            <td>
                                                                              <div class="badge badge-light fw-bolder">5 days ago</div>
                                                                            </td>
                                                                            <!--end::Last login=-->
                                                                            <!--begin::Two step=-->
                                                                            <td></td>
                                                                            <!--end::Two step=-->
                                                                            <!--begin::Joined-->
                                                                            <td>19 Aug 2022, 10:30 am</td>
                                                                            <!--begin::Joined-->
                                                                            <!--begin::Action=-->
                                                                            <td class="text-end">
                                                                              <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                                <span class="svg-icon svg-icon-5 m-0">
                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                                  </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon--></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                              <!--end::Action=-->
                                                                            </tr>
                                                                            <!--end::Table row-->
                                                                            <!--begin::Table row-->
                                                                            <tr>
                                                                              <!--begin::Checkbox-->
                                                                              <td>
                                                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                  <input class="form-check-input" type="checkbox" value="1" />
                                                                                </div>
                                                                              </td>
                                                                              <!--end::Checkbox-->
                                                                              <!--begin::User=-->
                                                                              <td class="d-flex align-items-center">
                                                                                <!--begin:: Avatar -->
                                                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                                  <a href="../../demo1/dist/apps/user-management/users/view.html">
                                                                                    <div class="symbol-label">
                                                                                      <img src="/assets/backend/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
                                                                                    </div>
                                                                                  </a>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::User details-->
                                                                                <div class="d-flex flex-column">
                                                                                  <a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                                                                                  <span>f.mit@kpmg.com</span>
                                                                                </div>
                                                                                <!--begin::User details-->
                                                                              </td>
                                                                              <!--end::User=-->
                                                                              <!--begin::Role=-->
                                                                              <td>Trial</td>
                                                                              <!--end::Role=-->
                                                                              <!--begin::Last login=-->
                                                                              <td>
                                                                                <div class="badge badge-light fw-bolder">3 weeks ago</div>
                                                                              </td>
                                                                              <!--end::Last login=-->
                                                                              <!--begin::Two step=-->
                                                                              <td></td>
                                                                              <!--end::Two step=-->
                                                                              <!--begin::Joined-->
                                                                              <td>25 Oct 2022, 6:05 pm</td>
                                                                              <!--begin::Joined-->
                                                                              <!--begin::Action=-->
                                                                              <td class="text-end">
                                                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                                  <span class="svg-icon svg-icon-5 m-0">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                                                                    </svg>
                                                                                  </span>
                                                                                  <!--end::Svg Icon--></a>
                                                                                  <!--begin::Menu-->
                                                                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
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
                                                                                </td>
                                                                              </tr>
                                                                            </tbody>
                                                                          </table>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                @include('pages.backend.includes.footer')
                                                              </div>
                                                            </div>
                                                          </div>

                                                          @include('pages.backend.includes.drawer-activity')
                                                          @include('pages.backend.includes.drawer-chat')
                                                          @include('pages.backend.includes.drawer-demo')
                                                          @include('pages.backend.includes.drawer-help')

                                                          <div class="engage-toolbar d-flex position-fixed px-5 fw-bolder zindex-2 top-50 end-0 transform-90 mt-20 gap-2">
                                                            <button id="kt_engage_demos_toggle" class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0" title="Check out 22 more demos" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                                                              <span id="kt_engage_demos_label">Demos</span>
                                                            </button>
                                                            <button id="kt_help_toggle" class="engage-help-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm px-5 rounded-top-0" title="Learn &amp; Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">Help</button>
                                                            <a href="https://1.envato.market/EA4JP" target="_blank" class="engage-purchase-link btn btn-color-gray-700 bg-body btn-active-color-gray-900' btn-flex h-35px px-5 shadow-sm rounded-top-0">Buy now</a>
                                                          </div>

                                                          <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                                                            <span class="svg-icon">
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                              </svg>
                                                            </span>
                                                          </div>

                                                          @include('pages.backend.includes.js')

                                                        </body>
                                                        </html>
