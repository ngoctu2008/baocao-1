<!-- BEGIN: main -->
<label>Phạm Đức Hải N1</label>
<div class="row">
    <div class="col-md-11">
        <div class="panel">
            <div class="panel-body box">
                <div class="col-xs-16 col-sm-18 col-md-18">
                    Thu nhập hôm nay của bạn là:</br>
                    Thu nhập MTD của bạn là:</br>
                    <strong> Tổ quốc ghi công NO LOAN</strong>
                </div>
                <div class="col-xs-8 col-sm-6 col-md-6 text-right text-hightlight">
                    20.000.000 đ</br>
                    300.000.000 đ</br>
                    <strong> 630.000 đ</strong>
                </div>
            </div>

        </div>

    </div>

    <div class="col-md-11">
        <div class="panel panel-info">
            <div class="panel-heading">
                NGÀY HÔM NAY
            </div>
            <div class="panel-body box">
                <div class="label-monitor col-xs-8 col-md-6">
                    {LANG.pl} </br>
                    {LANG.dn} </br>
                    {LANG.xstu} </br>
                    {LANG.ipp} </br>
                    {LANG.banca} </br>
                    {LANG.courier} </br>
                    {LANG.ubank} </br>
                    {LANG.credit} </br>
                </div>
                <div class="col-xs-2 col-md-2 text-right">
                    <strong class="fr text-hightlight">66 </strong> </br>
                    <strong class="fr text-hightlight">70 </strong> </br>
                    <strong class="text-hightlight">80 </strong> </br>
                </div>
                <div class="col-xs-4 col-md-4 text-left">
                    {LANG.app} </br>
                    {LANG.lead} </br>
                    {LANG.app} </br>
                    {LANG.app} </br>
                    {LANG.hd} </br>
                    {LANG.app} </br>
                    {LANG.app} </br>
                    {LANG.app} </br>
                </div>
                <div class="col-xs-2 col-md-3">
                    <strong class="fr text-hightlight">66 </strong> </br>
                    <strong class="fr text-hightlight">70 </strong> </br>
                    <strong class="fr text-hightlight">80 </strong> </br>
                </div>
                <div class="col-xs-4 col-md-4 text-left">
                    {LANG.loan} </br>
                    {LANG.app} </br>
                    {LANG.loan} </br>
                    {LANG.loan} </br>
                    {LANG.app} </br>
                    {LANG.loan} </br>
                    {LANG.loan} </br>
                    {LANG.loan} </br>
                </div>
                <div class="col-xs-2 col-md-3">
                    <strong class="fr text-hightlight">66 </strong> </br>
                    <strong class="fr text-hightlight">70 </strong> </br>
                    <strong class="fr text-hightlight">80 </strong> </br>
                </div>

                <div class="col-xs-2 col-md-2 text-left">
                     </br>
                    {LANG.loan} </br>
                    </br>
                     </br>
                    {LANG.loan} </br>
                     </br>
                     </br>
                     </br>
                </div>


                <!-- <table class="table table-monitor">
                    <tbody>
                        <tr>
                            <td class="text-left">
                                {LANG.pl}
                                <strong class="fr text-hightlight">63 </strong>
                            </td>
                            <td class="text-left">
                                {LANG.app}
                                <strong class="fr text-hightlight">65 </strong>
                            </td>

                            <td class="text-left">
                                {LANG.loan}
                                <strong class="fr text-hightlight">65 </strong>
                            </td>
                            <td class="text-left">
                                {LANG.check}
                            </td>

                        </tr>
                        <tr>
                            <td class="text-left">
                                {LANG.dn}
                                <strong class="fr">163 </strong>
                            </td>
                            <td class="text-left">
                                {LANG.app}
                                <strong class="fr">125 </strong>
                            </td>

                            <td class="text-left">
                                {LANG.loan}
                            </td>

                        </tr>
                    </tbody>
                </table> -->
            </div>
    </div>


</div>

