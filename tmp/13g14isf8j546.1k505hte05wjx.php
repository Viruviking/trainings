    <?php echo $this->render('blocks/head.htm',NULL,get_defined_vars(),0); ?>
    <div class="container-fluid" style="position:absolute;top:50vh;margin-top:-200px;">
        <div class="row justify-content-center align-items-center"><div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col-xs-12">
            <div class="alert alert-danger" role="alert" style="margin-bottom:0;">
            <h4 class="alert-heading">Упс, ошибочка вышла!</h4>
            <p>Кажется, что-то пошло не так? Давайте, вместе выясним, что именно.</p>
            <p><strong>План тренировки с этим кодом отсутствует или код не верен.</strong> Пожалуйста, обратитесь к тренеру, предоставившему Вам этот код для повторного уточнения, либо создайте <a href="/">новую тренировку</a>. Пожалуйста, обратите внимание: мы храним планы тренировок не более полугода с момента их создания.</p>
            <p><strong>Страницы, к которой Вы обратились, не существует.</strong> На нашем сайте, по существу, присутствует лишь <a href="/">одна страница</a>.</p>
            </div>
        </div></div>
    <?php echo $this->render('blocks/foot.htm',NULL,get_defined_vars(),0); ?>