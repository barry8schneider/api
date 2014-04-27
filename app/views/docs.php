<!DOCTYPE html><html><head><meta charset="utf-8"><title>GovTribe API v3.0</title><link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200"><style>/* Highlight.js Theme Tomorrow */
.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}</style><style>body,
h4,
h5 {
  font-family: 'Roboto' sans-serif !important;
}
h1,
h2,
h3,
.aglio {
  font-family: 'Raleway' sans-serif !important;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a {
  display: none;
}
h1:hover a,
h2:hover a,
h3:hover a,
h4:hover a,
h5:hover a {
  display: inline;
}
code {
  color: #444;
  background-color: #ddd;
  font-family: 'Inconsolata' monospace !important;
}
a[data-target] {
  cursor: pointer;
}
h4 {
  font-size: 100%;
  font-weight: bold;
  text-transform: uppercase;
}
.back-to-top {
  position: fixed;
  z-index: 1;
  bottom: 0px;
  right: 24px;
  padding: 4px 8px;
  background-color: #eee;
  text-decoration: none !important;
  border-top: 1px solid rgba(0,0,0,0.1);
  border-left: 1px solid rgba(0,0,0,0.1);
  border-right: 1px solid rgba(0,0,0,0.1);
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel {
  overflow: hidden;
}
.panel-heading code {
  color: #c7254e;
  background-color: transparent;
  white-space: pre-wrap;
  white-space: -moz-pre-wrap;
  white-space: -pre-wrap;
  white-space: -o-pre-wrap;
  word-wrap: break-word;
}
.panel-heading h3 {
  margin-top: 10px;
  margin-bottom: 10px;
}
a.list-group-item {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
a.list-group-item.heading {
  background-color: #f5f5f5;
}
.list-group-item.collapse {
  display: none;
}
.list-group-item.collapse.in {
  display: block;
}
#nav {
  margin-top: 38px;
  min-width: 255px;
  top: 0;
  bottom: 0;
  padding-right: 12px;
  padding-bottom: 12px;
  overflow-y: auto;
}
@media (max-width: 1199px) {
  #nav {
    min-width: 212px;
  }
}
</style></head><body><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><div class="col-md-3"><nav id="nav" class="hidden-sm hidden-xs affix nav"><div class="list-group"><a href="#agency" class="list-group-item heading">Agency</a><a href="#agency-agency-list" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Agency List</a><a href="#agency-agency" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Agency</a></div><div class="list-group"><a href="#users" class="list-group-item heading">Users</a><a href="#users-user-list" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;User List</a></div><div class="list-group"><a href="#tags" class="list-group-item heading">Tags</a><a href="#tags-" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;GET /tags</a><a href="#tags-get-one-tag" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Get one tag</a></div><p style="text-align: center"><a href="https://api.govtribe.com">https://api.govtribe.com</a></p></nav></div><div class="col-md-9"><div><header><div class="page-header"><h1 id="top">GovTribe API v3.0</h1></div></header><div class="description"><p><a href="http://govtribe.com">Our</a> goal is to make accessing federal procurement data <strong>simple</strong>, <strong>fast</strong> and <strong>easy</strong> to understand The actors in the process - a vendor that wins a project, the contracting officer that released it, the agency that funds it, etc. - are mapped to API endpoints. We expose the relationships between those actors, and provide some fun data about what they’re doing. </p>
</div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="agency">Agency&nbsp;<a href="#agency"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Agencies represent federal agencies.</p>
<h4 id="agency-agency-list">Agency List&nbsp;<a href="#agency-agency-list"><i class="fa fa-link"></i></a></h4><p>Get a list of agencies. The list will be sorted by</p>
<ul>
<li>Even</li>
<li>More</li>
<li>Markdown</li>
</ul>
<section id="agency-agency-list-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Get Agency</span></div><div style="float:left"><a href="#agency-agency-list-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency</code></div></div><div class="panel-body"><p>Get a list of notes.</p>
</div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#6950f95cdf1370ea165dcc360d515b92" class="pull-right">Toggle</a></li><li id="6950f95cdf1370ea165dcc360d515b92" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-Request-ID</span>: <span class="hljs-string">f72fc914</span><br><span class="hljs-attribute">X-Response-Time</span>: <span class="hljs-string">4ms</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
        "<span class="hljs-attribute">title</span>": <span class="hljs-value"><span class="hljs-string">"Grocery list"</span></span>,
        "<span class="hljs-attribute">body</span>": <span class="hljs-value"><span class="hljs-string">"Buy milk"</span>
    </span>},
    {
        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
        "<span class="hljs-attribute">title</span>": <span class="hljs-value"><span class="hljs-string">"TODO"</span></span>,
        "<span class="hljs-attribute">body</span>": <span class="hljs-value"><span class="hljs-string">"Fix garage door"</span>
    </span>}
]
</code></pre></li></ul></section><h4 id="agency-agency">Agency&nbsp;<a href="#agency-agency"><i class="fa fa-link"></i></a></h4><p>Note description</p>
<section id="agency-agency-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Get Agency</span></div><div style="float:left"><a href="#agency-agency-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/{_id}</code></div></div><div class="panel-body"><p>Get a single agency.</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>68a5sdf67</span></span><p>The note ID</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#0c19c51672693b270f502366b0e8edd8" class="pull-right">Toggle</a></li><li id="0c19c51672693b270f502366b0e8edd8" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-Request-ID</span>: <span class="hljs-string">f72fc914</span><br><span class="hljs-attribute">X-Response-Time</span>: <span class="hljs-string">4ms</span><br></code></pre><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">title</span>": <span class="hljs-value"><span class="hljs-string">"Grocery list"</span></span>,
    "<span class="hljs-attribute">body</span>": <span class="hljs-value"><span class="hljs-string">"Buy milk"</span>
