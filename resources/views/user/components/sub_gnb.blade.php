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
                                    IPv4 Interface-based NAT
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
                            <a href="{{ route('nms.favorite-devices') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    Favorite Devices
                                </div>
                            </a>
                            <a href="{{ route('nms.dependencies') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    Dependencies
                                </div>
                            </a>
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
                            <a href="{{ route('nms.add-report') }}" class="sub-gnb-menu">
                                <div class="sub-gnb-menu-title col-group">
                                    Add Report
                                </div>
                            </a>
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
                            Wireleess
                        </div>
                    </a>
                    <a href="{{ route('information.mobile-portable') }}" class="sub-gnb-menu">
                        <div class="sub-gnb-menu-title col-group">
                            Mobile and Portable
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
            <div class="modal-table-wrap dashboard-table-wrap">
                <table>
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
            <div class="modal-table-wrap dashboard-table-wrap">
                <table>
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
    let pathname = window.location.pathname;
    let firstUrl = pathname.split('/')[1];

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
        let target = $(this).attr("data-target");

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
                let result = response.data.data;

                let count = result.total;
                let items = result.result;

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
                    let ip = $(this).attr("data-value");

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
                let result = response.data.data;

                let count = result.total;
                let items = result.result;

                console.log(items);
                $(".blocked-devices .badge").text(count);

                $(".blocked-devices-wrap tbody").html("");

                items.map(item => {
                    $(".blocked-devices-wrap tbody").append(`<tr>
<td>${item.NL_SIFNAME}</td>
<td>${item.NL_IPSTR}</td>
<td>${item.NL_PLATFORM}</td>
<td>${item.NL_MAC}</td>
<td><span class="state ${item.NL_STATUS == 0 ? 'green' : 'red'}"></span></td>
<td><button class="m-btn type01" data-value="${item.NL_IPSTR}">ALLOW</button></td>
</tr>`)
                });

                $(".blocked-devices-wrap tbody .m-btn").unbind("click").bind("click", function () {
                    let ip = $(this).attr("data-value");

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
