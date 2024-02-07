<div class="gnb-container" id="main-menu-gnb">
    <div class="header-utc-wrap col-group">
        <p class="utc">
            UTC
        </p>
        <p class="utc-txt">
            23.09.18 17:53
        </p>
    </div>

    <div class="gnb-wrap row-group active">
        <div class="gnb-title col-group">
            <img src="/images/icon_mainmenu.png" alt="" class="icon">
            MAIN MENU
        </div>
        <div class="gnb-menu-list row-group">

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    Firewall
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>

                <div class="sub-gnb-menu-list row-group">
                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Policy
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('firewall.policy') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    IPv4 Policy
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            NAT
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('firewall.nat') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    NAT Policy
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    NAC
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>

                <div class="sub-gnb-menu-list row-group">
                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Management
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('nac.node') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    Node
                                </div>
                            </a>
                            <a href="{{ route('nac.ip-address') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    IP Address
                                </div>
                            </a>
                            <a href="{{ route('nac.wlan') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    WLAN
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Log
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('nac.log') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    Log
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            System
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('nac.license') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    License
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    NMS
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>

                <div class="sub-gnb-menu-list row-group">

                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Devices
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('nms.devices') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    All
                                </div>
                            </a>
{{--                            <a href="{{ route('nms.favorite-devices') }}" class="sub-gnb-menu">--}}
{{--                                <div class="sub-gnb-menu-title col-group">--}}
{{--                                    Favorite Devices--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="{{ route('nms.dependencies') }}" class="sub-gnb-menu">--}}
{{--                                <div class="sub-gnb-menu-title col-group">--}}
{{--                                    Dependencies--}}
{{--                                </div>--}}
{{--                            </a>--}}
                        </div>
                    </div>

                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Reports
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('nms.reports') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    All
                                </div>
                            </a>
{{--                            <a href="{{ route('nms.add-report') }}" class="sub-gnb-menu">--}}
{{--                                <div class="sub-gnb-menu-title col-group">--}}
{{--                                    Add Report--}}
{{--                                </div>--}}
{{--                            </a>--}}
                        </div>
                    </div>

                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Logs
                            <i class="xi-angle-down-min icon toggle-icon"></i>
                        </div>

                        <div class="sub-gnb-menu-list row-group">
                            <a href="{{ route('nms.logs') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    All
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="gnb-menu">
                <a href="{{ route('log.index') }}" class="gnb-menu-title col-group">
                    Log
                </a>
            </div>

        </div>
    </div>
</div>

