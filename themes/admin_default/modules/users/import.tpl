<!-- BEGIN: main -->
<style>
.wizard {
    margin-bottom: 10px
}

.wizard a {
    padding: 10px 12px 12px;
    margin-right: 5px;
    background: #efefef;
    position: relative;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
}

.wizard a:before {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #fff;
    position: absolute;
    content: "";
    top: 0;
    left: 0;
}

.wizard a:after {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #efefef;
    position: absolute;
    content: "";
    top: 0;
    right: -20px;
    z-index: 2;
}

.wizard a:first-child:before {
    border: none;
}

.wizard a:first-child {
    -webkit-border-radius: 4px 0 0 4px;
    -moz-border-radius: 4px 0 0 4px;
    border-radius: 4px 0 0 4px;
}

.wizard .badge {
    margin: 0 5px 0 18px;
    position: relative;
    top: -1px;
}

.wizard a:first-child .badge {
    margin-left: 0;
}

.wizard .current {
    background: #007ACC;
    color: #fff;
}

.wizard .current:after {
    border-left-color: #007ACC;
}

#step1 h3 {
    font-weight: bold
}

table.table-middle td {
    vertical-align: middle !important
}

#table-check {
    display: none;
}
</style>

<div class="wizard">
    <a id="badge1" class="current"><span class="badge">1.</span> {LANG.step1}</a> <a id="badge2"><span class="badge">2.</span> {LANG.step2}</a> <a id="badge3"><span class="badge">3.</span> {LANG.step3}</a>
</div>

<form class="form-horizontal" id="frm-import">
    <input type="hidden" name="readline" value="1" />
    <input type="hidden" name="file_name" id="filename" value="" /> 
    <input type="hidden" name="check" id="check" value="1" /> 
    <input type="hidden" name="current" id="current" value="{STARTROW}" />
    <div id="step1">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>1. {LANG.step1_a}</h3>
                <a href="{URL_DOWNLOAD}" class="btn btn-primary btn-xs m-bottom"> <em class="fa fa-download">&nbsp;</em>{LANG.download}
                </a> &nbsp;
                <button class="btn btn-success btn-xs m-bottom" id="btn-guide">
                    <em class="fa fa-book">&nbsp;</em>{LANG.guide}
                </button>
                <div class="m-bottom">
                    <h3>2. {LANG.step1_b}</h3>
                    <input type="file" name="file" id="file" class="form-control" accept=".xls">
                </div>
                <div id="step1_c">
                    <div class="m-bottom">
                        <h3>3. {LANG.step1_c}</h3>
                        <div class="m-bottom">
                            <button class="btn btn-primary btn-xs" id="btn-check" disabled="disabled">
                                <em class="fa fa-check">&nbsp;</em>{LANG.step1_c_start}
                            </button>
                            &nbsp; <span id="txt-check" style="display: none;">{LANG.reading}</span>
                        </div>
                        <div class="alert alert-danger" style="display: none;" id="check-result"></div>
                        <table class="table table-striped table-bordered table-hover table-middle" id="table-check">
                            <colgroup>
                                <col class="w200">
                                <col class="w250">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>{LANG.username}</th>
                                    <th>{LANG.email}</th>
                                    <th>{LANG.check_status}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" disabled="disabled" id="btn-step1" onclick="nv_change_active(1,2); return !1;">
                {LANG.next} <em class="fa fa-arrow-circle-right">&nbsp;</em>
            </button>
        </div>
    </div>

    <div id="step2" class="hidden">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-4 text-right">{LANG.show_email}</label>
                    <div class="col-sm-20">
                        <label><input type="checkbox" name="view_mail" value="1">{LANG.view_mail_note}</label>
                    </div>
                </div>
                <!-- BEGIN: group -->
                <div class="form-group">
                    <label class="col-sm-4 text-right">{LANG.in_group}</label>
                    <div class="col-sm-20">
                        <!-- BEGIN: list -->
                        <div class="clearfix">
                            <label class="pull-left w200"> <input type="checkbox" value="{GROUP.id}" name="group[]" {GROUP.checked} /> {GROUP.title}
                            </label> <label class="pull-left group_default" style="display: none"> <input type="radio" value="{GROUP.id}" name="group_default" /> {LANG.in_group_default}
                            </label>
                        </div>
                        <!-- END: list -->
                    </div>
                </div>
                <!-- END: group -->
                <div class="form-group">
                    <label class="col-sm-4 text-right">{LANG.is_official}</label>
                    <div class="col-sm-20">
                        <label><input type="checkbox" name="is_official" value="1" {DATA.is_official}/> <small>{LANG.is_official_note}</small></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 text-right">{LANG.adduser_email1}</label>
                    <div class="col-sm-20">
                        <label><input type="checkbox" name="adduser_email" value="1" {DATA.adduser_email}/> <small>{LANG.adduser_email1_note}</small></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" onclick="nv_change_active(2,1); return !1;">
                <em class="fa fa-arrow-circle-left">&nbsp;</em>{LANG.back}
            </button>
            &nbsp;
            <button class="btn btn-success" onclick="nv_change_active(2,3); return !1;" id="btn-import">
                {LANG.start} <em class="fa fa-arrow-circle-right">&nbsp;</em>
            </button>
        </div>
    </div>
    <div id="step3" class="hidden">
        <p class="text-success">
            <span id="txt-import-waiting"><i class="fa fa-spinner fa-spin fa-fw">&nbsp;</i>{LANG.import_wating}</span>
        </p>
        <table class="table table-striped table-bordered table-hover table-middle" id="table-import">
            <colgroup>
                <col class="w200">
                <col class="w250">
            </colgroup>
            <thead>
                <tr>
                    <th>{LANG.username}</th>
                    <th>{LANG.email}</th>
                    <th>{LANG.check_status}</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</form>

