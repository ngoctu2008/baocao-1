<!-- BEGIN: main -->
<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->
<div class="panel panel-default">
<div class="panel-body">
<form class="form-horizontal" action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <!-- <input type="hidden" name="config_name" value="{ROW.config_name}" /> -->
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.valid_time}</strong></label>
        <div class="col-sm-5 col-md-3">
            <input class="form-control" type="text" name="valid_time" value="{ROW.valid_time}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.showname_format}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="showname_format" value="{ROW.showname_format}" disabled />
        </div>
    </div>
    <div class="form-group" style="text-align: center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" /></div>
</form>
</div></div>
<!-- END: main -->
