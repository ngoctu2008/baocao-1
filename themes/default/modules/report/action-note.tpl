<!-- BEGIN: main -->
<link type="text/css" href="{NV_BASE_SITEURL}{NV_ASSETS_DIR}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 style="text-transform: uppercase;"> {LANG.add_action} </h1>
    </div>

<div class="panel-body">
<form class="form-horizontal" action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <input type="hidden" name="id" value="{ROW.id}" />

    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.date}</strong> <span class="red">(*)</span></label>
        <div class="col-sm-19 col-md-6">
            <div class="input-group">
            <input class="form-control" type="text" name="date" value="{ROW.date}" id="date" pattern="^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{1,4}$" required="required" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')" autocomplete="off" readonly/>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="date-btn">
                        <em class="fa fa-calendar fa-fix"> </em>
                    </button> </span>
                </div>
        </div>
    </div>
    <!-- BEGIN: checkbox_code -->
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.sale_name}</strong> <span class="red">(*)</span></label>        
        <div class="col-xs-24 col-sm-8 col-md-20">
            <!-- BEGIN: loop -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <input class="form-control" type="checkbox" name="code[]" value="{OPTION.key}" {OPTION.checked}>
                <span class="less-text"> {OPTION.title} </span>

            </div>
            <!-- END: loop -->
        </div>
    </div>
    <!-- END: checkbox_code -->

    <!-- BEGIN: select_code -->
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.sale_name}</strong> <span class="red">(*)</span></label>
        <div class="col-sm-19 col-md-20">
            <select class="form-control" name="code">
                <option value=""> --- </option>
                <!-- BEGIN: loop -->
                <option value="{OPTION.key}" {OPTION.selected}>{OPTION.title}</option>
                <!-- END: loop -->
            </select>
        </div>
    </div>
    <!-- END: select_code -->

    <!-- BEGIN: input_code -->
    <input type="hidden" name="code" value="{SALE_CODE}" />
    <!-- END: input_code -->

    <div class="form-group col-xs-24 col-sm-5 col-md-4">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.note}</strong> <span class="red">(*)</span></label>
        <div class="col-sm-19 col-md-20">
            <textarea class="form-control" style="height:100px;" cols="75" rows="5" name="note">{ROW.note}</textarea>
        </div>
    </div>
    <div class="form-group col-xs-24 col-sm-5 col-md-4" style="text-align: center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" /></div>
</form>
</div></div>

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
