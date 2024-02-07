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

    //Real-Time Notification Status 열고닫기
    $('.down-btn').click(function () {
        $(this).closest('.dashboard-gnb-wrap').toggleClass('active');
    });

    // 탭
    const tabs = document.querySelectorAll('.dashboard-section-tab');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const parent = this.parentElement;
            const tabContents = parent.querySelectorAll('.dashboard-section-tab');

            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            this.classList.add('active');
        });
    });

    //대시보드 확대축소버튼
    const scalingBox = $('.device-wrap');
    var currentScale = 1.0;
    var minScale = 1.0;

    $('.renew-btn').on('click', function () {
        currentScale = minScale;
        scalingBox.css('transform', 'scale(' + currentScale + ')');
    });

    $('.plus-btn').on('click', function () {
        if (currentScale < 1.9) {
            currentScale += 0.3;
            scalingBox.css('transform', 'scale(' + currentScale + ')');
        }
    });

    $('.minus-btn').on('click', function () {
        if (currentScale > 1.0) {
            currentScale -= 0.3;

            if (currentScale < minScale)
                currentScale = minScale;

            scalingBox.css('transform', 'scale(' + currentScale + ')');
        }
    });


    function clearTime(timeString) {
        // 주어진 시간 문자열을 Date 객체로 변환
        var timeArray = timeString.split(':');
        var dateObject = new Date();
        dateObject.setHours(parseInt(timeArray[0], 10));
        dateObject.setMinutes(parseInt(timeArray[1], 10));
        dateObject.setSeconds(parseInt(timeArray[2], 10));

        // 분을 5분 단위로 반올림
        var minutes = dateObject.getMinutes();
        var roundedMinutes = Math.ceil(minutes / 5) * 5;

        // 60분이 되면 시간을 1 늘리고 분은 0으로 설정
        if (roundedMinutes === 60) {
            dateObject.setHours(dateObject.getHours() + 1);
            roundedMinutes = 0;
        }

        dateObject.setMinutes(roundedMinutes);
        dateObject.setSeconds(0);

        // 시, 분, 초를 문자열로 변환하여 리턴
        var formattedTime = dateObject.getHours().toString().padStart(2, '0') + ':' +
            dateObject.getMinutes().toString().padStart(2, '0') + ':' +
            dateObject.getSeconds().toString().padStart(2, '0');

        return formattedTime;
    }

    /* function storeHistories(){
        axios.post(window.domain + "/api/histories");
    } */

    var first = true;

    function getHistories() {
        axios.get("/api/histories")
            .then(response => {
                var devices = response.data.data.devices;
                var realTimeNotifications = response.data.data.realTimeNotifications;
                var realTimeTraffics = response.data.data.realTimeTraffics;
                var rankingTraffics = response.data.data.rankingTraffics.slice(0, 10);

                // # STANDARD ==========
                var counts = {
                    up: 0,
                    down: 0,
                    warning: 0,
                    unusual: 0,
                };

                $(".device-wrap").find(".device").remove();

                $(".modal-devices-up tbody").html("");
                $(".modal-devices-down tbody").html("");
                $(".modal-devices-critical tbody").html("");
                $(".modal-devices-warning tbody").html("");

                devices.map(device => {
                    // $(".device-wrap").append(`<div class="device ${device.status} device-${device.title} ${device.title.includes('OT') ? 'device-OT' : ''}" style="left:${device.left}%;top:${device.top}%"></div>`);

                    if (device.status === "Up") {
                        counts.up += 1;
                        $(".modal-devices-up tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }

                    if (device.status === "Down") {
                        counts.down += 1;
                        $(".modal-devices-down tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }

                    if (device.status === "Unusual") {
                        counts.unusual += 1;
                        $(".modal-devices-critical tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }

                    if (device.status === "Warning") {
                        counts.warning += 1;
                        $(".modal-devices-warning tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }
                });

                $(".dashboard-standard-item.up").find(".num").text(counts.up);
                $(".dashboard-standard-item.down").find(".num").text(counts.down);
                $(".dashboard-standard-item.warning").find(".num").text(counts.warning);
                $(".dashboard-standard-item.critical").find(".num").text(counts.unusual);

                drawChart(realTimeTraffics);

                if(first) {
                    first = false;

                    // # Real-time traffic ========
                    drawChart(realTimeTraffics);
                }

                // # Traffic Top 10 ========
                $(".traffic-top-wrap").html("");
                var topNum = 0;
                rankingTraffics.map(rankingTraffic => {
                    topNum++;
                    var html = `<div class="traffic-top-item">
                        <div class="num">${topNum}</div>
                        <div class="txt-wrap">
                            <div class="txt-group">
                                <p class="name">
                                    ${rankingTraffic.title}
                                </p>
<!--                                <p class="ip">-->
<!--                                    192.168.0.176-->
<!--                                </p>-->
                            </div>
                            <p class="byte">
                                ${parseInt(((parseInt(rankingTraffic.byte) * 8) / 1000000).toFixed(1)).toLocaleString()} Mbps
                            </p>
                        </div>
                    </div>`;

                    $(".traffic-top-wrap").append(html);
                });


                // # Real-time notofication status ======
                if (realTimeNotifications.length > 0) {

                    $(".real-time-status-list").html("");

                    realTimeNotifications.map(item => {

                        /*if(item.status == "Unusual") {

                            item.status = "Warning";

                        }*/

                        $(".real-time-status-list").append(`<div class="real-time-status-item ${item.status}">
                                                                <div class="title-wrap">
                                                                    <div class="state">
                                                                        ${item.status}
                                                                    </div>
                                                                    <p class="title">
                                                                        ${item.device.title}
                                                                    </p>
                                                                </div>
                                                                <p class="txt">
                                                                    ${item.message}
                                                                </p>
                                                            </div>`
                        );

                    });

                }
            });
    }

    function getDashboard() {
        // 좌측 하단 원형차트 그리기

        axios.get("/api/firewalls/dashboard")
            .then(response => {
                var traffics = response.data.data.traffics;

                $(".dashboard-table-traffic tbody").html("");
                traffics.map(traffic => {
                    $(".dashboard-table-traffic tbody").append(`
                        <tr>
                            <td><div class="state state-bar"></div></td>
                            <td>${traffic.key}</td>
                            <td>${traffic.avg} KB</td>
                        <tr/>
                    `);
                });

                var counts = response.data.data;

                var countsWrapArr = document.querySelectorAll('.protection-item'); // 24-02-01 추가

                countsWrapArr[0].querySelector('.num').innerText = counts.count_ddos;
                countsWrapArr[1].querySelector('.num').innerText = counts.count_malware;
                countsWrapArr[2].querySelector('.num').innerText = counts.count_ips;



                // IPS / C&C 좌측 하단 차트 그리기
                $(".polar-area-chart").html("");

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
    }

    var chart = null;

    function drawChart(deviceTraffics) {
        var colors = [
            "#502ecf",
            "#359832",
            "#84818F",
            "#CFC786",
            "#7A7763",
            "#39334F",
            "#68637A",
            "#967AFA",
            "#23FA84",
        ]

        //차트
        const main_ctx = document.getElementById('chart');

        var firstDeviceTraffic = deviceTraffics[0];

        var datasets = deviceTraffics.map((deviceTraffic, index) => {


            return {
                label: deviceTraffic.device.title,
                data: deviceTraffic.traffics.map(traffic => Math.floor(parseInt(traffic.byte) / 1024)),
                borderWidth: 1,
                borderColor: colors[index],
                tension: 0.4 //곡선그래프
            };
        });

        if (chart) {
            chart.destroy();

            chart = null;
        }

        chart = new Chart(main_ctx, {
            type: 'line',
            data: {
                // labels: firstDeviceTraffic.traffics.map((traffic) => clearTime(traffic.date)),
                labels: firstDeviceTraffic.traffics.map((traffic) => traffic.date),
                datasets: datasets
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 20,
                            font: function () {
                                return {
                                    size: 10,
                                    family: 'Pretendard'
                                }
                            },
                        }
                    },
                    x: {
                        ticks: {
                            font: function () {
                                return {
                                    size: 10,
                                    family: 'Pretendard'
                                }
                            },
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            font: function () {
                                return {
                                    size: 10,
                                    family: 'Pretendard'
                                }
                            },
                            boxWidth: 6,
                            boxHeight: 6,
                        },
                        position: 'top',
                        fullWidth: false,
                    },
                }
            },
            elements: {
                point: {
                    radius: 0, //선형 그래프 포인트 삭제
                },
            },
        });
    }

    getHistories();
    getDashboard();

    setInterval(() => {
        getHistories();
        getDashboard();
    }, 10000);
</script>

