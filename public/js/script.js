
window.domain = "http://localhost:90";
// window.domain = "http://hi-secure.ufeed.co.kr";
function openLoading(){
    $("html").append('<span class="loader"></span>')
}

function closeLoading(){
    $(".loader").remove();
}

$(document).ready(function(){


    /*//헤더 푸터 컴포넌트
    $('#header').load('components/header.html', function (){
        let user = localStorage.getItem("user");

        if(user)
            user = JSON.parse(user);

        if(!user)
            user = {
                ids: "Admin"
            };

        $(".header-menu-btn .text").text(user.ids);

        function setTimer(){
            var now = new Date();

            var year = now.getUTCFullYear();
            var month = ('0' + (now.getUTCMonth() + 1)).slice(-2);
            var day = ('0' + now.getUTCDate()).slice(-2);
            var hours = ('0' + now.getUTCHours()).slice(-2);
            var minutes = ('0' + now.getUTCMinutes()).slice(-2);

            var formattedDate = year + '.' + month + '.' + day + ' ' + hours + ':' + minutes;

            $(".utc-txt").text(formattedDate);

        }

        setTimer();
        setInterval(function (){
            setTimer();
        }, 1000);

        $('.header-menu-btn').click(function(){
            $('.header-menu-btn').removeClass('active');
            $(this).addClass('active');

            var dataGnb = $(this).attr('data-gnb');

            $('.gnb-container').removeClass('active');
            $('.gnb-container#'+dataGnb).addClass('active');
        });
    });

    $('#footer').load('components/footer.html');

    //대시보드 메뉴
    $('#dashboard_gnb').load('components/dashboard_detail_gnb.html', function (){});

    $('#gnb').load('components/gnb.html', function (){
        // 메뉴 제어
        let pathname = location.pathname;

        let gnbs = $(".gnb-container a");


        gnbs.each((index, gnb) => {
            if(!$(gnb).attr("href").includes("prepare") && pathname.includes($(gnb).attr("href"))) {
                $(gnb).addClass("active");
                $(gnb).parents(".gnb-menu").addClass("active");
                $(gnb).parents(".gnb-wrap").addClass("active");
                $(gnb).parents(".sub-gnb-menu").addClass("active");
                $(gnb).closest(".gnb-container").addClass("active");
            }
        })
    });*/

    // 팝업창 제어
    $(".m-script-pop").bind("click").unbind("click", (function (){
        alert("1");
        let target = $(this).attr("data-target");

        $(target).toggle();
    });
})



let chart = null;

function drawChart(deviceTraffics) {
    let colors = [
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

    console.log(deviceTraffics);
    let firstDeviceTraffic = deviceTraffics[0];

    let datasets = deviceTraffics.map((deviceTraffic, index) => {
        return {
            label: deviceTraffic.device.title,
            data: deviceTraffic.traffics.map(traffic => Math.floor(parseInt(traffic.byte) / 1024)),
            borderWidth: 2,
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
            labels: firstDeviceTraffic.traffics.map((traffic) => clearTime(traffic.date)),
            datasets: datasets
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    min: 0,
                    ticks: {
                        stepSize: 20, //y축 단위
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
                                size: 9,
                                family: 'Pretendard'
                            }
                        },
                        boxWidth: 6,
                        boxHeight: 6,
                    },
                    position: 'top',
                    fullWidth: false,
                },
            },
            elements: {
                point: {
                    radius: 0, //선형 그래프 포인트 삭제
                },
            },
        },

    });
}
