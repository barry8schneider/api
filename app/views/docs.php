<!DOCTYPE html><html><head><meta charset="utf-8"><title>GovTribe API</title><link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200"><style>/* Highlight.js Theme Tomorrow */
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
</style></head><body><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><div class="col-md-3"><nav id="nav" class="hidden-sm hidden-xs affix nav"><div class="list-group"><a href="#agency" class="list-group-item heading">Agency</a><a href="#agency-agency-list" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Agency List</a><a href="#agency-agency" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Agency</a><a href="#agency-related" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Related</a><a href="#agency-dollar-flow" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Dollar Flow</a></div><p style="text-align: center"><a href="https://api.govtribe.com">https://api.govtribe.com</a></p></nav></div><div class="col-md-9"><div><header><div class="page-header"><h1 id="top">GovTribe API</h1></div></header><div class="description"><p><a href="http://govtribe.com">Our</a> goal is to make accessing federal procurement data <strong>simple</strong>, <strong>fast</strong> and <strong>easy</strong> to understand.</p>
<p> The actors in the process - agencies, offices, projects, vendors, protests and more - are turned into entities. We expose the relationships between entities, and provide some fun data about what they’re doing. </p>
</div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="agency">Agency&nbsp;<a href="#agency"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Agency entities represent federal agencies.</p>
<h2 id="agency-properties">Agency Properties</h2>
<ul>
<li>_id: The agency’s system id</li>
<li>acronym: The agency’s acronym, or ‘None’ if none is available</li>
<li>name: The agency’s name</li>
<li>timestamp: When the API last saw activity for this entity</li>
<li>type: The agency’s system type</li>
</ul>
<h4 id="agency-agency-list">Agency List&nbsp;<a href="#agency-agency-list"><i class="fa fa-link"></i></a></h4><p>Use search to find agencies, or get a list of recently active agencies.</p>
<section id="agency-agency-list-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Get Agency List</span></div><div style="float:left"><a href="#agency-agency-list-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency{?search}</code></div></div><div class="panel-body"><h3 id="get-a-list-of-recently-active-agencies">Get a list of recently active agencies</h3>
<pre><code class="lang-no-highlight">http://api.govtribe.com/agency
</code></pre>
<h3 id="search-for-an-agency-by-name">Search for an agency by name</h3>
<pre><code class="lang-no-highlight">http://api.govtribe.com/agency?search=Department of Veter
</code></pre>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>search</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Department of Veter</span></span><p>Search for an agency by name</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#71202ccfc2d8b97fb89933ee9c704a19" class="pull-right">Toggle</a></li><li id="71202ccfc2d8b97fb89933ee9c704a19" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548151db40a5165c0000cd"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of Veterans Affairs"</span></span>,
        "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span>
    </span>},
    {
        "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548151db40a5165c0000d1"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of the Navy"</span></span>,
        "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span>
    </span>}
]
</code></pre></li></ul></section><h4 id="agency-agency">Agency&nbsp;<a href="#agency-agency"><i class="fa fa-link"></i></a></h4><p>Get details for an agency.</p>
<section id="agency-agency-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Get Agency</span></div><div style="float:left"><a href="#agency-agency-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/{_id}</code></div></div><div class="panel-body"><h3 id="example">Example</h3>
<pre><code class="lang-no-highlight">http://api.govtribe.com/agency
</code></pre>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000cd</span></span><p>The agency _id</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#6228bfe8a0f6ea37fd999a3352c9e323" class="pull-right">Toggle</a></li><li id="6228bfe8a0f6ea37fd999a3352c9e323" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br></code></pre><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548151db40a5165c0000cd"</span></span>,
    "<span class="hljs-attribute">acronym</span>": <span class="hljs-value"><span class="hljs-string">"VA"</span></span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of Veterans Affairs"</span></span>,
    "<span class="hljs-attribute">timestamp</span>": <span class="hljs-value"><span class="hljs-number">1398628560</span></span>,
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span>
</span>}
</code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>404</code></strong><a data-toggle="collapse" data-target="#0b694e4cc89b44b7aa6f59fead49b0ba" class="pull-right">Toggle</a></li><li id="0b694e4cc89b44b7aa6f59fead49b0ba" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-string">"not found"</span>
</code></pre></li></ul></section><h4 id="agency-related">Related&nbsp;<a href="#agency-related"><i class="fa fa-link"></i></a></h4><p>Get entites related to the agency. Only relations active in the last 12 months are returned.</p>
<section id="agency-related-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Get Related</span></div><div style="float:left"><a href="#agency-related-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/{_id}/{type}</code></div></div><div class="panel-body"><h3 id="example">Example</h3>
<pre><code class="lang-no-highlight">http://api.govtribe.com/person
</code></pre>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000cd</span></span><p>The agency _id</p>
</dd><dt>type</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>person</span></span><p>The related entity type</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#fdc5d1db9945d451d0fb03a4bc662110" class="pull-right">Toggle</a></li><li id="fdc5d1db9945d451d0fb03a4bc662110" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548151db40a5165c0000cd"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of Veterans Affairs"</span></span>,
        "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span>
    </span>},
    {
        "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548151db40a5165c0000d1"</span></span>,
        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of the Navy"</span></span>,
        "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span>
    </span>}
]
</code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>404</code></strong><a data-toggle="collapse" data-target="#b57835a9b719a591ba9a0cceb7a97361" class="pull-right">Toggle</a></li><li id="b57835a9b719a591ba9a0cceb7a97361" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-string">"not found"</span>
</code></pre></li></ul></section><h4 id="agency-dollar-flow">Dollar Flow&nbsp;<a href="#agency-dollar-flow"><i class="fa fa-link"></i></a></h4><p>Get data about how much money this agency spends.</p>
<section id="agency-dollar-flow-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Get Dollar Flow</span></div><div style="float:left"><a href="#agency-dollar-flow-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/{_id}/dollar-flow</code></div></div><div class="panel-body"><h3 id="example">Example</h3>
<pre><code class="lang-no-highlight">http://api.govtribe.com/agency/51548151db40a5165c0000cd/dollar-flow
</code></pre>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000cd</span></span><p>The agency _id</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#f26e29ded600dabdf948d01d67cf5382" class="pull-right">Toggle</a></li><li id="f26e29ded600dabdf948d01d67cf5382" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br></code></pre><h5>Body</h5><pre><code> {
    "<span class="hljs-attribute">today</span>": <span class="hljs-value"><span class="hljs-string">"$1,534,114.90"</span></span>,
    "<span class="hljs-attribute">thisWeek</span>": <span class="hljs-value"><span class="hljs-string">"$112,822,788.27"</span></span>,
    "<span class="hljs-attribute">thisMonth</span>": <span class="hljs-value"><span class="hljs-string">"$236,169,882.44"</span></span>,
    "<span class="hljs-attribute">thisQuarter</span>": <span class="hljs-value"><span class="hljs-string">"$236,169,882.44"</span></span>,
    "<span class="hljs-attribute">thisYear</span>": <span class="hljs-value"><span class="hljs-string">"$941,144,133.44"</span></span>,
    "<span class="hljs-attribute">2014-03-month</span>": <span class="hljs-value"><span class="hljs-string">"$209,382,503.22"</span></span>,
    "<span class="hljs-attribute">2014-02-month</span>": <span class="hljs-value"><span class="hljs-string">"$356,718,244.12"</span></span>,
    "<span class="hljs-attribute">2014-01-month</span>": <span class="hljs-value"><span class="hljs-string">"$138,873,503.66"</span></span>,
    "<span class="hljs-attribute">2013-12-month</span>": <span class="hljs-value"><span class="hljs-string">"$228,544,620.33"</span></span>,
    "<span class="hljs-attribute">2013-11-month</span>": <span class="hljs-value"><span class="hljs-string">"$146,258,061.44"</span></span>,
    "<span class="hljs-attribute">2013-10-month</span>": <span class="hljs-value"><span class="hljs-string">"$422,595,166.73"</span></span>,
    "<span class="hljs-attribute">2013-09-month</span>": <span class="hljs-value"><span class="hljs-string">"$9,889,688,360.20"</span></span>,
    "<span class="hljs-attribute">2013-08-month</span>": <span class="hljs-value"><span class="hljs-string">"$300,490,980.59"</span></span>,
    "<span class="hljs-attribute">2013-07-month</span>": <span class="hljs-value"><span class="hljs-string">"$380,406,667.94"</span></span>,
    "<span class="hljs-attribute">2013-06-month</span>": <span class="hljs-value"><span class="hljs-string">"$3,211,813,773.48"</span></span>,
    "<span class="hljs-attribute">2013-05-month</span>": <span class="hljs-value"><span class="hljs-string">"$286,416,394.58"</span></span>,
    "<span class="hljs-attribute">2013-04-month</span>": <span class="hljs-value"><span class="hljs-string">"$167,759,349.48"</span></span>,
    "<span class="hljs-attribute">2013-03-month</span>": <span class="hljs-value"><span class="hljs-string">"$549,529,884.59"</span></span>,
    "<span class="hljs-attribute">2013-02-month</span>": <span class="hljs-value"><span class="hljs-string">"$76,105,828.70"</span></span>,
    "<span class="hljs-attribute">2013-01-month</span>": <span class="hljs-value"><span class="hljs-string">"$77,642,828.12"</span></span>,
    "<span class="hljs-attribute">2012-12-month</span>": <span class="hljs-value"><span class="hljs-string">"$644,561,871.59"</span></span>,
    "<span class="hljs-attribute">2012-11-month</span>": <span class="hljs-value"><span class="hljs-string">"$1,485,725,746.05"</span></span>,
    "<span class="hljs-attribute">2012-10-month</span>": <span class="hljs-value"><span class="hljs-string">"$586,620,107.61"</span></span>,
    "<span class="hljs-attribute">2012-09-month</span>": <span class="hljs-value"><span class="hljs-string">"$475,269,763.48"</span></span>,
    "<span class="hljs-attribute">2012-08-month</span>": <span class="hljs-value"><span class="hljs-string">"$3,128,207,789.58"</span></span>,
    "<span class="hljs-attribute">2012-07-month</span>": <span class="hljs-value"><span class="hljs-string">"$279,898,573.10"</span></span>,
    "<span class="hljs-attribute">2012-06-month</span>": <span class="hljs-value"><span class="hljs-string">"$387,697,080.68"</span></span>,
    "<span class="hljs-attribute">2012-05-month</span>": <span class="hljs-value"><span class="hljs-string">"$232,034,605.28"</span>
</span>}
</code></pre></li></ul></section></div></div></div></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 28 Apr 2014</p><div id="localFile" style="display: none; position: absolute; top: 0; left: 0; width: 100%; color: white; background: red; font-size: 150%; text-align: center; padding: 1em;">This page may not display correctly when opened as a local file. Instead, view it from a web server.

</div></body><script src="//code.jquery.com/jquery-1.11.0.min.js"></script><script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script>(function() {
  if (location.protocol === 'file:') {
    document.getElementById('localFile').style.display = 'block';
  }

}).call(this);
</script><script>(function() {
  $('table').addClass('table');

}).call(this);
</script></html>