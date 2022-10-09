@extends('welcome')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Default</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://laravel.pixelstrap.com/cuba/dashboard/index"
                                data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Defaults (Dubai)</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row second-chart-list third-news-update">
            <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                <div class="card o-hidden profile-greeting">
                    <div class="card-body">
                        <div class="media">
                            <div class="badge-groups w-100">
                                <div class="badge f-12"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-clock me-1">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg><span id="txt"></span></div>
                                <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                            </div>
                        </div>
                        <div class="greeting-user text-center">
                            <div class="profile-vector"><img class="img-fluid"
                                    src="https://laravel.pixelstrap.com/cuba/assets/images/dashboard/welcome.png"
                                    alt=""></div>
                            <h4 class="f-w-600"><span id="greeting">Good Afternoon</span> <span class="right-circle"><i
                                        class="fa fa-check-circle f-14 middle"></i></span></h4>
                            <p><span> Today's earrning is $405 &amp; your sales increase rate is 3.7 over the last 24
                                    hours</span></p>
                            <div class="whatsnew-btn"><a class="btn btn-primary" data-bs-original-title=""
                                    title="">Whats New !</a></div>
                            <div class="left-icon"><i class="fa fa-bell"> </i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
                <div class="card earning-card">
                    <div class="card-body p-0">
                        <div class="row m-0">
                            <div class="col-xl-3 earning-content p-0">
                                <div class="row m-0 chart-left">
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>Dashboard</h5>
                                        <p class="font-roboto">Overview of last month</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>$4055.56 </h5>
                                        <p class="font-roboto">This Month Earning</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>$1004.11</h5>
                                        <p class="font-roboto">This Month Profit</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>90%</h5>
                                        <p class="font-roboto">This Month Sale</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient"
                                            data-bs-original-title="" title="">Summary</a></div>
                                </div>
                            </div>
                            <div class="col-xl-9 p-0">
                                <div class="chart-right">
                                    <div class="row m-0 p-tb">
                                        <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                                            <div class="inner-top-left">
                                                <ul class="d-flex list-unstyled">
                                                    <li>Daily</li>
                                                    <li class="active">Weekly</li>
                                                    <li>Monthly</li>
                                                    <li>Yearly</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                                            <div class="inner-top-right">
                                                <ul class="d-flex list-unstyled justify-content-end">
                                                    <li>Online</li>
                                                    <li>Store</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <div class="current-sale-container" style="position: relative;">
                                                    <div id="chart-currently" style="min-height: 255px;">
                                                        <div id="apexchartskdkwc8nqf"
                                                            class="apexcharts-canvas apexchartskdkwc8nqf light"
                                                            style="width: 849px; height: 240px;"><svg id="SvgjsSvg1226"
                                                                width="849" height="240"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                                transform="translate(0, 0)"
                                                                style="background: transparent;">
                                                                <g id="SvgjsG1228"
                                                                    class="apexcharts-inner apexcharts-graphical"
                                                                    transform="translate(0, -10)">
                                                                    <defs id="SvgjsDefs1227">
                                                                        <clipPath id="gridRectMaskkdkwc8nqf">
                                                                            <rect id="SvgjsRect1232" width="853"
                                                                                height="229" x="-2" y="-2" rx="0" ry="0"
                                                                                fill="#ffffff" opacity="1"
                                                                                stroke-width="0" stroke="none"
                                                                                stroke-dasharray="0"></rect>
                                                                        </clipPath>
                                                                        <clipPath id="gridRectMarkerMaskkdkwc8nqf">
                                                                            <rect id="SvgjsRect1233" width="851"
                                                                                height="227" x="-1" y="-1" rx="0" ry="0"
                                                                                fill="#ffffff" opacity="1"
                                                                                stroke-width="0" stroke="none"
                                                                                stroke-dasharray="0"></rect>
                                                                        </clipPath>
                                                                        <linearGradient id="SvgjsLinearGradient1239"
                                                                            x1="0" y1="0" x2="0" y2="1">
                                                                            <stop id="SvgjsStop1240" stop-opacity="0.7"
                                                                                stop-color="rgba(115,102,255,0.7)"
                                                                                offset="0"></stop>
                                                                            <stop id="SvgjsStop1241" stop-opacity="0.5"
                                                                                stop-color="rgba(255,255,255,0.5)"
                                                                                offset="0.8"></stop>
                                                                            <stop id="SvgjsStop1242" stop-opacity="0.5"
                                                                                stop-color="rgba(255,255,255,0.5)"
                                                                                offset="1"></stop>
                                                                        </linearGradient>
                                                                        <linearGradient id="SvgjsLinearGradient1248"
                                                                            x1="0" y1="0" x2="0" y2="1">
                                                                            <stop id="SvgjsStop1249" stop-opacity="0.7"
                                                                                stop-color="rgba(247,49,100,0.7)"
                                                                                offset="0"></stop>
                                                                            <stop id="SvgjsStop1250" stop-opacity="0.5"
                                                                                stop-color="rgba(255,255,255,0.5)"
                                                                                offset="0.8"></stop>
                                                                            <stop id="SvgjsStop1251" stop-opacity="0.5"
                                                                                stop-color="rgba(255,255,255,0.5)"
                                                                                offset="1"></stop>
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <line id="SvgjsLine1231" x1="0" y1="0" x2="0"
                                                                        y2="225" stroke="#b6b6b6" stroke-dasharray="3"
                                                                        class="apexcharts-xcrosshairs" x="0" y="0"
                                                                        width="1" height="225" fill="#b1b9c4"
                                                                        filter="none" fill-opacity="0.9"
                                                                        stroke-width="1"></line>
                                                                    <g id="SvgjsG1254" class="apexcharts-xaxis"
                                                                        transform="translate(0, 0)">
                                                                        <g id="SvgjsG1255"
                                                                            class="apexcharts-xaxis-texts-g"
                                                                            transform="translate(0, -4)"></g>
                                                                    </g>
                                                                    <g id="SvgjsG1257" class="apexcharts-grid">
                                                                        <line id="SvgjsLine1259" x1="0" y1="225"
                                                                            x2="849" y2="225" stroke="transparent"
                                                                            stroke-dasharray="0"></line>
                                                                        <line id="SvgjsLine1258" x1="0" y1="1" x2="0"
                                                                            y2="225" stroke="transparent"
                                                                            stroke-dasharray="0"></line>
                                                                    </g>
                                                                    <g id="SvgjsG1235"
                                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                                        <g id="SvgjsG1245" class="apexcharts-series"
                                                                            seriesName="series2"
                                                                            data:longestSeries="true" rel="2"
                                                                            data:realIndex="1">
                                                                            <path id="SvgjsPath1252"
                                                                                d="M 0 225L 0 217.5C 24.7625 217.5 45.9875 142.5 70.75 142.5C 95.5125 142.5 116.7375 93.75 141.5 93.75C 166.2625 93.75 187.4875 105 212.25 105C 237.0125 105 258.2375 75 283 75C 307.7625 75 328.9875 131.25 353.75 131.25C 378.5125 131.25 399.7375 37.5 424.5 37.5C 449.2625 37.5 470.4875 82.5 495.25 82.5C 520.0125 82.5 541.2375 67.5 566 67.5C 590.7625 67.5 611.9875 120 636.75 120C 661.5125 120 682.7375 150 707.5 150C 732.2625 150 753.4875 56.25 778.25 56.25C 803.0125 56.25 824.2375 225 849 225C 849 225 849 225 849 225M 849 225z"
                                                                                fill="url(#SvgjsLinearGradient1248)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="0"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="1"
                                                                                clip-path="url(#gridRectMaskkdkwc8nqf)"
                                                                                pathTo="M 0 225L 0 217.5C 24.7625 217.5 45.9875 142.5 70.75 142.5C 95.5125 142.5 116.7375 93.75 141.5 93.75C 166.2625 93.75 187.4875 105 212.25 105C 237.0125 105 258.2375 75 283 75C 307.7625 75 328.9875 131.25 353.75 131.25C 378.5125 131.25 399.7375 37.5 424.5 37.5C 449.2625 37.5 470.4875 82.5 495.25 82.5C 520.0125 82.5 541.2375 67.5 566 67.5C 590.7625 67.5 611.9875 120 636.75 120C 661.5125 120 682.7375 150 707.5 150C 732.2625 150 753.4875 56.25 778.25 56.25C 803.0125 56.25 824.2375 225 849 225C 849 225 849 225 849 225M 849 225z"
                                                                                pathFrom="M -1 225L -1 225L 70.75 225L 141.5 225L 212.25 225L 283 225L 353.75 225L 424.5 225L 495.25 225L 566 225L 636.75 225L 707.5 225L 778.25 225L 849 225">
                                                                            </path>
                                                                            <path id="SvgjsPath1253"
                                                                                d="M 0 217.5C 24.7625 217.5 45.9875 142.5 70.75 142.5C 95.5125 142.5 116.7375 93.75 141.5 93.75C 166.2625 93.75 187.4875 105 212.25 105C 237.0125 105 258.2375 75 283 75C 307.7625 75 328.9875 131.25 353.75 131.25C 378.5125 131.25 399.7375 37.5 424.5 37.5C 449.2625 37.5 470.4875 82.5 495.25 82.5C 520.0125 82.5 541.2375 67.5 566 67.5C 590.7625 67.5 611.9875 120 636.75 120C 661.5125 120 682.7375 150 707.5 150C 732.2625 150 753.4875 56.25 778.25 56.25C 803.0125 56.25 824.2375 225 849 225"
                                                                                fill="none" fill-opacity="1"
                                                                                stroke="#f73164" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="4"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="1"
                                                                                clip-path="url(#gridRectMaskkdkwc8nqf)"
                                                                                pathTo="M 0 217.5C 24.7625 217.5 45.9875 142.5 70.75 142.5C 95.5125 142.5 116.7375 93.75 141.5 93.75C 166.2625 93.75 187.4875 105 212.25 105C 237.0125 105 258.2375 75 283 75C 307.7625 75 328.9875 131.25 353.75 131.25C 378.5125 131.25 399.7375 37.5 424.5 37.5C 449.2625 37.5 470.4875 82.5 495.25 82.5C 520.0125 82.5 541.2375 67.5 566 67.5C 590.7625 67.5 611.9875 120 636.75 120C 661.5125 120 682.7375 150 707.5 150C 732.2625 150 753.4875 56.25 778.25 56.25C 803.0125 56.25 824.2375 225 849 225"
                                                                                pathFrom="M -1 225L -1 225L 70.75 225L 141.5 225L 212.25 225L 283 225L 353.75 225L 424.5 225L 495.25 225L 566 225L 636.75 225L 707.5 225L 778.25 225L 849 225">
                                                                            </path>
                                                                            <g id="SvgjsG1246"
                                                                                class="apexcharts-series-markers-wrap">
                                                                                <g class="apexcharts-series-markers">
                                                                                    <circle id="SvgjsCircle1265" r="0"
                                                                                        cx="0" cy="0"
                                                                                        class="apexcharts-marker wgutnkizc no-pointer-events"
                                                                                        stroke="#f73164" fill="#ffffff"
                                                                                        fill-opacity="1"
                                                                                        stroke-width="3"
                                                                                        stroke-opacity="0.9"
                                                                                        default-marker-size="0">
                                                                                    </circle>
                                                                                </g>
                                                                            </g>
                                                                            <g id="SvgjsG1247"
                                                                                class="apexcharts-datalabels"></g>
                                                                        </g>
                                                                        <g id="SvgjsG1236" class="apexcharts-series"
                                                                            seriesName="series1"
                                                                            data:longestSeries="true" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1243"
                                                                                d="M 0 225L 0 202.5C 24.7625 202.5 45.9875 150 70.75 150C 95.5125 150 116.7375 168.75 141.5 168.75C 166.2625 168.75 187.4875 75 212.25 75C 237.0125 75 258.2375 157.5 283 157.5C 307.7625 157.5 328.9875 150 353.75 150C 378.5125 150 399.7375 157.5 424.5 157.5C 449.2625 157.5 470.4875 138.75 495.25 138.75C 520.0125 138.75 541.2375 157.5 566 157.5C 590.7625 157.5 611.9875 93.75 636.75 93.75C 661.5125 93.75 682.7375 112.5 707.5 112.5C 732.2625 112.5 753.4875 18.75 778.25 18.75C 803.0125 18.75 824.2375 225 849 225C 849 225 849 225 849 225M 849 225z"
                                                                                fill="url(#SvgjsLinearGradient1239)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="0"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="0"
                                                                                clip-path="url(#gridRectMaskkdkwc8nqf)"
                                                                                pathTo="M 0 225L 0 202.5C 24.7625 202.5 45.9875 150 70.75 150C 95.5125 150 116.7375 168.75 141.5 168.75C 166.2625 168.75 187.4875 75 212.25 75C 237.0125 75 258.2375 157.5 283 157.5C 307.7625 157.5 328.9875 150 353.75 150C 378.5125 150 399.7375 157.5 424.5 157.5C 449.2625 157.5 470.4875 138.75 495.25 138.75C 520.0125 138.75 541.2375 157.5 566 157.5C 590.7625 157.5 611.9875 93.75 636.75 93.75C 661.5125 93.75 682.7375 112.5 707.5 112.5C 732.2625 112.5 753.4875 18.75 778.25 18.75C 803.0125 18.75 824.2375 225 849 225C 849 225 849 225 849 225M 849 225z"
                                                                                pathFrom="M -1 225L -1 225L 70.75 225L 141.5 225L 212.25 225L 283 225L 353.75 225L 424.5 225L 495.25 225L 566 225L 636.75 225L 707.5 225L 778.25 225L 849 225">
                                                                            </path>
                                                                            <path id="SvgjsPath1244"
                                                                                d="M 0 202.5C 24.7625 202.5 45.9875 150 70.75 150C 95.5125 150 116.7375 168.75 141.5 168.75C 166.2625 168.75 187.4875 75 212.25 75C 237.0125 75 258.2375 157.5 283 157.5C 307.7625 157.5 328.9875 150 353.75 150C 378.5125 150 399.7375 157.5 424.5 157.5C 449.2625 157.5 470.4875 138.75 495.25 138.75C 520.0125 138.75 541.2375 157.5 566 157.5C 590.7625 157.5 611.9875 93.75 636.75 93.75C 661.5125 93.75 682.7375 112.5 707.5 112.5C 732.2625 112.5 753.4875 18.75 778.25 18.75C 803.0125 18.75 824.2375 225 849 225"
                                                                                fill="none" fill-opacity="1"
                                                                                stroke="#7366ff" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="4"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="0"
                                                                                clip-path="url(#gridRectMaskkdkwc8nqf)"
                                                                                pathTo="M 0 202.5C 24.7625 202.5 45.9875 150 70.75 150C 95.5125 150 116.7375 168.75 141.5 168.75C 166.2625 168.75 187.4875 75 212.25 75C 237.0125 75 258.2375 157.5 283 157.5C 307.7625 157.5 328.9875 150 353.75 150C 378.5125 150 399.7375 157.5 424.5 157.5C 449.2625 157.5 470.4875 138.75 495.25 138.75C 520.0125 138.75 541.2375 157.5 566 157.5C 590.7625 157.5 611.9875 93.75 636.75 93.75C 661.5125 93.75 682.7375 112.5 707.5 112.5C 732.2625 112.5 753.4875 18.75 778.25 18.75C 803.0125 18.75 824.2375 225 849 225"
                                                                                pathFrom="M -1 225L -1 225L 70.75 225L 141.5 225L 212.25 225L 283 225L 353.75 225L 424.5 225L 495.25 225L 566 225L 636.75 225L 707.5 225L 778.25 225L 849 225">
                                                                            </path>
                                                                            <g id="SvgjsG1237"
                                                                                class="apexcharts-series-markers-wrap">
                                                                                <g class="apexcharts-series-markers">
                                                                                    <circle id="SvgjsCircle1266" r="0"
                                                                                        cx="0" cy="0"
                                                                                        class="apexcharts-marker wpyk346cq no-pointer-events"
                                                                                        stroke="#7366ff" fill="#ffffff"
                                                                                        fill-opacity="1"
                                                                                        stroke-width="3"
                                                                                        stroke-opacity="0.9"
                                                                                        default-marker-size="0">
                                                                                    </circle>
                                                                                </g>
                                                                            </g>
                                                                            <g id="SvgjsG1238"
                                                                                class="apexcharts-datalabels"></g>
                                                                        </g>
                                                                    </g>
                                                                    <line id="SvgjsLine1260" x1="0" y1="0" x2="849"
                                                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                                        stroke-width="1" class="apexcharts-ycrosshairs">
                                                                    </line>
                                                                    <line id="SvgjsLine1261" x1="0" y1="0" x2="849"
                                                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG1262"
                                                                        class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG1263"
                                                                        class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG1264"
                                                                        class="apexcharts-point-annotations"></g>
                                                                </g>
                                                                <rect id="SvgjsRect1230" width="0" height="0" x="0"
                                                                    y="0" rx="0" ry="0" fill="#fefefe" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                                <g id="SvgjsG1256" class="apexcharts-yaxis" rel="0"
                                                                    transform="translate(-21, 0)"></g>
                                                            </svg>
                                                            <div class="apexcharts-legend"></div>
                                                            <div class="apexcharts-tooltip light">
                                                                <div class="apexcharts-tooltip-title"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(115, 102, 255);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                                class="apexcharts-tooltip-text-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(247, 49, 100);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                                class="apexcharts-tooltip-text-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light">
                                                                <div class="apexcharts-xaxistooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 850px; height: 256px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-top m-0">
                                    <div class="col-xl-4 ps-0 col-md-6 col-sm-6">
                                        <div class="media p-0">
                                            <div class="media-left"><i class="icofont icofont-crown"></i></div>
                                            <div class="media-body">
                                                <h6>Referral Earning</h6>
                                                <p>$5,000.20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="media p-0">
                                            <div class="media-left bg-secondary"><i
                                                    class="icofont icofont-heart-alt"></i></div>
                                            <div class="media-body">
                                                <h6>Cash Balance</h6>
                                                <p>$2,657.21</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-12 pe-0">
                                        <div class="media p-0">
                                            <div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
                                            <div class="media-body">
                                                <h6>Sales forcasting</h6>
                                                <p>$9,478.50 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row m-0 chart-main">
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart flot-chart-container">
                                                <div class="chartist-tooltip"></div><svg
                                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                    height="100%" class="ct-chart-bar"
                                                    style="width: 100%; height: 100%;">
                                                    <g class="ct-grids"></g>
                                                    <g>
                                                        <g class="ct-series ct-series-a">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="69" y2="58.2" class="ct-bar" ct:value="400"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="69" y2="44.7" class="ct-bar" ct:value="900"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="69" y2="47.4" class="ct-bar" ct:value="800"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="69" y2="42" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714" y1="69"
                                                                y2="50.1" class="ct-bar" ct:value="700"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="69" y2="36.6" class="ct-bar" ct:value="1200"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143" y1="69"
                                                                y2="60.9" class="ct-bar" ct:value="300"
                                                                style="stroke-width: 3px"></line>
                                                        </g>
                                                        <g class="ct-series ct-series-b">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="58.2" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="44.7" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="500" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="47.4" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="600" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="42" y2="31.200000000000003"
                                                                class="ct-bar" ct:value="400" style="stroke-width: 3px">
                                                            </line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="50.1" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="700" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="36.6" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="200" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="60.9" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="1100" style="stroke-width: 3px"></line>
                                                        </g>
                                                    </g>
                                                    <g class="ct-labels"></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>1001</h4>
                                            <span>purchase </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart1 flot-chart-container">
                                                <div class="chartist-tooltip"></div><svg
                                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                    height="100%" class="ct-chart-bar"
                                                    style="width: 100%; height: 100%;">
                                                    <g class="ct-grids"></g>
                                                    <g>
                                                        <g class="ct-series ct-series-a">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="69" y2="58.2" class="ct-bar" ct:value="400"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="69" y2="52.8" class="ct-bar" ct:value="600"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="69" y2="44.7" class="ct-bar" ct:value="900"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="69" y2="47.4" class="ct-bar"
                                                                ct:value="800" style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714" y1="69"
                                                                y2="42" class="ct-bar" ct:value="1000"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="69" y2="36.6" class="ct-bar" ct:value="1200"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143" y1="69"
                                                                y2="55.5" class="ct-bar" ct:value="500"
                                                                style="stroke-width: 3px"></line>
                                                        </g>
                                                        <g class="ct-series ct-series-b">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="58.2" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="52.8" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="800" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="44.7" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="500" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="47.4" y2="31.199999999999996"
                                                                class="ct-bar" ct:value="600" style="stroke-width: 3px">
                                                            </line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714" y1="42"
                                                                y2="31.200000000000003" class="ct-bar" ct:value="400"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="36.6" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="200" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="55.5" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="900" style="stroke-width: 3px"></line>
                                                        </g>
                                                    </g>
                                                    <g class="ct-labels"></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>1005</h4>
                                            <span>Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container">
                                                <div class="chartist-tooltip"></div><svg
                                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                    height="100%" class="ct-chart-bar"
                                                    style="width: 100%; height: 100%;">
                                                    <g class="ct-grids"></g>
                                                    <g>
                                                        <g class="ct-series ct-series-a">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="69" y2="39.3" class="ct-bar" ct:value="1100"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="69" y2="44.7" class="ct-bar" ct:value="900"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="69" y2="52.8" class="ct-bar" ct:value="600"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="69" y2="42" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714" y1="69"
                                                                y2="50.1" class="ct-bar" ct:value="700"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="69" y2="36.6" class="ct-bar" ct:value="1200"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143" y1="69"
                                                                y2="60.9" class="ct-bar" ct:value="300"
                                                                style="stroke-width: 3px"></line>
                                                        </g>
                                                        <g class="ct-series ct-series-b">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="39.3" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="300" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="44.7" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="500" style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="52.8" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="800" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="42" y2="31.200000000000003"
                                                                class="ct-bar" ct:value="400" style="stroke-width: 3px">
                                                            </line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="50.1" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="700" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="36.6" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="200" style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="60.9" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="1100" style="stroke-width: 3px"></line>
                                                        </g>
                                                    </g>
                                                    <g class="ct-labels"></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>100</h4>
                                            <span>Sales return</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media border-none align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart3 flot-chart-container">
                                                <div class="chartist-tooltip"></div><svg
                                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%"
                                                    height="100%" class="ct-chart-bar"
                                                    style="width: 100%; height: 100%;">
                                                    <g class="ct-grids"></g>
                                                    <g>
                                                        <g class="ct-series ct-series-a">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="69" y2="58.2" class="ct-bar" ct:value="400"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="69" y2="52.8" class="ct-bar" ct:value="600"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="69" y2="47.4" class="ct-bar" ct:value="800"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="69" y2="42" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714" y1="69"
                                                                y2="50.1" class="ct-bar" ct:value="700"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="69" y2="39.3" class="ct-bar" ct:value="1100"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143" y1="69"
                                                                y2="60.9" class="ct-bar" ct:value="300"
                                                                style="stroke-width: 3px"></line>
                                                        </g>
                                                        <g class="ct-series ct-series-b">
                                                            <line x1="13.571428571428571" x2="13.571428571428571"
                                                                y1="58.2" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="1000" style="stroke-width: 3px"></line>
                                                            <line x1="20.714285714285715" x2="20.714285714285715"
                                                                y1="52.8" y2="39.3" class="ct-bar" ct:value="500"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="27.857142857142858" x2="27.857142857142858"
                                                                y1="47.4" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="600" style="stroke-width: 3px"></line>
                                                            <line x1="35" x2="35" y1="42" y2="33.9" class="ct-bar"
                                                                ct:value="300" style="stroke-width: 3px"></line>
                                                            <line x1="42.14285714285714" x2="42.14285714285714"
                                                                y1="50.1" y2="31.200000000000003" class="ct-bar"
                                                                ct:value="700" style="stroke-width: 3px"></line>
                                                            <line x1="49.285714285714285" x2="49.285714285714285"
                                                                y1="39.3" y2="33.9" class="ct-bar" ct:value="200"
                                                                style="stroke-width: 3px"></line>
                                                            <line x1="56.42857142857143" x2="56.42857142857143"
                                                                y1="60.9" y2="31.199999999999996" class="ct-bar"
                                                                ct:value="1100" style="stroke-width: 3px"></line>
                                                        </g>
                                                    </g>
                                                    <g class="ct-labels"></g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>101</h4>
                                            <span>Purchase ret</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>$95,900<span class="new-box">Hot</span></h4>
                                <span>Purchase Order Value</span>
                            </div>
                            <div class="knob-block text-center">
                                <div style="display:inline;width:65px;height:65px;"><canvas width="97" height="97"
                                        style="width: 65px; height: 65px;"></canvas><input class="knob1" data-width="10"
                                        data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round"
                                        data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60"
                                        style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 13px Arial; text-align: center; color: rgb(115, 102, 255); padding: 0px; appearance: none;"
                                        data-bs-original-title="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-50 chart_data_right second d-none">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>$95,000<span class="new-box">New</span></h4>
                                <span>Product Order Value</span>
                            </div>
                            <div class="knob-block text-center">
                                <div style="display:inline;width:65px;height:65px;"><canvas width="97" height="97"
                                        style="width: 65px; height: 65px;"></canvas><input class="knob1" data-width="50"
                                        data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round"
                                        data-angleoffset="0" value="60"
                                        style="width: 36px; height: 21px; position: absolute; vertical-align: middle; margin-top: 21px; margin-left: -50px; border: 0px; background: none; font: bold 13px Arial; text-align: center; color: rgb(115, 102, 255); padding: 0px; appearance: none;"
                                        data-bs-original-title="" title=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 xl-50 news box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">News &amp; Update</h5>
                            <div class="card-header-right-icon">
                                <select class="button btn btn-primary">
                                    <option>Today</option>
                                    <option>Tomorrow</option>
                                    <option>Yesterday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="news-update">
                            <h6>36% off For pixel lights Couslations Types.</h6>
                            <span>Lorem Ipsum is simply dummy...</span>
                        </div>
                        <div class="news-update">
                            <h6>We are produce new product this</h6>
                            <span> Lorem Ipsum is simply text of the printing... </span>
                        </div>
                        <div class="news-update">
                            <h6>50% off For COVID Couslations Types.</h6>
                            <span>Lorem Ipsum is simply dummy...</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="bottom-btn"><a href="#" data-bs-original-title="" title="">More...</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 xl-50 appointment-sec box-col-6">
                <div class="row">
                    <div class="col-xl-12 appointment">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">appointment</h5>
                                    <div class="card-header-right-icon">
                                        <select class="button btn btn-primary">
                                            <option>Today</option>
                                            <option>Tomorrow</option>
                                            <option>Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="appointment-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="img-fluid img-40 rounded-circle mb-3"
                                                        src="https://laravel.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg"
                                                        alt="Image description">
                                                    <div class="status-circle bg-primary"></div>
                                                </td>
                                                <td class="img-content-box"><span class="d-block">Venter
                                                        Loren</span><span class="font-roboto">Now</span></td>
                                                <td>
                                                    <p class="m-0 font-primary">28 Sept</p>
                                                </td>
                                                <td class="text-end">
                                                    <div class="button btn btn-primary">Done<i
                                                            class="fa fa-check-circle ms-2"></i></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="img-fluid img-40 rounded-circle"
                                                        src="https://laravel.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg"
                                                        alt="Image description">
                                                    <div class="status-circle bg-primary"></div>
                                                </td>
                                                <td class="img-content-box"><span class="d-block">John Loren</span><span
                                                        class="font-roboto">11:00</span></td>
                                                <td>
                                                    <p class="m-0 font-primary">22 Sept</p>
                                                </td>
                                                <td class="text-end">
                                                    <div class="button btn btn-danger">Pending<i
                                                            class="fa fa-check-circle ms-2"></i></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 alert-sec">
                        <div class="card bg-img">
                            <div class="card-header">
                                <div class="header-top">
                                    <h5 class="m-0">Alert </h5>
                                    <div class="dot-right-icon"><i class="fa fa-ellipsis-h"></i></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="body-bottom">
                                    <h6> 10% off For drama lights Couslations...</h6>
                                    <span class="font-roboto">Lorem Ipsum is simply dummy...It is a long established
                                        fact that a reader will be distracted by </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 xl-50 notification box-col-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">notification</h5>
                            <div class="card-header-right-icon">
                                <select class="button btn btn-primary">
                                    <option>Today</option>
                                    <option>Tomorrow</option>
                                    <option>Yesterday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="media">
                            <div class="media-body">
                                <p>20-04-2020 <span>10:10</span></p>
                                <h6>Updated Product<span class="dot-notification"></span></h6>
                                <span>Quisque a consequat ante sit amet magna...</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <p>20-04-2020<span class="ps-1">Today</span><span
                                        class="badge badge-secondary">New</span></p>
                                <h6>Tello just like your product<span class="dot-notification"></span></h6>
                                <span>Quisque a consequat ante sit amet magna... </span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <div class="d-flex mb-3">
                                    <div class="inner-img"><img class="img-fluid"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/notification/1.jpg"
                                            alt="Product-1"></div>
                                    <div class="inner-img"><img class="img-fluid"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/notification/2.jpg"
                                            alt="Product-2"></div>
                                </div>
                                <span class="mt-3">Quisque a consequat ante sit amet magna...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Market Value</h5>
                            <div class="card-header-right-icon">
                                <select class="button btn btn-primary">
                                    <option>Year</option>
                                    <option>Month</option>
                                    <option>Day</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart" style="position: relative;">
                            <div id="marketchart" style="min-height: 395px;">
                                <div id="apexchartsfw9xp3gf" class="apexcharts-canvas apexchartsfw9xp3gf light"
                                    style="width: 453px; height: 380px;"><svg id="SvgjsSvg1269" width="453" height="380"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1271" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(12, 30)">
                                            <defs id="SvgjsDefs1270">
                                                <clipPath id="gridRectMaskfw9xp3gf">
                                                    <rect id="SvgjsRect1275" width="434" height="318" x="-1.5" y="-1.5"
                                                        rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskfw9xp3gf">
                                                    <rect id="SvgjsRect1276" width="445" height="329" x="-7" y="-7"
                                                        rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1325" class="apexcharts-grid">
                                                <line id="SvgjsLine1327" x1="0" y1="315" x2="431" y2="315"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1326" x1="0" y1="1" x2="0" y2="315"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1278" class="apexcharts-radar-series"
                                                data:innerTranslateX="215.5" data:innerTranslateY="132.5"
                                                transform="translate(215.5, 157.5)">
                                                <polygon id="SvgjsPolygon1305"
                                                    points="0,-140 109.45640754552417,-87.28857226022271 136.4899077054553,31.152930753884007 60.74372347645815,126.13564150633866 -60.74372347645812,126.13564150633869 -136.4899077054553,31.152930753884043 -109.45640754552419,-87.28857226022268 "
                                                    fill="#fcf8ff" stroke="#e8e8e8"></polygon>
                                                <polygon id="SvgjsPolygon1306"
                                                    points="0,-112 87.56512603641934,-69.83085780817817 109.19192616436425,24.922344603107206 48.594978781166525,100.90851320507093 -48.594978781166496,100.90851320507095 -109.19192616436425,24.922344603107234 -87.56512603641934,-69.83085780817814 "
                                                    fill="#f7eeff" stroke="#e8e8e8"></polygon>
                                                <polygon id="SvgjsPolygon1307"
                                                    points="0,-84 65.6738445273145,-52.373143356133625 81.89394462327319,18.691758452330404 36.44623408587489,75.6813849038032 -36.44623408587487,75.6813849038032 -81.89394462327319,18.691758452330426 -65.67384452731451,-52.3731433561336 "
                                                    fill="#fcf8ff" stroke="#e8e8e8"></polygon>
                                                <polygon id="SvgjsPolygon1308"
                                                    points="0,-56 43.78256301820967,-34.91542890408908 54.595963082182124,12.461172301553603 24.297489390583262,50.454256602535466 -24.297489390583248,50.45425660253547 -54.595963082182124,12.461172301553617 -43.78256301820967,-34.91542890408907 "
                                                    fill="#f7eeff" stroke="#e8e8e8"></polygon>
                                                <polygon id="SvgjsPolygon1309"
                                                    points="0,-28 21.891281509104836,-17.45771445204454 27.297981541091062,6.2305861507768014 12.148744695291631,25.227128301267733 -12.148744695291624,25.227128301267737 -27.297981541091062,6.2305861507768086 -21.891281509104836,-17.457714452044534 "
                                                    fill="#fcf8ff" stroke="#e8e8e8"></polygon>
                                                <polygon id="SvgjsPolygon1310" points="0,0 0,0 0,0 0,0 0,0 0,0 0,0 "
                                                    fill="#f7eeff" stroke="#e8e8e8"></polygon>
                                                <line id="SvgjsLine1298" x1="0" y1="-140" x2="0" y2="0" stroke="#e8e8e8"
                                                    stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1299" x1="109.45640754552417" y1="-87.28857226022271"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1300" x1="136.4899077054553" y1="31.152930753884007"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1301" x1="60.74372347645815" y1="126.13564150633866"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1302" x1="-60.74372347645812" y1="126.13564150633869"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1303" x1="-136.4899077054553" y1="31.152930753884043"
                                                    x2="0" y2="0" stroke="#e8e8e8" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1304" x1="-109.45640754552419"
                                                    y1="-87.28857226022268" x2="0" y2="0" stroke="#e8e8e8"
                                                    stroke-dasharray="0"></line>
                                                <g id="SvgjsG1317" class="apexcharts-datalabels"><text
                                                        id="SvgjsText1318" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-150" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="11px" font-weight="regular" fill="#a8a8a8"
                                                        class="apexcharts-datalabel" cx="0" cy="-150"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Sunday</text><text
                                                        id="SvgjsText1319" font-family="Helvetica, Arial, sans-serif"
                                                        x="119.45640754552417" y="-87.28857226022271"
                                                        text-anchor="start" dominant-baseline="auto" font-size="11px"
                                                        font-weight="regular" fill="#a8a8a8"
                                                        class="apexcharts-datalabel" cx="119.45640754552417"
                                                        cy="-87.28857226022271"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Monday</text><text
                                                        id="SvgjsText1320" font-family="Helvetica, Arial, sans-serif"
                                                        x="146.4899077054553" y="31.152930753884007" text-anchor="start"
                                                        dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="146.4899077054553" cy="31.152930753884007"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Tuesday</text><text
                                                        id="SvgjsText1321" font-family="Helvetica, Arial, sans-serif"
                                                        x="70.74372347645814" y="126.13564150633866" text-anchor="start"
                                                        dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="70.74372347645814" cy="126.13564150633866"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Wednesday</text><text
                                                        id="SvgjsText1322" font-family="Helvetica, Arial, sans-serif"
                                                        x="-70.74372347645811" y="126.13564150633869" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="-70.74372347645811" cy="126.13564150633869"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Thursday</text><text
                                                        id="SvgjsText1323" font-family="Helvetica, Arial, sans-serif"
                                                        x="-146.4899077054553" y="31.152930753884043" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="-146.4899077054553" cy="31.152930753884043"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Friday</text><text
                                                        id="SvgjsText1324" font-family="Helvetica, Arial, sans-serif"
                                                        x="-119.45640754552419" y="-87.28857226022268" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                        fill="#a8a8a8" class="apexcharts-datalabel"
                                                        cx="-119.45640754552419" cy="-87.28857226022268"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Saturday</text>
                                                </g>
                                                <g id="SvgjsG1279" class="apexcharts-yaxis"><text id="SvgjsText1311"
                                                        font-family="Helvetica, Arial, sans-serif" x="0" y="-134"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="regular" fill="#373d3f"
                                                        style="font-family: Helvetica, Arial, sans-serif;">100</text><text
                                                        id="SvgjsText1312" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-106" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="regular" fill="#373d3f"
                                                        style="font-family: Helvetica, Arial, sans-serif;"></text><text
                                                        id="SvgjsText1313" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-78" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="regular" fill="#373d3f"
                                                        style="font-family: Helvetica, Arial, sans-serif;">60</text><text
                                                        id="SvgjsText1314" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-50" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="regular" fill="#373d3f"
                                                        style="font-family: Helvetica, Arial, sans-serif;"></text><text
                                                        id="SvgjsText1315" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="-22" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="regular" fill="#373d3f"
                                                        style="font-family: Helvetica, Arial, sans-serif;">20</text><text
                                                        id="SvgjsText1316" font-family="Helvetica, Arial, sans-serif"
                                                        x="0" y="6" text-anchor="middle" dominant-baseline="auto"
                                                        font-size="13px" font-weight="regular" fill="#373d3f"
                                                        style="font-family: Helvetica, Arial, sans-serif;"></text></g>
                                                <g id="SvgjsG1280" class="apexcharts-series" seriesName="Marketxvalue"
                                                    rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1282"
                                                        d="M 0 -28L 0 -28L 109.45640754552417 -87.28857226022271L 54.595963082182124 12.461172301553603L 18.223117042937446 37.8406924519016L -30.37186173822906 63.06782075316934L -109.19192616436425 24.922344603107234L -36.12061449002299 -28.805228845873483Z"
                                                        fill="none" fill-opacity="1" stroke="#7366ff" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                        class="apexcharts-radar" index="0"
                                                        pathTo="M 0 -28L 0 -28L 109.45640754552417 -87.28857226022271L 54.595963082182124 12.461172301553603L 18.223117042937446 37.8406924519016L -30.37186173822906 63.06782075316934L -109.19192616436425 24.922344603107234L -36.12061449002299 -28.805228845873483Z"
                                                        pathFrom="M 0 0"></path>
                                                    <path id="SvgjsPath1283"
                                                        d="M 0 -28L 0 -28L 109.45640754552417 -87.28857226022271L 54.595963082182124 12.461172301553603L 18.223117042937446 37.8406924519016L -30.37186173822906 63.06782075316934L -109.19192616436425 24.922344603107234L -36.12061449002299 -28.805228845873483Z"
                                                        fill="rgba(115,102,255,0.2)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-radar" index="0"
                                                        pathTo="M 0 -28L 0 -28L 109.45640754552417 -87.28857226022271L 54.595963082182124 12.461172301553603L 18.223117042937446 37.8406924519016L -30.37186173822906 63.06782075316934L -109.19192616436425 24.922344603107234L -36.12061449002299 -28.805228845873483Z"
                                                        pathFrom="M 0 0"></path>
                                                    <g id="SvgjsG1281" class="apexcharts-series-markers-wrap">
                                                        <g id="SvgjsG1285" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1284" r="6" cx="0" cy="-28"
                                                                class="apexcharts-marker" stroke="#7366ff"
                                                                fill="#ffffff" fill-opacity="1" stroke-width="3"
                                                                stroke-opacity="1" rel="0" j="0" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1287" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1286" r="6" cx="109.45640754552417"
                                                                cy="-87.28857226022271" class="apexcharts-marker"
                                                                stroke="#7366ff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="1" rel="1" j="1"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1289" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1288" r="6" cx="54.595963082182124"
                                                                cy="12.461172301553603" class="apexcharts-marker"
                                                                stroke="#7366ff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="1" rel="2" j="2"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1291" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1290" r="6" cx="18.223117042937446"
                                                                cy="37.8406924519016" class="apexcharts-marker"
                                                                stroke="#7366ff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="1" rel="3" j="3"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1293" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1292" r="6" cx="-30.37186173822906"
                                                                cy="63.06782075316934" class="apexcharts-marker"
                                                                stroke="#7366ff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="1" rel="4" j="4"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1295" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1294" r="6" cx="-109.19192616436425"
                                                                cy="24.922344603107234" class="apexcharts-marker"
                                                                stroke="#7366ff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="1" rel="5" j="5"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1297" class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1296" r="6" cx="-36.12061449002299"
                                                                cy="-28.805228845873483" class="apexcharts-marker"
                                                                stroke="#7366ff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="1" rel="6" j="6"
                                                                index="0" default-marker-size="6"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1328" x1="0" y1="0" x2="431" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1329" x1="0" y1="0" x2="431" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1330" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1331" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1332" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(115, 102, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 454px; height: 396px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 xl-100 chat-sec box-col-6">
                <div class="card chat-default">
                    <div class="card-header card-no-border">
                        <div class="media media-dashboard">
                            <div class="media-body">
                                <h5 class="mb-0">Live Chat</h5>
                            </div>
                            <div class="icon-box"><i class="fa fa-ellipsis-h"></i></div>
                        </div>
                    </div>
                    <div class="card-body chat-box">
                        <div class="chat">
                            <div class="media left-side-chat">
                                <div class="media-body d-flex">
                                    <div class="img-profile"> <img class="img-fluid"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/user.jpg"
                                            alt="Profile"></div>
                                    <div class="main-chat">
                                        <div class="message-main"><span class="mb-0">Hi deo, Please send me link.</span>
                                        </div>
                                        <div class="sub-message message-main"><span class="mb-0">Right Now</span></div>
                                    </div>
                                </div>
                                <p class="f-w-400">7:28 PM</p>
                            </div>
                            <div class="media right-side-chat">
                                <p class="f-w-400">7:28 PM</p>
                                <div class="media-body text-end">
                                    <div class="message-main pull-right">
                                        <span class="mb-0 text-start">How can do for you</span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media left-side-chat">
                                <div class="media-body d-flex">
                                    <div class="img-profile"> <img class="img-fluid"
                                            src="https://laravel.pixelstrap.com/cuba/assets/images/user.jpg"
                                            alt="Profile"></div>
                                    <div class="main-chat">
                                        <div class="sub-message message-main mt-0"><span>It's argenty</span></div>
                                    </div>
                                </div>
                                <p class="f-w-400">7:28 PM</p>
                            </div>
                            <div class="media right-side-chat">
                                <div class="media-body text-end">
                                    <div class="message-main pull-right"><span class="loader-span mb-0 text-start"
                                            id="wave"><span class="dot"></span><span class="dot"></span><span
                                                class="dot"></span></span></div>
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="form-control" id="mail" type="text" placeholder="Type Your Message..."
                                    name="text" data-bs-original-title="" title="">
                                <div class="send-msg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
                <div class="card gradient-primary o-hidden">
                    <div class="card-body">
                        <div class="setting-dot">
                            <div class="setting-bg-primary date-picker-setting position-set pull-right"><i
                                    class="fa fa-spin fa-cog"></i></div>
                        </div>
                        <div class="default-datepicker">
                            <div class="datepicker-here" data-language="en">
                                <div class="datepicker-inline">
                                    <div class="datepicker"><i class="datepicker--pointer"></i>
                                        <nav class="datepicker--nav">
                                            <div class="datepicker--nav-action" data-action="prev"><svg>
                                                    <path d="M 17,12 l -5,5 l 5,5"></path>
                                                </svg></div>
                                            <div class="datepicker--nav-title">October, <i> 2022 </i></div>
                                            <div class="datepicker--nav-action" data-action="next"><svg>
                                                    <path d="M 14,12 l 5,5 l -5,5"></path>
                                                </svg></div>
                                        </nav>
                                        <div class="datepicker--content">
                                            <div class="datepicker--days datepicker--body active">
                                                <div class="datepicker--days-names">
                                                    <div class="datepicker--day-name -weekend-">S</div>
                                                    <div class="datepicker--day-name">M</div>
                                                    <div class="datepicker--day-name">T</div>
                                                    <div class="datepicker--day-name">W</div>
                                                    <div class="datepicker--day-name">T</div>
                                                    <div class="datepicker--day-name">F</div>
                                                    <div class="datepicker--day-name -weekend-">S</div>
                                                </div>
                                                <div class="datepicker--cells datepicker--cells-days">
                                                    <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-"
                                                        data-date="25" data-month="8" data-year="2022">25</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="26" data-month="8" data-year="2022">26</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="27" data-month="8" data-year="2022">27</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="28" data-month="8" data-year="2022">28</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="29" data-month="8" data-year="2022">29</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="30" data-month="8" data-year="2022">30</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="1" data-month="9" data-year="2022">1</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="2" data-month="9" data-year="2022">2</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="3"
                                                        data-month="9" data-year="2022">3</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="4"
                                                        data-month="9" data-year="2022">4</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="5"
                                                        data-month="9" data-year="2022">5</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="6"
                                                        data-month="9" data-year="2022">6</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="7"
                                                        data-month="9" data-year="2022">7</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="8" data-month="9" data-year="2022">8</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend- -current-"
                                                        data-date="9" data-month="9" data-year="2022">9</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="10"
                                                        data-month="9" data-year="2022">10</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="11"
                                                        data-month="9" data-year="2022">11</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="12"
                                                        data-month="9" data-year="2022">12</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="13"
                                                        data-month="9" data-year="2022">13</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="14"
                                                        data-month="9" data-year="2022">14</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="15" data-month="9" data-year="2022">15</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="16" data-month="9" data-year="2022">16</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="17"
                                                        data-month="9" data-year="2022">17</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="18"
                                                        data-month="9" data-year="2022">18</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="19"
                                                        data-month="9" data-year="2022">19</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="20"
                                                        data-month="9" data-year="2022">20</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="21"
                                                        data-month="9" data-year="2022">21</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="22" data-month="9" data-year="2022">22</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="23" data-month="9" data-year="2022">23</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="24"
                                                        data-month="9" data-year="2022">24</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="25"
                                                        data-month="9" data-year="2022">25</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="26"
                                                        data-month="9" data-year="2022">26</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="27"
                                                        data-month="9" data-year="2022">27</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="28"
                                                        data-month="9" data-year="2022">28</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="29" data-month="9" data-year="2022">29</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend-"
                                                        data-date="30" data-month="9" data-year="2022">30</div>
                                                    <div class="datepicker--cell datepicker--cell-day" data-date="31"
                                                        data-month="9" data-year="2022">31</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="1" data-month="10" data-year="2022">1</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="2" data-month="10" data-year="2022">2</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="3" data-month="10" data-year="2022">3</div>
                                                    <div class="datepicker--cell datepicker--cell-day -other-month-"
                                                        data-date="4" data-month="10" data-year="2022">4</div>
                                                    <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-"
                                                        data-date="5" data-month="10" data-year="2022">5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span
                                    class="dots dots1"></span><span class="dots dots2 dot-small"></span><span
                                    class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span
                                    class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span
                                    class="dots dots7 dot-small-semi"></span><span
                                    class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                                </span></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@stop