<div class="gnb-container" id="quick-function-gnb">
    <div class="header-utc-wrap col-group">
        <p class="utc">
            UTC
        </p>
        <p class="utc-txt">
            23.09.18 17:53
        </p>
    </div>

    <div class="gnb-wrap row-group active">
        <div class="gnb-title col-group">
            <img src="/images/icon_quickfunction.png" alt="" class="icon">
            Quick Function
        </div>
        <div class="gnb-menu-list row-group">

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    Security Control
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>

                <div class="sub-gnb-menu-list row-group">
                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group allowed-devices">
                            Allowed Devices
                            <span class="badge">0</span>
                        </div>
                    </div>
                    <div class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group blocked-devices">
                            Blocked Devices
                            <span class="badge">0</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="gnb-container" id="information-gnb">
    <div class="header-utc-wrap col-group">
        <p class="utc">
            UTC
        </p>
        <p class="utc-txt">
            23.09.18 17:53
        </p>
    </div>

    <div class="gnb-wrap row-group active">
        <div class="gnb-title col-group">
            <img src="/images/icon_information.png" alt="" class="icon">
            Information for the Ship System
        </div>
        <div class="gnb-menu-list row-group">
            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    Identify
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>

                <div class="sub-gnb-menu-list row-group">
                    <a href="{{ route('information.hardware') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Hardware
                        </div>
                    </a>
                    <a href="{{ route('information.software') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Software
                        </div>
                    </a>
                </div>
            </div>

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    Protect
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>
                <div class="sub-gnb-menu-list row-group">
                    <a href="{{ route('information.safe-guard') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            SafeGuard
                        </div>
                    </a>
                    <a href="{{ route('information.security-zone') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Security Zone
                        </div>
                    </a>
                    <a href="{{ route('information.access-control') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Access Control
                        </div>
                    </a>
                    <a href="{{ route('information.wireless') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Wireless
                        </div>
                    </a>
                    <a href="{{ route('information.mobile-portable') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Mobile and Portable
                        </div>
                    </a>
                </div>
            </div>

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    Detect
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>
            </div>

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    Response
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>

                <div class="sub-gnb-menu-list row-group">
                    <a href="{{ route('information.incident') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Incident response plan
                        </div>
                    </a>
                    <a href="{{ route('information.manual') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Manual operation
                        </div>
                    </a>
                    <a href="{{ route('information.network') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Network Isolation
                        </div>
                    </a>
                    <a href="{{ route('information.minimal') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Minimal risk condition
                        </div>
                    </a>
                </div>
            </div>

            <div class="gnb-menu">
                <div class="gnb-menu-title col-group">
                    Recover
                    <i class="xi-angle-down-min icon toggle-icon"></i>
                </div>
                <div class="sub-gnb-menu-list row-group">
                    <a href="{{ route('information.recovery') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Recovery Plan
                        </div>
                    </a>
                    <a href="{{ route('information.backup') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Backup and restore capability
                        </div>
                    </a>
                    <a href="{{ route('information.shutdown') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Shutdown, Reset, Roll-Back, Restart
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Allowed Devices -->
<div class="modal-container allowed-devices-wrap" style="display: none;">
    <div class="modal-wrap">
        <div class="modal-title">
            Allowed devices
            <i class="xi-close close-btn"></i>
        </div>

        <div class="modal-table-container">
            <div class="modal-table-wrap account-table-wrap">
                <table>
                    <colgroup>
                        <col width="78px">
                        <col width="90px">
                        <col width="170px">
                        <col width="200px">
                        <col width="80px">
                    </colgroup>
                    <thead>
                    <th>
                        host
                    </th>
                    <th>
                        IP
                    </th>
                    <th>
                        Device
                    </th>
                    <th>
                        MAC
                    </th>
                    <th>
                        Status
                    </th>
                    <th></th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

        <!--        <div class="dashboard-form-btn-wrap col-group">
            <button class="dashboard-form-btn">
                Blocked
            </button>
        </div>-->
    </div>
</div>

<!-- blocked Devices -->
<div class="modal-container blocked-devices-wrap" style="display: none;">
    <div class="modal-wrap">
        <div class="modal-title">
            Blocked devices
            <i class="xi-close close-btn"></i>
        </div>

        <div class="modal-table-container">
            <div class="modal-table-wrap account-table-wrap">
                <table>
                    <colgroup>
                        <col width="78px">
                        <col width="90px">
                        <col width="170px">
                        <col width="200px">
                        <col width="80px">
                    </colgroup>
                    <thead>
                    <th>
                        host
                    </th>
                    <th>
                        IP
                    </th>
                    <th>
                        Device
                    </th>
                    <th>
                        MAC
                    </th>
                    <th>
                        Status
                    </th>
                    <th></th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <!--        <div class="dashboard-form-btn-wrap col-group">
            <button class="dashboard-form-btn">
                Allow
            </button>
        </div>-->
    </div>
</div>
<script>
    // window.domain = "http://localhost:8000";
    // window.domain = "http://localhost:90";
    window.domain = "http://hi-secure.ufeed.co.kr";
</script>
<script>
    var pathname = window.location.pathname;
    var firstUrl = pathname.split('/')[1];

    document.querySelectorAll('.header-menu-btn').forEach(function (item) {
        if (firstUrl === item.id) {
            item.classList.add('active')
        }
    });

    document.querySelectorAll('a.sub-gnb-menu, a.gnb-menu-title').forEach(function (item) {
        if (pathname === item.pathname) {
            item.classList.add('active');
            item.closest('.gnb-menu').classList.add('active');
            item.closest('.gnb-container').classList.add('active');
            item.parentElement.closest('.sub-gnb-menu').classList.add('active');
        }
    });
</script>
<script>
    function setTimer() {
        var now = new Date();

        var year = now.getUTCFullYear();
        var month = ('0' + (now.getUTCMonth() + 1)).slice(-2);
        var day = ('0' + now.getUTCDate()).slice(-2);
        var hours = ('0' + now.getUTCHours()).slice(-2);
        var minutes = ('0' + now.getUTCMinutes()).slice(-2);
        var seconds = ('0' + now.getUTCSeconds()).slice(-2);

        var formattedDate = year + '.' + month + '.' + day + ' ' + hours + ':' + minutes + ":" + seconds;

        $(".utc-txt").text(formattedDate);

    }

    setTimer();
    setInterval(function () {
        setTimer();
    }, 1000);
