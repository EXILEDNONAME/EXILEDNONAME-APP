<script>var hostUrl = "/assets/backend/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="/assets/backend/plugins/global/plugins.bundle.js"></script>
<script src="/assets/backend/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="/assets/backend/js/widgets.bundle.js"></script>
<script src="/assets/backend/js/custom/widgets.js"></script>
<script src="/assets/backend/js/custom/apps/chat/chat.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/create-app.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/offer-a-deal/type.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/offer-a-deal/details.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/offer-a-deal/main.js"></script>
<script src="/assets/backend/js/custom/utilities/modals/users-search.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
																																																												$(document).ready(function () {
																																																													$('#example').DataTable();
																																																												});
																																																												</script>

@stack('js')
