    <?php echo $this->render('blocks/head.htm',NULL,['id'=>$pln_conf_id ,'ql'=>$pln_conf_quicklink]+get_defined_vars(),0); ?>
    <div class="container-fluid">       
        <header><div class="row">
        <div class="col-8 col-sm-7 col-xl-2"><h1>Тренировка<small>&nbsp;<i class="fas fa-tablet-alt text-black-50 is_mobile"></i></small></h1></div>
        <div class="col-4 col-sm-5 col-xl-3">  
            <form class="form-inline float-right"><div class="form-group d-none d-md-block"><i class="fas fa-calendar-alt"></i><input type="date" id="ConfigTrainDate" class="form-control mx-sm-2" onchange="Config2Base()" <?php if ($pln_conf_planned): ?>value="<?= (date($pln_conf_planned)) ?>"<?php endif; ?>></div>
            <div class="btn-group"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#ModalGetQuicklink"><i class="fas fa-link"></i></button><a href="#" class="btn btn-light disabled"><i class="fas fa-print"></i></a></div>
            </form>
        </div>
        <div class="d-none d-xl-block">
        <!--
        Place for execrises filtering system, planned in v.1.3 :)
        -->
        </div>    
        </div></header>
        <div class="row">
            <div class="col">
                <?php if ($has_plan=='FALSE'): ?>
                    <div class="alert alert-success is_mobile" role="alert"><strong>Новый план тренировки!</strong> Пожалуйста, редактируйте его на компьютере!</div>
                <?php endif; ?>
                <main>
                    
                    <section style="min-height:100px;" class="section_dropzone" data-section="1">Разминка <small>10 минут</small>
                    <?php if ($pln_content_0): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_0?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                    <div class="pulse text-center"><img src="https://sunfox.ee/resources/eventmarks/16/lifecycle.png"> &mdash; Не забывайте проверять пульс у спортсменов!</div>
                    <section style="min-height:50px;" class="section_dropzone" data-section="2">Общая физическая подготовка <small>5 минут</small>
                    <?php if ($pln_content_1): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_1?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                    <section style="min-height:100px;" class="section_dropzone" data-section="3">Ударно-беговая тренировка <small>10 минут</small>
                    <?php if ($pln_content_2): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_2?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                    <section style="min-height:100px;" class="section_dropzone" data-section="4">Специальная физическая подготовка <small>15 минут</small>
                    <?php if ($pln_content_3): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_3?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                    <section style="min-height:50px;" class="section_dropzone" data-section="5">Новая информация <small>5 минут</small>
                    <?php if ($pln_content_4): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_4?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                    <section style="min-height:100px;" class="section_dropzone" data-section="6">Наработка техники <small>15 минут</small>
                    <?php if ($pln_content_5): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_5?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                    <section style="min-height:100px;" class="section_dropzone" data-section="7">Бои <small>20 минут</small>
                    <?php if ($pln_content_6): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_6?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                    <section style="min-height:100px;" class="section_dropzone" data-section="8">Заминка <small>10 минут</small>
                    <?php if ($pln_content_7): ?><div class="dropzone"></div><?php endif; ?>
                    <?php foreach (($pln_content_7?:[]) as $plan_exr): ?>                        
                    <div class="card card_planned card_removable" id="<?= ($plan_exr['id']) ?>"><div class="card-body flex-grow-1"><p class="card-text"><strong><?= ($plan_exr['title']) ?>.</strong> <?= ($this->raw(nl2br($plan_exr['description']))) ?></div><div class="card_remove"><button type="button" class="close" aria-label="Close" data-card-remove="<?= ($plan_exr['id']) ?>"><span aria-hidden="true">×</span></button></div></div>
                    <div class="dropzone"></div>
                    <?php endforeach; ?>
                    </section>
                </main>                
            </div>
            <div class="col-7 d-none d-xl-block">
                <div class="row">
                    <div class="col"><h3>Упражнения в категориях:</h3></div>
                    <div class="col-6 text-right"><button type="button" id="ModalAddCatBtn" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#ModalAddCat"><i class="fas fa-plus"></i> Категория</button>&nbsp;<button type="button" id="ModalAddExrBtn" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#ModalAddExr" <?php if ($has_cats==false): ?>disabled<?php endif; ?>><i class="fas fa-plus"></i> Упражнение</button></div>
                </div>    
                <div id="CategoriesList">
                
                </div>
                <div class="row justify-content-start exr_list" id="ExersicesList">
                
                </div>
            </div>
    </div></div>
    <?php echo $this->render('blocks/foot.htm',NULL,get_defined_vars(),0); ?>