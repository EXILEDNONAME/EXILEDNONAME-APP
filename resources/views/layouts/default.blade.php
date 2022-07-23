<!DOCTYPE html>
<html lang="en">
@include('pages.backend.includes.head')
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
  @include('pages.backend.includes.mobile-header')
  <div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
      @include('pages.backend.includes.sidebar-left')
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
          @include('pages.backend.includes.header')
          <div class="kt-header__topbar">
            @include('pages.backend.includes.topbar-search')
            @include('pages.backend.includes.topbar-notification')
            @include('pages.backend.includes.topbar-quickaction')
            @include('pages.backend.includes.topbar-cart')
            @include('pages.backend.includes.topbar-quickpanel')
            @include('pages.backend.includes.topbar-language')
            @include('pages.backend.includes.topbar-user')
          </div>
        </div>

        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
          @include('pages.backend.includes.subheader')
          <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            Content goes here...
          </div>
        </div>

        @include('pages.backend.includes.footer')

      </div>
    </div>
  </div>

  @include('pages.backend.includes.scroll-top')
  @include('pages.backend.includes.sticky-toolbar')
  @include('pages.backend.includes.drawer-demopanel')
  @include('pages.backend.includes.drawer-chat')
  @include('pages.backend.includes.js')

</body>
</html>
