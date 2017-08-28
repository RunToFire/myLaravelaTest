<?php $__env->startSection("content"); ?>
<?php echo $__env->make('vendor.editor.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-sm-8 blog-main">
        <form action="/posts" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" placeholder="这里是标题">
            </div>
            <div class="form-group">
                <label>内容</label>
                <div class="editor">
                    <textarea id='myEditor'  style="height:400px;max-height:500px;" name="content" class="form-control" placeholder="这里是内容" ></textarea>
                </div>
            </div>
            <?php echo $__env->make("layout.error", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div><!-- /.blog-main -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>