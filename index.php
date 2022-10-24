<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<header class="header" uk-sticky>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a href="" class="uk-navbar-item uk-logo"><img src="images/1x/logo-fpt.png" alt=""></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="uk-active"><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Tại Sao Chọn ĐH FPT?</a></li>
                    <li><a href="#">Thông Báo Tuyển Sinh</a></li>
                    <li><a href="#">Chuyên Ngành Đào Tạo</a></li>
                    <li><a href="#">Đăng Ký Học</a></li>
                    <li><a href="#">Đăng Nhập</a></li>
                </ul>
                <a class="uk-navbar-toggle uk-hidden@m" href="#">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
            </div>
        </nav>
    </div>
</header>
<div class="home__block01 uk-position-relative uk-overflow-hidden">
    <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true" class="dynamic-height home__block01__top uk-position-top-right uk-cover-container uk-visible@m">
        <canvas width="382" height="144"></canvas>
    </div>
    <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true" class="dynamic-height home__block01__bottom uk-position-bottom-left uk-cover-container uk-visible@m">
        <canvas width="571" height="97"></canvas>
    </div>
    <div class="uk-height-min-large uk-flex uk-flex-bottom">
        <div class="uk-width-1-1 uk-position-relative uk-section uk-padding-remove-bottom">
            <div class="uk-container">
                <div class="uk-grid-0-m uk-grid-40 uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-child-width-1-2@m uk-grid-40 uk-grid-15-m uk-flex-middle" uk-grid>
                            <div>
                                <div class="uk-light">
                                    <h2 class="uk-h2 uk-margin-remove">Xét học bạ THPT <br class="uk-visible@m">
                                        Hoặc Điểm thi THPT <br class="uk-visible@m">
                                        TOP40</h2>
                                    <div class="item__15">Để lại thông tin nhận tư vấn.</div>
                                </div>
                            </div>
                            <div>
                                <form class="home__block01__form uk-card uk-card-body">
                                    <fieldset class="uk-fieldset">
                                        <legend class="home__block01__title uk-legend uk-position-top-center">ĐĂNG KÝ TƯ VẤN</legend>
                                        <div class="">
                                            <input class="uk-input home__dky__input" type="text" placeholder="Họ và tên">
                                        </div>
                                        <div class="item__15">
                                            <input class="uk-input home__dky__input" type="tel" placeholder="Điện thoại">
                                        </div>
                                        <div class="item__15">
                                            <input class="uk-input home__dky__input" type="email" placeholder="Email">
                                        </div>
                                        <div class="item__15">
                                            <input class="uk-input home__dky__input" type="text" placeholder="Tỉnh / Thành phố">
                                        </div>
                                        <div class="uk-position-bottom-center home__block01__boxBtn">
                                            <button type="button" class="uk-button uk-button-secondary home__dky__btnSubmit">ĐĂNG KÝ NGAY</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-auto@m uk-flex-first@m">
                        <img uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true" src="images/1x/bg1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-height-min-medium uk-section">
    <div class="uk-container">
        <div uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'images/1x/ts1.png',
                    'txt1' => '5 sao',
                    'txt2' => 'chất lượng đào tạo',
                ),
                array(
                    'img' => 'images/1x/ts2.png',
                    'txt1' => '98%',
                    'txt2' => 'sinh viên có việc làm ngay',
                ),
                array(
                    'img' => 'images/1x/ts3.png',
                    'txt1' => '100%',
                    'txt2' => 'sinh viên làm việc thực tế tại doanh nghiệp từ năm 3',
                ),
                array(
                    'img' => 'images/1x/ts4.png',
                    'txt1' => '19%',
                    'txt2' => 'sinh viên có việc làm tại nước ngoài',
                ),
                array(
                    'img' => 'images/1x/ts5.png',
                    'txt1' => '1500',
                    'txt2' => '4 năm đại học cho tân sinh viên',
                    'txt3' => 'suất học bổng',
                ),
            );
            foreach ($data as $k=>$v): ?>
                <?php if ($k!=2): ?>
                    <div class="uk-width-1-2@m">
                        
                    </div>
                <?php else: ?>
                    <div class="uk-width-1-1">

                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--50.000++ Sinh viên đã chọn Đại Học FPT-->
