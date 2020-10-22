
<!DOCTYPE html>
<!--
	Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
	Author: KeenThemes
	Website: http://www.keenthemes.com/
	Contact: support@keenthemes.com
	Follow: www.twitter.com/keenthemes
	Dribbble: www.dribbble.com/keenthemes
	Like: www.facebook.com/keenthemes
	Purchase: https://1.envato.market/EA4JP
	Renew Support: https://1.envato.market/EA4JP
	License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages/wizard/wizard-1.css?v=7.0.5" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
    <!--begin::Logo-->
    <a href="index.html">
        <img alt="Logo" src="assets/media/logos/logo-letter-9.png" class="max-h-30px" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
        </button>
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header flex-column header-fixed">
                <!--begin::Top-->
                <div class="header-top">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <!--begin::Logo-->
                            <a href="index.html" class="mr-20">
                                <img alt="Logo" src="assets/media/logos/logo-letter-9.png" class="max-h-35px" />
                            </a>
                            <!--end::Logo-->
                            <!--begin::Tab Navs(for desktop mode)-->
                            <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link px-6 active" style="padding-bottom:13px;padding-top:12px" data-toggle="tab" data-target="#kt_header_tab_1" role="tab"><i class="icon-xl fas fa-home" style="color:inherit"></i></a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a href="#" class="nav-link py-4 px-6" data-toggle="tab" data-target="#kt_header_tab_2" role="tab"><i class="fas fa-shopping-cart fa-fw" style="color:inherit"></i>&nbsp;Siparişler</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a href="#" class="nav-link py-4 px-6" data-toggle="tab" data-target="#kt_header_tab_3" role="tab"><i class="fas fa-tags" style="color:inherit"></i>&nbsp;Ürünler</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a href="#" class="nav-link py-4 px-6" data-toggle="tab" data-target="#kt_header_tab_4" role="tab"><i class="fas fa-chart-line" style="color:inherit"></i>&nbsp;Gelir / Gider</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--begin::Tab Navs-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <div class="topbar bg-primary">
                            <!--begin::Notifications-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1 pulse pulse-white">
												<span class="svg-icon svg-icon-xl">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
															<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                                        <span class="pulse-ring"></span>
                                    </div>
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Dropdown-->
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                    <form>
                                        <!--begin::Header-->
                                        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                                            <!--begin::Title-->
                                            <h4 class="d-flex flex-center rounded-top">
                                                <span class="text-white">User Notifications</span>
                                                <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
                                            </h4>
                                            <!--end::Title-->
                                            <!--begin::Tabs-->
                                            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
                                                </li>

                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Content-->
                                        <div class="tab-content">
                                            <!--begin::Tabpane-->
                                            <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                                <!--begin::Scroll-->
                                                <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40 symbol-light-primary mr-5">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-lg svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																					<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
																	</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Cool App</a>
                                                            <span class="text-muted">Marketing campaign planning</span>
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-6">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40 symbol-light-warning mr-5">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-lg svg-icon-warning">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
																	</span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="d-flex flex-column font-weight-bold">
                                                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome SAAS</a>
                                                            <span class="text-muted">Project status update meeting</span>
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Action-->
                                                <div class="d-flex flex-center pt-7">
                                                    <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Tabpane-->
                                        </div>
                                        <!--end::Content-->
                                    </form>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::Quick Actions-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <button type="button" class="btn btn-danger mr-2">Yenilikler</button>

                                </div>
                                <!--end::Toggle-->
                            </div>
                            <!--end::Quick Actions-->
                            <!--begin::My Cart-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <button type="button" class="btn btn-success mr-2">Yardım</button>

                                </div>

                            </div>
                            <!--end::My Cart-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                                    <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
												<span class="svg-icon svg-icon-white svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\General\Settings-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
													</g>
												</svg><!--end::Svg Icon--></span>

                                    </div>
                                </div>
                                <!--end::Toggle-->
                                <!--begin::Dropdown-->
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg" style="">

                                    <div class="row row-paddingless">
                                        <!--begin:Item-->
                                        <div class="col-12">
                                            <a href="#" class="d-block px-5 bg-hover-light border-right border-bottom">
														<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">
															<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\Navigation\Exchange.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"/>
																	<rect fill="#000000" opacity="0.3" transform="translate(13.000000, 6.000000) rotate(-450.000000) translate(-13.000000, -6.000000) " x="12" y="8.8817842e-16" width="2" height="12" rx="1"/>
																	<path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) "/>
																	<rect fill="#000000" opacity="0.3" transform="translate(11.000000, 18.000000) scale(1, -1) rotate(90.000000) translate(-11.000000, -18.000000) " x="10" y="12" width="2" height="12" rx="1"/>
																	<path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) "/>
																</g>
															</svg>
                                                                <!--end::Svg Icon-->
															</span>&nbsp;Şifre Değiştir</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin:Item-->
                                        <div class="col-12">
                                            <a href="#" class="d-block px-5  bg-hover-light border-bottom">
														<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">
															<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\Shopping\Settings.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect opacity="0.200000003" x="0" y="0" width="24" height="24"/>
																	<path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3"/>
																	<path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000"/>
																</g>
															</svg>&nbsp;Şirket Ayarları</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin:Item-->
                                        <div class="col-12">
                                            <a href="#" class="d-block px-5  bg-hover-light border-right border-bottom">
															<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">
																<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\Code\Puzzle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M19,11 L20,11 C21.6568542,11 23,12.3431458 23,14 C23,15.6568542 21.6568542,17 20,17 L19,17 L19,20 C19,21.1045695 18.1045695,22 17,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,17 L5,17 C6.65685425,17 8,15.6568542 8,14 C8,12.3431458 6.65685425,11 5,11 L3,11 L3,8 C3,6.8954305 3.8954305,6 5,6 L8,6 L8,5 C8,3.34314575 9.34314575,2 11,2 C12.6568542,2 14,3.34314575 14,5 L14,6 L17,6 C18.1045695,6 19,6.8954305 19,8 L19,11 Z" fill="#000000" opacity="0.3"/>
																	</g>
																</svg>&nbsp;Entegrasyonlar</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin:Item-->
                                        <div class="col-12">
                                            <a href="#" class="d-block px-5 bg-hover-light">
																<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24"></polygon>
																				<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>&nbsp;Abonelik Durumu</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                    </div>
                                    <!--end:Nav-->
                                </div>
                                <!--end::Dropdown-->
                            </div>

                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                    <div class="d-flex flex-column text-right pr-3">
                                        <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">Hoş Geldiniz</span>
                                        <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">Sayın Müşteri</span>
                                    </div>

                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Top-->
                <!--begin::Bottom-->
                <div class="header-bottom">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-navs header-navs-left" id="kt_header_navs">
                            <!--begin::Tab Navs(for tablet and mobile modes)-->
                            <ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mr-2">
                                    <a href="#" class="nav-link btn btn-clean active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-2">
                                    <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Reports</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-2">
                                    <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Orders</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mr-2">
                                    <a href="#" class="nav-link btn btn-clean" data-toggle="tab" data-target="#kt_header_tab_2" role="tab">Help Ceter</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--begin::Tab Navs-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
                                    <!--begin::Menu-->

                                    <!--end::Menu-->
                                </div>
                                <!--begin::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
                                    <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                                        <!--begin::Nav-->
                                        <ul class="menu-nav">
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="siparisler.php" class="menu-link">
                                                    <span class="menu-text">Siparişler</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                                            <a href="siparis-ekle.php" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                                <span class="menu-text">Sipariş Ekle</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="musteriler.php" class="menu-link">
                                                    <span class="menu-text">Müşteriler</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                                            <a href="musteri-ekle.php" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                                <span class="menu-text">Müşteri Ekle</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="satin-alma.php" class="menu-link">
                                                    <span class="menu-text">Satın Alma</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                                            <a href="satin-alma-ekle.php" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                                <span class="menu-text">Satın Alma Ekle</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="tedarikciler.php" class="menu-link">
                                                    <span class="menu-text">Tedarikçiler</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                                            <a href="tedarikci-ekle.php" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                                <span class="menu-text">Tedarikçi Ekle</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="faturalar.php" class="menu-link">
                                                    <span class="menu-text">Faturalar</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="fatura-ayarlari.php" class="menu-link">
                                                    <span class="menu-text">Fatura Ayarları</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="satilan-urunler.php" class="menu-link">
                                                    <span class="menu-text">Satılan Ürünler</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="toplu-kargo-guncelle.php" class="menu-link">
                                                    <span class="menu-text">Toplu Kargo Güncelleme</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>

                                <div class="tab-pane py-5 p-lg-0 justify-content-between" id="kt_header_tab_3">
                                    <div id="kt_header_menu_2" class="header-menu header-menu-mobile header-menu-layout-default">
                                        <!--begin::Nav-->
                                        <ul class="menu-nav">
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="katalog.php" class="menu-link">
                                                    <span class="menu-text">Katalog</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="yeni-urun.php" class="menu-link">
                                                    <span class="menu-text">Yeni Ürün</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="menu-text">Toplu Ürün Güncelleme</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="menu-text">Toplu Ürün Gönderme</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="menu-text">Otomatik Fiyat</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="menu-text">Entegrasyon Ayarları</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>
                                            <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="menu-text">Ürün Güncelleme Sonuçları</span>
                                                    <span class="menu-desc"></span>
                                                    <i class="menu-arrow"></i>
                                                </a>

                                            </li>

                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                                <div class="tab-pane py-5 p-lg-0 justify-content-between" id="kt_header_tab_4">
                                    <!--begin::Menu-->

                                    <!--end::Menu-->
                                </div>
                                <!--begin::Tab Pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Header Menu Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Bottom-->
            </div>
            <!--end::Header-->