</script>
<script>

    function openLoading(){
        $("html").append('<span class="loader"></span>')
    }

    function closeLoading(){
        $(".loader").remove();
    }

    // 팝업창 제어
    $/*(".m-script-pop").click(function (){
        var target = $(this).attr("data-target");

        $(target).toggle();
    });*/
</script>
<script>
    // 중메뉴 타이틀(gnb-menu-title)누르면 중메뉴(gnb-menu) 열림(active 추가)
    // (누른 메뉴 제외하고 다른 메뉴 닫힘)
    const gnbMenuTitles = document.querySelectorAll('.gnb-menu-title');

    gnbMenuTitles.forEach((gnbMenuTitle) => {
        gnbMenuTitle.addEventListener('click', function () {
            const gnbWrap = this.parentElement;

            document.querySelectorAll('.gnb-menu').forEach((wrap) => {
                if (wrap !== gnbWrap) {
                    wrap.classList.remove('active');
                }
            });

            if (gnbWrap.classList.contains('dashboard_href')) {
                document.querySelector('.subpage').classList.add('active');
            }

            gnbWrap.classList.toggle('active');
        });
    });

    // 소메뉴 타이틀(sub-gnb-menu-title)누르면 중메뉴(sub-gnb-menu) 열림(active 추가)
    // (누른 메뉴 제외하고 다른 메뉴 닫힘)
    const subGnbMenuTitles = document.querySelectorAll('.sub-gnb-menu-title');

    subGnbMenuTitles.forEach((subGnbMenuTitle) => {
        subGnbMenuTitle.addEventListener('click', function () {

            const subGnbMenu = this.parentElement;

            subGnbMenu.classList.toggle('active');

            const subGnbMenuList = subGnbMenu.querySelector('.sub-gnb-menu-list');
            if (subGnbMenuList) {
                subGnbMenuList.style.display = subGnbMenu.classList.contains('active') ? 'block' : 'none';
            }

            const siblings = subGnbMenu.parentElement.querySelectorAll('.sub-gnb-menu');
            siblings.forEach((sibling) => {
                if (sibling !== subGnbMenu) {
                    sibling.classList.remove('active');

                    const siblingList = sibling.querySelector('.sub-gnb-menu-list');
                    if (siblingList) {
                        siblingList.style.display = 'none';
                    }
                }
            });
        });
    });

    //polar-area-chart tab
    $('.dashboard-gnb-tab').click(function () {
        $('.dashboard-gnb-tab').removeClass('active');
        $(this).addClass('active');

        var data_tab = $(this).attr('data-tab');

        $('.polar-area-chart').hide();
        $('.polar-area-chart#' + data_tab).fadeIn(300);
    });
