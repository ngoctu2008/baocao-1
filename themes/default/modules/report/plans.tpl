<!-- BEGIN: main -->

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->
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
                <div class="col-xs-8 col-sm-5 col-md-4">
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="{LANG.search_submit}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 style="text-transform: uppercase;"> {LANG.plans} </h1>
        <div> {LANG.sale_name}: <strong> {SALE_NAME} </strong> ({SALE_CODE}) </div>
    </div>
    <div class="panel-body">
        <form action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
            <div class="table-responsive">
                <table class="display responsive nowrap hover" id="table_view" style="width:100%">
                    <thead>
                        <tr>
                            <th>{LANG.date}</th>
                            <th>{LANG.sale_name}</th>
                            <th>{LANG.namecard}</th>
                            <th>{LANG.point_link}</th>
                            <th>{LANG.online}</th>
                            <th>{LANG.ads}</th>
                            <th>{LANG.ctv}</th>
                            <th>{LANG.cskh}</th>
                            <th>{LANG.telesale}</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <!-- BEGIN: generate_page -->
                    <tfoot>
                        <tr>
                            <td class="text-center" colspan="11">{NV_GENERATE_PAGE}</td>
                        </tr>
                    </tfoot>
                    <!-- END: generate_page -->
                    <tbody>
                        <!-- BEGIN: loop -->
                        <tr class="text-center">
                            <td> {VIEW.date_show} </td>
                            <td> {VIEW.sale_name} </td>
                            <td> {VIEW.namecard} </td>
                            <td> {VIEW.point_link} </td>
                            <td> {VIEW.online} </td>
                            <td> {VIEW.ads} </td>
                            <td> {VIEW.ctv} </td>
                            <td> {VIEW.cskh} </td>
                            <td> {VIEW.telesale} </td>
                            <td class="text-center"><i class="fa fa-edit fa-lg">&nbsp;</i> <a href="{VIEW.link_edit}#edit">{LANG.edit}</a> - <em class="fa fa-trash-o fa-lg">&nbsp;</em> <a href="{VIEW.link_delete}" onclick="return confirm(nv_is_del_confirm[0]);">{LANG.delete}</a></td>

                        </tr>
                        <!-- END: loop -->
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <!-- END: view -->

    <div class="panel-body">
        <form class="form-horizontal" action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post" autocomplete="off">
            <input type="hidden" name="id" value="{ROW.id}" />
            <input type="hidden" name="code" value="{SALE_CODE}" />

            <table class="table table-striped table-bordered">
                <tbody>
                    <tr class="rows">
                        <td class="field">{LANG.date}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-12 col-md-14 col-lg-10">
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="date" name="date" value="{ROW.date}" pattern="^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{1,4}$" readonly/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" id="date-btn">
                                                <em class="fa fa-calendar fa-fix"> </em>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- BEGIN: INPUT -->
                    <tr class="rows">
                        <td class="field">{field_title}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-12 col-md-14">
                                    <input class="form-control" type="text" name="{field_name}" value="{field_value}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{field_title}" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- END: INPUT -->
                </tbody>
            </table>
            <div class="form-group" style="text-align: center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" /></div>
        </form>
    </div>
</div>

<link type="text/css" href="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
<link type="text/css" href="{NV_STATIC_URL}themes/{TEMPLATE}/css/jquery.dataTables.min.css" rel="stylesheet" />
<link type="text/css" href="{NV_STATIC_URL}themes/{TEMPLATE}/css/responsive.dataTables.min.css" rel="stylesheet" />
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.js"></script>


<script type="text/javascript" src="{NV_STATIC_URL}themes/{TEMPLATE}/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{NV_STATIC_URL}themes/{TEMPLATE}/js/dataTables.responsive.min.js"></script>
<!-- <script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/language/jquery.ui.datepicker-{NV_LANG_INTERFACE}.js"></script> -->

<script type="text/javascript">
//<![CDATA[
    $("#date, #q_date_to, #q_date_from").datepicker({
        dateFormat : "dd/mm/yy",
        changeMonth : true,
        changeYear : true,
        showOtherMonths : true,
    });

//]]>
$(document).ready(function() {
    $('#table_view').DataTable({
        order: [[0, 'desc']],
        scrollY:        400,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true
    });
} );
</script>
<!-- END: main -->
