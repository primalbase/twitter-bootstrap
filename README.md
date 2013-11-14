TwitterBootstrap for PHP
=========================

HTML markup class.

<pre>
use Primalbase\TwitterBootstrap as Tag;
\Primalbase\Tag\Tag::$codeFormat = false;
</pre>

### echo Tag::html('ja') ###

`<html lang="ja"></html>`

### echo Tag::container() ###

`<div class="container"></div>`

### echo Tag::row() ###

`<div class="row"></div>`

### echo Tag::col(4) or echo Tag::colXs(4) ###

`<div class="col-xs-4"></div>`

### echo Tag::row(Tag::colMd(10, 'text body')->mdOffset(2)) ###

`<div class="row"><div class="col-md-10 col-md-offset-2">text body</div></div>`

### echo Tag::formTextRequired('user') ###

`<input type="text" class="form-control" name="user" required>`

### and other implementation now. ###