</span>}
</code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>404</code></strong><a data-toggle="collapse" data-target="#dfe63194b85b5ea484cdb0352dfdbbfc" class="pull-right">Toggle</a></li><li id="dfe63194b85b5ea484cdb0352dfdbbfc" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-Request-ID</span>: <span class="hljs-string">f72fc914</span><br><span class="hljs-attribute">X-Response-Time</span>: <span class="hljs-string">4ms</span><br></code></pre><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">error</span>": <span class="hljs-value"><span class="hljs-string">"Note not found"</span>
</span>}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="users">Users&nbsp;<a href="#users"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Group description</p>
<h4 id="users-user-list">User List&nbsp;<a href="#users-user-list"><i class="fa fa-link"></i></a></h4><p>A list of users</p>
<section id="users-user-list-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Get users</span></div><div style="float:left"><a href="#users-user-list-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/users{?name,joinedBefore,joinedAfter,sort,limit}</code></div></div><div class="panel-body"><p>Get a list of users. Example:</p>
<pre><code class="lang-no-highlight">https://api.mywebsite.com/users?sort=joined&amp;limit=5
</code></pre>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>name</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>alice</span></span><p>Search for a user by name</p>
</dd><dt>joinedBefore</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2011-01-01</span></span><p>Search by join date</p>
</dd><dt>joinedAfter</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2011-01-01</span></span><p>Search by join date</p>
</dd><dt>sort</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>name</span></span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>joined</span></span><p>Which field to sort by</p>
<p><strong>Choices:&nbsp;</strong><code>name</code>&nbsp;<code>joined</code>&nbsp;<code>-joined</code>&nbsp;</p></dd><dt>limit</dt><dd><code>integer</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>10</span></span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>25</span></span><p>The maximum number of users to return, up to <code>50</code></p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#0abf533b34b2437d9cc18c05fbf1fc09" class="pull-right">Toggle</a></li><li id="0abf533b34b2437d9cc18c05fbf1fc09" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"alice"</span></span>,
        "<span class="hljs-attribute">image</span>": <span class="hljs-value"><span class="hljs-string">"http://foo.com/alice.jpg"</span></span>,
        "<span class="hljs-attribute">joined</span>": <span class="hljs-value"><span class="hljs-string">"2013-11-01"</span>
    </span>},
    {
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"bob"</span></span>,
        "<span class="hljs-attribute">image</span>": <span class="hljs-value"><span class="hljs-string">"http://foo.com/bob.jpg"</span></span>,
        "<span class="hljs-attribute">joined</span>": <span class="hljs-value"><span class="hljs-string">"2013-11-02"</span>
    </span>}
]
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
    "<span class="hljs-attribute">maxItems</span>": <span class="hljs-value"><span class="hljs-number">50</span></span>,
    "<span class="hljs-attribute">items</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
        "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
            </span>}</span>,
            "<span class="hljs-attribute">image</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
            </span>}</span>,
            "<span class="hljs-attribute">joined</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">pattern</span>": <span class="hljs-value"><span class="hljs-string">"\d{4}-\d{2}-\d{2}"</span>
            </span>}
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="tags">Tags&nbsp;<a href="#tags"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Get or set tags on notes</p>
<h4 id="tags-">Resources&nbsp;<a href="#tags-"><i class="fa fa-link"></i></a></h4><section id="tags--get" class="panel panel-info"><div class="panel-heading"><div style="float:left"><a href="#tags--get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/tags</code></div></div><div class="panel-body"><p>Get a list of bars</p>
</div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong></li></ul></section><h4 id="tags-get-one-tag">Get one tag&nbsp;<a href="#tags-get-one-tag"><i class="fa fa-link"></i></a></h4><p>Get a single tag</p>
<section id="tags-get-one-tag-get" class="panel panel-info"><div class="panel-heading"><div style="float:left"><a href="#tags-get-one-tag-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/tags/{id}</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong></li></ul></section></div></div></div></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 26 Apr 2014</p><div id="localFile" style="display: none; position: absolute; top: 0; left: 0; width: 100%; color: white; background: red; font-size: 150%; text-align: center; padding: 1em;">This page may not display correctly when opened as a local file. Instead, view it from a web server.

</div></body><script src="//code.jquery.com/jquery-1.11.0.min.js"></script><script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script>(function() {
  if (location.protocol === 'file:') {
    document.getElementById('localFile').style.display = 'block';
  }

}).call(this);
</script><script>(function() {
  $('table').addClass('table');

}).call(this);
</script></html>