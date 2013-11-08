twitter-bootstrap
=================

HTML markup class with Twitter Bootstrap for PHP.

<pre>
use Primalbase\TwitterBootstrap as TB;
TB::$codeFormat = false;
</pre>

### echo TB::container(); ###

`<div class="container"></div>`

### echo TB::inputRequired('user'); ###

`<input type="text" name="user" required>`

### echo TB::textArea('record[body]', "body contents", null, array('cols' => 3, 'rows' => 9))); ###

`<textarea class="form-control" name="record[body]" cols="3" rows="9">body contents</textarea>`
