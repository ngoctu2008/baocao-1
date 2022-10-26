<!-- BEGIN: main -->

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->

<div class="alert alert-info clearfix row">
    <strong class="fl field">{USERNAME}</strong>
    <i class="fr">{CURRENT_DATE}</i>
</div>

<div class="col-md-10">
    <!-- BEGIN: INCOME -->
    <div class="panel panel-info box-monitor">
        <div class="panel-body">
            <div class="col-xs-16 col-sm-17 col-md-17">
                {label_income_date}</br>
                {label_income_month}</br>
                <strong> {LANG.income_noloan}</strong>
            </div>
            <div class="col-xs-8 col-sm-7 col-md-7 text-right text-hightlight">
                0.000.000 đ</br>
                00.000.000 đ</br>
                <strong> 000.000 đ</strong>
            </div>
        </div>
    </div>
    <!-- END: INCOME -->
    <!-- BEGIN: JUSGE -->
    <div class="panel panel-info box-monitor">
        <div class="panel-heading title-block">
            <strong> Đánh giá </strong>
        </div>
        <div class="panel-body">
            <div class="col-xs-16 col-sm-17 col-md-17">
                <strong>Total DSA:</strong></br>
                Total DSA Noloan:</br>
                Số DSA New < tháng:</br>
                Tỉ lệ DSA Low:</br>
                <strong> Chất lượng tuyển dụng</strong></br>
                Số DSA New > tháng:</br>
                Total DSA No loans:</br>
                Tỉ lệ DSA No loans:</br>
                <strong> Vận hành quản lý team</strong>
            </div>
            <div class="col-xs-8 col-sm-7 col-md-7 text-right text-hightlight">
                0</br>
                0</br>
                <strong> 630.000 đ</strong>
            </div>
        </div>
    </div>
    <!-- END: JUSGE -->

    <!-- BEGIN: REPORT_STATICS_AREA -->
    <div class="panel panel-info box-monitor">
        <div class="panel-heading title-block">
            <strong> {LANG.report_statics} </strong>
        </div>
        <div class="panel-body">
            <!-- BEGIN: ROW -->
            <div class="col-xs-14 col-sm-14 col-md-14">
                <strong>{STATIC.leader_name}</strong> <sub>{STATIC.title_group}</sub>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 text-right ">
                <strong class="text-hightlight small"> {STATIC.num_sale}/{STATIC.total} DSA </strong>
                <sub class="small"> ({STATIC.percent}%) </sub>
            </div>
            <!-- END: ROW -->
            <div class="row clearfix">
                <div class="col-xs-10 col-sm-10 col-md-10 text-center">
                    <strong class="text-hightlight"> TỔNG ASM </strong>
                </div>
                <div class="col-xs-14 col-sm-14 col-md-14 text-right">
                    <strong class="text-hightlight"> {num_sale}/{total_sale} DSA </strong>
                    <sub class="small text-hightlight"> ({percent}%) </sub>
                </div>
            </div>

        </div>
    </div>
    <!-- END: REPORT_STATICS_AREA -->

    <!-- BEGIN: REPORT_STATICS_TEAM -->
    <div class="panel panel-info box-monitor">
        <div class="panel-heading title-block">
            <strong> {LANG.not_reported} </strong>
        </div>
        <div class="panel-body">
            <div class="row">
                <!-- BEGIN: loop -->
                <div class="col-xs-12 col-sm-12 col-md-12 less-text">
                    <strong>{sale_name}</strong> <sub>{sale_code}</sub>
                </div>
                <!-- END: loop -->
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <strong class="text-hightlight"> Số DSA chưa báo cáo </strong>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <strong class="text-hightlight"> {num}/{total} DSA </strong>
                    <sub class="small text-hightlight"> ({percent}%) </sub>
                </div>
            </div>

        </div>
    </div>
    <!-- END: REPORT_STATICS_TEAM -->

    <!-- BEGIN: ACTION_NOTE -->
    <div class="panel panel-info box-monitor red-box">
        <div class="panel-heading title-block">
            <strong> ACTION_NOTE</strong>
        </div>
        <div class="panel-body">
            <strong class="text-hightlight"> {CONTENT_NOTE} </strong>
        </div>
    </div>
    <!-- END: ACTION_NOTE -->






</div>

<div class="col-md-14">
    <!-- BEGIN: TOTAL_DAILY -->
    <div class="panel panel-info box-monitor">
        <div class="panel-heading title-block">
            <strong> {title} </strong>
        </div>
        <div class="panel-body">
            <!-- BEGIN: empty -->
            <div class="text-center">
                {btn_add_report}
                {warning}
            </div>
            <!-- END: empty -->
            <table class="table table-monitor table-sm">
                <tbody>
                    <!-- BEGIN: row -->
                    <tr>
                        <td class="field-monitor">
                            {label}
                        </td>
                        <!-- BEGIN: loop -->
                        <td><strong class="text-hightlight fr">{TOTAL}</strong></td>
                        <td class="fl">
                            <sub> {sub_label}</sub>
                        </td>
                        <!-- END: loop -->
                    </tr>
                    <!-- END: row -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- END: TOTAL_DAILY -->

    <div class="panel panel-info box-monitor">
        <div class="panel-heading title-block">
            <strong> MTD </strong>
        </div>
        <!-- BEGIN: TOTAL_MONTH -->
        <div class="panel-body">
            <table class="table table-monitor ">
                <tbody>
                    <!-- BEGIN: row -->
                    <tr>
                        <td class="field-monitor w20p">
                            {label}
                        </td>
                        <!-- BEGIN: loop -->
                        <td class="text-center">
                            <strong class="text-hightlight">{TOTAL}</strong>
                            <sub> {sub_label}</sub> </br>
                            <div class="bg-gray">
                                <div class="small-text">P: <strong class="green"> {p_value} 0.00</strong> </div>
                            </div>
                        </td>
                        <!-- END: loop -->
                        <!-- BEGIN: td -->
                        <td> </td>
                        <!-- END: td -->
                        <td>
                            <strong class="text-hightlight">0.00%</strong>
                            <sub>TARGET</sub> </br>
                            <div class="bg-gray">
                                <div class="small-text">
                                    <strong class="green"> {KPI} 0.00</strong> KPI
                                </div>
                            </div>

                        </td>
                    </tr>
                    <!-- END: row -->
                </tbody>
            </table>
        </div>
        <!-- END: TOTAL_MONTH -->
    </div>
</div>


<!-- END: main -->
