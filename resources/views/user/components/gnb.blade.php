<div class="dashboard-gnb">

    <div class="header-utc-wrap col-group">
        <p class="utc">
            UTC
        </p>
        <p class="utc-txt">
            23.09.18 17:53
        </p>
    </div>

    <div class="dashboard-gnb-container row-group">

        <div class="dashboard-gnb-wrap">
            <p class="dashboard-gnb-title">
                Standard
            </p>

            <div class="dashboard-standard-wrap col-group">
                <div class="dashboard-standard-item up row-group m-script-pop" data-target=".modal-devices-up">
                    <div class="num">
                        0
                    </div>
                    <div class="txt">
                        Devices UP
                    </div>
                </div>
                <div class="dashboard-standard-item down row-group m-script-pop" data-target=".modal-devices-down">
                    <div class="num">
                        0
                    </div>
                    <div class="txt">
                        Devices Down
                    </div>
                </div>
                <div class="dashboard-standard-item critical row-group m-script-pop"
                    data-target=".modal-devices-critical">
                    <div class="num">
                        0
                    </div>
                    <div class="txt">
                        Unusual
                    </div>
                </div>
                <div class="dashboard-standard-item warning row-group m-script-pop"
                    data-target=".modal-devices-warning">
                    <div class="num">
                        0
                    </div>
                    <div class="txt">
                        Warning
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-gnb-wrap">
            <div class="real-time-traffic-title-wrap">
                <p class="dashboard-gnb-title">
                    Traffic
                </p>
<!--                <p class="mbps">
                    45.6Mbps
                </p>
                <div class="top1-wrap">
                    <div class="txt-group">
                        <div class="type">FW1</div>
                        <p class="ip">192.168.0.176</p>
                    </div>
                    <p class="txt">TOP 1</p>
                </div>-->
            </div>
            <div class="real-time-traffic-wrap">
                <canvas id="chart"></canvas>
            </div>
        </div>

        <div class="dashboard-gnb-wrap">
            <p class="dashboard-gnb-title">
                Traffic Top 10
            <div class="traffic-top-wrap">
                <div class="traffic-top-item">
                    <div class="num">1</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">2</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">3</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">4</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">5</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">6</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">7</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">8</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">9</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
                <div class="traffic-top-item">
                    <div class="num">10</div>
                    <div class="txt-wrap">
                        <div class="txt-group">
                            <p class="name">
                                OWS11
                            </p>
                            <p class="ip">
                                192.168.0.176
                            </p>
                        </div>
                        <p class="byte">
                            11.2Mbps
                        </p>
                    </div>
                </div>
            </div>
            </p>
        </div>
        <div class="dashboard-gnb-wrap">
            <div class="dashboard-gnb-tab-wrap">
                <div class="dashboard-gnb-tab-list">
                    <div class="dashboard-gnb-tab active" data-tab="tab_01">
                        IPS
                    </div>

                    <div class="dashboard-gnb-tab" data-tab="tab_02">
                        C&C Detection
                    </div>

                    <!--                    <div class="dashboard-gnb-tab" data-tab="tab_03">
                        Anti-Virus
                    </div>-->
                </div>
                <button class="more-btn">
                    <i class="xi-ellipsis-v"></i>
                </button>
            </div>

            <div class="polar-area-chart active" id="tab_01">
                <div class="polar-area-chart-item polar-area-chart-item-01">
                    <div class="img-box">
                        <img src="/images/polar_item_01.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-02">
                    <div class="img-box">
                        <img src="/images/polar_item_02.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-03">
                    <div class="img-box">
                        <img src="/images/polar_item_03.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-04">
                    <div class="img-box">
                        <img src="/images/polar_item_04.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-05">
                    <div class="img-box">
                        <img src="/images/polar_item_05.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-06">
                    <div class="img-box">
                        <img src="/images/polar_item_06.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-07">
                    <div class="img-box">
                        <img src="/images/polar_item_07.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-08">
                    <div class="img-box">
                        <img src="/images/polar_item_08.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-09">
                    <div class="img-box">
                        <img src="/images/polar_item_09.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-10">
                    <div class="img-box">
                        <img src="/images/polar_item_10.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="polar-area-chart" id="tab_02">
                <div class="polar-area-chart-item polar-area-chart-item-01">
                    <div class="img-box">
                        <img src="/images/polar_item_01.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-02">
                    <div class="img-box">
                        <img src="/images/polar_item_02.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-03">
                    <div class="img-box">
                        <img src="/images/polar_item_03.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-04">
                    <div class="img-box">
                        <img src="/images/polar_item_04.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-05">
                    <div class="img-box">
                        <img src="/images/polar_item_05.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-06">
                    <div class="img-box">
                        <img src="/images/polar_item_06.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-07">
                    <div class="img-box">
                        <img src="/images/polar_item_07.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-08">
                    <div class="img-box">
                        <img src="/images/polar_item_08.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-09">
                    <div class="img-box">
                        <img src="/images/polar_item_09.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-10">
                    <div class="img-box">
                        <img src="/images/polar_item_10.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Name
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Address
                            </p>
                            <p class="txt">
                                --00.--00.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

