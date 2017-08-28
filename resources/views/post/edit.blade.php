@extends("layout.main")

@section("content")
@include('vendor.editor.head')
    <div class="col-sm-8 blog-main">
        <form action="/posts/{{$post->id}}" method="POST">
            {{method_field("PUT")}}
            {{csrf_field()}}
            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" placeholder="这里是标题" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label>内容</label>

                <!-- 编辑器一定要被一个 class 为 editor 的容器包住 -->
                <div class="editor">
                    <textarea id='myEditor' name="content" class="form-control" >{{EndaEditor::MarkDecode($post->content)}}</textarea>
                </div>
                <!-- <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;"  placeholder="这里是内容">{{$post->content}}</textarea> -->
            </div>
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>
        @include('layout.error')
    </div><!-- /.blog-main -->


@endsection