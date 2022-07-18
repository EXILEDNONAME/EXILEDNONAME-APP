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
                <div class="card-body p-0">
                  @stack('content')
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
