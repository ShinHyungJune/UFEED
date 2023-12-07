// window.domain = "118.130.110.156";
// window.domain = "121.189.254.119";

$(document).ready(function(){
    //헤더 푸터 컴포넌트
    $('#header').load('components/header.html');
    $('#footer').load('components/footer.html');

    //대시보드 메뉴
    $('#gnb').load('components/dashboard_gnb.html');
})
