<!-- BEGIN: main -->
<link type="text/css" href="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 style="text-transform: uppercase;"> {LANG.title_report} </h1>
        <div> {LANG.sale_name}: <strong> {SALE_NAME} </strong> ({SALE_CODE}) </div>
        <div> {LANG.date}: {ROW.date}</div>
    </div>

    <div class="panel-body">
        <form class="form-horizontal" action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post" autocomplete="off">
            <input type="hidden" name="id" value="{ROW.id}" />
            <input type="hidden" name="code" value="{SALE_CODE}" />
            <input type="hidden" name="date" value="{ROW.date}" />

            <!-- BEGIN: select_date -->
                <div class="form-group">
                    <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.date}</strong> <span class="red">(*)</span></label>
                    <div class="col-sm-19 col-md-20">
                        <div class="input-group">
                        <input class="form-control" type="text" name="date" value="{ROW.date}" id="date" pattern="^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{1,4}$" required="required" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')" />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="date-btn">
                                    <em class="fa fa-calendar fa-fix"> </em>
                                </button> </span>
                            </div>
                    </div>
                </div>
            <!-- END: select_date -->
            <table class="table table-striped table-bordered">
                <tbody>
                    <!-- BEGIN: input -->
                    <tr class="rows">
                        <td class="field">{parent}</td>
                        <td>
                            <div class="form-group ">
                                <!-- BEGIN: loop -->
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="{input_name}" value="{input_value}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{input_placeholder}" />
                                </div>
                                <!-- END: loop -->
                            </div>
                        </td>
                    </tr>
                    <!-- END: input -->
                </tbody>
            </table>


            <div class="form-group" style="text-align: center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" /></div>
        </form>
    </div>
</div>

<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/language/jquery.ui.datepicker-{NV_LANG_INTERFACE}.js"></script>

<script type="text/javascript">
//<![CDATA[
    $("#date").datepicker({
        dateFormat : "dd/mm/yy",
        changeMonth : true,
        changeYear : true,
        showOtherMonths : true,
    });

//]]>
</script>
<!-- END: main -->
