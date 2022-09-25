<!-- BEGIN: main -->
<!-- BEGIN: view -->
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
<!-- END: view -->

<!-- END: main -->