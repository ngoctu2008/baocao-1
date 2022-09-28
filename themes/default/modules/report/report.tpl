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
                    <tr class="rows">
                        <td class="field">PL</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="pl_app" value="{ROW.pl_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.app}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="pl_loan" value="{ROW.pl_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.loan}" />
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="rows">
                        <td class="field">{LANG.dn}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="dn_app" value="{ROW.dn_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.app}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="dn_loan" value="{ROW.dn_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.loan}" />
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="rows">
                        <td class="field">{LANG.xstu}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="xstu_check" value="{ROW.xstu_check}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.check}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="xstu_app" value="{ROW.xstu_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"   placeholder="{LANG.app}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="xstu_loan" value="{ROW.xstu_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"   placeholder="{LANG.loan}" />
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="rows">
                        <td class="field">{LANG.ipp}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="ipp_app" value="{ROW.ipp_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.app}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="ipp_loan" value="{ROW.ipp_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.loan}" />
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="rows">
                        <td class="field">{LANG.banca}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="banca_hd" value="{ROW.banca_hd}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.hd}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="banca_sale" value="{ROW.banca_sale}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.sale}" />
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="rows">
                        <td class="field">{LANG.ubank}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="ubank_app" value="{ROW.ubank_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.app}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="ubank_loan" value="{ROW.ubank_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.loan}" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="rows">
                        <td class="field">{LANG.courier}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="courier_lead" value="{ROW.courier_lead}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.lead}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="courier_app" value="{ROW.courier_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.app}" />
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="courier_loan" value="{ROW.courier_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.loan}" />
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="rows">
                        <td class="field">{LANG.credit}</td>
                        <td>
                            <div class="form-group ">
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="credit_app" value="{ROW.credit_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.app}"/>
                                </div>
                                <div class="col-xs-8 col-md-4">
                                    <input class="form-control" type="text" name="credit_loan" value="{ROW.credit_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')"  placeholder="{LANG.loan}" />
                                </div>
                            </div>
                        </td>
                    </tr>

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
