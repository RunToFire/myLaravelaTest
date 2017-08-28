<?php $__env->startSection("content"); ?>
<?php echo $__env->make('vendor.editor.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-sm-8 blog-main">
        <form action="/posts/<?php echo e($post->id); ?>" method="POST">
            <?php echo e(method_field("PUT")); ?>

            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" placeholder="这里是标题" value="<?php echo e($post->title); ?>">
            </div>
            <div class="form-group">
                <label>内容</label>

                <!-- 编辑器一定要被一个 class 为 editor 的容器包住 -->
                <div class="editor">
                    <textarea id='myEditor' name="content" class="form-control" ><?php echo e(EndaEditor::MarkDecode($post->content)); ?></textarea>
                </div>
                <!-- <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;"  placeholder="这里是内容"><?php echo e($post->content); ?></textarea> -->
            </div>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>
        <?php echo $__env->make('layout.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div><!-- /.blog-main -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>