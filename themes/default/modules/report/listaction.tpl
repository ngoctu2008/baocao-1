<!-- BEGIN: main -->
<!-- BEGIN: view -->
<div class="alert alert-info text-center">
    <h1 style="text-transform: uppercase;"> {LANG.listaction} </h1>
    <!-- BEGIN: add_button -->
    <a href="{link_add}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới </a>
    <!-- END: add_button -->
</div>

<div class="well">


<form action="{NV_BASE_SITEURL}index.php" method="get">
    <input type="hidden" name="{NV_LANG_VARIABLE}"  value="{NV_LANG_DATA}" />
    <input type="hidden" name="{NV_NAME_VARIABLE}"  value="{MODULE_NAME}" />
    <input type="hidden" name="{NV_OP_VARIABLE}"  value="{OP}" />
    <div class="row" style="margin-top:8px;">
        <div class="col-xs-24 col-md-24">
            <div class="form-group">
                <label class="col-xs-8 col-sm-5 col-md-8 control-label"><strong>{LANG.q_date}</strong></label>
                <div class="col-xs-10 col-sm-10 col-md-8">
                    <div class="input-group">
                        <input class="form-control" readonly type="text" value="{q_date_show}" name="q_date" id="q_date" maxlength="255" placeholder="{q_date_show}" pattern="^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{1,4}$" required="required" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="q_date-btn">
                                <em class="fa fa-calendar fa-fix"> </em>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-6">
                    <input class="btn btn-primary" type="submit" value="{LANG.search_submit}" />
                </div>
            </div>
        </div>

    </div>
</form>
</div>
<form action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <div class="table-responsive">
        <table class="table table-hover table_responsive">
            <thead>
                <tr>
                    <th>{LANG.number}</th>
                    <th>{LANG.date}</th>
                    <th>{LANG.sale_name}</th>
                    <th>{LANG.note}</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <!-- BEGIN: generate_page -->
            <tfoot>
                <tr>
                    <td class="text-center" colspan="6">{NV_GENERATE_PAGE}</td>
                </tr>
            </tfoot>
            <!-- END: generate_page -->
            <tbody>
                <!-- BEGIN: loop -->
                <tr>
                    <td data-header="STT" class="text-center"> {VIEW.number} </td>
                    <td data-header="{LANG.date}" class="text-center"> {VIEW.date} </td>
                    <td data-header="{LANG.sale_name}"> {VIEW.sale} </td>
                    <td data-header="{LANG.note}"> {VIEW.note} </td>
                    <td data-header="{LANG.edit}" class="text-center">
                        <i class="fa fa-edit fa-lg">&nbsp;</i> <a href="{VIEW.link_edit}#edit">{LANG.edit}</a>
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
    $("#q_date").datepicker({
        dateFormat : "dd/mm/yy",
        changeMonth : true,
        changeYear : true,
        showOtherMonths : true,
    });

//]]>
</script>

<!-- END: main -->
