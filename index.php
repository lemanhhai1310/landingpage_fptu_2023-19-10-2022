<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
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