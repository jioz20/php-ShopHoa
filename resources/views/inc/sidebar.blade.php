<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="img/sidebar-1.jpg">
    <div class="logo">
        <a href="index.html" class="simple-text logo-mini">

        </a>
        <a href="index.html" class="simple-text logo-normal">
            porche
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="img/faces/admin.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        Nguyễn Trí
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> IF </span>
                                <span class="sidebar-normal"> Thông tin của tôi </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> ED </span>
                                <span class="sidebar-normal"> Chỉnh sửa thông tin</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Cài đặt </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="{{Request::is('/') ? 'active' : ''}}">
                <a href="/" ">
                    <i class="material-icons">home</i>
                    <p> Trang Chủ </p>
                </a>
            </li>

            <li >
                <a data-toggle="collapse" href="#pagesExamples" class="collapsed" aria-expanded="false">
                    <i class="material-icons">settings</i>
                    <p> Quản lý hệ thống
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples" aria-expanded="false" style="height: 0px;">
                    <ul class="nav">
                        <li class="{{Request::is('User') ? 'active' : ''}}">
                            <a href="/User">
                                <i class="material-icons">person</i>
                                <span class="sidebar-normal"> Người dùng </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">build</i>
                                <span class="sidebar-normal"> Cấu hình </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">functions</i>
                                <span class="sidebar-normal"> Chức năng </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">fingerprint</i>
                                <span class="sidebar-normal"> Phân quyền </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">history</i>
                                <span class="sidebar-normal"> Lịch sử người dùng </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p> Quản lý sản phẩm
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="">
                                <i class="material-icons">gesture</i>
                                <span class="sidebar-normal"> Sản phẩm </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">trip_origin</i>
                                <span class="sidebar-normal"> Nhóm sản phẩm </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">meeting_room</i>
                                <span class="sidebar-normal"> Nhà cung cấp </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

           <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">store</i>
                    <p> Quản lý bán hàng
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="">
                                <i class="material-icons">layers</i>
                                <span class="sidebar-normal"> Hóa đơn </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">visibility</i>
                                <span class="sidebar-normal"> Chi tiết hóa đơn </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">create</i>
                    <p> Quản lý bài viết
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="">
                                <i class="material-icons">event_note</i>
                                <span class="sidebar-normal"> Bài viết </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="material-icons">group_work</i>
                                <span class="sidebar-normal"> Nhóm bài viết </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="{{Request::is('help') ? 'active' : ''}}"> 
                <a href="/help" >
                    <i class="material-icons">help</i>
                    <p> Trợ giúp </p>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="material-icons">input</i>
                    <p> Đăng xuất </p>
                </a>
            </li>

        </ul>
    </div>
</div>