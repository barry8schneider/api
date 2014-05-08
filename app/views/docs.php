<!DOCTYPE html><html><head><meta charset="utf-8"><title>GT API Beta</title><link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200"><style>/* Highlight.js Theme Tomorrow */
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
</style></head><body><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><div class="col-md-3"><nav id="nav" class="hidden-sm hidden-xs affix nav"><div class="list-group"><a href="#primary-entities" class="list-group-item heading">Primary Entities</a><a href="#primary-entities-primary-entity-collection" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Primary Entity Collection</a></div><div class="list-group"><a href="#project" class="list-group-item heading">Project</a><a href="#project-project" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Project</a><a href="#project-project-award-data" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Project Award Data</a><a href="#project-project-obligation-data" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Project Obligation Data</a><a href="#project-search-projects" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search Projects</a><a href="#project-filtered-projects" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Filtered Projects</a></div><div class="list-group"><a href="#agency" class="list-group-item heading">Agency</a><a href="#agency-agency" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Agency</a></div><div class="list-group"><a href="#office" class="list-group-item heading">Office</a><a href="#office-office" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Office</a></div><div class="list-group"><a href="#person" class="list-group-item heading">Person</a><a href="#person-person" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Person</a></div><div class="list-group"><a href="#vendor" class="list-group-item heading">Vendor</a><a href="#vendor-vendor" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Vendor</a></div><div class="list-group"><a href="#category" class="list-group-item heading">Category</a><a href="#category-category" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Category</a></div><p style="text-align: center"><a href="http://api.govtribe.com">http://api.govtribe.com</a></p></nav></div><div class="col-md-9"><div><header><div class="page-header"><h1 id="top">GT API Beta</h1></div></header><div class="description"><p>The <a href="http://www.govtribe.com">GovTribe</a> API provides data on the U.S federal government contracting market. </p>
<h2 id="primary-entites">Primary Entites</h2>
<p>Created with data from multiple open government data sources, the GovTribe API presents six primary types of entities as well as their relationships to each other. Each entity type is a resource and has an endpoint.</p>
<ul>
<li>Project - A U.S. federal government contract or opportunity</li>
<li>Agency - A U.S. federal government agency that executes Projects</li>
<li>Office - An organizational unit within an Agency that executes Projects</li>
<li>Person - A point of contact for one or more Projects</li>
<li>Vendor - A legal entity that has been awareded a Project</li>
<li>Category - A topical grouping, based off North American Industry Classification System (NAICS) codes or Product and Service (PSC) codes </li>
</ul>
<h2 id="secondary-entities">Secondary Entities</h2>
<p>The GovTribe API presents two types of secondary entities. Each supporting entity is a resource and has an endpoint. </p>
<ul>
<li>Protest - Define Protest</li>
<li>Activity - Define Activity</li>
</ul>
<h2 id="services">Services</h2>
<p>The GovTribe API provides a search service for accessing all primary entity types. </p>
</div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="primary-entities">Primary Entities&nbsp;<a href="#primary-entities"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="primary-entities-primary-entity-collection">Primary Entity Collection&nbsp;<a href="#primary-entities-primary-entity-collection"><i class="fa fa-link"></i></a></h4><p>Collection of one of the six types of primary entities, returned as a paginated list of NTIs (name, type, ID), ordered by timestamp.</p>
<section id="primary-entities-primary-entity-collection-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">List Primary Entities</span></div><div style="float:left"><a href="#primary-entities-primary-entity-collection-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/{entityType}/{?skip,take}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>entityType</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>project</span></span><p>The type of entitiies to be returned</p>
<p><strong>Choices:&nbsp;</strong><code>project</code>&nbsp;<code>vendor</code>&nbsp;<code>category</code>&nbsp;<code>agency</code>&nbsp;<code>office</code>&nbsp;<code>person</code>&nbsp;</p></dd><dt>skip</dt><dd><code>number</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>0</span></span>&nbsp;<p>The number of entities to skip.</p>
</dd><dt>take</dt><dd><code>number</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>25</span></span>&nbsp;<p>The number of entities to return.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Project</code></strong><a data-toggle="collapse" data-target="#403b483b7419a23ed8aaa5bde1722709" class="pull-right">Toggle</a></li><li id="403b483b7419a23ed8aaa5bde1722709" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#765575bf22a426a61589ee73b773455c" class="pull-right">Toggle</a></li><li id="765575bf22a426a61589ee73b773455c" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
"<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">670413</span></span>,
"<span class="hljs-attribute">skip</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
"<span class="hljs-attribute">take</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
"<span class="hljs-attribute">results</span>":<span class="hljs-value">[
    {
        "<span class="hljs-attribute">name</span>":<span class="hljs-value"><span class="hljs-string">"USDA EVENT - Rural Small Business Connections - Pine Bluff, AR"</span></span>,
        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"project"</span></span>,
        "<span class="hljs-attribute">_id</span>":<span class="hljs-value"><span class="hljs-string">"5363be766c5cc8a60d8b4567"</span>
    </span>},
    {
        "<span class="hljs-attribute">name</span>":<span class="hljs-value"><span class="hljs-string">"SOLE SOURCE ENGINEERING TECHNICAL SERVICES TO SUPPORT THE IMPROVED CONTROL AND DISPLAY UPGRADE TO THE SLQ-32 COUNTERMEASURE SYSTEM"</span></span>,
        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"project"</span></span>,
        "<span class="hljs-attribute">_id</span>":<span class="hljs-value"><span class="hljs-string">"5363be2b6c5cc8a00c8b4567"</span>
    </span>}
]
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">total</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The total number of entities for this endpoint"</span>                        
        </span>}</span>,
        "<span class="hljs-attribute">skip</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The number of entities skipped in the response"</span></span>,
            "<span class="hljs-attribute">default</span>": <span class="hljs-value"><span class="hljs-number">0</span>
        </span>}</span>,
        "<span class="hljs-attribute">take</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The number of entities returned in the response"</span></span>,
            "<span class="hljs-attribute">default</span>": <span class="hljs-value"><span class="hljs-number">25</span>
        </span>}</span>,
        "<span class="hljs-attribute">results</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">uniqueItems</span>": <span class="hljs-value"><span class="hljs-literal">true</span></span>,
            "<span class="hljs-attribute">items</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">title</span>": <span class="hljs-value"><span class="hljs-string">"NTI"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}
                </span>}</span>,
                "<span class="hljs-attribute">required</span>":<span class="hljs-value">[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]</span>,
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"total"</span>, <span class="hljs-string">"skip"</span>, <span class="hljs-string">"take"</span>, <span class="hljs-string">"results"</span>]     
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="project">Project&nbsp;<a href="#project"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="project-project">Project&nbsp;<a href="#project-project"><i class="fa fa-link"></i></a></h4><p>A Project is a U.S. federal government contract or opportunity. </p>
<section id="project-project-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Project</span></div><div style="float:left"><a href="#project-project-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired Project entity to perform action with.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Project</code></strong><a data-toggle="collapse" data-target="#1860a33d3efc93219d08ee68383cd165" class="pull-right">Toggle</a></li><li id="1860a33d3efc93219d08ee68383cd165" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#aa10258df4ef3256f5e52015dbaad9f8" class="pull-right">Toggle</a></li><li id="aa10258df4ef3256f5e52015dbaad9f8" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">Hello</span>" : <span class="hljs-value"><span class="hljs-string">"there"</span></span>,
    "<span class="hljs-attribute">You look</span>" : <span class="hljs-value"><span class="hljs-string">"nice"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "type": "object",
    "properties": {
        "_id" : {
            "type":"string"
            "description": "The unique ID for the Project"
        },
        "NAICS" : {
            "type":"string"
            "description": "The North American Industry Classification Code assigned to the Project"
        },

        "setAsideType" : {
            "type":"string"
            "description": "The <span class="hljs-operator"><span class="hljs-keyword">set</span> aside designated <span class="hljs-keyword">for</span> a project<span class="hljs-string">"
            "</span>enum<span class="hljs-string">" : ["</span>Total Small Business<span class="hljs-string">", "</span>Service-Disabled Veteran-Owned Small Business<span class="hljs-string">", "</span>HUBZone<span class="hljs-string">", "</span>Competitive <span class="hljs-number">8</span>(a)<span class="hljs-string">", "</span>Woman Owned Small Business<span class="hljs-string">", "</span><span class="hljs-keyword">Partial</span> Small Business<span class="hljs-string">", "</span>Economically Disadvantaged Woman Owned Small Business<span class="hljs-string">", "</span>Emerging Small Business<span class="hljs-string">", "</span>Total HBCU / MI<span class="hljs-string">", "</span><span class="hljs-keyword">Partial</span> HBCU / MI<span class="hljs-string">"]
        },
        "</span>dueDates<span class="hljs-string">": {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span><span class="hljs-keyword">All</span> due dates <span class="hljs-keyword">for</span> a project across its lifecycle<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : { 
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">"
                "</span>description<span class="hljs-string">" : "</span>A specific due <span class="hljs-keyword">date</span> <span class="hljs-keyword">for</span> project<span class="hljs-string">",
                "</span>properties<span class="hljs-string">" : {
                    "</span>dueDateType<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The type <span class="hljs-keyword">of</span> event <span class="hljs-keyword">or</span> workflow status <span class="hljs-keyword">for</span> a due <span class="hljs-keyword">date</span><span class="hljs-string">",
                        "</span>enum<span class="hljs-string">" : ["</span>Presolicitation Response<span class="hljs-string">", "</span>Complete Response<span class="hljs-string">"]
                    },
                    "</span><span class="hljs-keyword">date</span><span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-keyword">date</span> <span class="hljs-keyword">value</span> <span class="hljs-keyword">for</span> a specific due <span class="hljs-keyword">date</span><span class="hljs-string">",
                        "</span>format<span class="hljs-string">" : "</span><span class="hljs-keyword">date</span>-<span class="hljs-keyword">time</span><span class="hljs-string">"
                    }
                }
            }
        },
        "</span>workflowStatus<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>enum<span class="hljs-string">" : ["</span>Forecasted<span class="hljs-string">", "</span>Presolicitation<span class="hljs-string">", "</span><span class="hljs-keyword">Open</span> <span class="hljs-keyword">For</span> Bid<span class="hljs-string">", "</span>Canceled<span class="hljs-string">", "</span>Awarded<span class="hljs-string">", "</span>Active<span class="hljs-string">", "</span>Ended<span class="hljs-string">"],
            "</span>description<span class="hljs-string">" : "</span>The status <span class="hljs-keyword">of</span> a specific project <span class="hljs-keyword">with</span> respect <span class="hljs-keyword">to</span> the contracting lifecycle<span class="hljs-string">"
        },
        "</span>pointsOfContact<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> the government points <span class="hljs-keyword">of</span> contact associated <span class="hljs-keyword">with</span> a project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> a government point <span class="hljs-keyword">of</span> contact<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name <span class="hljs-keyword">of</span> the person<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>person<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type <span class="hljs-keyword">of</span> the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The <span class="hljs-keyword">unique</span> ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }

                }
            }
        },
        "</span>goodsOrServices<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Indicates whether a project <span class="hljs-keyword">is</span> <span class="hljs-keyword">for</span> goods <span class="hljs-keyword">or</span> Services<span class="hljs-string">",
            "</span>enum<span class="hljs-string">" : ["</span>Goods<span class="hljs-string">", "</span>Services<span class="hljs-string">"]
        },
        "</span>POPs<span class="hljs-string">": {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Geocoded places <span class="hljs-keyword">of</span> performance <span class="hljs-keyword">for</span> a project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A geocoded place <span class="hljs-keyword">of</span> performance <span class="hljs-keyword">for</span> a project<span class="hljs-string">",
                "</span>properties<span class="hljs-string">" : {
                    "</span>name<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The name <span class="hljs-keyword">of</span> a place <span class="hljs-keyword">of</span> performance<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>The type <span class="hljs-keyword">of</span> the geocoded place <span class="hljs-keyword">of</span> performance<span class="hljs-string">"
                    }, 
                    "</span>coordinates<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
                        "</span>items<span class="hljs-string">" : {
                            "</span>type<span class="hljs-string">" : "</span><span class="hljs-keyword">number</span><span class="hljs-string">",
                            "</span>description<span class="hljs-string">" : "</span>The lat <span class="hljs-keyword">and</span> long <span class="hljs-keyword">for</span> a given coordinate<span class="hljs-string">"
                        }
                    },
                    "</span>coordinateType<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The type <span class="hljs-keyword">of</span> the coordinate<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">" : ["</span>Point<span class="hljs-string">"]
                    }
                }
            }
        },
        "</span>sourceLinks<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>Listing <span class="hljs-keyword">of</span> source data providers <span class="hljs-keyword">for</span> this project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A source link string<span class="hljs-string">",
                "</span>format<span class="hljs-string">" : "</span>uri<span class="hljs-string">"
            }
        },
        "</span>awardedVendors<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> <span class="hljs-keyword">all</span> vendors receiving awards <span class="hljs-keyword">for</span> this project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> a vendor<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name <span class="hljs-keyword">of</span> the vendor<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>vendor<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type <span class="hljs-keyword">of</span> the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The <span class="hljs-keyword">unique</span> ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }
                }
            }
        },
        "</span>predictedCompetition<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> <span class="hljs-keyword">all</span> vendors predicted <span class="hljs-keyword">by</span> GovTribe <span class="hljs-keyword">to</span> compete <span class="hljs-keyword">for</span> this project.<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> a vendor, <span class="hljs-keyword">as</span> well <span class="hljs-keyword">as</span> likliehood <span class="hljs-keyword">of</span> winning<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name <span class="hljs-keyword">of</span> the vendor<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>vendor<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type <span class="hljs-keyword">of</span> the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The <span class="hljs-keyword">unique</span> ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The likliehood a vendor will win this project<span class="hljs-string">"
                        "</span>enum<span class="hljs-string">" : ["</span>High<span class="hljs-string">", "</span>Moderate<span class="hljs-string">", "</span>Low<span class="hljs-string">"]
                    }
                }
            }
        },
        "</span>solicitationNumbers<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>A listing <span class="hljs-keyword">of</span> <span class="hljs-keyword">all</span> solicitation numbers <span class="hljs-keyword">for</span> a specific project<span class="hljs-string">"
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A solicitation <span class="hljs-keyword">number</span><span class="hljs-string">"
            }
        },
        "</span>files<span class="hljs-string">": {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span><span class="hljs-keyword">All</span> files <span class="hljs-keyword">or</span> attachments associated <span class="hljs-keyword">with</span> a project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A package <span class="hljs-keyword">or</span> grouping <span class="hljs-keyword">of</span> files<span class="hljs-string">",
                "</span>properties<span class="hljs-string">" : {
                    "</span>packageName<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The name <span class="hljs-keyword">of</span> the file package<span class="hljs-string">"
                    },
                    "</span>packageData<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                        "</span>desscription<span class="hljs-string">" : "</span>A listing <span class="hljs-keyword">of</span> file data <span class="hljs-keyword">for</span> a package<span class="hljs-string">",
                        "</span>items<span class="hljs-string">" : {
                            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                            "</span>description<span class="hljs-string">" : "</span>Data <span class="hljs-keyword">for</span> a specifc file <span class="hljs-keyword">or</span> attachment<span class="hljs-string">",
                            "</span>properties<span class="hljs-string">" : {
                                "</span>fileURI<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>URI <span class="hljs-keyword">for</span> a specific file<span class="hljs-string">",
                                },
                                "</span>fileName<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">"  "</span>string<span class="hljs-string">"
                                    "</span>description<span class="hljs-string">" : "</span>The name <span class="hljs-keyword">of</span> the file<span class="hljs-string">"
                                },
                                "</span>fileDescription<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">"  "</span>string<span class="hljs-string">"
                                    "</span>description<span class="hljs-string">" : "</span>The description <span class="hljs-keyword">of</span> the file<span class="hljs-string">"
                                }
                            }
                        }
                    }
                }
            }
        },
        "</span>classCodes<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The Products <span class="hljs-keyword">and</span> Services Class (PSC) Codes <span class="hljs-keyword">for</span> a project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A PSC Code<span class="hljs-string">"
            }
        },
        "</span>tags<span class="hljs-string">": {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The topical tags <span class="hljs-keyword">for</span> a project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A tag <span class="hljs-keyword">or</span> topic extracted <span class="hljs-keyword">from</span> the project<span class="hljs-string">"
            }
        },
        "</span><span class="hljs-keyword">timestamp</span><span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-keyword">date</span> <span class="hljs-keyword">for</span> the <span class="hljs-keyword">last</span> <span class="hljs-keyword">time</span> a project was changed<span class="hljs-string">",
            "</span>format<span class="hljs-string">" : "</span><span class="hljs-keyword">date</span>-<span class="hljs-keyword">time</span><span class="hljs-string">"
        },
        "</span>agencies<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> <span class="hljs-keyword">all</span> agencies managing this project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> a n agency<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name <span class="hljs-keyword">of</span> the agency<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>agency<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type <span class="hljs-keyword">of</span> the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The <span class="hljs-keyword">unique</span> ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }
                }
            }
        },
        "</span>contractNumbers<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>A listing <span class="hljs-keyword">of</span> <span class="hljs-keyword">all</span> contract numbers <span class="hljs-keyword">for</span> a specific project<span class="hljs-string">"
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A contract <span class="hljs-keyword">number</span><span class="hljs-string">"
            }
        },
        "</span>categories<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> <span class="hljs-keyword">all</span> categories related <span class="hljs-keyword">to</span> this project<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> a category<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name <span class="hljs-keyword">of</span> the category<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>category<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type <span class="hljs-keyword">of</span> the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The <span class="hljs-keyword">unique</span> ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }
                }
            }
        },
        "</span>name<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The name <span class="hljs-keyword">of</span> a project<span class="hljs-string">"
        },
        "</span>synopsis<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span><span class="hljs-keyword">All</span> <span class="hljs-keyword">of</span> the synopses <span class="hljs-keyword">for</span> a project across its lifecycle, provided <span class="hljs-keyword">in</span> reverse <span class="hljs-keyword">order</span> <span class="hljs-keyword">of</span> occurance<span class="hljs-string">",
            "</span>items: {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A synopsis"</span>
            }
        },
        <span class="hljs-string">"offices"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The NTIs for all offices managing this project"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"An NTI for an office"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the office"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"office"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"type"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity"</span>,
            <span class="hljs-string">"enum"</span> : [<span class="hljs-string">"project]
        }
    }
}
</span></span></code></pre></li></ul></section><h4 id="project-project-award-data">Project Award Data&nbsp;<a href="#project-project-award-data"><i class="fa fa-link"></i></a></h4><section id="project-project-award-data-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Project Award Data</span></div><div style="float:left"><a href="#project-project-award-data-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/{_id}/awardData</code></div></div><div class="panel-body"><p>Returns the award data for a given project</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired Project entity to perform action with.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Project Award Data</code></strong><a data-toggle="collapse" data-target="#a7791d6ebf95954fe0358e0d64c8005f" class="pull-right">Toggle</a></li><li id="a7791d6ebf95954fe0358e0d64c8005f" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#6d51d2dbca80de22dd97e8661871f4bd" class="pull-right">Toggle</a></li><li id="6d51d2dbca80de22dd97e8661871f4bd" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">hello</span>" : <span class="hljs-value"><span class="hljs-string">"There"</span>
    <span class="hljs-string">"my"</span> : <span class="hljs-string">"property"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "type" : "object",
    "description" : "Information related to the award of this project",
    "properties": {
        "totalAwardValue" {
            "type" : "number",
            "description" : "The total amount of dollars awarded across all base and option years"
        },
        "basePeriodAwardData" : {
            "type" : "object",
            "description" : "Base period Award Data for each vendor awarded a contract for a project.",
            "properties" : {
                "startDate" : {
                    "type" : "string",
                    "description" : "The starting date for the base award period",
                    "format" : "date-time"
                },
                "endDate" : {
                    "type" : "string",
                    "description" : "The <span class="hljs-operator"><span class="hljs-keyword">end</span> <span class="hljs-keyword">date</span> <span class="hljs-keyword">for</span> the base award period<span class="hljs-string">",
                    "</span>format<span class="hljs-string">" : "</span><span class="hljs-keyword">date</span>-<span class="hljs-keyword">time</span><span class="hljs-string">"
                },
                "</span>totalValue<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span><span class="hljs-keyword">number</span><span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total amount across <span class="hljs-keyword">all</span> awards <span class="hljs-keyword">of</span> the base period<span class="hljs-string">",
                }
                "</span>awardedVendors<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A collection <span class="hljs-keyword">of</span> vendor NTIs <span class="hljs-keyword">and</span> their award <span class="hljs-keyword">values</span> <span class="hljs-keyword">for</span> the base award period<span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : { 
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A base period award object <span class="hljs-keyword">for</span> specific vendor<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                             "</span>name<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The name <span class="hljs-keyword">of</span> the vendor<span class="hljs-string">"
                            }, 
                            "</span>type<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">": "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The type <span class="hljs-keyword">of</span> the entity. Will always be vendor.<span class="hljs-string">"
                            },
                            "</span>_id<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-keyword">unique</span> _id <span class="hljs-keyword">for</span> the entity.<span class="hljs-string">"
                            },
                            "</span>amount<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span><span class="hljs-keyword">number</span><span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The dollar amount awarded <span class="hljs-keyword">for</span> the base period<span class="hljs-string">",
                                "</span>minValue<span class="hljs-string">" : "</span><span class="hljs-number">0</span><span class="hljs-string">"
                            }
                        }
                    }
                }
            }
        },
        "</span>optionPeriodsAwardData<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span><span class="hljs-keyword">Option</span> periods award data<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>Base period Award Data <span class="hljs-keyword">for</span> <span class="hljs-keyword">each</span> vendor awarded a contract <span class="hljs-keyword">for</span> a project.<span class="hljs-string">",
                "</span>properties<span class="hljs-string">" : {
                    "</span>optionName<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">" : "</span>The name <span class="hljs-keyword">of</span> the <span class="hljs-keyword">option</span> period<span class="hljs-string">".
                    },
                    "</span>optionNumber<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span><span class="hljs-keyword">number</span><span class="hljs-string">"
                        "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-keyword">number</span>, <span class="hljs-keyword">in</span> sequential <span class="hljs-keyword">order</span> <span class="hljs-keyword">of</span> the <span class="hljs-keyword">option</span> period<span class="hljs-string">".
                    },
                    "</span>startDate<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The starting <span class="hljs-keyword">date</span> <span class="hljs-keyword">for</span> the base award period<span class="hljs-string">",
                        "</span>format<span class="hljs-string">" : "</span><span class="hljs-keyword">date</span>-<span class="hljs-keyword">time</span><span class="hljs-string">"
                    },
                    "</span>endDate<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-keyword">end</span> <span class="hljs-keyword">date</span> <span class="hljs-keyword">for</span> the base award period<span class="hljs-string">",
                        "</span>format<span class="hljs-string">" : "</span><span class="hljs-keyword">date</span>-<span class="hljs-keyword">time</span><span class="hljs-string">"
                    },
                    "</span>totalValue<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span><span class="hljs-keyword">number</span><span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The total amount across <span class="hljs-keyword">all</span> awards the <span class="hljs-keyword">option</span> period<span class="hljs-string">",
                    }
                    "</span>awardedVendors<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A collection <span class="hljs-keyword">of</span> vendor NTIs <span class="hljs-keyword">and</span> their award <span class="hljs-keyword">values</span> <span class="hljs-keyword">for</span> the <span class="hljs-keyword">option</span> award period<span class="hljs-string">",
                        "</span>items<span class="hljs-string">" : { 
                            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                            "</span>description<span class="hljs-string">" : "</span>An <span class="hljs-keyword">option</span> period award object <span class="hljs-keyword">for</span> specific vendor<span class="hljs-string">",
                            "</span>properties<span class="hljs-string">" : {
                                 "</span>name<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The name <span class="hljs-keyword">of</span> the vendor<span class="hljs-string">"
                                }, 
                                "</span>type<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">": "</span>string<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The type <span class="hljs-keyword">of</span> the entity. Will always be vendor.<span class="hljs-string">"
                                },
                                "</span>_id<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-keyword">unique</span> _id <span class="hljs-keyword">for</span> the entity.<span class="hljs-string">"
                                },
                                "</span>amount<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span><span class="hljs-keyword">number</span><span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The dollar amount awarded <span class="hljs-keyword">for</span> the <span class="hljs-keyword">option</span> period<span class="hljs-string">",
                                    "</span>minValue<span class="hljs-string">" : "</span><span class="hljs-number">0</span><span class="hljs-string">"
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
</span></span></code></pre></li></ul></section><h4 id="project-project-obligation-data">Project Obligation Data&nbsp;<a href="#project-project-obligation-data"><i class="fa fa-link"></i></a></h4><section id="project-project-obligation-data-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Project Obligation Data</span></div><div style="float:left"><a href="#project-project-obligation-data-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/{_id}/obligationData</code></div></div><div class="panel-body"><p>Returns the obligation data for a given project</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired Project entity to perform action with.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Project Award Data</code></strong><a data-toggle="collapse" data-target="#573201b59eab3290cc320672673ac23e" class="pull-right">Toggle</a></li><li id="573201b59eab3290cc320672673ac23e" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#8150bb76fe1bce172f66c5fd0182a984" class="pull-right">Toggle</a></li><li id="8150bb76fe1bce172f66c5fd0182a984" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">hello</span>" : <span class="hljs-value"><span class="hljs-string">"There"</span>
    <span class="hljs-string">"my"</span> : <span class="hljs-string">"property"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Information related to the award of this project"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">totalObligationsToDate</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The total amount oblgated to the project."</span></span>,
            "<span class="hljs-attribute">minValue</span>" : <span class="hljs-value"><span class="hljs-string">"0.00"</span>
        </span>}</span>,
        "<span class="hljs-attribute">obligations</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A collection of individual obligations for a project, with references to vendors"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A single obligation record"</span></span>,
                "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">vendor</span>" :  <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An NTI for a vendor related to an obligation"</span></span>,
                        "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the entity"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"vendor"</span>]</span>,
                                "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span>
                                <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                            </span>}
                        </span>}
                    </span>}</span>,
                    "<span class="hljs-attribute">obligationAmount</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The amount for the obligation. Can be negative"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">anotherObligationProperty</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Something else."</span>
                    </span>}
                </span>}
            </span>}
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section><h4 id="project-search-projects">Search Projects&nbsp;<a href="#project-search-projects"><i class="fa fa-link"></i></a></h4><section id="project-search-projects-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Search Projects</span></div><div style="float:left"><a href="#project-search-projects-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/{?searchString,skip,take}</code></div></div><div class="panel-body"><p>Search all projects by keyword</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>searchString</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Green Laser</span></span><p>The string with which we will query the projects</p>
</dd><dt>skip</dt><dd><code>number</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>0</span></span>&nbsp;<p>The number of entities to skip.</p>
</dd><dt>take</dt><dd><code>number</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>25</span></span>&nbsp;<p>The number of entities to return.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Projects</code></strong><a data-toggle="collapse" data-target="#12e7bae7458ba4598e65f3201c29db15" class="pull-right">Toggle</a></li><li id="12e7bae7458ba4598e65f3201c29db15" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#7203b88a9e482c2714f3d5afa45b09a4" class="pull-right">Toggle</a></li><li id="7203b88a9e482c2714f3d5afa45b09a4" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">Hello</span>" : <span class="hljs-value"><span class="hljs-string">"You Fool"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">total</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The total number of returned entities for this search"</span>                        
        </span>}</span>,
        "<span class="hljs-attribute">skip</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The number of entities skipped in the response"</span></span>,
            "<span class="hljs-attribute">default</span>": <span class="hljs-value"><span class="hljs-number">0</span>
        </span>}</span>,
        "<span class="hljs-attribute">take</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The number of entities returned in the response"</span></span>,
            "<span class="hljs-attribute">default</span>": <span class="hljs-value"><span class="hljs-number">25</span>
        </span>}</span>,
        "<span class="hljs-attribute">results</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">uniqueItems</span>": <span class="hljs-value"><span class="hljs-literal">true</span></span>,
            "<span class="hljs-attribute">items</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">title</span>": <span class="hljs-value"><span class="hljs-string">"NTI"</span></span>,
                "<span class="hljs-attribute">desription</span>" : <span class="hljs-value"><span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">highlighted</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A snippet of text that matches the search query"</span>
                    </span>}
                    <span class="hljs-string">"score"</span> : {
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The score for a particular result"</span>
                    </span>}
                </span>}</span>,
                "<span class="hljs-attribute">required</span>":<span class="hljs-value">[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>, <span class="hljs-string">"highlighted"</span>, <span class="hljs-string">"score"</span>]</span>,
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"total"</span>, <span class="hljs-string">"skip"</span>, <span class="hljs-string">"take"</span>, <span class="hljs-string">"results"</span>]     
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section><h4 id="project-filtered-projects">Filtered Projects&nbsp;<a href="#project-filtered-projects"><i class="fa fa-link"></i></a></h4><section id="project-filtered-projects-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Projects with Specific Attributes</span></div><div style="float:left"><a href="#project-filtered-projects-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/{?skip,take,setAsideType,workflowStatus,agency,office,person,vendor,category}</code></div></div><div class="panel-body"><p>Returns a paginated list of projects, ordered by their timestamp property.</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>setAsideType</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The set aside type for the Project</p>
<p><strong>Choices:&nbsp;</strong><code>Total Small Business</code>&nbsp;<code>Service-Disabled Veteran-Owned Small Business</code>&nbsp;<code>HUBZone</code>&nbsp;<code>Competitive 8(a)</code>&nbsp;<code>Woman Owned Small Business</code>&nbsp;<code>Partial Small Business</code>&nbsp;<code>Economically Disadvantaged Woman Owned Small Business</code>&nbsp;<code>Emerging Small Business</code>&nbsp;<code>Total HBCU / MI</code>&nbsp;<code>Partial HBCU / MI</code>&nbsp;</p></dd><dt>workflowStatus</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The workflow status for the Project</p>
<p><strong>Choices:&nbsp;</strong><code>Presolicitation</code>&nbsp;<code>Open For Bid</code>&nbsp;<code>Awarded</code>&nbsp;<code>Canceled</code>&nbsp;<code>Underway</code>&nbsp;<code>Ended</code>&nbsp;</p></dd><dt>agency</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000d4</span></span><p>The _id for a specific Agency</p>
</dd><dt>office</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific Office</p>
</dd><dt>person</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific Person</p>
</dd><dt>vendor</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific vendor</p>
</dd><dt>category</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific category</p>
</dd><dt>skip</dt><dd><code>number</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>0</span></span>&nbsp;<p>The number of entities to skip.</p>
</dd><dt>take</dt><dd><code>number</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-info default"><strong>Default:&nbsp;</strong><span>25</span></span>&nbsp;<p>The number of entities to return.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Project</code></strong><a data-toggle="collapse" data-target="#8134b1ff3c4d1a1d894c58f5dbf94302" class="pull-right">Toggle</a></li><li id="8134b1ff3c4d1a1d894c58f5dbf94302" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#c3417181c97e5d876fa87e97ccbabdd6" class="pull-right">Toggle</a></li><li id="c3417181c97e5d876fa87e97ccbabdd6" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
"<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">670413</span></span>,
"<span class="hljs-attribute">skip</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
"<span class="hljs-attribute">take</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
"<span class="hljs-attribute">results</span>":<span class="hljs-value">[
    {
        "<span class="hljs-attribute">name</span>":<span class="hljs-value"><span class="hljs-string">"USDA EVENT - Rural Small Business Connections - Pine Bluff, AR"</span></span>,
        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"project"</span></span>,
        "<span class="hljs-attribute">_id</span>":<span class="hljs-value"><span class="hljs-string">"5363be766c5cc8a60d8b4567"</span>
    </span>},
    {
        "<span class="hljs-attribute">name</span>":<span class="hljs-value"><span class="hljs-string">"SOLE SOURCE ENGINEERING TECHNICAL SERVICES TO SUPPORT THE IMPROVED CONTROL AND DISPLAY UPGRADE TO THE SLQ-32 COUNTERMEASURE SYSTEM"</span></span>,
        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"project"</span></span>,
        "<span class="hljs-attribute">_id</span>":<span class="hljs-value"><span class="hljs-string">"5363be2b6c5cc8a00c8b4567"</span>
    </span>}
]
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">total</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The total number of entities for this endpoint"</span>                        
        </span>}</span>,
        "<span class="hljs-attribute">skip</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The number of entities skipped in the response"</span></span>,
            "<span class="hljs-attribute">default</span>": <span class="hljs-value"><span class="hljs-number">0</span>
        </span>}</span>,
        "<span class="hljs-attribute">take</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"integer"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The number of entities returned in the response"</span></span>,
            "<span class="hljs-attribute">default</span>": <span class="hljs-value"><span class="hljs-number">25</span>
        </span>}</span>,
        "<span class="hljs-attribute">results</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">uniqueItems</span>": <span class="hljs-value"><span class="hljs-literal">true</span></span>,
            "<span class="hljs-attribute">items</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">title</span>": <span class="hljs-value"><span class="hljs-string">"NTI"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}
                </span>}</span>,
                "<span class="hljs-attribute">required</span>":<span class="hljs-value">[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]</span>,
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"total"</span>, <span class="hljs-string">"skip"</span>, <span class="hljs-string">"take"</span>, <span class="hljs-string">"results"</span>]     
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="agency">Agency&nbsp;<a href="#agency"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="agency-agency">Agency&nbsp;<a href="#agency-agency"><i class="fa fa-link"></i></a></h4><p>An Agency is a U.S. government agency </p>
<section id="agency-agency-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Agency</span></div><div style="float:left"><a href="#agency-agency-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired Agency entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Agency</code></strong><a data-toggle="collapse" data-target="#55d9a50bf4ae5dd7fe54222ce8757f44" class="pull-right">Toggle</a></li><li id="55d9a50bf4ae5dd7fe54222ce8757f44" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#bde65789038e495415d8af07008a6487" class="pull-right">Toggle</a></li><li id="bde65789038e495415d8af07008a6487" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">Hello</span>" : <span class="hljs-value"><span class="hljs-string">"there"</span></span>,
    "<span class="hljs-attribute">You look</span>" : <span class="hljs-value"><span class="hljs-string">"nice"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the agency"</span>
        </span>}</span>,
        "<span class="hljs-attribute">timestamp</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The date for the last time an agency was active"</span></span>,
            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the agency"</span>
        </span>}</span>,
        "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span></span>,
            "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"agency"</span>]
        </span>}</span>,
        "<span class="hljs-attribute">acronyms</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Common acronyms for the agency"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An acronym"</span>
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">website</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The website for the agency."</span></span>,
            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"uri"</span>
        </span>}</span>,
        "<span class="hljs-attribute">procurementStats</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Statistics about the agencies public procurements, broken down by year. Updated daily."</span></span>,
            "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">averageTimesToAward</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A list of the average number of days for the agencies' Projects to move from Open for Bid to Award or Canceled for each year."</span></span>,
                    "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                        "<span class="hljs-attribute">description</span>" :  <span class="hljs-value"><span class="hljs-string">"The average number of days for the agencies' Projects to move from Open for Bid to Award or Canceled for a given year."</span></span>,
                        "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">calendarYear</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A calendar year"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">averageTimeToAward</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The number of days"</span>
                            </span>}
                        </span>}
                    </span>}
                </span>}</span>,
                "<span class="hljs-attribute">averageAwardValues</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A list of the average award values for an agencies projects for each year."</span></span>,
                    "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                        "<span class="hljs-attribute">description</span>" :  <span class="hljs-value"><span class="hljs-string">"Average award value for an agencies' projects for a given year."</span></span>,
                        "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">calendarYear</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A calendar year"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">averageAwardValue</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The average award value"</span>
                            </span>}
                        </span>}
                    </span>}
                </span>}</span>,
                "<span class="hljs-attribute">numbersOfAwards</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A list of the numbers of awards for an agency, broken down by year."</span></span>,
                    "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                        "<span class="hljs-attribute">description</span>" :  <span class="hljs-value"><span class="hljs-string">"Number of awards for a given year."</span></span>,
                        "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">calendarYear</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A calendar year"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">numberOfAwards</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The number of awards. Does not differntiate with respect to competitive nature of process."</span>
                            </span>}
                        </span>}
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">organizationalStats</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Statistics about the organization, inlcuding active people and office counts. Updated daily."</span></span>,
            "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">activePeopleInTheLastYear</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">" The number of people working for this agency who have been active in the past 12 calendar months."</span>
                </span>}</span>,
                "<span class="hljs-attribute">activeOfficesInTheLastYear</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">" The number of offices this agency that have been active in the past 12 calendar months."</span>
                </span>}
            </span>}
        </span>}</span>, 
        "<span class="hljs-attribute">obligationStats</span>" : <span class="hljs-value">{

        }</span>,
        "<span class="hljs-attribute">protestStats</span>" : <span class="hljs-value">{

        }
    </span>}
