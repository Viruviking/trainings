<div class="modal" tabindex="-1" role="dialog" id="ModalGetQuicklink" aria-hidden="true"><div class="modal-dialog modal-dialog-centered"><div class="modal-content">
    <div class="modal-header"><h5 class="modal-title">Поделиться ссылкой</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>   
    <div class="modal-body">
    <div class="form-group">
    <label for="recipient-name" class="col-form-label" for="plan_quicklink">Ссылка на этот план занятия:</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="plan_quicklink" value="https://trainings.sunfox.ee/plan/<?= ($modal_quicklink) ?>">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="ButtonCopyQuicklink" onclick="Copy2Clipboard('plan_quicklink')">Скопировать</button>
        </div>
    </div>
    </div>
    </div>
    </div></div></div>
    
    <div class="modal" tabindex="-1" role="dialog" id="ModalAddCat" aria-hidden="true"><div class="modal-dialog modal-dialog-centered"><div class="modal-content">
    <div class="modal-header"><h5 class="modal-title">Добавить категорию</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>   
    <form name="FormAddCategory" action="#">
    <div class="modal-body">
    <div class="form-group">
    <label for="category_title" class="col-form-label">Наименование:</label>
    <input type="text" class="form-control" id="category_title" name="category_title" autofocus="autofocus" required>
    <small id="category_titleHelp" class="form-text text-muted">Добавляемые категории не должны дублировать друг друга по смыслу. Возможность добавления подкатегорий &ndash; отсутствует. После добавления категории в неё можно будет добавить новое упражнение.</small>
    </div>
    </div>
    <div class="modal-footer"><button type="submit" class="btn btn-primary">Добавить</button></div>
    </form>
    </div></div></div>
    
    <div class="modal" tabindex="-1" role="dialog" id="ModalAddExr" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content">
    <div class="modal-header"><h5 class="modal-title">Добавить упражнение</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
    <form name="FormAddExercise" action="#">
    <div class="modal-body">
    <div class="form-group">
    <label for="exercise_title" class="col-form-label">Наименование:</label>
    <input type="text" class="form-control"  name="exercise_title" id="exercise_title" autofocus="autofocus" required maxlength="30">
    <small id="exercise_titleHelp" class="form-text text-muted">Выберите короткое, простое и уникальное название.</small>
    </div>
    <div class="form-group">
    <label for="category_title" class="col-form-label">Категория:</label>
    
    <?php if ($modal_categories): ?>
    
        <select class="form-control" name="category_id" required>
        <option selected disabled>Не выбрана</option>
        <?php foreach (($modal_categories?:[]) as $cat): ?>
            <option value="<?= ($cat['id']) ?>" <?php if ($modal_req_cat_id==$cat['id']): ?>selected<?php endif; ?>><?= ($cat['title']) ?></option>
        <?php endforeach; ?>   
        </select>             
    
    <?php else: ?>
        <div class="alert alert-primary" role="alert">Категории упражнений отсутствуют.</div>
    
    <?php endif; ?>
    </div>
    <div class="form-group">
    <label for="exercise_description" class="col-form-label">Описание:</label>
    <textarea class="form-control" id="exercise_description" name="exercise_description" rows="4" required></textarea>
    <small id="exercise_descriptionHelp" class="form-text text-muted">Максимальное количество символов - 512.</small>
    </div>
    </div>
    <div class="modal-footer"><button type="submit" class="btn btn-primary">Добавить</button></div>
    </form>
    </div></div></div>