<div class="home__sinhvienchon uk-flex uk-flex-middle">
    <div class="uk-section uk-width-1-1">
        <div class="uk-container">
            <div class="home__dky__item-40-20 uk-light">
                <h2 class="uk-h2 home__dky__title uk-text-center uk-margin-remove">
                    50.000++ Sinh viên đã chọn Đại Học FPT
                </h2>
                <div class="uk-text-center item__15 home__sinhvien__txt">Trường Đại học FPT là môi trường tạo điều kiện thuận lợi nhất để sinh viên phát triển năng lực cạnh tranh toàn cầu,
                    <br class="uk-visible@m">
                    chú trọng mang đến cho sinh viên sự trải nghiệm thực tiễn trong quá trình học.</div>
            </div>
            <div class="home__dky__item-40-20">
                <div class="uk-child-width-1-2@m uk-grid-30 uk-grid-40-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'img' => 'images/1x/svv1.png',
                            'title' => 'Chất lượng đào tạo quốc tế',
                            'desc' => 'Đại học FPT là trường đầu tiên được xếp hạng Ba Sao theo chuẩn quốc tế QS Stars của các trường đại học trên thế giới (2012), trong đó đạt Năm Sao cho 4 tiêu chí quan trọng: Đào tạo (Teaching), Việc làm (Employability), Cơ sở vật chất (Facilities) và Trách nhiệm Xã hội (Social Responsibility). Bên cạnh đó là hàng loạt giải thưởng danh giá trong nước và quốc tế.',
                        ),
                        array(
                            'img' => 'images/1x/svv2.png',
                            'title' => 'Đào tạo theo nhu cầu doanh nghiệp',
                            'desc' => 'Chương trình đào tạo của Đại học FPT gắn liền với thực tiễn và nhu cầu doanh nghiệp, được xây dựng với sự tham gia hỗ trợ, tư vấn của các chuyên gia hàng đầu từ các công ty thành viên và đối tác của Tập đoàn FPT. Đại học FPT có mạng lưới liên kết với +400 danh nghiệp trong và ngoài nước.',
                        ),
                        array(
                            'img' => 'images/1x/svv3.png',
                            'title' => 'Cơ sở vật chất hiện đại với không gian học xanh',
                            'desc' => 'Đại học FPT được xây dựng trên một không gian rộng lớn, tạo ra một môi trường giáo dục hiện đại, kết hợp hài hòa giữa cảnh quan thiên nhiên, thân thiện với môi trường. Trường như một đô thị thu nhỏ với trang thiết bị hiện đại và đầy đủ giúp sinh viên có thể tập trung cho hoạt động học tập cũng như có nhiều trải nghiệm với cuộc sống tập thể, tự lập.',
                        ),
                        array(
                            'img' => 'images/1x/svv4.png',
                            'title' => 'Trải nghiệm trong suốt quá trình học',
                            'desc' => 'Sinh viên Đại học FPT có 66% thời lượng thực hành các môn chuyên ngành, 100% sinh viên được làm dự án thực tế vào cuối môn. Đồng thời, 100% sinh viên được tham gia học kỳ thực tập và làm việc thực tế tại doanh nghiệp. Ngoài ra còn có các môn học: võ Vovinam, nhạc cụ dân tộc và nhiều hoạt động ngoại khoá, CLB để phát triển kỹ năng toàn diện.',
                        ),
                        array(
                            'img' => 'images/1x/svv5.png',
                            'title' => 'Cơ hội học tập nước ngoài',
                            'desc' => 'Sinh viên Đại học FPT thông tạo 2 ngoại ngữ, 100% sinh viên có cơ hội học tập, trao đổi, thực tập ở nước ngoài. Đại học FPT có mạng lưới liên kết với +86 trường tại hơn 33 quốc gia trên thế giới. 19% cựu sinh viên Đại học FPT đang học tập và làm việc tại nước ngoài.',
                        ),
                        array(
                            'img' => 'images/1x/svv6.png',
                            'title' => 'Cơ hội việc làm',
                            'desc' => 'Sinh viên được lựa chọn nhiều chuyên ngành đón đầu xu hướng 4.0, đáp ứng nhu cầu nhân lực chất lượng cao của thị trường, các chuyên ngành mới như AI - Trí tuệ nhân tạo, IoT - Internet vạn vật,… Với phương pháp đào tạo đổi mới, áp dụng công nghệ hiện đại vào giảng dạy, sinh viên được đào tạo toàn diện từ kiến thức đến ngoại ngữ và kỹ năng mềm. 98% sinh viên có việc làm ngay sau khi ra trường.',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                        <div>
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-2-5">
                                    <div class="home__sinhvienchon__coverImg uk-cover-container dynamic-height">
                                        <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                        <canvas width="251" height="189"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand uk-light">
                                    <h4 class="home__sinhvienchon__title uk-h4 uk-margin-remove"><?= $v['title'] ?></h4>
                                    <div class="home__sinhvienchon__desc item__10"><?= $v['desc'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="home__dky__item-40-20 uk-text-center">
                <button type="button" class="uk-button uk-button-secondary home__dky__btnSubmit">ĐĂNG KÝ NGAY</button>
            </div>
        </div>
    </div>
</div>
<!--/50.000++ Sinh viên đã chọn Đại Học FPT-->

<!--Chuyên ngành đào tạo-->
<div class="uk-section home__daotao">
    <div class="uk-container">
        <div class="home__dky__item-40-20">
            <h2 class="uk-h2 home__dky__title uk-text-center uk-margin-remove">
                Chuyên ngành đào tạo
            </h2>
        </div>
        <div class="home__dky__item-40-20">
            <div class="uk-child-width-1-3@m" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'Ngành Quản Trị Kinh Doanh',
                        'txt' => '<span>MÃ NGÀNH:</span> 7340101 / <span>CHỈ TIÊU:</span> 6265',
                    ),
                    array(
                        'title' => 'Công Nghệ Thông Tin',
                        'txt' => '<span>MÃ NGÀNH:</span> 7480201 / <span>CHỈ TIÊU:</span> 9715',
                    ),
                    array(
                        'title' => 'Ngôn Ngữ',
                        'txt' => '<span>CHỈ TIÊU:</span> 1085',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="home__daotao__item">
                        <div class="home__daotao__box1 dynamic-height"><?= $v['title'] ?></div>
                        <div>
                            <div class="home__daotao__box2 dynamic-height"><?= $v['txt'] ?></div>
                        </div>
                    </div>
                    <div class="home__daotao__item">
                        <div class="uk-grid-10" uk-grid>
                            <div class="uk-width-auto">

                            </div>
                            <div class="uk-width-expand">

                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Chuyên ngành đào tạo-->

<!--Thông báo tuyển sinh Hệ đại học chính quy Đại học FPT năm 2023-->
<div class="uk-section home__tuyensinh">
    <div class="uk-container">
        <div class="home__dky__item-40-20 uk-light">
            <h2 class="uk-h2 home__dky__title uk-text-center uk-margin-remove">
                Thông báo tuyển sinh <br>
                Hệ đại học chính quy Đại học FPT năm 2023
            </h2>
        </div>
        <div class="home__dky__item-40-20">
            <ul class="home__tuyensinh__tab uk-subnav uk-subnav-pill uk-child-width-expand uk-margin-remove-bottom" uk-switcher>
                <li><a href="#" class="dynamic-height">Phương thức tuyển sinh</a></li>
                <li><a href="#" class="dynamic-height">Thủ tục xét tuyển</a></li>
                <li><a href="#" class="dynamic-height">Đăng ký & Nộp phí</a></li>
            </ul>
            <ul class="uk-switcher">
                <li>
                    <div class="home__tuyensinh__content uk-height-min-large">
                        <div class="home__tuyensinh__width uk-margin-auto">
                            <div class="uk-child-width-1-2@m uk-grid-match uk-grid-medium uk-grid-row-medium" uk-grid>
                                <div class="uk-width-1-1">
                                    <div class="uk-text-center home__tuyensinh__txt1">
                                        Đối tượng tuyển sinh Các thí sinh tốt nghiệp THPT hoặc tương đương tính đến thời điểm nhập học
                                        <br class="uk-visible@m">
                                        Điều kiện xét tuyển Đáp ứng một trong các điều kiện sau
                                    </div>
                                </div>
                                <?php
                                $data = array(
                                    'Thí sinh thuộc diện được xét tuyển thẳng trong Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT năm 2022.',
                                    'Đạt xếp hạng Top40 theo điểm thi THPT năm 2022 (chứng nhận thực hiện trên trang Schoolrank theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2022).',
                                    'Đạt xếp hạng Top40 theo học bạ THPT năm 2022 (chứng nhận thực hiện trên trang SchoolRank.).',
                                    'Ngành Ngôn Ngữ Anh: có chứng chỉ tiếng Anh TOEFL iBT từ 80 hoặc IELTS (Học thuật) từ 6.0 hoặc quy đổi tương đương.',
                                    'Thí sinh thuộc diện được xét tuyển thẳng trong Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT năm 2022.',
                                    'Đạt xếp hạng Top40 theo điểm thi THPT năm 2022 (chứng nhận thực hiện trên trang Schoolrank theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2022).',
                                    'Đạt xếp hạng Top40 theo học bạ THPT năm 2022 (chứng nhận thực hiện trên trang SchoolRank.).',
                                    'Ngành Ngôn Ngữ Anh: có chứng chỉ tiếng Anh TOEFL iBT từ 80 hoặc IELTS (Học thuật) từ 6.0 hoặc quy đổi tương đương.',
                                    'Thí sinh thuộc diện được xét tuyển thẳng trong Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT năm 2022.',
                                    'Đạt xếp hạng Top40 theo điểm thi THPT năm 2022 (chứng nhận thực hiện trên trang Schoolrank theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2022).',
                                    'Đạt xếp hạng Top40 theo học bạ THPT năm 2022 (chứng nhận thực hiện trên trang SchoolRank.).',
                                    'Ngành Ngôn Ngữ Anh: có chứng chỉ tiếng Anh TOEFL iBT từ 80 hoặc IELTS (Học thuật) từ 6.0 hoặc quy đổi tương đương.',
                                    'Thí sinh thuộc diện được xét tuyển thẳng trong Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT năm 2022.',
                                    'Đạt xếp hạng Top40 theo điểm thi THPT năm 2022 (chứng nhận thực hiện trên trang Schoolrank theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2022).',
                                );
                                foreach ($data as $k=>$v): ?>
                                <div>
                                    <div class="home__tuyensinh__txt2 uk-padding-small uk-card uk-card-default" data-txt="<?= $k+1 ?>">
                                        <?= $v ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="home__tuyensinh__content uk-height-min-large">
                        <div class="home__tuyensinh__width uk-margin-auto">

                        </div>
                    </div>
                </li>
                <li>
                    <div class="home__tuyensinh__content uk-height-min-large">
                        <div class="home__tuyensinh__width uk-margin-auto">

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/Thông báo tuyển sinh Hệ đại học chính quy Đại học FPT năm 2023-->

<!--Sinh viên, phụ huynh, nhà tuyển dụng nói gì?-->
<div class="uk-section home__sinhvien">
    <div class="uk-container">
        <div class="home__dky__item-40-20">
            <h2 class="uk-h2 home__dky__title uk-text-center uk-margin-remove">Sinh viên, phụ huynh, nhà tuyển dụng nói gì?</h2>
        </div>
        <div class="home__dky__item-40-20">
            <div uk-slider>

                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-grid" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'img' => 'images/1x/sv1.png',
                                'desc' => '',
                            ),
                            array(
                                'img' => 'images/1x/sv2.png',
                                'desc' => '',
                            ),
                            array(
                                'img' => 'images/1x/sv3.png',
                                'desc' => '',
                            ),
                            array(
                                'img' => 'images/1x/sv1.png',
                                'desc' => '',
                            ),
                            array(
                                'img' => 'images/1x/sv2.png',
                                'desc' => '',
                            ),
                            array(
                                'img' => 'images/1x/sv3.png',
                                'desc' => '',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <li>
                            <div class="home__sinhvien__width uk-margin-auto">
                                <div class="uk-cover-container home__dky__item-40-20">
                                    <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                    <canvas width="318" height="193"></canvas>
                                </div>
                                <div class="home__dky__item-40-20 home__sinhvien__box">
                                    <p class="home__sinhvien__txt1">Con gái cô đã được 1 công ty hàng không của Nhật Bản mời về làm việc 2 tháng nay khi em còn chưa tốt nghiệp. Cô chắn chắn rằng 4 năm qua nhà trường đã trang bị cho các con mọi thứ rất chu đáo thì các con hiện nay mới vững vàng được như thế. Ngày hôm nay tham dự buổi lễ tốt nghiệp của con, cô thực sự rất cảm động và thấy rất ấm áp. So với 4 năm trước khi cô dự lễ khai giảng thì thấy các con trưởng thành, chững chạc hơn nhiều. Cô cảm nhận được sự trách nhiệm của thầy cô từ ngày đầu tiên cho tới những ngày cuối cùng này.</p>
                                    <div class="home__sinhvien__txt2">Cô <span>Lê Nga</span></div>
                                    <div class="home__sinhvien__txt1">Phụ huynh sinh viên Trần Lê Lâm Anh</div>
                                    <div class="home__sinhvien__txt1">K11 ngành Quản trị kinh doanh</div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav home__sinhvien__dots uk-flex-center uk-margin-large-top"></ul>

            </div>
        </div>
    </div>
</div>
<!--/Sinh viên, phụ huynh, nhà tuyển dụng nói gì?-->
<!--Đăng ký nộp hồ sơ vào Đại học FPT-->
<div class="uk-section home__dky">
    <div class="uk-container">
        <div class="home__dky__item-40-20 uk-light">
            <h2 class="uk-h2 home__dky__title uk-text-center uk-margin-remove">Đăng ký nộp hồ sơ vào Đại học FPT</h2>
        </div>
        <div class="home__dky__item-40-20">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-3@s">
                    <input class="uk-input home__dky__input" type="text" placeholder="Họ và tên*">
                </div>
                <div class="uk-width-1-3@s">
                    <input class="uk-input home__dky__input" type="text" placeholder="Số điện thoại*">
                </div>
                <div class="uk-width-1-3@s">
                    <input class="uk-input home__dky__input" type="text" placeholder="Trường THPT / Đại Học ">
                </div>
                <div class="uk-width-1-3@s">
                    <input class="uk-input home__dky__input" type="text" placeholder="Ngày sinh">
                </div>
                <div class="uk-width-1-3@s">
                    <input class="uk-input home__dky__input" type="text" placeholder="Email">
                </div>
                <div class="uk-width-1-3@s">
                    <input class="uk-input home__dky__input" type="text" placeholder="Tỉnh / Thành phố">
                </div>
                <div class="uk-width-1-1">
                    <input class="uk-input home__dky__input" type="text" placeholder="Link Facebook của bạn">
                </div>
            </div>
        </div>
        <div class="home__dky__item-40-20">
            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label class="home__dky__label" for="">Đăng ký* </label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio1" checked> Tư vấn</label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio1"> Xét tuyển</label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio1"> Thi học bổng</label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio1"> Xét học bổng</label>
            </div>
            <div class="uk-margin-top uk-grid-small uk-child-width-auto uk-grid">
                <label class="home__dky__label" for="">Nơi đăng ký sơ tuyển:</label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio2" checked> Hà Nội</label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio2"> Tp.HCM</label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio2"> Cần Thơ</label>
                <label class="home__dky__label"><input class="uk-radio home__dky__radio" type="radio" name="radio2"> Đà Nẵng</label>
            </div>
        </div>
        <div class="home__dky__item-40-20 uk-text-center">
            <button type="button" class="uk-button uk-button-secondary home__dky__btnSubmit">ĐĂNG KÝ NGAY</button>
        </div>
    </div>
</div>
<!--/Đăng ký nộp hồ sơ vào Đại học FPT-->
<div class="uk-height-min-small home__hinhanh">
    <div class="uk-container uk-padding-remove">
        <img src="images/1x/hinh_anh.png" alt="">
    </div>
</div>
<?php $ratio = 0.9; ?>
<div class="footer uk-section-xsmall">
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-auto uk-flex-between uk-grid-5" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 300; repeat: false">
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: mail; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">daihocfpt@fpt.edu.vn</span>
                    </div>
                </div>
            </div>
            <div>
                <a href="" class="uk-button footer__btn uk-button-default uk-button-large uk-border-pill">
                    <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                        <div class="uk-width-auto">
                            <span class="uk-icon-button footer__icon" uk-icon="icon: receiver; ratio: <?= $ratio ?>"></span>
                        </div>
                        <div class="uk-width-expand">
                            <span class="footer__txt">024/028 73001866</span>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <div class="uk-flex-middle uk-grid-5 uk-grid-10-m" uk-grid>
                    <div class="uk-width-auto">
                        <a href="" class="uk-icon-button footer__icon" uk-icon="icon: facebook; ratio: <?= $ratio ?>"></a>
                    </div>
                    <div class="uk-width-expand">
                        <span class="footer__txt">FPT University</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>