<div class="blog-post">
<div class="small pull-right">
{{ $blog_post->created_at->toDateString() }}
</div>
<div>
@parsedown($blog_post->text)
</div>
</div>