<!-- BEGIN: main -->

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->

<div class="alert alert-info clearfix row">
    <strong class="fl field">{USERNAME}</strong>
    <i class="fr">{CURRENT_DATE}</i>
</div>

<div class="col-md-10">
    <div class="panel panel-info box-monitor">
        <div class="panel-body">
            <div class="col-xs-16 col-sm-17 col-md-17">
                Thu nhập hôm nay của Team bạn là:</br>
                Thu nhập MTD của TEAM bạn là:</br>
                <strong> Tổ quốc ghi công NO LOAN</strong>
            </div>
            <div class="col-xs-8 col-sm-7 col-md-7 text-right text-hightlight">
                0.000.000 đ</br>
                00.000.000 đ</br>
                <strong> 000.000 đ</strong>
            </div>
        </div>
    </div>

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

    <!-- BEGIN: REPORT_STATICS -->
    <div class="panel panel-info box-monitor">
        <div class="panel-heading title-block">
            <strong> Số DSA vùng báo cáo </strong>
        </div>
        <div class="panel-body">
            <!-- BEGIN: ROW -->
            <div class="col-xs-10 col-sm-10 col-md-10">
                <strong>{DSS}</strong>
            </div>
            <div class="col-xs-14 col-sm-14 col-md-14 text-right ">
                <strong class="text-hightlight small"> 0/0 DSA </strong> ~
                <strong class="text-hightlight small"> 0% làm việc </strong>
            </div>
            <!-- END: ROW -->
            <div class="row clearfix">
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <strong class="text-hightlight"> TỔNG ASM </strong>
                </div>
                <div class="col-xs-14 col-sm-14 col-md-14 text-right">
                    <strong class="text-hightlight"> 0/0 DSA </strong> ~
                    <strong class="text-hightlight"> 0% làm việc </strong>
                </div>
            </div>

        </div>
    </div>
    <!-- END: REPORT_STATICS -->

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
    <div class="panel panel-info box-monitor">
        <div class="panel-heading title-block">
            <strong> NGÀY HÔM NAY </strong>
        </div>

        <!-- BEGIN: TOTAL_DAILY -->
        <div class="panel-body">
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
        <!-- END: TOTAL_DAILY -->
    </div>

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