<!--            <div class="polar-area-chart" id="tab_03">
                <div class="polar-area-chart-item polar-area-chart-item-01">
                    <div class="img-box">
                        <img src="/images/polar_item_01.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-02">
                    <div class="img-box">
                        <img src="/images/polar_item_02.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-03">
                    <div class="img-box">
                        <img src="/images/polar_item_03.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-04">
                    <div class="img-box">
                        <img src="/images/polar_item_04.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-05">
                    <div class="img-box">
                        <img src="/images/polar_item_05.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-06">
                    <div class="img-box">
                        <img src="/images/polar_item_06.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-07">
                    <div class="img-box">
                        <img src="/images/polar_item_07.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-08">
                    <div class="img-box">
                        <img src="/images/polar_item_08.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-09">
                    <div class="img-box">
                        <img src="/images/polar_item_09.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-10">
                    <div class="img-box">
                        <img src="/images/polar_item_10.png" alt="" class="img">
                    </div>
                    <div class="hover-box">
                        <div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Dip
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                &#45;&#45;00.&#45;&#45;00.
                            </p>
                        </div>
                    </div>
                </div>
            </div>-->

            <!-- <div class="polar-area-chart">
                <div class="polar-area-chart-item polar-area-chart-item-01">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-02">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-03">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-04">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-05">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-06">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-07">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-08">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-09">
                    <div class="img"></div>
                </div>
                <div class="polar-area-chart-item polar-area-chart-item-10">
                    <div class="img"></div>
                </div>
            </div> -->

        </div>

    </div>
</div>

@include('user.components.sub_gnb')

<script>
    $(".polar-area-chart").html("");

    axios.get(window.domain + "/api/firewalls/dashboard")
        .then(response => {
            // IPS / C&C 좌측 하단 차트 그리기

            var cncs = response.data.data.cncs;

            cncs.sort((a,b) => b.count - a.count);

            cncs.map((item, index) => {
                $(".polar-area-chart#tab_01").append(`<div class="polar-area-chart-item polar-area-chart-item-0${index + 1}">
        <div class="img-box"></div>
        <div class="hover-box"></div>
</div>`);

                $(`.polar-area-chart#tab_01 .polar-area-chart-item-0${index + 1} .img-box`).append(`<img src="/images/polar_item_0${index + 1}.png" />`);
                $(`.polar-area-chart#tab_01 .polar-area-chart-item-0${index + 1} .hover-box`).append(`<div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                ${item.sip}
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                ${item.count}
                            </p>
                        </div>`);
            });

            var ipses = response.data.data.ipses;

            ipses.sort((a,b) => b.count - a.count);

            $(".dashboard-table-ips tbody").html("");
            ipses.map((item, index) => {
                $(".polar-area-chart#tab_02").append(`<div class="polar-area-chart-item polar-area-chart-item-0${index + 1}">
        <div class="img-box"></div>
        <div class="hover-box"></div>
</div>`);

                $(`.polar-area-chart#tab_02 .polar-area-chart-item-0${index + 1} .img-box`).append(`<img src="/images/polar_item_0${index + 1}.png" />`);
                $(`.polar-area-chart#tab_02 .polar-area-chart-item-0${index + 1} .hover-box`).append(`<div class="detail-group">
                            <p class="title">
                                Sip
                            </p>
                            <p class="txt">
                                ${item.sip}
                            </p>
                        </div>
                        <div class="detail-group">
                            <p class="title">
                                Count
                            </p>
                            <p class="txt">
                                ${item.count}
                            </p>
                        </div>`);
            });
        })

</script>

