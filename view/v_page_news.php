<div class="container  mb-5">
<nav style="--bs-breadcrumb-divider: '>'; padding: 15px 0;" aria-label="breadcrumb" pad>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=$base_url?>/page/home" style="text-decoration: none;">Trang Chủ</a></li>
            <li class="breadcrumb-item active fw-semibold" aria-current="page" style="color: black;">Bài Viết</li>
        </ol>
    </nav>
    <h2 class="mb-5;" style="color: #fcb000; margin-bottom: 30px;">Bài Viết </h2>
    <div class="section-p1">
        <div class="row">
            <?php foreach ($allNews as $new) : ?>
                <div class="col">
                    <figure class="figure">
                        <img src="<?= $base_url ?>/template/assets_user/image/<?= $new['Hinh'] ?>" class="figure-img img-fluid rounded" alt="..." style="height: 300px; width: 400px; object-fit: cover;">
                        <figcaption class="figure-caption" style="height:40px;"><strong> <a href="<?= $base_url ?>/news/detail&id=<?= $new['MaBV'] ?>"><?= $new['TieuDe'] ?></a></strong></figcaption>

                        <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">

                            <p class="figure-caption" style="width:400px;"><?= $new['NoiDung'] ?></p>
                        </div>
                        
                    </figure>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>