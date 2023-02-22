<!-- BEGIN: main -->
<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->

<!-- BEGIN: form -->
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="upload" value="1" />
            <input type="hidden" name="checked" value="0" />
            <div class="form-group">
                <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.customer}</strong></label>


                <input type="hidden" name="filename" id="filename" value="" />
                <input type="file" name="file" id="file" class="form-control" accept=".xlsx,.xls"/>
            </div>

            <div class="form-group" style="text-align: center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.upload}" /></div>
        </form>
    </div>
</div>
<!-- END: form -->
<!-- BEGIN: data -->
<form class="form-horizontal" action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <input type="hidden" name="submit_data" value="1" />
    <input type="hidden" name="checked" value="1" />

    <table class="table table-striped table-bordered table-hover" id="table-import">
        <thead>
            <tr>
                <th>{stt}</th>
                <!-- BEGIN: fields -->
                <th class="text-center">{label}</th>
                <!-- END: fields -->
                <th>{LANG.status}</th>
            </tr>
        </thead>
        <tbody>
            <!-- BEGIN: row -->
            <tr>
                <td>{num}</td>
                <!-- BEGIN: loop -->
                <td class='{data_class}'>{field}:{value}</td>
                <!-- END: loop -->
                <td><span id="txt-check"></span></td>
            </tr>
            <!-- END: row -->
        </tbody>
    </table>
    <div class="form-group" style="text-align: center">
        <input class="btn btn-primary" name="submit" type="submit" value="{LANG.import}" />
    </div>

</form>

row: {highestRow}
col: {highestColumn}
<!-- END: data -->
<script type="text/javascript">
var selector = '#table-import';
var lang_success = '{LANG.import_success}';

$.ajax({
    type : 'POST',
    url : script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + 'nocache=' + new Date().getTime(),
    data : $('#frm-import').serialize(),

    success : function(json) {
        if (json.error) {
            // alert('error');
            count_error++;
            $('#txt-check').html(json.msg);
            $(selector + ' tbody #row-' + (current)).find('.status').html('<span class="text-danger"><em class="fa fa-exclamation-triangle">&nbsp;</em>' + json.msg + '</span>');
        } else {
            // alert('ok');
            $('#txt-check').html(json.msg);

            // $(selector + ' tbody #row-' + (current)).find('.status').html('<span class="text-success"><em class="fa fa-check-circle">&nbsp;</em>' + lang_success + '</span>');
        }

        if (json.exit) {
            if (check) {
                $('#txt-check').html('{LANG.check_success}');
                if (count_error > 0) {
                    $('#check-result').slideDown().html(count_error + ' {LANG.error_count_1}');
                } else {
                    $('#btn-step1').prop('disabled', false);
                    if (confirm('{LANG.check_success_cofirm}')) {
                        $('#btn-step1').click();
                    }
                }
            } else {
                $('#txt-import-waiting').html('<i class="fa fa-check-circle">&nbsp;</i>{LANG.import_wating_success}');
                if (confirm('{LANG.import_wating_confirm}')) {
                    window.location.href = script_name + '?' + nv_name_variable + '=' + nv_module_name;
                }
            }
            return !1;
        }

        setTimeout(function() {
            current = current + 1;
            $('#current').val(current);
            nv_users_readline();
        }, 1000);
    }
});
 </script>
<!-- END: main -->
