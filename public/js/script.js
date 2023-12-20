// window.domain = "118.130.110.156";
// window.domain = "121.189.254.119";

$(document).ready(function(){
    //헤더 푸터 컴포넌트
    $('#header').load('components/header.html', function (){
        let user = localStorage.getItem("user");

        if(user)
            user = JSON.parse(user);

        if(!user)
            user = {
                ids: "Admin"
            };

        $(".header-menu-btn .text").text(user.ids);
    });

    $('#footer').load('components/footer.html');

    //대시보드 메뉴
    $('#gnb').load('components/dashboard_gnb.html', function (){
        // 메뉴 제어
        let pathname = location.pathname;

        let gnbs = $(".gnb a");

        gnbs.each((index, gnb) => {
            if(pathname.includes($(gnb).attr("href"))) {
                $(gnb).addClass("active");
                $(gnb).parents(".gnb-menu").addClass("active");
                $(gnb).parents(".gnb-wrap").addClass("active");
                $(gnb).parents(".sub-gnb-menu").addClass("active");
            }
        })
    });



    // 팝업창 제어
    $(".m-script-pop").click(function (){
        let target = $(this).attr("data-target");

        $(target).toggle();
    });


})