<script>
    var count_error = 0;
    var check = 1;
    var current = {STARTROW};
    var total = 0;
    
    function nv_users_upload() {
        var fd = new FormData();
        fd.append('file', $('#file')[0].files[0]);
        fd.append('upload', 1);
        $.ajax({
            type : 'POST',
            url : script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=import&nocache=' + new Date().getTime(),
            data : fd,
            dataType : 'json',
            contentType : false,
            processData : false,
            beforeSend : function() {
                $('#table-check').hide();
                $('#table-check tbody').html('');
                $('#txt-check').show();
                $('#check-result').hide();
                $('#check').val(1);
                check = 1;
            },
            success : function(json) {
                if (json.error) {
                    alert(json.msg);
                } else {
                    $('#filename').val(json.filename).change();
                    $('#table-check').show();
                    $.each(json.data, function(index, value) {
                        console.log(value)
                        $('#table-check tbody, #table-import tbody').append('<tr id="row-' + index + '"><td>' + value[0] + '</td><td><a href="mailto:' + value[1] + '">' + value[1] + '</a></td><td class="status"></td></tr>');
                    });
                    total = json.total;
                    count_error = 0;
                    nv_users_readline();
                }
            }
        });
    }

    function nv_users_readline() {
        if (check) {
            var selector = '#table-check';
            var lang_success = '{LANG.check_status_ok}';
        } else {
            var selector = '#table-import';
            var lang_success = '{LANG.import_success}';
        }
        
        $.ajax({
            type : 'POST',
            url : script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=import&nocache=' + new Date().getTime(),
            data : $('#frm-import').serialize(),
            beforeSend : function() {
                $(selector + ' tbody #row-' + (current)).find('.status').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
            },
            success : function(json) {
                if (json.error) {
                    count_error++;
                    $('#txt-check').html(json.notify);
                    $(selector + ' tbody #row-' + (current)).find('.status').html('<span class="text-danger"><em class="fa fa-exclamation-triangle">&nbsp;</em>' + json.msg + '</span>');
                } else {
                    $(selector + ' tbody #row-' + (current)).find('.status').html('<span class="text-success"><em class="fa fa-check-circle">&nbsp;</em>' + lang_success + '</span>');
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
    }

    $('#btn-import').click(function() {
        $('#check').val(0);
        check = 0;
        current = {STARTROW};
        $('#current').val(current);
        nv_users_readline();
        return !1;
    });
    
    $('#btn-check').click(function() {
        nv_users_upload();
        return !1;
    });
    
    $('#btn-guide').click(function() {
        $.ajax({
            type : 'POST',
            url : script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=import&nocache=' + new Date().getTime(),
            data : 'guide=1',
            dataType : 'html',
            success : function(html) {
                modalShow('{LANG.guide}', html);
            }
        });
        return !1;
    });
    
    $('#file').change(function() {
        $('#btn-check').prop('disabled', false);
    });
    
    function nv_change_active(a, b) {
        $('#step' + a).addClass('hidden');
        $('#badge' + a).removeClass('current');
        $('#step' + b).removeClass('hidden');
        $('#badge' + b).addClass('current');
        return !1;
    }
</script>
<!-- END: main -->

<!-- BEGIN: guide -->
<style>
table.table-middle td {
    vertical-align: middle !important
}
</style>
<table class="table table-striped table-bordered table-hover table-middle">
    <thead>
        <tr>
            <th>{LANG.field_title}</th>
            <th class="text-center w100">{LANG.required}</th>
            <th>{LANG.note}</th>
        </tr>
    </thead>
    <tbody>
        <!-- BEGIN: loop -->
        <tr>
            <td>{DATA.text}</td>
            <td class="text-center">{DATA.required}</td>
            <td>{DATA.comment}</td>
        </tr>
        <!-- END: loop -->
    </tbody>
</table>
<div class="text-center">
    <a href="{URL_DOWNLOAD}" class="btn btn-primary btn-xs m-bottom"> <em class="fa fa-download">&nbsp;</em>{LANG.download}
    </a>
</div>
<!-- END: guide -->