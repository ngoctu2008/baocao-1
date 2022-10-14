<!-- BEGIN: main -->
<!-- BEGIN: view -->
<div class="well">
<form action="{NV_BASE_SITEURL}index.php" method="get">
    <input type="hidden" name="{NV_LANG_VARIABLE}"  value="{NV_LANG_DATA}" />
    <input type="hidden" name="{NV_NAME_VARIABLE}"  value="{MODULE_NAME}" />
    <input type="hidden" name="{NV_OP_VARIABLE}"  value="{OP}" />
    <div class="row">
        <div class="col-xs-24 col-sm-24 col-md-24">
            <div class="form-group">
                <div class="col-xs-8 col-sm-5 col-md-4">
                    <div class="input-group">
                        <input class="form-control" readonly type="text" value="{q_date_from_show}" name="q_date_from" id="q_date_from" maxlength="255" placeholder="{q_date_from_show}" pattern="^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{1,4}$" required="required" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="q_date_from-btn">
                                <em class="fa fa-calendar fa-fix"> </em>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-5 col-md-4">
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
                <div class="col-xs-8 col-sm-5 col-md-4">
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
<div class="panel-heading">
    <h1> BẢNG THỐNG KÊ DOANH SỐ BÁN HÀNG </h1>
    <strong>Ngày {date}</strong>
</div>

<form action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <div class="table-responsive" style="text-align:center;">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="label_table">
                    <th class="w100" rowspan="2">{LANG.number}</th>
                    <th rowspan="2">{LANG.date}</th>
                    <th rowspan="2">{LANG.sale_name}</th>
                    <th colspan="2">{LANG.pl}</th>
                    <th colspan="2">{LANG.dn}</th>
                    <th colspan="3">{LANG.xstu}</th>
                    <th colspan="2">{LANG.ipp}</th>
                    <th colspan="2">{LANG.banca}</th>
                    <th colspan="2">{LANG.ubank}</th>
                    <th colspan="3">{LANG.courier}</th>
                    <th colspan="2">{LANG.credit}</th>
                    <th rowspan="2">{LANG.action_note}</th>
                </tr>
                <tr>
                    <th class="label_table_lv2">{LANG.app}</th>
                    <th class="label_table_lv2">{LANG.loan}</th>
                    <th class="label_table_lv2">{LANG.app}</th>
                    <th class="label_table_lv2">{LANG.loan}</th>
                    <th class="label_table_lv2">{LANG.check}</th>
                    <th class="label_table_lv2">{LANG.app}</th>
                    <th class="label_table_lv2">{LANG.loan}</th>
                    <th class="label_table_lv2">{LANG.app}</th>
                    <th class="label_table_lv2">{LANG.loan}</th>
                    <th class="label_table_lv2">{LANG.hd}</th>
                    <th class="label_table_lv2">{LANG.sale}</th>
                    <th class="label_table_lv2">{LANG.app}</th>
                    <th class="label_table_lv2">{LANG.loan}</th>
                    <th class="label_table_lv2">{LANG.lead}</th>
                    <th class="label_table_lv2">{LANG.app}</th>
                    <th class="label_table_lv2">{LANG.loan}</th>
                    <th class="label_table_lv2">{LANG.app}</th>
                    <th class="label_table_lv2">{LANG.loan}</th>
                </tr>
            </thead>
            <!-- BEGIN: generate_page -->
            <tfoot>
                <tr>
                    <td class="text-center" colspan="22">{NV_GENERATE_PAGE}</td>
                </tr>
            </tfoot>
            <!-- END: generate_page -->
            <tbody>
                <tr>
                    <td colspan="3" class="total">{LANG.total}</td>
                    <!-- BEGIN: TOTAL -->
                    <td class="total"> {TOTAL} </td>
                    <!-- END: TOTAL -->
                </tr>
                <!-- BEGIN: loop -->
                <tr>
                    <td class="text-center"> {VIEW.number} <a href="{VIEW.link_edit}#edit"><i class="fa fa-edit fa-lg">&nbsp;</i></a>
                    </td>
                    <td> {VIEW.date} </td>
                    <td> {VIEW.sale_name} </td>
                    <td> {VIEW.pl_app} </td>
                    <td> {VIEW.pl_loan} </td>
                    <td> {VIEW.dn_app} </td>
                    <td> {VIEW.dn_loan} </td>
                    <td> {VIEW.xstu_check} </td>
                    <td> {VIEW.xstu_app} </td>
                    <td> {VIEW.xstu_loan} </td>
                    <td> {VIEW.ipp_app} </td>
                    <td> {VIEW.ipp_loan} </td>
                    <td> {VIEW.banca_hd} </td>
                    <td> {VIEW.banca_sale} </td>
                    <td> {VIEW.ubank_app} </td>
                    <td> {VIEW.ubank_loan} </td>
                    <td> {VIEW.courier_lead} </td>
                    <td> {VIEW.courier_app} </td>
                    <td> {VIEW.courier_loan} </td>
                    <td> {VIEW.credit_app} </td>
                    <td> {VIEW.credit_loan} </td>
                    <td class="text-center">
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
</form>
<!-- END: view -->
<link type="text/css" href="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/language/jquery.ui.datepicker-{NV_LANG_INTERFACE}.js"></script>
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
</script>

<!-- END: main -->
