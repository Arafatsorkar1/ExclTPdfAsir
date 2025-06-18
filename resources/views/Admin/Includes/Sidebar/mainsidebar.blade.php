<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper"><i class="fa fa-ellipsis-v fa-w-6"></i></span>
                        </button>
                </span>
    </div>




    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">


            <ul class="vertical-nav-menu">
                <li class="mm-active">
                    <a href="#">

                        <a href="{{route('exclup')}}"  class="app-sidebar__heading">
                            <i class="metismenu-icon fa-solid fa-plus"></i>Excl Upload

                        </a>
                    </a>

                </li>
                <li class="mm-active">
                    <a href="#">

                        <a href="{{route('excle_list')}}"  class="app-sidebar__heading">
                            <i class="metismenu-icon fa-solid fa-plus"></i> Upload List

                        </a>
                    </a>

                </li>


                <li class="mm-active">
                    <a href="#">

                        <a href="{{route('dashboard')}}"  class="app-sidebar__heading">
                            <i class="metismenu-icon fa-solid fa-plus"></i>Add Link
                            {{--                            <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}

                        </a>
                    </a>

                </li>
                <li class="mm-active app-sidebar__heading">



                        <a href="{{route('url-stories.index')}}" class="">
                            <i class="metismenu-icon fa-solid fa-link"></i>Links
                            {{--                            <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}

                    </a>

                </li>
                <li class="mm-active app-sidebar__heading">



                        <a href="{{route('url-stories.create')}}" class="">
                            <i class="metismenu-icon fa-solid fa-box-archive"></i> Archive
                            {{--                            <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}


                    </a>

                </li>


                <br>
                <br>
                <br>
                <br>


                <hr>

{{--                <li class="mm-active app-sidebar__heading">--}}

{{--                    <a href="{{route('dashboard')}}" class="">--}}
{{--                        <i class="metismenu-icon fa-solid fa-user"></i>User--}}
{{--                    </a>--}}

{{--                </li>--}}

{{--                <li class="mm-active app-sidebar__heading">--}}

{{--                    <a href="{{route('dashboard')}}" class="">--}}
{{--                        <i class="metismenu-icon fa-solid fa-gear fa-spin"></i>Settings--}}
{{--                    </a>--}}

{{--                </li>--}}


{{--                <li class="mm-active app-sidebar__heading">--}}

{{--                    <a href="{{route('dashboard')}}" class="">--}}
{{--                        <i class="metismenu-icon fa-solid fa-landmark"></i>Dashboards--}}
{{--                    </a>--}}

{{--                </li>--}}


                {{--                <li class="app-sidebar__heading">Menu</li>--}}
                {{--                <li class="mm-active">--}}
                {{--                    <a href="#">--}}
                {{--                        <i class="metismenu-icon pe-7s-rocket"></i>User--}}
                {{--                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
                {{--                    </a>--}}
                {{--                    <ul>--}}
                {{--                        <li>--}}
                {{--                            <a href="" class="mm-active">--}}
                {{--                                <i class="metismenu-icon"></i>Analytics--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="">--}}
                {{--                                <i class="metismenu-icon"></i>Commerce--}}
                {{--                            </a>--}}
                {{--                        </li>--}}

                {{--                    </ul>--}}
                {{--                </li>--}}


{{--                /////////////////////////////////////////--}}
{{--                ////////////////////////////////////////--}}
{{--                       make this--}}
{{--                \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\--}}
{{--                --}}
{{--                --}}
{{--                <li>--}}
{{--                    <a href="#">--}}


{{--                        <i class="metismenu-icon fa-solid fa-group-arrows-rotate"></i>Player--}}
{{--                        <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Player List--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Player Group--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">--}}

{{--                        <i class="metismenu-icon fa-solid fa-money-check-dollar"></i>--}}
{{--                        Deposit--}}
{{--                        <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Pending Deposit--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Approved Deposit--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">--}}

{{--                        <i class="metismenu-icon fa-solid fa-money-bill-transfer"></i>--}}
{{--                        Withdraw--}}
{{--                        <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Authentic Player--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Withdraw Request--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Withdraw Approve--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#">--}}

{{--                        <i class="metismenu-icon fa-solid fa-scroll"></i>--}}
{{--                        Announcement--}}
{{--                        <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Agency rules--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}

{{--                            <a href="">--}}
{{--                                Withdraw rules--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}

{{--                            <a href="">--}}
{{--                                Deposit rules--}}
{{--                            </a>--}}
{{--                        </li>--}}



{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#">--}}

{{--                        <i class="metismenu-icon fa-solid fa-gamepad"></i>--}}
{{--                        Game Settings--}}
{{--                        <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}

{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                Trade Settings--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#">--}}

{{--                        <i class="metismenu-icon fa-solid fa-gears"></i>--}}
{{--                        Web Settings--}}
{{--                        <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href=" ">--}}
{{--                                Company Details--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                </i>Chat--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <i class="metismenu-icon fa-solid fa-user"></i>--}}
{{--                        User--}}
{{--                        <i class="metismenu-state-icon fa-solid fa-circle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href=" ">--}}
{{--                                Create User--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">--}}
{{--                                User Roll--}}

{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

{{--                /////////////////////////////////////////--}}
{{--                ////////////////////////////////////////--}}
{{--                make this--}}
{{--                \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\--}}

                {{--                <li class="app-sidebar__heading">Forms</li>--}}
                {{--                <li>--}}
                {{--                    <a href="#">--}}
                {{--                        <i class="metismenu-icon pe-7s-light"></i> Elements--}}
                {{--                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
                {{--                    </a>--}}
                {{--                    <ul>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-controls.html">--}}
                {{--                                <i class="metismenu-icon"></i>Controls--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-layouts.html">--}}
                {{--                                <i class="metismenu-icon"></i>Layouts--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-validation.html">--}}
                {{--                                <i class="metismenu-icon"></i>Validation--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-wizard.html">--}}
                {{--                                <i class="metismenu-icon"></i>Wizard--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a href="#">--}}
                {{--                        <i class="metismenu-icon pe-7s-joy"></i> Widgets--}}
                {{--                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
                {{--                    </a>--}}
                {{--                    <ul>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-datepicker.html">--}}
                {{--                                <i class="metismenu-icon"></i>Datepicker--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-range-slider.html">--}}
                {{--                                <i class="metismenu-icon"></i>Range Slider--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-input-selects.html">--}}
                {{--                                <i class="metismenu-icon"></i>Input Selects--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-toggle-switch.html">--}}
                {{--                                <i class="metismenu-icon"></i>Toggle Switch--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-wysiwyg-editor.html">--}}
                {{--                                <i class="metismenu-icon"></i>WYSIWYG Editor--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-input-mask.html">--}}
                {{--                                <i class="metismenu-icon"></i>Input Mask--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-clipboard.html">--}}
                {{--                                <i class="metismenu-icon"></i>Clipboard--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="forms-textarea-autosize.html">--}}
                {{--                                <i class="metismenu-icon"></i>Textarea Autosize--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li class="app-sidebar__heading">Charts</li>--}}
                {{--                <li>--}}
                {{--                    <a href="charts-chartjs.html">--}}
                {{--                        <i class="metismenu-icon pe-7s-graph2"></i>ChartJS--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a href="charts-apexcharts.html">--}}
                {{--                        <i class="metismenu-icon pe-7s-graph"></i>Apex Charts--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a href="charts-sparklines.html">--}}
                {{--                        <i class="metismenu-icon pe-7s-graph1"></i>Chart Sparklines--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>
        </div>
    </div>
</div>
