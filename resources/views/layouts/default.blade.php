<!DOCTYPE html>
<html lang="en">
@include('pages.backend.includes.head')
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <a href="index.html"><img alt="Logo" src="/assets/backend/media/logos/logo-light.png"/></a>
    @include('pages.backend.includes.mobile-toolbar')
  </div>

  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
      @include('pages.backend.includes.sidebar')
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div id="kt_header" class="header header-fixed">
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
              <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
                <ul class="menu-nav ">
                  <li class="menu-item  menu-item-submenu"  data-menu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link menu-toggle">
                      <span class="menu-text"> ONLINE </span>
                      <i class="menu-arrow"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="topbar">
              @include('pages.backend.includes.topbar-right-search')
              @include('pages.backend.includes.topbar-right-notification')
              @include('pages.backend.includes.topbar-right-quickaction')
              @include('pages.backend.includes.topbar-right-cart')
              @include('pages.backend.includes.topbar-right-quickpanel')
              @include('pages.backend.includes.topbar-right-chat')
              @include('pages.backend.includes.topbar-right-language')
              @include('pages.backend.includes.topbar-right-user')
            </div>
          </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          @include('pages.backend.includes.subheader')
          <div class="d-flex flex-column-fluid">
            <div class="container">

              <div class="row">
                <div class="col-xl-12">
                  <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
                    <div class="card-header">
                      <div class="card-title">
                        <h3 class="card-label">Card Tools</h3>
                      </div>
                      <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload">
                          <i class="fas fa-sync-alt" data-toggle="tooltip" title="" data-original-title="Reload"></i>
                        </a>
                        <div class="dropdown dropdown-inline" bis_skin_checked="1">
                          <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-download" data-toggle="tooltip" title="" data-original-title="Export"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" bis_skin_checked="1">
                            <ul class="navi navi-hover py-5">
                              <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Copy as Text">
                                <a href="javascript:void(0);" id="jm_official_export_copy" class="navi-link">
                                  <i class="navi-icon fa fa-copy"></i> Copy
                                </a>
                              </li>
                              <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Export to Excel">
                                <a href="javascript:void(0);" id="jm_official_export_excel" class="navi-link">
                                  <i class="navi-icon fa fa-file-excel"></i> Excel
                                </a>
                              </li>
                              <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Export to PDF">
                                <a href="javascript:void(0);" id="jm_official_export_pdf" class="navi-link">
                                  <i class="navi-icon fa fa-file-pdf"></i> PDF
                                </a>
                              </li>
                              <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Export to CSV">
                                <a href="javascript:void(0);" id="jm_official_export_csv" class="navi-link">
                                  <i class="navi-icon fa fa-file"></i> CSV
                                </a>
                              </li>
                              <li class="navi-item" data-toggle="tooltip" title="" data-original-title="Print">
                                <a href="javascript:void(0);" id="jm_official_export_print" class="navi-link">
                                  <i class="navi-icon fa fa-print"></i> Print
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle">
                          <i class="fas fa-caret-down"></i>
                        </a>
                      </div>
                    </div>
                    <div class="card-body" kt-hidden-height="423" style="">
                      <div class="table-responsive">
                        <table width="100%" class="table table-row-bordered table-hover table-checkable" id="exilednoname">
                          <thead>
                            <tr>
                              <th></th>
                              <th> No. </th>
                              <th> Name </th>
                              <th> Description </th>
                              <th> Active </th>
                              <th></th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xl-4">
                  <!-- <div class="card card-custom  card-stretch gutter-b"> -->
                  <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
                    <div class="card-header">
                      <div class="card-title">
                        <h3 class="card-label">Card Tools</h3>
                      </div>
                      <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Toggle Card">
                          <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reload Card">
                          <i class="ki ki-reload icon-nm"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary" data-card-tool="remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove Card">
                          <i class="ki ki-close icon-nm"></i>
                        </a>
                      </div>
                    </div>

                    <div class="card-body pt-0">
                      <!--  -->
                    </div>
                  </div>
                </div>

                <div class="col-xl-8">
                  <!-- <div class="card card-custom  card-stretch gutter-b"> -->
                  <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
                    <div class="card-header">
                      <div class="card-title">
                        <h3 class="card-label">Card Tools</h3>
                      </div>
                      <div class="card-toolbar">
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Toggle Card">
                          <i class="ki ki-arrow-down icon-nm"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reload Card">
                          <i class="ki ki-reload icon-nm"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary" data-card-tool="remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove Card">
                          <i class="ki ki-close icon-nm"></i>
                        </a>
                      </div>
                    </div>

                    <div class="card-body pt-0">
                      <!--  -->
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

        @include('pages.backend.includes.footer')
      </div>
    </div>
  </div>

  @include('pages.backend.includes.scroll-top')
  @include('pages.backend.includes.js')

</body>
</html>
