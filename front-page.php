<?php get_header();?>
<section id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1" class=""></li>
        <li data-target="#carousel" data-slide-to="2" class=""></li>
        <li data-target="#carousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" data-src="<?=get_template_directory_uri().'/assets/images/carousel/1.jpg'?>"
                 src="<?=get_template_directory_uri().'/assets/images/carousel/1.jpg'?>" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
                <h3>First slide label</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" data-src="<?=get_template_directory_uri().'/assets/images/carousel/2.jpg'?>"
                 src="<?=get_template_directory_uri().'/assets/images/carousel/2.jpg'?>" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
                <h3>Second slide label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" data-src="<?=get_template_directory_uri().'/assets/images/carousel/3.jpg'?>"
                 src="<?=get_template_directory_uri().'/assets/images/carousel/3.jpg'?>" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
                <h3>Third slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" data-src="<?=get_template_directory_uri().'/assets/images/carousel/4.jpg'?>"
                 src="<?=get_template_directory_uri().'/assets/images/carousel/4.jpg'?>" data-holder-rendered="true">
            <div class="carousel-caption d-none d-md-block">
                <h3>Third slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<section class="about pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="">
                    <div class="card-block">
                        <h4 class="card-title">Поставка запчастей</h4>
                        <p class="card-text">Наша компания готова предоставить для Вас услуги поставки запчастей на
                            спецтехнику из КНР, Японии, Америки...</p>
                        <a href="#" class="btn btn-outline-primary">Подробнее...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="">
                    <div class="card-block">
                        <h4 class="card-title">Большой выбор</h4>
                        <p class="card-text">Поставляем з\ч и оборудование популярных и малоизвестных брендов
                            из различных стран...</p>
                        <a href="#" class="btn btn-outline-primary">Подробнее...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="">
                    <div class="card-block">
                        <h4 class="card-title">Почему выбирают нас?</h4>
                        <p class="card-text">Мы работаем без посредников, именно поэтому наш товар
                            получает намного меньшую наценку...</p>
                        <a href="#" class="btn btn-outline-primary">Подробнее...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="categories bg-inverse pt-5">
    <h2 class="text-center text-uppercase section-header mb-5">Категории товаров</h2>
    <div class="category-gallery row no-gutters">
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-overlay">
                    <div class="cat-content">
                        <div class="cat-content-title">Категория</div>
                        <i class="cat-content-text">dasdsadasd sadasdas sdasdadsa</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-overlay">
                    <div class="cat-content">
                        <div class="cat-content-title">Категория</div>
                        <i class="cat-content-text">dasdsadasd sadasdas sdasdadsa</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-overlay">
                    <div class="cat-content">
                        <div class="cat-content-title">Категория</div>
                        <i class="cat-content-text">dasdsadasd sadasdas sdasdadsa</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-overlay">
                    <div class="cat-content">
                        <div class="cat-content-title">Категория</div>
                        <i class="cat-content-text">dasdsadasd sadasdas sdasdadsa</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-overlay">
                    <div class="cat-content">
                        <div class="cat-content-title">Категория</div>
                        <i class="cat-content-text">dasdsadasd sadasdas sdasdadsa</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-text">
                    Категория
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-text">
                    Категория
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="cat" style="background-image: url(<?=get_template_directory_uri().'/assets/images/categories/1.jpg'?>)" >
                <div class="cat-text">
                    Категория
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services pt-5 pb-5">
    <div class="container">
        <h2 class="text-center text-uppercase section-header">Наши услуги</h2>
        <p class="header-sub-text text-center">dd sadd asdasd asdsad as asd asdas das asd asd asd as sadasd asdas</p>

        <div class="row">
            <div class="col">
                <div class="service-block">
                    <div class="icon-"></div>
                    <h4>Поставка з/ч</h4>
                    <p>Поставка з/ч, оборудования для спецтехники из Китая, Италии, Германии, Франции, Японии, Кореи и США</p>
                </div>

            </div>
            <div class="col">
                <div class="service-block">
                    <div class="icon-"></div>
                    <h4>Логистические услуги </h4>
                    <p>Логистические услуги (таможенная очистка, склады временного хранения.)</p>
                </div>
            </div>
            <div class="col">
                <div class="service-block">
                    <div class="icon-"></div>
                    <h4>Производство з/ч</h4>
                    <p>Производство з/ч на заводах в Китае</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="logistic pt-5 pb-5">
    <div class="container">

    </div>
</section>
<?php get_footer();?>