</script>
<script>


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
                var rankingTraffics = response.data.data.rankingTraffics;

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

        axios.get(window.domain + "/api/firewalls/dashboard")
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

                $(".dashboard-table-cnc tbody").html("");

                var cncs = response.data.data.cncs;

                cncs.map(cnc => {
                    $(".dashboard-table-cnc tbody").append(`<tr><td>${cnc.sip}</td><td>${cnc.dip}</td><td>${cnc.count}</td><tr/>`);
                });

                var ipses = response.data.data.ipses;

                $(".dashboard-table-ips tbody").html("");
                ipses.map(ips => {
                    $(".dashboard-table-ips tbody").append(`
                        <tr>
                            <td><div class="state state-bar"></div></td>
                            <td>${ips.key}</td>
                            <td>${ips.count}</td>
                        <tr/>
                    `);
                });

                var malwares = response.data.data.malwares;

                $(".dashboard-table-malwares tbody").html("");
                malwares.map(malware => {
                    $(".dashboard-table-malwares tbody").append(`
                        <tr>
                            <td>${malware.data.virusname}</td>
                            <td>${malware.address}</td>
                        <tr/>
                    `);
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

    var firstSwiper = true;
    var swiper = null;

    function getAlarms() {
        axios.get("/api/alarms")
            .then(response => {
                var items = response.data.data;

                if (firstSwiper && items.length === 0) {
                    $(".m-swiper.type01").hide();

                    firstSwiper = false;
                }

                if (items.length > 0) {
                    if (swiper)
                        swiper.destroy();

                    $(".m-swiper.type01").show();

                    items.map(item => {
                        $(".m-swiper.type01 .swiper-wrapper").append(`
                    <div class="swiper-slide">
                        <div class="m-swiper-title">${item.device} <button class="btn-close"><i class="xi-close"></i></button></div>
                        <div class="m-swiper-bodies">

                                  <div class="swiper-body">
                            <div class="swiper-body-head">Name :</div>
                            <div class="swiper-body-content">${item.name}</div>
                        </div>
                        <div class="swiper-body">
                            <div class="swiper-body-head">IP :</div>
                            <div class="swiper-body-content">${item.host}</div>
                        </div>
                        <div class="swiper-body">
                            <div class="swiper-body-head">Status :</div>
                            <div class="swiper-body-content">${item.status}</div>
                        </div>

                        <div class="swiper-body">
                            <div class="swiper-body-head">Value :</div>
                            <div class="swiper-body-content">${item.value}</div>
                        </div>
                        </div>
                    </div>
                    `)
                    });

                    $(".m-swiper.type01 .btn-close").unbind("click").bind("click", function () {
                        $(".m-swiper.type01 .swiper-wrapper").html("");
                        $(".m-swiper").hide();
                    });

                    swiper = new Swiper('.m-swiper.type01 .swiper-container', {
                        slidesPerView: 1,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true, // Allow clicking on pagination bullets
                        },
                        navigation: {
                            nextEl: '.swiper-btn-next',
                            prevEl: '.swiper-btn-prev',
                        },
                    });
                }

            });
    }

    setInterval(function () {
        // getAlarms();
    }, 5000);

    // getAlarms();
</script>
<script>

    //모달 닫기//
    $('.modal-container .close-btn').click(function () {
        $(this).closest('.modal-container').fadeOut();
    });

    //모달 열기//
    //Allowed Devices
    $('.allowed-devices').click(function () {
        $('.allowed-devices-wrap').fadeIn();
    });

    //Blocked Devices
    $('.blocked-devices').click(function () {
        $('.blocked-devices-wrap').fadeIn();
    });

    function getAllows() {
        axios.get("/api/nac/allows")
            .then(response => {
                closeLoading();
                var result = response.data.data;

                var count = result.total;
                var items = result.result;

                $(".allowed-devices .badge").text(count);

                $(".allowed-devices-wrap tbody").html("");

                items.map(item => {
                    $(".allowed-devices-wrap tbody").append(`<tr>
<td>${item.NL_SIFNAME}</td>
<td>${item.NL_IPSTR}</td>
<td>${item.NL_PLATFORM}</td>
<td>${item.NL_MAC}</td>
<td><span class="state ${item.NL_STATUS == 0 ? 'green' : 'red'}"></span></td>
<td><button class="m-btn type01" data-value="${item.NL_IPSTR}">BLOCK</button></td>
</tr>`)
                });

                $(".allowed-devices-wrap tbody .m-btn").unbind("click").bind("click", function () {
                    var ip = $(this).attr("data-value");

                    openLoading();

                    axios.post("/api/nac/blocks", {
                        ip: ip
                    }).then(response => {
                        getAllows();
                        getBlocks();
                    });
                });

            })
    }

    function getBlocks() {
        axios.get("/api/nac/blocks")
            .then(response => {
                closeLoading();
                var result = response.data.data;

                var count = result.total;
                var items = result.result;

                console.log(items);
                $(".blocked-devices .badge").text(count);

                $(".blocked-devices-wrap tbody").html("");

                items.map(item => {
                    $(".blocked-devices-wrap tbody").append(`<tr>
<td>${item.NL_SIFNAME}</td>
<td>${item.NL_IPSTR}</td>
<td>${item.NL_PLATFORM}</td>
<td>${item.NL_MAC}</td>
<td><span class="state red"></span></td>
<td><button class="m-btn type01" data-value="${item.NL_IPSTR}">ALLOW</button></td>
</tr>`)
                });

                $(".blocked-devices-wrap tbody .m-btn").unbind("click").bind("click", function () {
                    var ip = $(this).attr("data-value");

                    openLoading();

                    axios.post("/api/nac/allows", {
                        ip: ip
                    }).then(response => {
                        getAllows();
                        getBlocks();
                    });
                });
            })
    }

    getBlocks();

    getAllows();
</script>
