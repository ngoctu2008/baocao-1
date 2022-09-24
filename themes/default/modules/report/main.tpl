<!-- BEGIN: main -->

<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->

<div class="alert alert-info clearfix row">
    <strong class="fl field">Phạm Đức Hải N1</strong>
    <i class="fr">Ngày 24/09/2022 </i>
</div>

<div class="col-md-10">
    <div class="panel panel-info box-monitor">
        <div class="panel-body">
            <div class="col-xs-16 col-sm-17 col-md-17">
                Thu nhập hôm nay của bạn là:</br>
                Thu nhập MTD của bạn là:</br>
                <strong> Tổ quốc ghi công NO LOAN</strong>
            </div>
            <div class="col-xs-8 col-sm-7 col-md-7 text-right text-hightlight">
                20.000.000 đ</br>
                300.000.000 đ</br>
                <strong> 630.000 đ</strong>
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
            <table class="table table-monitor table-sm">
                <tbody>
                    <!-- BEGIN: row -->
                    <tr>
                        <td class="field-monitor w100">
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
