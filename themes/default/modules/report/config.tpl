<!-- BEGIN: main -->
<div class="alert alert-info text-center">
    <h1 style="text-transform: uppercase;"> {LANG.config_kpi} </h1>
    <!-- <strong>Ngày {date}</strong> -->
</div>

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->

<!-- BEGIN: view -->
<form action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="w100">{LANG.number}</th>
                    <th>{LANG.date}</th>
                    <th>{LANG.team}</th>
                    <th>{LANG.kpi}</th>
                    <th>{LANG.target}</th>
                    <th class="w150">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <!-- BEGIN: loop -->
                <tr>
                    <td> {VIEW.number} </td>
                    <td> {VIEW.date} </td>
                    <td> {VIEW.team} </td>
                    <td> {VIEW.kpi} </td>
                    <td> {VIEW.target} </td>
                    <td class="text-center"><i class="fa fa-edit fa-lg">&nbsp;</i> <a href="{VIEW.link_edit}#edit">{LANG.edit}</a> </td>
                </tr>
                <!-- END: loop -->
            </tbody>
        </table>
    </div>
</form>
<!-- END: view -->
<div class="panel panel-default">
    <div class="panel-body">
        <!-- BEGIN: form -->
        <form class="form-horizontal" action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
            <input type="hidden" name="id" value="{ROW.id}" />
            <input type="hidden" name="code" value="{ROW.code}" />
            <input type="hidden" name="team" value="{ROW.team}" />
            <table class="table table-striped table-bordered">
                <tbody>
                    <!-- BEGIN: loop -->
                    <tr class="rows">
                        <td class="field">{field_title}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-12 col-md-4">
                                    <input class="form-control" type="text" name="kpi['{field_name}']" value="{field_kpi}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="KPI {field_title}" />
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <input class="form-control" type="text" name="target['{field_name}']" value="{field_target}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="Target {field_title}" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- END: loop -->
                </tbody>
            </table>
            <div class="form-group" style="text-align: center">
                <input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" />
            </div>
        </form>
        <!-- END: form -->
    </div>
</div>
<!-- END: main -->