<!-- BEGIN: view1 -->
<form action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="w100">{LANG.number}</th>
                    <th>{LANG.date}</th>
                    <th>{LANG.code}</th>
                    <th>{LANG.pl_app}</th>
                    <th>{LANG.pl_loan}</th>
                    <th>{LANG.dn_app}</th>
                    <th>{LANG.dn_loan}</th>
                    <th>{LANG.xstu_check}</th>
                    <th>{LANG.xstu_app}</th>
                    <th>{LANG.xstu_loan}</th>
                    <th>{LANG.ipp_app}</th>
                    <th>{LANG.ipp_loan}</th>
                    <th>{LANG.banca_hd}</th>
                    <th>{LANG.banca_sale}</th>
                    <th>{LANG.ubank_app}</th>
                    <th>{LANG.ubank_loan}</th>
                    <th>{LANG.courier_lead}</th>
                    <th>{LANG.courier_app}</th>
                    <th>{LANG.courier_loan}</th>
                    <th>{LANG.credit_app}</th>
                    <th>{LANG.credit_loan}</th>
                    <th class="w150">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <!-- BEGIN: loop -->
                <tr>
                    <td> {VIEW.number} </td>
                    <td> {VIEW.date} </td>
                    <td> {VIEW.code} </td>
                    <td> {VIEW.pl_app} </td>
                    <td> {VIEW.pl_loan} </td>
                    <td> {VIEW.dn_app} </td>
                    <td> {VIEW.dn_loan} </td>
                    <td> {VIEW.xstu_check} </td>
                    <td> {VIEW.xstu_app} </td>
                    <td> {VIEW.xstu_loan} </td>
                    <td> {VIEW.ipp_app} </td>
                    <td> {VIEW.ipp_loan} </td>
                    <td> {VIEW.banca_hd} </td>
                    <td> {VIEW.banca_sale} </td>
                    <td> {VIEW.ubank_app} </td>
                    <td> {VIEW.ubank_loan} </td>
                    <td> {VIEW.courier_lead} </td>
                    <td> {VIEW.courier_app} </td>
                    <td> {VIEW.courier_loan} </td>
                    <td> {VIEW.credit_app} </td>
                    <td> {VIEW.credit_loan} </td>
                    <td class="text-center"><i class="fa fa-edit fa-lg">&nbsp;</i> <a href="{VIEW.link_edit}#edit">{LANG.edit}</a> - <em class="fa fa-trash-o fa-lg">&nbsp;</em> <a href="{VIEW.link_delete}" onclick="return confirm(nv_is_del_confirm[0]);">{LANG.delete}</a></td>
                </tr>
                <!-- END: loop -->
            </tbody>
        </table>
    </div>
</form>
<!-- END: view1 -->

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->
<div class="panel panel-default">
<div class="panel-body">
<form class="form-horizontal" action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <input type="hidden" name="id" value="{ROW.id}" />
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.date}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="date" value="{ROW.date}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.code}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="code" value="{ROW.code}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.pl_app}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="pl_app" value="{ROW.pl_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.pl_loan}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="pl_loan" value="{ROW.pl_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.dn_app}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="dn_app" value="{ROW.dn_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.dn_loan}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="dn_loan" value="{ROW.dn_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.xstu_check}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="xstu_check" value="{ROW.xstu_check}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.xstu_app}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="xstu_app" value="{ROW.xstu_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.xstu_loan}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="xstu_loan" value="{ROW.xstu_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.ipp_app}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="ipp_app" value="{ROW.ipp_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.ipp_loan}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="ipp_loan" value="{ROW.ipp_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.banca_hd}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="banca_hd" value="{ROW.banca_hd}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.banca_sale}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="banca_sale" value="{ROW.banca_sale}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.ubank_app}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="ubank_app" value="{ROW.ubank_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.ubank_loan}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="ubank_loan" value="{ROW.ubank_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.courier_lead}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="courier_lead" value="{ROW.courier_lead}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.courier_app}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="courier_app" value="{ROW.courier_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.courier_loan}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="courier_loan" value="{ROW.courier_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.credit_app}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="credit_app" value="{ROW.credit_app}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 col-md-4 control-label"><strong>{LANG.credit_loan}</strong></label>
        <div class="col-sm-19 col-md-20">
            <input class="form-control" type="text" name="credit_loan" value="{ROW.credit_loan}" pattern="^[0-9]*$"  oninvalid="setCustomValidity(nv_digits)" oninput="setCustomValidity('')" />
        </div>
    </div>
    <div class="form-group" style="text-align: center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" /></div>
</form>
</div></div>
<!-- END: main -->