</span>}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="office">Office&nbsp;<a href="#office"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="office-office">Office&nbsp;<a href="#office-office"><i class="fa fa-link"></i></a></h4><p>An Office is a sub unit of a U.S. government agency </p>
<section id="office-office-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Office</span></div><div style="float:left"><a href="#office-office-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/office/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired Office entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Office</code></strong><a data-toggle="collapse" data-target="#84d51fd599507c1f91e64ad8877ae166" class="pull-right">Toggle</a></li><li id="84d51fd599507c1f91e64ad8877ae166" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#99fb08908c5a5f7a8487cc3e2c27b81e" class="pull-right">Toggle</a></li><li id="99fb08908c5a5f7a8487cc3e2c27b81e" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">Hello</span>" : <span class="hljs-value"><span class="hljs-string">"there"</span></span>,
    "<span class="hljs-attribute">You look</span>" : <span class="hljs-value"><span class="hljs-string">"nice"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span>
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the office"</span>
        </span>}</span>,
        "<span class="hljs-attribute">timestamp</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The date for the last time an office was active"</span></span>,
            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the office"</span>
        </span>}</span>,
        "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span></span>,
            "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"office"</span>]
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="person">Person&nbsp;<a href="#person"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="person-person">Person&nbsp;<a href="#person-person"><i class="fa fa-link"></i></a></h4><p>An Person is a U.S. government point of contact for one or more projects </p>
<section id="person-person-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Person</span></div><div style="float:left"><a href="#person-person-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/person/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired Person entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Person</code></strong><a data-toggle="collapse" data-target="#6a90dba05cae9291b5a2b026cffca770" class="pull-right">Toggle</a></li><li id="6a90dba05cae9291b5a2b026cffca770" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#04f814a5e878ca459f6df4bd147d18b8" class="pull-right">Toggle</a></li><li id="04f814a5e878ca459f6df4bd147d18b8" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">Hello</span>" : <span class="hljs-value"><span class="hljs-string">"there"</span></span>,
    "<span class="hljs-attribute">You look</span>" : <span class="hljs-value"><span class="hljs-string">"nice"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"_id"</span> : {
            <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the person"</span>
        },
        <span class="hljs-string">"timestamp"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The date for the last time a person was active"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"date-time"</span>
        },
        <span class="hljs-string">"name"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of the person
        },
        "</span><span class="hljs-keyword">type</span><span class="hljs-string">" : {
            "</span><span class="hljs-keyword">type</span><span class="hljs-string">" : "</span><span class="hljs-built_in">string</span><span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-keyword">type</span> of the entity<span class="hljs-string">",
            "</span>enum<span class="hljs-string">" : ["</span>person<span class="hljs-string">"]
        }
    }
}
</span></code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="vendor">Vendor&nbsp;<a href="#vendor"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="vendor-vendor">Vendor&nbsp;<a href="#vendor-vendor"><i class="fa fa-link"></i></a></h4><p>An Vendor is a business entity that has won a Project </p>
<section id="vendor-vendor-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Vendor</span></div><div style="float:left"><a href="#vendor-vendor-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/vendor/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired Vendor entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Vendor</code></strong><a data-toggle="collapse" data-target="#3ed2c16cd8324c7b51673c948e4bdd78" class="pull-right">Toggle</a></li><li id="3ed2c16cd8324c7b51673c948e4bdd78" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#92c292afac756c9764b56335578cb7b7" class="pull-right">Toggle</a></li><li id="92c292afac756c9764b56335578cb7b7" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">Hello</span>" : <span class="hljs-value"><span class="hljs-string">"there"</span></span>,
    "<span class="hljs-attribute">You look</span>" : <span class="hljs-value"><span class="hljs-string">"nice"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span>
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the vendor"</span>
        </span>}</span>,
        "<span class="hljs-attribute">timestamp</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The date for the last time a vendor was active"</span></span>,
            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the vendor"</span>
        </span>}</span>,
        "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span></span>,
            "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"vendor"</span>]
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="category">Category&nbsp;<a href="#category"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="category-category">Category&nbsp;<a href="#category-category"><i class="fa fa-link"></i></a></h4><p>A Category is a topical grouping based on NAICS codes and PSC codes </p>
<section id="category-category-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Category</span></div><div style="float:left"><a href="#category-category-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/category/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>String <code>id</code> of the desired category entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Category</code></strong><a data-toggle="collapse" data-target="#fb7410f522a929bc88bf15049a187ed1" class="pull-right">Toggle</a></li><li id="fb7410f522a929bc88bf15049a187ed1" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#52c59106f5ca1e1cc85be2828cba82b1" class="pull-right">Toggle</a></li><li id="52c59106f5ca1e1cc85be2828cba82b1" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">Hello</span>" : <span class="hljs-value"><span class="hljs-string">"there"</span></span>,
    "<span class="hljs-attribute">You look</span>" : <span class="hljs-value"><span class="hljs-string">"nice"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span>
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the category"</span>
        </span>}</span>,
        "<span class="hljs-attribute">timestamp</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The date for the last time a category was active"</span></span>,
            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
        </span>}</span>,
        "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the category"</span>
        </span>}</span>,
        "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span></span>,
            "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"category"</span>]
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section></div></div></div></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 07 May 2014</p><div id="localFile" style="display: none; position: absolute; top: 0; left: 0; width: 100%; color: white; background: red; font-size: 150%; text-align: center; padding: 1em;">This page may not display correctly when opened as a local file. Instead, view it from a web server.

</div></body><script src="//code.jquery.com/jquery-1.11.0.min.js"></script><script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script>(function() {
  if (location.protocol === 'file:') {
    document.getElementById('localFile').style.display = 'block';
  }

}).call(this);
</script><script>(function() {
  $('table').addClass('table');

}).call(this);
</script></html>