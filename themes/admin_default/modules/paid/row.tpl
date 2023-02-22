<!-- BEGIN: main -->
<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->
<div class="panel panel-default">
<div class="panel-body">
<form class="form-horizontal" action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <input type="hidden" name="id" value="{ROW.id}" />
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.customer}</strong></label>
        <div class="col-sm-19 col-md-20">
            <div class="input-group">
            <input class="form-control" type="text" name="customer" value="{ROW.customer}" id="id_customer" />
            <span class="input-group-btn">
                <button class="btn btn-default selectfile" type="button" >
                <em class="fa fa-folder-open-o fa-fix">&nbsp;</em>
            </button>
            </span>
        </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.status}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="status" value="{ROW.status}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.note}</strong></label>
        <div class="col-sm-19 col-md-20">
            <textarea class="form-control" style="height:100px;" cols="75" rows="5" name="note">{ROW.note}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.ext_app_id}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="ext_app_id" value="{ROW.ext_app_id}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.c_scheme}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="c_scheme" value="{ROW.c_scheme}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.dpd}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="dpd" value="{ROW.dpd}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.allocationdate}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="allocationdate" value="{ROW.allocationdate}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.installment_amt}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="installment_amt" value="{ROW.installment_amt}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.sale_code}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="sale_code" value="{ROW.sale_code}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.sale_email}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="sale_email" value="{ROW.sale_email}" />
        </div>
    </div>
    <div class="form-group" style="text-align: center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" /></div>
</form>
</div></div>

<script type="text/javascript">
//<![CDATA[
    $(".selectfile").click(function() {
        var area = "id_customer";
        var path = "{NV_UPLOADS_DIR}/{MODULE_UPLOAD}";
        var currentpath = "{NV_UPLOADS_DIR}/{MODULE_UPLOAD}";
        var type = "image";
        nv_open_browse(script_name + "?" + nv_name_variable + "=upload&popup=1&area=" + area + "&path=" + path + "&type=" + type + "&currentpath=" + currentpath, "NVImg", 850, 420, "resizable=no,scrollbars=no,toolbar=no,location=no,status=no");
        return false;
    });

//]]>
</script>
<!-- END: main -->