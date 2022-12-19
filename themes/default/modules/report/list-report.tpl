<!-- BEGIN: main -->
<!-- BEGIN: view -->
<div class="alert alert-info text-center">
    <h1 style="text-transform: uppercase;"> {LANG.table_report} </h1>
    <strong>Ngày {date}</strong>
</div>

<!-- //Search form -->
<div class="well">
    <form action="{NV_BASE_SITEURL}index.php" method="get">
        <input type="hidden" name="{NV_LANG_VARIABLE}"  value="{NV_LANG_DATA}" />
        <input type="hidden" name="{NV_NAME_VARIABLE}"  value="{MODULE_NAME}" />
        <input type="hidden" name="{NV_OP_VARIABLE}"  value="{OP}" />
        <div class="row">
            <div class="col-xs-24 col-sm-24 col-md-24">
                <div class="form-group">
                    <div class="col-xs-9 col-sm-5 col-md-4">
                        <div class="input-group">
                            <input class="form-control" readonly type="text" value="{q_date_from_show}" name="q_date_from" id="q_date_from" maxlength="255" placeholder="{q_date_from_show}" pattern="^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{1,4}$" required="required" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="q_date_from-btn">
                                    <em class="fa fa-calendar fa-fix"> </em>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-9 col-sm-5 col-md-4">
                        <div class="input-group">
                            <input class="form-control" readonly type="text" value="{q_date_to_show}" name="q_date_to" id="q_date_to" maxlength="255" placeholder="{q_date_to_show}" pattern="^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{1,4}$" required="required" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="q_date_to-btn">
                                    <em class="fa fa-calendar fa-fix"> </em>
                                </button>
                            </span>
                        </div>
                    </div>
                    <!-- BEGIN: search_type -->
                    <div class="col-xs-6 col-sm-5 col-md-4">
                        <select class="form-control" name="q_type">
                            <option value="0"> Danh sách DSA </option>
                            <option value="1"> Danh sách DSS </option>
                        </select>
                    </div>
                    <!-- END: search_type -->

                    <div class="col-xs-24 col-sm-10 col-md-6">
                        <input class="btn btn-primary" type="submit" value="{LANG.search_submit}" />
                    </div>
                    <div class="pull-right" style="margin-top:5px;">
                        <!-- BEGIN: extract_button -->
                        <button class="btn btn-primary btn-xs" name="export" id="export">Extract to excel</button>
                        <!-- END: extract_button -->
                        <!-- BEGIN: report_button -->
                        <div class="text-center"> <a href="{link_add_report}" class="btn btn-success"> <i class="fa fa-plus-circle" aria-hidden="true"> Add Report </i> </a> </div>
                        <!-- END: report_button -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


    <div class="table-responsive">
        <table class="table table-hover table_responsive table-bordered">
            <thead>
                <tr class="label_table">
                  <th rowspan="2">{LANG.date}</th>
                  <th rowspan="2">{LANG.sale_name}</th>
                    <!-- BEGIN: label_table_lv1 -->
                    <th colspan="{colspan}">{label_lv1}</th>
                    <!-- END: label_table_lv1 -->
                    <th rowspan="2">{LANG.action_note}</th>
                </tr>
                <tr>
                    <!-- BEGIN: label_table_lv2 -->
                    <th class="label_table_lv2">{label_lv2}</th>
                    <!-- END: label_table_lv2 -->
                </tr>
            </thead>
            <tfoot>
                <tr class="row_total">
                    <th colspan="2" class="total text-center">{LANG.total}</th>
                    <!-- BEGIN: TOTAL -->
                    <td data-header="{KEY}" class="total text-center"> {TOTAL} </td>
                    <!-- END: TOTAL -->
                    <th> </th>
                </tr>
                <!-- BEGIN: generate_page -->
                <tr>
                    <td class="text-center" colspan="28">{NV_GENERATE_PAGE}</td>
                </tr>
                <!-- END: generate_page -->
            </tfoot>
            <tbody>
                <!-- BEGIN: loop -->
                <tr>
                    <td data-header="{LANG.date}"> {VIEW.date}
                        <!-- BEGIN: edit_allow -->
                        <a href="{link_edit}#edit"><i class="fa fa-edit fa-lg">&nbsp;</i></a>
                        <!-- END: edit_allow -->
                    </td>
                    <td data-header="{LANG.sale_name}"> {VIEW.sale_name} </td>
                    <!-- BEGIN: column -->
                    <td data-header="{KEY}"> {VALUE} </td>
                    <!-- END: column -->
                    <td data-header="Action Note">
                        <!-- BEGIN: add_action -->
                        <a href="{link_add_action}" class="btn-warning btn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
                        <!-- END: add_action -->
                        <!-- BEGIN: view_action -->
                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="Action note" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Action Note</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    {action_note}
                                </div>
                            </div>
                          </div>
                        </div>
                        <a href="{link_add_action}" class="btn-info btn" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-eye" aria-hidden="true"></i> View </a>
                        <!-- END: view_action -->
                    </td>
                </tr>
                <!-- END: loop -->
            </tbody>
        </table>
    </div>

<!-- END: view -->
<link type="text/css" href="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<link type="text/css" href="{NV_STATIC_URL}themes/{TEMPLATE}/css/jquery.dataTables.min.css" rel="stylesheet" />
<link type="text/css" href="{NV_STATIC_URL}themes/{TEMPLATE}/css/responsive.dataTables.min.css" rel="stylesheet" />
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.js"></script>


<script type="text/javascript" src="{NV_STATIC_URL}themes/{TEMPLATE}/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{NV_STATIC_URL}themes/{TEMPLATE}/js/dataTables.responsive.min.js"></script>


<script type="text/javascript">
//<![CDATA[
    $("#q_date_from,#q_date_to").datepicker({
        dateFormat : "dd/mm/yy",
        changeMonth : true,
        changeYear : true,
        showOtherMonths : true,
    });
    $('#q_date_from-btn').click(function() {
       $("#q_date_from").datepicker('show');
   });
   $('#q_date_to-btn').click(function() {
      $("#q_date_to").datepicker('show');
  });
//]]>

$(document).ready(function() {
    $('#table_view2').DataTable({
        searching: false,
        ordering: false,
        language: {
            decimal: ',',
            thousands: '.',
        },
        //fixedColumns
        // scrollY:        300,
        // scrollX:        true,
        // scrollCollapse: true,
        paging:         false,
        fixedColumns:   true,

    });
} );

</script>

<!-- END: main -->
