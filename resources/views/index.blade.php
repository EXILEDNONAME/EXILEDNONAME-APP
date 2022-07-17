<!DOCTYPE html>
<html lang="en">
@include('pages.backend.includes.head')
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
  <div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
      @include('pages.backend.includes.menu.sidebar')
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        @include('pages.backend.includes.header')
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          @include('pages.backend.includes.toolbar')
          <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
              <div class="card mb-5 mb-lg-10">
                <div class="card-header">
                  <div class="card-title">
                    <h3>Login Sessions</h3>
                  </div>
                  <div class="card-toolbar">
                    <div class="my-1 me-4">
                      <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2" data-placeholder="Select Hours" data-hide-search="true">
                        <option value="1" selected="selected">1 Hours</option>
                        <option value="2">6 Hours</option>
                        <option value="3">12 Hours</option>
                        <option value="4">24 Hours</option>
                      </select>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary my-1">View All</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <!--  -->
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('pages.backend.includes.footer')
      </div>
    </div>
  </div>

  @include('pages.backend.includes.drawer.activities')
  @include('pages.backend.includes.drawer.chat')
  @include('pages.backend.includes.drawer.sticky-demo')
  @include('pages.backend.includes.drawer.sticky-help')
  @include('pages.backend.includes.sticky')
  @include('pages.backend.includes.scroll-top')
  @include('pages.backend.includes.js')

</body>
</html>
