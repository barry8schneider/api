<!DOCTYPE html><html><head><meta charset="utf-8"><title>GovTribe API (beta)</title><link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200"><style>/* Highlight.js Theme Tomorrow */
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
  max-width: 255px;
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
</style></head><body><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><div class="col-md-3"><nav id="nav" class="hidden-sm hidden-xs affix nav"><div class="list-group"><a href="#what-is-this?" class="list-group-item heading">What Is This?</a></div><div class="list-group"><a href="#collection" class="list-group-item heading">Collection</a><a href="#collection-entity-collection" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Entity Collection</a></div><div class="list-group"><a href="#project" class="list-group-item heading">Project</a><a href="#project-project" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Project</a><a href="#project-search-projects" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search Projects</a><a href="#project-filtered-projects" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Filtered Projects</a></div><div class="list-group"><a href="#agency" class="list-group-item heading">Agency</a><a href="#agency-agency" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Agency</a><a href="#agency-agency-slices" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Agency Slices</a><a href="#agency-search-agencies" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search Agencies</a></div><div class="list-group"><a href="#office" class="list-group-item heading">Office</a><a href="#office-office" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Office</a><a href="#office-office-slices" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Office Slices</a><a href="#office-search-offices" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search Offices</a></div><div class="list-group"><a href="#person" class="list-group-item heading">Person</a><a href="#person-person" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Person</a><a href="#person-person-slices" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Person Slices</a><a href="#person-search-people" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search People</a></div><div class="list-group"><a href="#vendor" class="list-group-item heading">Vendor</a><a href="#vendor-vendor" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Vendor</a><a href="#vendor-search-vendors" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search Vendors</a><a href="#vendor-vendor-slices" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Vendor Slices</a></div><div class="list-group"><a href="#category" class="list-group-item heading">Category</a><a href="#category-category" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Category</a><a href="#category-search-categories" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search Categories</a><a href="#category-category-slices" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Category Slices</a></div><div class="list-group"><a href="#activity" class="list-group-item heading">Activity</a><a href="#activity-activity" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Activity</a><a href="#activity-activity-feed" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Activity Feed</a></div><div class="list-group"><a href="#protest" class="list-group-item heading">Protest</a><a href="#protest-protest" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Protest</a><a href="#protest-search-protests" class="list-group-item"><i class="fa fa-arrow-circle-down"></i>&nbsp;Search Protests</a></div><p style="text-align: center"><a href="http://api.govtribe.com">http://api.govtribe.com</a></p></nav></div><div class="col-md-9"><div><header><div class="page-header"><h1 id="top">GovTribe API (beta)</h1></div></header><div class="description"></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="what-is-this?">What Is This?&nbsp;<a href="#what-is-this?"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>The <a href="http://www.govtribe.com">GovTribe</a> API provides data on the U.S. federal government contracting market. The GovTribe API presents eight types of entities as well as their relationships to each other:</p>
<ul>
<li><strong>Project</strong> - A U.S. federal government contract or opportunity</li>
<li><strong>Agency</strong>  - A U.S. federal government agency that executes Projects</li>
<li><strong>Office</strong>  - An organizational unit within an Agency that executes Projects</li>
<li><strong>Person</strong>  - A point of contact for one or more Projects</li>
<li><strong>Vendor</strong>  - A legal entity that has been awarded a Project</li>
<li><strong>Category</strong>  - A topical grouping, based off North American Industry Classification System (NAICS) codes or Product and Service (PSC) codes</li>
<li><strong>Protest</strong>  - The laws and regulations that govern contracting with the federal government are designed to ensure that federal procurements are conducted fairly and, whenever possible, in a way that maximizes competition. On occasion, however, bidders or others interested in government procurements may have reason to believe that a contract has been or is about to be awarded improperly or illegally, or that they have been unfairly denied a contract or an opportunity to compete for a contract. This is a protest.</li>
<li><strong>Activity</strong>  - Activity represents the ongoing activity of one or more of the other entity types. It is a time series of the actions they perform.</li>
</ul>
<p>To request an API key, visit the <a href="https://api.govtribe.com/register">API registration page</a>. To log issues or feature requests, visit <a href="https://github.com/GovTribe/api">https://github.com/GovTribe/api</a>.</p>
<h2 id="examples">Examples</h2>
<h3 id="recent-projects">Recent Projects</h3>
<p>Let’s say you’d like to view some recent projects. Send a GET request to the project endpoint like so:</p>
<pre><code class="lang-json">GET http://api.govtribe.com/project
{
  &quot;results&quot;: [
    {
      &quot;name&quot;: &quot;Bread and Bakery Products for Florida&quot;,
      &quot;type&quot;: &quot;project&quot;,
      &quot;_id&quot;: &quot;537e2c5d6c5cc86f2a8b4567&quot;
    },
    {
      &quot;name&quot;: &quot;Spar,Aircraft/19F Aircraft,F15&quot;,
      &quot;type&quot;: &quot;project&quot;,
      &quot;_id&quot;: &quot;537e2c766c5cc8af2a8b4567&quot;
    },
    {
      &quot;name&quot;: &quot;Sea Survival Training Facility and Refurbishing of Floating Pier&quot;,
      &quot;type&quot;: &quot;project&quot;,
      &quot;_id&quot;: &quot;537e08da6c5cc8f35b8b4567&quot;
    },
    {
      &quot;name&quot;: &quot;Chapel Music Director&quot;,
      &quot;type&quot;: &quot;project&quot;,
      &quot;_id&quot;: &quot;5332d4e46c5cc86a238b4567&quot;
    },
    {
      &quot;name&quot;: &quot;Framing Lumber and Hardware/Fasteners&quot;,
      &quot;type&quot;: &quot;project&quot;,
      &quot;_id&quot;: &quot;537e181c6c5cc8167c8b4567&quot;
    }
  ],
  &quot;pagination&quot;: {
    &quot;total&quot;: 184961,
    &quot;count&quot;: 50,
    &quot;perPage&quot;: 50,
    &quot;currentPage&quot;: 1,
    &quot;totalPages&quot;: 3700,
    &quot;links&quot;: {
      &quot;next&quot;: &quot;http://api.govtribe.dev/project?page=2&quot;
    }
  }
}
</code></pre>
<h3 id="project">Project</h3>
<p>Success! You are a sea survival enthusiast who likes rebuilding piers. Why not take a look at that project? It’s number two in the list of results. Just grab the id and you are off and running. </p>
<pre><code class="lang-json">GET http://api.govtribe.com/project/537e08da6c5cc8f35b8b4567
</code></pre>
<h3 id="office">Office</h3>
<p>Looks like this is an Army Corps of Engineers project. Ever wonder how long it takes them to award projects? Or what the average award size is? Let’s grab the id from the offices array and find out.</p>
<pre><code class="lang-json">GET http://api.govtribe.com/office/51c1d4f8db40a5298c79c77f
</code></pre>
<h3 id="activity">Activity</h3>
<p>Interested in everything else Army Corps of Engineers does? Load its activity:</p>
<pre><code class="lang-json">GET http://api.govtribe.com/activity/feed?ids=51c1d4f8db40a5298c79c77f
</code></pre>
<p>Now that you get the gist of it, check out the docs below on all of the great data you can get from the GovTribe API</p>
<h4 id="disclaimer">Disclaimer</h4>
<p>The GovTribe API is currently in beta. As such, it’s subject to change and all API data and services are provided as is. We reserve the right to make changes to the API during beta without notification. Have an issue or feature request? Log it on our <a href="https://github.com/GovTribe/api">GitHub repo</a>. Additional disclaimer at the bottom of this page. </p>
</div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="collection">Collection&nbsp;<a href="#collection"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="collection-entity-collection">Entity Collection&nbsp;<a href="#collection-entity-collection"><i class="fa fa-link"></i></a></h4><p>Collection of one of the eight types of entities, returned as a paginated list of NTIs (name, type, ID), ordered by timestamp.</p>
<section id="collection-entity-collection-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">List Entities</span></div><div style="float:left"><a href="#collection-entity-collection-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/{entityType}/</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>entityType</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>project</span></span><p>The type of entities to be returned</p>
<p><strong>Choices:<br></strong><code>project</code><br><code>vendor</code><br><code>category</code><br><code>agency</code><br><code>office</code><br><code>person</code><br><code>protest</code><br><code>activity</code><br></p></dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Entities</code></strong><a data-toggle="collapse" data-target="#ec493a894bb8928c1b58af03f653ace8" class="pull-right">Toggle</a></li><li id="ec493a894bb8928c1b58af03f653ace8" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#6c8a41d3df93b108fc8a89ce0610f0a5" class="pull-right">Toggle</a></li><li id="6c8a41d3df93b108fc8a89ce0610f0a5" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Temperature Monitor"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5363ed276c5cc873538b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rebuild Cumberland Sound"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"537666f56c5cc8717e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"New Starts Financial Capacity Assessments and Financial Assessment"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5282d11ae3dd90f84d000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">182146</span>,
        count: <span class="hljs-number">50</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">3643</span>,
        links: {
            next: <span class="hljs-string">"http://api.govtribe.com/project?page=2"</span>
        </span></span></span>}
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"activity"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>],
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="project">Project&nbsp;<a href="#project"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="project-project">Project&nbsp;<a href="#project-project"><i class="fa fa-link"></i></a></h4><p>A project is a U.S. federal government contract or opportunity. </p>
<section id="project-project-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Project</span></div><div style="float:left"><a href="#project-project-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>5375057a6c5cc8435b8b4567</span></span><p>String <code>id</code> of the desired project entity to return.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Project</code></strong><a data-toggle="collapse" data-target="#1860a33d3efc93219d08ee68383cd165" class="pull-right">Toggle</a></li><li id="1860a33d3efc93219d08ee68383cd165" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#5e3c7b1df8e17deaa3560efe31f364c7" class="pull-right">Toggle</a></li><li id="5e3c7b1df8e17deaa3560efe31f364c7" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    agencies: [
        {
            name: <span class="hljs-string">"Agency for International Development"</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548150db40a5165c0000af"</span>
        }
    ],
    awardedVendors: <span class="hljs-string">"None Listed"</span>,
    awardValue: <span class="hljs-string">"Not Available"</span>,
    awardValueNumeric: <span class="hljs-string">"Not Available"</span>,
    categories: [
        {
            name: <span class="hljs-string">"Architecture and Engineering"</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"category"</span>,
            _id: <span class="hljs-string">"518ecbf0db40a51b0b0000c4"</span>
        },
        {
        name: <span class="hljs-string">"Architect and engineering services"</span>,
        <span class="hljs-built_in">type</span>: <span class="hljs-string">"category"</span>,
        _id: <span class="hljs-string">"518ecbf0db40a51b0b000054"</span>
        }
    ],
    classCodes: [
        <span class="hljs-string">"C"</span>
    ],
    contractNumbers: <span class="hljs-string">"None Listed"</span>,
    dueDates: [
        {
            dueDateType: <span class="hljs-string">"Presolicitation Response"</span>,
            date: <span class="hljs-string">"Not Available"</span>
        },
        {
        dueDateType: <span class="hljs-string">"Complete Response"</span>,
        date: <span class="hljs-string">"2014-07-17T14:00:00-0400"</span>
        }
    ],
    files: [
        {
            packageName: <span class="hljs-string">"Combined Synopsis/Solicitation"</span>,
            packageDetails: [
                {
                    fileURI: <span class="hljs-string">"https://www.fbo.gov/utils/view?id=bcba3445f4084328fa3bc40a559692c9"</span>,
                    fileName: <span class="hljs-string">"SOL-278-14-000010.pdf"</span>,
                    fileDescription: <span class="hljs-string">"SOL-278-14-000010 - Water Sector Infrastructure Project in Jordan"</span>
                }
            ]
        }
    ],
    goodsOrServices: <span class="hljs-string">"Services"</span>,
    NAICS: <span class="hljs-string">"541330"</span>,
    name: <span class="hljs-string">"Water Sector Infrastructure Project"</span>,
    offices: [
        {
            name: <span class="hljs-string">"Washington D.C."</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"office"</span>,
            _id: <span class="hljs-string">"51c1d52bdb40a5298c79c7ca"</span>
        },
        {
        name: <span class="hljs-string">"USAID/Washington"</span>,
        <span class="hljs-built_in">type</span>: <span class="hljs-string">"office"</span>,
        _id: <span class="hljs-string">"51c1d52bdb40a5298c79c7cb"</span>
        }
    ],
    placeOfPerformanceGeocoded: <span class="hljs-string">"Not Available"</span>,
    placeOfPerformanceText: <span class="hljs-string">"Jordan Jordan"</span>,
    pointsOfContact: [
        {
            name: <span class="hljs-string">"Beatrice Diah"</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"537114ed6c5cc884708b4567"</span>
        }
    ],
    predictedCompetition: <span class="hljs-string">"None Listed"</span>,
    protests: <span class="hljs-string">"None Listed"</span>,
    <span class="hljs-keyword">set</span>AsideType: <span class="hljs-string">"Not Available"</span>,
    solicitationNumbers: [
        <span class="hljs-string">"SOL-278-14-000010"</span>
    ],
    <span class="hljs-built_in">source</span>Links: [
        <span class="hljs-string">"https://www.fbo.gov/index?s=opportunity&amp;mode=form&amp;id=0c662f01e4c17d26274813ef05c0fc10&amp;tab=core&amp;_cview=0"</span>
    ],
    synopsis: <span class="hljs-string">"&lt;p class="</span>MsoNormal<span class="hljs-string">" style="</span>line-height:<span class="hljs-number">115</span>%;<span class="hljs-string">"&gt;&lt;br /&gt;The United States Agency for International Development (USAID) Mission to Jordan, is seeking proposals from interested qualified Jordanian Architect-Engineer (A-E) Consulting Firms, to provide construction supervision services for the construction contracts of Amman Water System Improvements Phase II, East Jerash Wastewater Treatment Plant and Tafilah Wastewater Treatment Plant.  This is in addition to other engineering infrastructure development tasks that USAID in cooperation with Ministry of Water and Irrigation may plan to implement during the life of the proposed contract. Detailed information is provided in the attached Request for proposal.&lt;/p&gt; &lt;br /&gt;&lt;p class="</span>MsoNormal<span class="hljs-string">" style="</span>line-height:<span class="hljs-number">115</span>%;<span class="hljs-string">"&gt; &lt;/p&gt; &lt;br /&gt;&lt;p class="</span>MsoNormal<span class="hljs-string">" style="</span>line-height:<span class="hljs-number">115</span>%;<span class="hljs-string">"&gt; &lt;/p&gt; &lt;br /&gt;&lt;p class="</span>MsoNormal<span class="hljs-string">" style="</span>line-height:<span class="hljs-number">115</span>%;<span class="hljs-string">"&gt; &lt;/p&gt;"</span>,
    tags: [
        <span class="hljs-string">"construction supervision services"</span>,
        <span class="hljs-string">"east jerash wastewater treatment plant"</span>,
        <span class="hljs-string">"tafilah wastewater treatment plant"</span>,
        <span class="hljs-string">"the united states agency for international development"</span>,
        <span class="hljs-string">"ministry of water and irrigation"</span>
    ],
    timestamp: <span class="hljs-string">"2014-05-15T11:16:00-0400"</span>,
    <span class="hljs-built_in">type</span>: <span class="hljs-string">"project"</span>,
    workflowStatus: <span class="hljs-string">"Open"</span>,
    _id: <span class="hljs-string">"5375057a6c5cc8435b8b4567"</span>
}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the Project"</span>
        </span>}</span>,
        "<span class="hljs-attribute">NAICS</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The North American Industry Classification Code assigned to the Project."</span></span>,
            "<span class="hljs-attribute">default</span>" : <span class="hljs-value"><span class="hljs-string">"Not Available"</span>
        </span>}</span>,
        "<span class="hljs-attribute">setAsideType</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The set aside designated for a project"</span></span>,
            "<span class="hljs-attribute">default</span>" : <span class="hljs-value"><span class="hljs-string">"None"</span></span>,
            "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"None"</span>, <span class="hljs-string">"Total Small Business"</span>, <span class="hljs-string">"Service-Disabled Veteran-Owned Small Business"</span>, <span class="hljs-string">"HUBZone"</span>, <span class="hljs-string">"Competitive 8(a)"</span>, <span class="hljs-string">"Woman Owned Small Business"</span>, <span class="hljs-string">"Partial Small Business"</span>, <span class="hljs-string">"Economically Disadvantaged Woman Owned Small Business"</span>, <span class="hljs-string">"Emerging Small Business"</span>, <span class="hljs-string">"Total HBCU / MI"</span>, <span class="hljs-string">"Partial HBCU / MI"</span>]
        </span>}</span>,
        "<span class="hljs-attribute">importantDates</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"All due dates for a project across its lifecycle"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{ 
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A specific due date for project"</span></span>,
                "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">dateType</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of event or workflow status for a date"</span></span>,
                        "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"Forecast"</span>, <span class="hljs-string">"Presolicitation Posting"</span>, <span class="hljs-string">"Presolicitation Due"</span>, <span class="hljs-string">"Solicitation Posting"</span>, <span class="hljs-string">"Solicitation Due"</span>, <span class="hljs-string">"Award"</span>, <span class="hljs-string">"Contract End"</span>, <span class="hljs-string">"Base Period End"</span>, <span class="hljs-string">"Option Period End"</span>]
                    </span>}</span>,
                    "<span class="hljs-attribute">date</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The value for a specific date"</span></span>,
                        "<span class="hljs-attribute">default</span>" : <span class="hljs-value"><span class="hljs-string">"Not Available"</span></span>,
                        "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">valueSource</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">default</span>" : <span class="hljs-value"><span class="hljs-string">"Not Available"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An indication of whether the date value is derived from mining source data or predicted by GovTribe"</span></span>,
                        "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"Sourced"</span>, <span class="hljs-string">"Predicted"</span>] 
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">workflowStatus</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"Forecasted"</span>, <span class="hljs-string">"Presolicitation"</span>, <span class="hljs-string">"Open For Bid"</span>, <span class="hljs-string">"Canceled"</span>, <span class="hljs-string">"Awarded"</span>, <span class="hljs-string">"Active"</span>, <span class="hljs-string">"Ended"</span>]</span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The status of a specific project with respect to the contracting lifecycle"</span>
        </span>}</span>,
        "<span class="hljs-attribute">pointsOfContact</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The NTIs for the government points of contact associated with a project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An NTI for a government point of contact"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the person"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"person"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}

                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">goodsOrServices</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Indicates whether a project is for goods or Services"</span></span>,
            "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"Goods"</span>, <span class="hljs-string">"Services"</span>]
        </span>}</span>,
        "<span class="hljs-attribute">placeOfPerformanceText</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">default</span>" : <span class="hljs-value"><span class="hljs-string">"Not Available"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The raw string mined for a place of performance"</span>
        </span>}</span>,
        "<span class="hljs-attribute">placesOfPerformanceGeocoded</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Geocoded places of performance for a project. Will resolve to the lowest level of detail possible for the mined POP string."</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A geocoded place of performance for a project. Conforms to GEOJSON Point spec."</span></span>,
                "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">attributes</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Stuff"</span></span>,
                        "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the attribute. i.e Country."</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the point."</span>
                            </span>}
                        </span>}
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" :  <span class="hljs-value"><span class="hljs-string">"The type of the geocoded place of performance"</span>
                    </span>}</span>, 
                    "<span class="hljs-attribute">coordinates</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                        "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The lat and long for a given coordinate"</span>
                        </span>}
                    </span>}</span>,
                    "<span class="hljs-attribute">coordinateType</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the coordinate. Usually a point."</span>
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">sourceLinks</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Listing of source data providers for this project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A source link string"</span></span>,
                "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"uri"</span>
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">awardedVendors</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The NTIs for all vendors receiving awards for this project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An NTI for a vendor"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the vendor"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"vendor"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">predictedCompetition</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The NTIs for all vendors predicted by GovTribe to compete for this project."</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An NTI for a vendor"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the vendor"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"vendor"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">intersects</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Special sauce."</span>
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">solicitationNumbers</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A listing of all solicitation numbers for a specific project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A solicitation number"</span>
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">files</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"All files or attachments associated with a project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A package or grouping of files"</span></span>,
                "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">packageName</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the file package"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">packageDetails</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A listing of file data for a package"</span></span>,
                        "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Data for a specific file or attachment"</span></span>,
                            "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">fileURI</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"URI for a specific file"</span>
                                </span>}</span>,
                                "<span class="hljs-attribute">fileName</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the file"</span>
                                </span>}</span>,
                                "<span class="hljs-attribute">fileDescription</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The description of the file"</span>
                                </span>}
                            </span>}
                        </span>}
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">classCodes</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The Products and Services Class (PSC) Codes for a project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A PSC Code"</span>
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">tags</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The topical tags for a project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A tag or topic extracted from the project"</span>
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">timestamp</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The date for the last time a project was changed"</span></span>,
            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
        </span>}</span>,
        "<span class="hljs-attribute">agencies</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The NTIs for all agencies managing this project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An NTI for a n agency"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the agency"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"agency"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">contractNumbers</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A listing of all contract numbers for a specific project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A contract number"</span>
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">categories</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The NTIs for all categories related to this project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An NTI for a category"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the category"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"category"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of a project"</span>
        </span>}</span>,
        "<span class="hljs-attribute">synopses</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"All of the synopses for a project across its lifecycle, provided in reverse order of occurrence"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A synopsis, trimmed to 15000 characters."</span>
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">offices</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The NTIs for all offices managing this project"</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An NTI for an office"</span></span>,
                "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the office"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"office"</span>]</span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                    </span>}
                </span>}
            </span>}
        </span>}</span>,
        "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span></span>,
            "<span class="hljs-attribute">default</span>" : <span class="hljs-value"><span class="hljs-string">"project"</span>
        </span>}</span>,
        "<span class="hljs-attribute">obligtationData</span>" :  <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Information related to the award of this project"</span></span>,
            "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">totalObligationsToDate</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The total amount obligated to the project."</span></span>,
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
                                        "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                        "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
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
        </span>}</span>,
        "<span class="hljs-attribute">awardData</span>" :  <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Information related to the award of this project"</span></span>,
            "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
                "<span class="hljs-attribute">totalAwardValue</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The total amount of dollars awarded across all base and option years"</span>
                </span>}</span>,
                "<span class="hljs-attribute">awardedVendors</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A collection of all vendor NTIs who were awarded the project"</span></span>,
                    "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{ 
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A base period award object for specific vendor"</span></span>,
                        "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                             "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the vendor"</span>
                            </span>}</span>, 
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity. Will always be vendor."</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The unique _id for the entity."</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">amount</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The dollar amount awarded for the base period"</span></span>,
                                "<span class="hljs-attribute">minValue</span>" : <span class="hljs-value"><span class="hljs-string">"0"</span>
                            </span>}
                        </span>}
                    </span>}
                </span>}</span>,
                "<span class="hljs-attribute">basePeriodAwardData</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Base period Award Data for each vendor awarded a contract for a project."</span></span>,
                    "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">startDate</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The starting date for the base award period"</span></span>,
                            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
                        </span>}</span>,
                        "<span class="hljs-attribute">endDate</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The end date for the base award period"</span></span>,
                            "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
                        </span>}</span>,
                        "<span class="hljs-attribute">totalValue</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The total amount across all awards of the base period"</span>
                        </span>}</span>,
                        "<span class="hljs-attribute">awardedVendors</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A collection of vendor NTIs and their award values for the base award period"</span></span>,
                            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{ 
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A base period award object for specific vendor"</span></span>,
                                "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                                     "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
                                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the vendor"</span>
                                    </span>}</span>, 
                                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
                                        "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity. Will always be vendor."</span>
                                    </span>}</span>,
                                    "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
                                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The unique _id for the entity."</span>
                                    </span>}</span>,
                                    "<span class="hljs-attribute">amount</span>" : <span class="hljs-value">{
                                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The dollar amount awarded for the base period"</span></span>,
                                        "<span class="hljs-attribute">minValue</span>" : <span class="hljs-value"><span class="hljs-string">"0"</span>
                                    </span>}
                                </span>}
                            </span>}
                        </span>}
                    </span>}
                </span>}</span>,
                "<span class="hljs-attribute">optionPeriodsAwardData</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Option periods award data"</span></span>,
                    "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"Base period Award Data for each vendor awarded a contract for a project."</span></span>,
                        "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">optionName</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the option period"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">optionNumber</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The number, in sequential order of the option period"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">startDate</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The starting date for the base award period"</span></span>,
                                "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">endDate</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The end date for the base award period"</span></span>,
                                "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">totalValue</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The total amount across all awards the option period"</span>
                            </span>}</span>,
                            "<span class="hljs-attribute">awardedVendors</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                                "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"A collection of vendor NTIs and their award values for the option award period"</span></span>,
                                "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{ 
                                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An option period award object for specific vendor"</span></span>,
                                    "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                                         "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
                                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name of the vendor"</span>
                                        </span>}</span>, 
                                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
                                            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the entity. Will always be vendor."</span>
                                        </span>}</span>,
                                        "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
                                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The unique _id for the entity."</span>
                                        </span>}</span>,
                                        "<span class="hljs-attribute">amount</span>" : <span class="hljs-value">{
                                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
                                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The dollar amount awarded for the option period"</span></span>,
                                            "<span class="hljs-attribute">minValue</span>" : <span class="hljs-value"><span class="hljs-string">"0"</span>
                                        </span>}
                                    </span>}
                                </span>}
                            </span>}
                        </span>}
                    </span>}
                </span>}
            </span>}
        </span>}
    </span>}
</span>}
</code></pre></li></ul></section><h4 id="project-search-projects">Search Projects&nbsp;<a href="#project-search-projects"><i class="fa fa-link"></i></a></h4><p>Search Projects by keyword or phrase. GovTribe searches project names and synopses.</p>
<section id="project-search-projects-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Project Search Results</span></div><div style="float:left"><a href="#project-search-projects-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/search/{?q}</code></div></div><div class="panel-body"><p>Search all projects by keyword</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>q</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Green Laser</span></span><p>The string with which we will query the projects</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Projects</code></strong><a data-toggle="collapse" data-target="#6ea3521f1c6720d89a72b108af37c96d" class="pull-right">Toggle</a></li><li id="6ea3521f1c6720d89a72b108af37c96d" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#4c4bb8d2a5f7dde0d3258dddbc05e385" class="pull-right">Toggle</a></li><li id="4c4bb8d2a5f7dde0d3258dddbc05e385" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    results: [
        {
            highlights: {
                name: [
                    "<span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>Green<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>Laser<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> and Photomultipler Tubes for LSR II Custom Flow Cytometer"
                ],
                synopsis: [
                    " of this equipment. For this purchase order, NINDS are requesting that NINDS flow cytometer be upgraded to include a 532 nm <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>green<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>laser<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> and 5 additional detectors that will enable NINDS instrument",
                    " are unable to optimally excite them. A 532 nm <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>green<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>laser<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> is required to optimally excite these red fluorescent proteins. Having a <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>green<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>laser<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> would give us the ability to flow cytometrically analyze"
                ]
            },
            name: "Green Laser and Photomultipler Tubes for LSR II Custom Flow Cytometer",
            type: "project",
            _id: "537403cb6c5cc8961b8b4567"
        },
        {
            highlights: {
                name: [
                    "<span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>Laser<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> Scanning Microscope"
                ],
                synopsis: [
                    " <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>Green<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> Blue range - this specification shall be included as a proposed upgrade to the system being proposed. Fluorescence resonance energy transfer and anisotropy - this specification is revised",
                    ") <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>Laser<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> Scanning Microscope with a 34-Channel Spectral Detection ability, and 5 <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>laser<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span> lines with optional <span class="hljs-tag">&lt;<span class="hljs-title">em</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"highlight"</span>&gt;</span>lasers<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span>. The following list of essential features needs to be achieved in order to satisfy"
                ]
            }
    ],
    pagination: {
        total: 60,
        count: 50,
        perPage: 50,
        currentPage: 1,
        totalPages: 2,
        links: {
            next: "http://api.govtribe.com/project/search?page=2"
        }
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    },
                    <span class="hljs-string">"highlights"</span> : {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"One or more snippets of text that matches the search query. Keyed by source property"</span>,
                        <span class="hljs-string">"properties"</span> : {
                            <span class="hljs-string">"name"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"Strings with emphasis tags for highlighting"</span>,
                                <span class="hljs-string">"items"</span> : {
                                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>
                                {
                            },
                            <span class="hljs-string">"synopses"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"Strings with emphasis tags for highlighting"</span>,
                                <span class="hljs-string">"items"</span> : {
                                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>
                                {
                            }
                        }
                    },
                    <span class="hljs-string">"score"</span> : {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The score for a particular result"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>, , <span class="hljs-string">"score"</span>]
            },
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section><h4 id="project-filtered-projects">Filtered Projects&nbsp;<a href="#project-filtered-projects"><i class="fa fa-link"></i></a></h4><p>Returns a paginated list of filtered projects, ordered by their timestamp property. Multiple filters will use an AND operator. For example, if setAsideType is set to <code>HUBZone</code> and agency is set to <code>51548151db40a5165c0000cf</code>, the returned results will be projects that are both HUBZone set aside and from the U.S. Army.</p>
<section id="project-filtered-projects-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Projects with Specific Attributes</span></div><div style="float:left"><a href="#project-filtered-projects-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/project/{?setAsideType,workflowStatus,agency,office,person,vendor,category}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>setAsideType</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>HUBZone</span></span><p>The set aside type for the Project</p>
<p><strong>Choices:<br></strong><code>Total Small Business</code><br><code>Service-Disabled Veteran-Owned Small Business</code><br><code>HUBZone</code><br><code>Competitive 8(a)</code><br><code>Woman Owned Small Business</code><br><code>Partial Small Business</code><br><code>Economically Disadvantaged Woman Owned Small Business</code><br><code>Emerging Small Business</code><br><code>Total HBCU / MI</code><br><code>Partial HBCU / MI</code><br></p></dd><dt>workflowStatus</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The workflow status for the Project</p>
<p><strong>Choices:<br></strong><code>Forecasted</code><br><code>Presolicitation</code><br><code>Open For Bid</code><br><code>Awarded</code><br><code>Canceled</code><br><code>Active</code><br><code>Ended</code><br></p></dd><dt>agency</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000cf</span></span><p>The _id for a specific Agency</p>
</dd><dt>office</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific Office</p>
</dd><dt>person</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific Person</p>
</dd><dt>vendor</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific vendor</p>
</dd><dt>category</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<p>The _id for a specific category</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Project</code></strong><a data-toggle="collapse" data-target="#c533a3bdf885f45414978070e2af8aa9" class="pull-right">Toggle</a></li><li id="c533a3bdf885f45414978070e2af8aa9" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#d38f6cf5d3395e7a71e72d458db36862" class="pull-right">Toggle</a></li><li id="d38f6cf5d3395e7a71e72d458db36862" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Temperature Monitor"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5363ed276c5cc873538b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rebuild Cumberland Sound"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"537666f56c5cc8717e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"New Starts Financial Capacity Assessments and Financial Assessment"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5282d11ae3dd90f84d000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">182146</span>,
        count: <span class="hljs-number">50</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">3643</span>,
        links: {
            next: <span class="hljs-string">"http://api.govtribe.com/project?page=2"</span>
        </span></span></span>}
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"activity"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>],
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="agency">Agency&nbsp;<a href="#agency"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="agency-agency">Agency&nbsp;<a href="#agency-agency"><i class="fa fa-link"></i></a></h4><p>An agency is a U.S. government agency. Ain’t that descriptive?  </p>
<section id="agency-agency-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Agency</span></div><div style="float:left"><a href="#agency-agency-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000cf</span></span><p>String <code>id</code> of the desired agency entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Agency</code></strong><a data-toggle="collapse" data-target="#55d9a50bf4ae5dd7fe54222ce8757f44" class="pull-right">Toggle</a></li><li id="55d9a50bf4ae5dd7fe54222ce8757f44" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#0b701e0d5bd88cf5eac45f18bda3c6d6" class="pull-right">Toggle</a></li><li id="0b701e0d5bd88cf5eac45f18bda3c6d6" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    acronyms: <span class="hljs-string">"None Listed"</span>,
    <span class="hljs-property">name</span>: <span class="hljs-string">"Department of the Army"</span>,
    organizationalStats: {
        activePeople: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfActivePeople: <span class="hljs-number">875</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfActivePeople: <span class="hljs-number">1619</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfActivePeople: <span class="hljs-number">1918</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfActivePeople: <span class="hljs-number">1625</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfActivePeople: <span class="hljs-number">675</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfActivePeople: <span class="hljs-number">543</span>
            }
        ],
        activeOffices: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfActiveOffices: <span class="hljs-number">258</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfActiveOffices: <span class="hljs-number">223</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfActiveOffices: <span class="hljs-number">241</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfActiveOffices: <span class="hljs-number">196</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfActiveOffices: <span class="hljs-number">128</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfActiveOffices: <span class="hljs-number">111</span>
            }
        ]
    },
    procurementStats: {
        averageTimesToAward: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                averageDaysToAward: <span class="hljs-number">110.47</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                averageDaysToAward: <span class="hljs-number">91.92</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageDaysToAward: <span class="hljs-number">64.45</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                averageDaysToAward: <span class="hljs-number">9.57</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                averageDaysToAward: <span class="hljs-number">13.73</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                averageDaysToAward: <span class="hljs-number">13.06</span>
            }
        ],
        averageAwardValues: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                averageAwardValue: <span class="hljs-number">11965169.06</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                averageAwardValue: <span class="hljs-number">11894880.62</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageAwardValue: <span class="hljs-number">25546209.72</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                averageAwardValue: <span class="hljs-number">89761384.97</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                averageAwardValue: <span class="hljs-number">96852948.16</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                averageAwardValue: <span class="hljs-number">7430766.99</span>
            }
        ],
        numbersOfAwards: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfAwards: <span class="hljs-number">1719</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfAwards: <span class="hljs-number">4411</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfAwards: <span class="hljs-number">6419</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfAwards: <span class="hljs-number">5320</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfAwards: <span class="hljs-number">1138</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfAwards: <span class="hljs-number">966</span>
            }
        ],
        awardDollarFlow: {
            today: <span class="hljs-number">0</span>,
            thisWeek: <span class="hljs-number">148341777.13</span>,
            thisMonth: <span class="hljs-number">503230537.14</span>,
            thisQuarter: <span class="hljs-number">5831231807.13</span>,
            thisYear: <span class="hljs-number">20386608066.23</span>,
            allTime: <span class="hljs-number">20386608066.23</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">5328001269.99</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">3800413275.13</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">9630370523.77</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1124592460.2</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1449648610.12</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">2175770809.4</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1974476383.37</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">7825484168.42</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1838764350.1</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">18068994550.09</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">3100957293.55</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">9078726397.22</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">2763633901.91</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1310812589.55</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1475941878.09</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">963641264.23</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">104992540930.43</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">16416646333.67</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1694819138</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">15002461247.51</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">2783199307.25</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">5655826879.27</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">2181023697.54</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">3166580107.72</span>
        }
    },
    protestStats: {
        totalProtests: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                totalProtests: <span class="hljs-number">104</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                totalProtests: <span class="hljs-number">340</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                totalProtests: <span class="hljs-number">183</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                totalProtests: <span class="hljs-number">1</span>
            }
        ],
        protestsWithdrawn: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfProtests: <span class="hljs-number">20</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">65</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">25</span>
            }
        ],
        protestsDenied: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfProtests: <span class="hljs-number">11</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">72</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">37</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfProtests: <span class="hljs-number">1</span>
            }
        ],
        protestsSustained: [
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">6</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">4</span>
            }
        ],
        protestsDismissed: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfProtests: <span class="hljs-number">51</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">193</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">114</span>
            }
        ]
    },
    timestamp: <span class="hljs-string">"2014-05-18T12:52:00-0400"</span>,
    type: <span class="hljs-string">"agency"</span>,
    website: <span class="hljs-string">"http://www.army.mil/"</span>,
    _id: <span class="hljs-string">"51548151db40a5165c0000cf"</span>
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"_id"</span> : {
            <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the agency"</span>
        },
        <span class="hljs-string">"timestamp"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The date for the last time an agency was active"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"date-time"</span>
        },
        <span class="hljs-string">"name"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of the agency"</span>
        },
        <span class="hljs-string">"type"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity"</span>,
            <span class="hljs-string">"default"</span> : <span class="hljs-string">"agency"</span>
        },
        <span class="hljs-string">"acronyms"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Common acronyms for the agency"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"An acronym"</span>
            }
        },
        <span class="hljs-string">"website"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The website for the agency."</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>
        },
        <span class="hljs-string">"procurementStats"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Statistics about the agencies public procurements, broken down by year. Updated daily."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"averageTimesToAward"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"A list of the average number of days for the agencies'</span> Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>The average number of days <span class="hljs-keyword">for</span> the <span class="hljs-transposed_variable">agencies'</span> Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageDaysToAward<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of days<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>averageAwardValues<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the average award values <span class="hljs-keyword">for</span> an agencies projects <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Average award value <span class="hljs-keyword">for</span> an <span class="hljs-transposed_variable">agencies'</span> projects <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageAwardValue<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The average award value<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>numbersOfAwards<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of awards <span class="hljs-keyword">for</span> an agency, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of awards <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfAwards<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">awards.</span> Does not differentiate with respect to competitive nature of <span class="hljs-transposed_variable">process.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>awardDollarFlow<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">"  "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total award values <span class="hljs-keyword">for</span> an entity, grouped by time buckets, going back two <span class="hljs-transposed_variable">years.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A time bucket of total award value<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : "</span> {
                            <span class="hljs-string">"timeBucket"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A human readable time bucket"</span>
                            },
                            <span class="hljs-string">"total"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total amount awarded for a time bucket. 
                            }
                        }
                    }
                }
            }
        },
        "</span>organizationalStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Statistics about the organization, including active people <span class="hljs-built_in">and</span> office <span class="hljs-transposed_variable">counts.</span> Updated <span class="hljs-transposed_variable">daily.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>activePeople<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of active people <span class="hljs-keyword">for</span> an agency, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of active people <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfActivePeople<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of active <span class="hljs-transposed_variable">people.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>activeOffices<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of active offices <span class="hljs-keyword">for</span> an agency, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of active offices <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfActiveOffices<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of active <span class="hljs-transposed_variable">offices.</span><span class="hljs-string">"
                            }
                        }
                    }
                }
            }
        }, 
        "</span>obligationStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Obligation stats about an organization, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>totalObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Total obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>obligationsDollarFlow<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">"  "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total obligation values <span class="hljs-keyword">for</span> an entity, grouped by time buckets, going back two <span class="hljs-transposed_variable">years.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A time bucket of total obligations<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : "</span> {
                            <span class="hljs-string">"timeBucket"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A human readable time bucket"</span>
                            },
                            <span class="hljs-string">"total"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total amount obligated for a time bucket. 
                            }
                        }
                    }
                }
                "</span>totalSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as the Total Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>serviceDisabledVeteranOwnedSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as the Service-Disabled Veteran-Owned Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>HUBZoneObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as HUBZone Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>competitive8aObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Competitive <span class="hljs-number">8</span>(a) Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>womanOwnedSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Woman Owned Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>partialSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Partial Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>economicallyDisadvantagedWomanOwnedSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Economically Disadvantaged Woman Owned Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>emergingSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Emerging Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>totalHBCUMIObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Total HBCU / MI Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>partialHBCUMIObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Partial HBCU / MI Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
            }
        },
        "</span>protestStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Protest stats <span class="hljs-keyword">for</span> the projects of an organization, including breakdowns by protest <span class="hljs-transposed_variable">status.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>totalProtests<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests <span class="hljs-keyword">for</span> an agency, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of total protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsWithdrawn<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Withdrawn, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsDenied<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Denied, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsSustained<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Sustained, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsDismissed<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Dismissed, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                }
            }
        },
        "</span>govTribeStats : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Proprietary GovTribe stats about the organization"</span>,
            <span class="hljs-string">"properties"</span> : {
            }
        }
    }
}
</code></pre></li></ul></section><h4 id="agency-agency-slices">Agency Slices&nbsp;<a href="#agency-agency-slices"><i class="fa fa-link"></i></a></h4><p>Returns a listing (slice) of NTIs that are related to an agency based on the slice name. For example, the <code>vendorsThatWinTotalSmallBusinessSetAsideProjects</code> slice will return a list of vendor NTIs for a given agency that have won projects designated as a Total Small Business set aside.</p>
<section id="agency-agency-slices-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Slice for an Agency</span></div><div style="float:left"><a href="#agency-agency-slices-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/{_id}/{slice}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000cf</span></span><p>id of the desired Agency Entity</p>
</dd><dt>slice</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>vendorsThatWinTotalSmallBusinessSetAsideProjects</span></span><p>A list of entities or slice, relative to the agency.</p>
<p><strong>Choices:<br></strong><code>vendorsThatWinTotalSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinHUBZoneSetAsideProjects</code><br><code>vendorsThatWinCompetitive8ASetAsideProjects</code><br><code>vendorsThatWinWomanOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinPartialSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinEmergingSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinTotalHBCUMISetAsideProjects</code><br><code>vendorsThatWinPartialHBCUMISetAsideProjects</code><br><code>officesThatPostTotalSmallBusinessSetAsideProjects</code><br><code>officesThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>officesThatPostHUBZoneSetAsideProjects</code><br><code>officesThatPostCompetitive8ASetAsideProjects</code><br><code>officesThatPostWomanOwnedSmallBusinessSetAsideProjects</code><br><code>officesThatPostPartialSmallBusinessSetAsideProjects</code><br><code>officesThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>officesThatPostEmergingSmallBusinessSetAsideProjects</code><br><code>officesThatPostTotalHBCUMISetAsideProjects</code><br><code>officesThatPostPartialHBCUMISetAsideProjects</code><br><code>peopleThatPostTotalSmallBusinessSetAsideProjects</code><br><code>peopleThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>peopleThatPostHUBZoneSetAsideProjects</code><br><code>peopleThatPostCompetitive8ASetAsideProjects</code><br><code>peopleThatPostWomanOwnedSmallBusinessSetAsideProjects</code><br><code>peopleThatPostPartialSmallBusinessSetAsideProjects</code><br><code>peopleThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>peopleThatPostEmergingSmallBusinessSetAsideProjects</code><br><code>peopleThatPostTotalHBCUMISetAsideProjects</code><br><code>peopleThatPostPartialHBCUMISetAsideProjects</code><br><code>categoriesThatContainTotalSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainHUBZoneSetAsideProjects</code><br><code>categoriesThatContainCompetitive8ASetAsideProjects</code><br><code>categoriesThatContainWomanOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainPartialSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainEmergingSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainTotalHBCUMISetAsideProjects</code><br><code>categoriesThatContainPartialHBCUMISetAsideProjects</code><br></p></dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Slice</code></strong><a data-toggle="collapse" data-target="#60b6e39f97097461197e0be418734908" class="pull-right">Toggle</a></li><li id="60b6e39f97097461197e0be418734908" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#392fabe9be43d739a620327f9822aadc" class="pull-right">Toggle</a></li><li id="392fabe9be43d739a620327f9822aadc" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Temperature Monitor"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5363ed276c5cc873538b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rebuild Cumberland Sound"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"537666f56c5cc8717e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"New Starts Financial Capacity Assessments and Financial Assessment"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5282d11ae3dd90f84d000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">182146</span>,
        count: <span class="hljs-number">50</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">3643</span>,
        links: {
            next: <span class="hljs-string">"http://api.govtribe.com/project?page=2"</span>
        </span></span></span>}
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"activity"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>],
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section><h4 id="agency-search-agencies">Search Agencies&nbsp;<a href="#agency-search-agencies"><i class="fa fa-link"></i></a></h4><p>Find Agencies by their name or acronym</p>
<section id="agency-search-agencies-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Agency Search Results</span></div><div style="float:left"><a href="#agency-search-agencies-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/agency/search/{?q}</code></div></div><div class="panel-body"><p>Search all agencies by keyword</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>q</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Defense</span></span><p>The string with which we will query the agencies</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Projects</code></strong><a data-toggle="collapse" data-target="#6c77557fb86ba8b21dd5529d9b2b61a3" class="pull-right">Toggle</a></li><li id="6c77557fb86ba8b21dd5529d9b2b61a3" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#4ba29b907096f6e62889259191e63e33" class="pull-right">Toggle</a></li><li id="4ba29b907096f6e62889259191e63e33" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Other Defense Agencies"</span>,
            type: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548152db40a5165c000108"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Defense Logistics Agency"</span>,
            type: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548150db40a5165c0000be"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Defense Information Systems Agency"</span>,
            type: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548150db40a5165c0000bd"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Defense Contract Management Agency"</span>,
            type: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548150db40a5165c0000bc"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Defense Nuclear Facilities Safety Board"</span>,
            type: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548150db40a5165c0000bf"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">5</span>,
        count: <span class="hljs-number">5</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">1</span>,
        links: [ ]
    </span></span></span>}
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of results available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]
            },
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="office">Office&nbsp;<a href="#office"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="office-office">Office&nbsp;<a href="#office-office"><i class="fa fa-link"></i></a></h4><p>An Office is a sub unit of a U.S. government agency </p>
<section id="office-office-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Office</span></div><div style="float:left"><a href="#office-office-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/office/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51c1d4dadb40a5298c79c731</span></span><p>String <code>id</code> of the desired Office entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Agency</code></strong><a data-toggle="collapse" data-target="#4fcca7cd1dbeaf0abdcf02e15a86918c" class="pull-right">Toggle</a></li><li id="4fcca7cd1dbeaf0abdcf02e15a86918c" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#30208086ad0eacda23d2a4e3b2d68d33" class="pull-right">Toggle</a></li><li id="30208086ad0eacda23d2a4e3b2d68d33" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    acronyms: <span class="hljs-string">"None Listed"</span>,
    agencies: [
        {
            <span class="hljs-property">name</span>: <span class="hljs-string">"Department of the Navy"</span>,
            type: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548151db40a5165c0000d1"</span>
        }
    ],
    <span class="hljs-property">name</span>: <span class="hljs-string">"Naval Sea Systems Command"</span>,
    organizationalStats: {
        activePeople: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfActivePeople: <span class="hljs-number">151</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfActivePeople: <span class="hljs-number">198</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfActivePeople: <span class="hljs-number">94</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfActivePeople: <span class="hljs-number">71</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfActivePeople: <span class="hljs-number">20</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfActivePeople: <span class="hljs-number">13</span>
            }
        ],
        activeOffices: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfActiveOffices: <span class="hljs-number">146</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfActiveOffices: <span class="hljs-number">23</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfActiveOffices: <span class="hljs-number">14</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfActiveOffices: <span class="hljs-number">13</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfActiveOffices: <span class="hljs-number">9</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfActiveOffices: <span class="hljs-number">7</span>
            }
        ]
    },
    procurementStats: {
        averageTimesToAward: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                averageDaysToAward: <span class="hljs-number">113.59</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                averageDaysToAward: <span class="hljs-number">132.29</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageDaysToAward: <span class="hljs-number">137.81</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                averageDaysToAward: <span class="hljs-number">4.5</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                averageDaysToAward: <span class="hljs-number">30</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                averageDaysToAward: <span class="hljs-number">36.5</span>
            }
        ],
        averageAwardValues: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                averageAwardValue: <span class="hljs-number">3401455.14</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                averageAwardValue: <span class="hljs-number">6202982.77</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageAwardValue: <span class="hljs-number">2285385.1</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                averageAwardValue: <span class="hljs-number">3508468.52</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                averageAwardValue: <span class="hljs-number">5618548.28</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                averageAwardValue: <span class="hljs-number">2369390.18</span>
            }
        ],
        numbersOfAwards: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfAwards: <span class="hljs-number">264</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfAwards: <span class="hljs-number">388</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfAwards: <span class="hljs-number">206</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfAwards: <span class="hljs-number">95</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfAwards: <span class="hljs-number">20</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfAwards: <span class="hljs-number">13</span>
            }
        ],
        awardDollarFlow: {
            today: <span class="hljs-number">0</span>,
            thisWeek: <span class="hljs-number">12657074.88</span>,
            thisMonth: <span class="hljs-number">118190100.14</span>,
            thisQuarter: <span class="hljs-number">457346079.47</span>,
            thisYear: <span class="hljs-number">913224015.29</span>,
            allTime: <span class="hljs-number">913224015.29</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">339155979.33</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">142927918.83</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">260969080.38</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">51980936.61</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">88395250.03</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">58808489.18</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">317393819.65</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">415028080.22</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">304413311.24</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">32885815.27</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1062215381.71</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">41092511.06</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">54773434.48</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">9150521.2</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">7620522.93</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">23433853.89</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">62273821.58</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">10009850.33</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">43145987.99</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">49322083.31</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">40593626.58</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">139524335.2</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">45004452.58</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">18831631.04</span>
        }
    },
    protestStats: {
        totalProtests: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                totalProtests: <span class="hljs-number">17</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                totalProtests: <span class="hljs-number">47</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                totalProtests: <span class="hljs-number">28</span>
            }
        ],
        protestsWithdrawn: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfProtests: <span class="hljs-number">5</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">9</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">5</span>
            }
        ],
        protestsDenied: [
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">9</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">8</span>
            }
        ],
        protestsSustained: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfProtests: <span class="hljs-number">2</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">1</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">1</span>
            }
        ],
        protestsDismissed: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfProtests: <span class="hljs-number">8</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfProtests: <span class="hljs-number">26</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfProtests: <span class="hljs-number">14</span>
            }
        ]
    },
    timestamp: <span class="hljs-string">"2014-05-18T10:03:00-0400"</span>,
    type: <span class="hljs-string">"office"</span>,
    website: <span class="hljs-string">"Not Available"</span>,
    _id: <span class="hljs-string">"51c1d4dadb40a5298c79c731"</span>
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"_id"</span> : {
            <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the office"</span>
        },
        <span class="hljs-string">"timestamp"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The date for the last time an office was active"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"date-time"</span>
        },
        <span class="hljs-string">"name"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of the office"</span>
        },
        <span class="hljs-string">"type"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity"</span>
        },
        <span class="hljs-string">"acronyms"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Common acronyms for the office"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"An acronym"</span>
            }
        },
        <span class="hljs-string">"website"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The website for the office"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>
        },
        <span class="hljs-string">"agencies"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The NTIs for all related to this office"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"An NTI for an agency"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the agency"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"procurementStats"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Statistics about the office'</span>s public procurements, broken down by <span class="hljs-transposed_variable">year.</span> Updated <span class="hljs-transposed_variable">daily.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>averageTimesToAward<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the average number of days <span class="hljs-keyword">for</span> the <span class="hljs-transposed_variable">office'</span>s Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>The average number of days <span class="hljs-keyword">for</span> the <span class="hljs-transposed_variable">office'</span>s Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageTimeToAward<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of days<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>averageAwardValues<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the average award values <span class="hljs-keyword">for</span> an <span class="hljs-transposed_variable">office'</span>s projects <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Average award value <span class="hljs-keyword">for</span> an <span class="hljs-transposed_variable">office'</span>s projects <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageAwardValue<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The average award value<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>numbersOfAwards<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of awards <span class="hljs-keyword">for</span> an office, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of awards <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfAwards<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">awards.</span> Does not differentiate with respect to competitive nature of <span class="hljs-transposed_variable">process.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>awardDollarFlow<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">"  "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total award values <span class="hljs-keyword">for</span> an entity, grouped by time buckets, going back two <span class="hljs-transposed_variable">years.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A time bucket of total award value<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : "</span> {
                            <span class="hljs-string">"timeBucket"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A human readable time bucket"</span>
                            },
                            <span class="hljs-string">"total"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total amount awarded for a time bucket. 
                            }
                        }
                    }
                }
            }
        },
        "</span>organizationalStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Statistics about the office, including active <span class="hljs-transposed_variable">people.</span> Updated <span class="hljs-transposed_variable">daily.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>activePeople<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of active people <span class="hljs-keyword">for</span> an agency, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of active people <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfActivePeople<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of active <span class="hljs-transposed_variable">people.</span><span class="hljs-string">"
                            }
                        }
                    }
                }
            }
        }, 
        "</span>obligationStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Obligation stats about an office, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>totalObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Total obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>obligationsDollarFlow<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">"  "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total obligation values <span class="hljs-keyword">for</span> an entity, grouped by time buckets, going back two <span class="hljs-transposed_variable">years.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A time bucket of total obligations<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : "</span> {
                            <span class="hljs-string">"timeBucket"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A human readable time bucket"</span>
                            },
                            <span class="hljs-string">"total"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total amount obligated for a time bucket. 
                            }
                        }
                    }
                },
                "</span>totalSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as the Total Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>serviceDisabledVeteranOwnedSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as the Service-Disabled Veteran-Owned Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>HUBZoneObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as HUBZone Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>competitive8aObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Competitive <span class="hljs-number">8</span>(a) Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>womanOwnedSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Woman Owned Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>partialSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Partial Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>economicallyDisadvantagedWomanOwnedSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Economically Disadvantaged Woman Owned Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>emergingSmallBusinessObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Emerging Small Business Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>TotalHBCUMIObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Total HBCU / MI Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>partialHBCUMIObligations<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of total obligations designated as Partial HBCU / MI Set Aside, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Obligations <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>obligations<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The total dollar value of the <span class="hljs-transposed_variable">obligations.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
            }
        },
        "</span>protestStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Protest stats <span class="hljs-keyword">for</span> the projects of an office, including breakdowns by protest <span class="hljs-transposed_variable">status.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>totalProtests<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests <span class="hljs-keyword">for</span> an agency, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of total protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsWithdrawn<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Withdrawn, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsDenied<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Denied, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsSustained<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Sustained, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>protestsDismissed<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests with a status of Dismissed, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                }
            }
        },
        "</span>govTribeStats : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Proprietary GovTribe stats about the organization"</span>,
            <span class="hljs-string">"properties"</span> : {
            }
        }
    }
}
</code></pre></li></ul></section><h4 id="office-office-slices">Office Slices&nbsp;<a href="#office-office-slices"><i class="fa fa-link"></i></a></h4><p>Returns a listing (slice) of NTIs that are related to an office based on the slice name. For example, the <code>vendorsThatWinTotalSmallBusinessSetAsideProjects</code> slice will return a list of vendor NTIs for a given agency that have won projects designated as a Total Small Business set aside.</p>
<section id="office-office-slices-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Slice for an Office</span></div><div style="float:left"><a href="#office-office-slices-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/office/{_id}/slice/{sliceName}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51c1d4dadb40a5298c79c731</span></span><p>id of the desired Office Entity</p>
</dd><dt>sliceName</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>vendorsThatWinTotalSmallBusinessSetAsideProjects</span></span><p>A list of entities or slice, relative to the office.</p>
<p><strong>Choices:<br></strong><code>vendorsThatWinTotalSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinHUBZoneSetAsideProjects</code><br><code>vendorsThatWinCompetitive8ASetAsideProjects</code><br><code>vendorsThatWinWomanOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinPartialSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinEmergingSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinTotalHBCUMISetAsideProjects</code><br><code>vendorsThatWinPartialHBCUMISetAsideProjects</code><br><code>peopleThatPostTotalSmallBusinessSetAsideProjects</code><br><code>peopleThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>peopleThatPostHUBZoneSetAsideProjects</code><br><code>peopleThatPostCompetitive8ASetAsideProjects</code><br><code>peopleThatPostWomanOwnedSmallBusinessSetAsideProjects</code><br><code>peopleThatPostPartialSmallBusinessSetAsideProjects</code><br><code>peopleThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>peopleThatPostEmergingSmallBusinessSetAsideProjects</code><br><code>peopleThatPostTotalHBCUMISetAsideProjects</code><br><code>peopleThatPostPartialHBCUMISetAsideProjects</code><br><code>categoriesThatContainTotalSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainHUBZoneSetAsideProjects</code><br><code>categoriesThatContainCompetitive8ASetAsideProjects</code><br><code>categoriesThatContainWomanOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainPartialSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainEmergingSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainTotalHBCUMISetAsideProjects</code><br><code>categoriesThatContainPartialHBCUMISetAsideProjects</code><br></p></dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Slice</code></strong><a data-toggle="collapse" data-target="#ce2d40cdcced529fd2373c6e60990dd9" class="pull-right">Toggle</a></li><li id="ce2d40cdcced529fd2373c6e60990dd9" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#32ded3d206e9e5e56968968252889be9" class="pull-right">Toggle</a></li><li id="32ded3d206e9e5e56968968252889be9" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Temperature Monitor"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5363ed276c5cc873538b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rebuild Cumberland Sound"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"537666f56c5cc8717e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"New Starts Financial Capacity Assessments and Financial Assessment"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5282d11ae3dd90f84d000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">182146</span>,
        count: <span class="hljs-number">50</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">3643</span>,
        links: {
            next: <span class="hljs-string">"http://api.govtribe.com/project?page=2"</span>
        </span></span></span>}
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"activity"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>],
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section><h4 id="office-search-offices">Search Offices&nbsp;<a href="#office-search-offices"><i class="fa fa-link"></i></a></h4><p>Find an office by its name or acronym.</p>
<section id="office-search-offices-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Office Search Results</span></div><div style="float:left"><a href="#office-search-offices-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/office/search/{?q}</code></div></div><div class="panel-body"><p>Search all agencies by keyword</p>
</div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>q</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Prisons</span></span><p>The string with which we will query the offices</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Projects</code></strong><a data-toggle="collapse" data-target="#30354751cd4edcb655e06fbf9c605092" class="pull-right">Toggle</a></li><li id="30354751cd4edcb655e06fbf9c605092" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#6717708b5cd5be31d5addd31aa216eb0" class="pull-right">Toggle</a></li><li id="6717708b5cd5be31d5addd31aa216eb0" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Bureau of Prisons"</span>,
            type: <span class="hljs-string">"office"</span>,
            _id: <span class="hljs-string">"51c1d4e1db40a5298c79c74c"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">1</span>,
        count: <span class="hljs-number">1</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">1</span>,
        links: [ ]
    </span></span></span>}
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of results available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]
            },
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="person">Person&nbsp;<a href="#person"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="person-person">Person&nbsp;<a href="#person-person"><i class="fa fa-link"></i></a></h4><p>An Person is a U.S. government point of contact for one or more projects </p>
<section id="person-person-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Person</span></div><div style="float:left"><a href="#person-person-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/person/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51c275c6ca985fa61e000099</span></span><p>String <code>id</code> of the desired Person entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Person</code></strong><a data-toggle="collapse" data-target="#6a90dba05cae9291b5a2b026cffca770" class="pull-right">Toggle</a></li><li id="6a90dba05cae9291b5a2b026cffca770" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#c88950e9c426a0da404068b6107d3c55" class="pull-right">Toggle</a></li><li id="c88950e9c426a0da404068b6107d3c55" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    agencies: [
        {
            <span class="hljs-property">name</span>: <span class="hljs-string">"Department of Agriculture"</span>,
            type: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548150db40a5165c0000c2"</span>
        }
    ],
    email: <span class="hljs-string">"martha.garza@aphis.usda.gov"</span>,
    <span class="hljs-property">name</span>: <span class="hljs-string">"Martha Garza"</span>,
    offices: [
        {
            <span class="hljs-property">name</span>: <span class="hljs-string">"Animal and Plant Health Inspection Service"</span>,
            type: <span class="hljs-string">"office"</span>,
            _id: <span class="hljs-string">"51c1d616ca985fad34000035"</span>
        },
        {
            <span class="hljs-property">name</span>: <span class="hljs-string">"Administrative Services Division/IT Contracting"</span>,
            type: <span class="hljs-string">"office"</span>,
            _id: <span class="hljs-string">"51c1d6fbca985fe03500002c"</span>
        }
    ],
    phone: <span class="hljs-string">"956-205-7604"</span>,
    position: <span class="hljs-string">"Contract Specialist"</span>,
    procurementStats: {
        averageTimesToAward: [
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageDaysToAward: <span class="hljs-number">174</span>
            }
        ],
        averageAwardValues: [
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageAwardValue: <span class="hljs-number">2747633.92</span>
            }
        ],
        numbersOfAwards: [
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfAwards: <span class="hljs-number">2</span>
            }
        ],
        awardDollarFlow: {
            today: <span class="hljs-number">0</span>,
            thisWeek: <span class="hljs-number">0</span>,
            thisMonth: <span class="hljs-number">0</span>,
            thisQuarter: <span class="hljs-number">0</span>,
            thisYear: <span class="hljs-number">0</span>,
            allTime: <span class="hljs-number">5495267.84</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">5495267.84</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>
        }
    },
    timestamp: <span class="hljs-string">"2014-05-18T13:59:00-0400"</span>,
    type: <span class="hljs-string">"person"</span>,
    _id: <span class="hljs-string">"51c275c6ca985fa61e000099"</span>
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"_id"</span> : {
            <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the person"</span>
        },
        <span class="hljs-string">"timestamp"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The date for the last time a person was active"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"date-time"</span>
        },
        <span class="hljs-string">"name"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of the person. Defaults to email if no name found."</span>
        },
        <span class="hljs-string">"type"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity"</span>,
            <span class="hljs-string">"enum"</span> : <span class="hljs-matrix">[<span class="hljs-string">"agency"</span>]</span>
        },
        <span class="hljs-string">"email"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The email for a person"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"email"</span>
        },
        <span class="hljs-string">"phone"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The phone number for a person"</span>
        },
        <span class="hljs-string">"position"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The last known position for a person"</span>
        },
        <span class="hljs-string">"agencies"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The NTIs for all agencies related to this person"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"An NTI for a n agency"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the agency"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"offices"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The NTIs for all offices related to this person"</span>,
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
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"procurementStats"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Statistics about the person'</span>s public procurements, broken down by <span class="hljs-transposed_variable">year.</span> Updated <span class="hljs-transposed_variable">daily.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>averageTimesToAward<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the average number of days <span class="hljs-keyword">for</span> the <span class="hljs-transposed_variable">person'</span>s Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>The average number of days <span class="hljs-keyword">for</span> the <span class="hljs-transposed_variable">person'</span>s Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageTimeToAward<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of days<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>averageAwardValues<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the average award values <span class="hljs-keyword">for</span> an <span class="hljs-transposed_variable">persons'</span>s projects <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Average award value <span class="hljs-keyword">for</span> an <span class="hljs-transposed_variable">person'</span>s projects <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageAwardValue<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The average award value<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>numbersOfAwards<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of awards <span class="hljs-keyword">for</span> a person, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of awards <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfAwards<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">awards.</span> Does not differentiate with respect to competitive nature of <span class="hljs-transposed_variable">process.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>awardDollarFlow<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">"  "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total award values <span class="hljs-keyword">for</span> an entity, grouped by time buckets, going back two <span class="hljs-transposed_variable">years.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A time bucket of total award values<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : "</span> {
                            <span class="hljs-string">"timeBucket"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A human readable time bucket"</span>
                            },
                            <span class="hljs-string">"total"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total amount awarded for a time bucket. 
                            }
                        }
                    }
                }
            }
        },
        "</span>govTribeStats : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Proprietary GovTribe stats about the organization"</span>,
            <span class="hljs-string">"properties"</span> : {
            }
        }
    }
}
</code></pre></li></ul></section><h4 id="person-person-slices">Person Slices&nbsp;<a href="#person-person-slices"><i class="fa fa-link"></i></a></h4><p>Returns a listing (slice) of NTIs that are related to an person based on the slice name. For example, the <code>vendorsThatWinTotalSmallBusinessSetAsideProjects</code> slice will return a list of vendor NTIs for a given person that have won projects designated as a Total Small Business set aside.</p>
<section id="person-person-slices-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Slice for a Person</span></div><div style="float:left"><a href="#person-person-slices-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/person/{_id}/slice/{sliceName}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>id of the desired Office Entity</p>
</dd><dt>sliceName</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>vendorsThatWinTotalSmallBusinessSetAsideProjects</span></span><p>A list of entities or slice, relative to the office.</p>
<p><strong>Choices:<br></strong><code>vendorsThatWinTotalSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinHUBZoneSetAsideProjects</code><br><code>vendorsThatWinCompetitive8ASetAsideProjects</code><br><code>vendorsThatWinWomanOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinPartialSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinEmergingSmallBusinessSetAsideProjects</code><br><code>vendorsThatWinTotalHBCUMISetAsideProjects</code><br><code>vendorsThatWinPartialHBCUMISetAsideProjects</code><br><code>categoriesThatContainTotalSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainHUBZoneSetAsideProjects</code><br><code>categoriesThatContainCompetitive8ASetAsideProjects</code><br><code>categoriesThatContainWomanOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainPartialSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainEmergingSmallBusinessSetAsideProjects</code><br><code>categoriesThatContainTotalHBCUMISetAsideProjects</code><br><code>categoriesThatContainPartialHBCUMISetAsideProjects</code><br></p></dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Slice</code></strong><a data-toggle="collapse" data-target="#d13d648e40a7bd9cb79ab68b933516de" class="pull-right">Toggle</a></li><li id="d13d648e40a7bd9cb79ab68b933516de" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#9f47dc944065885228f752e5ed22e15b" class="pull-right">Toggle</a></li><li id="9f47dc944065885228f752e5ed22e15b" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Temperature Monitor"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5363ed276c5cc873538b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rebuild Cumberland Sound"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"537666f56c5cc8717e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"New Starts Financial Capacity Assessments and Financial Assessment"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5282d11ae3dd90f84d000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">182146</span>,
        count: <span class="hljs-number">50</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">3643</span>,
        links: {
            next: <span class="hljs-string">"http://api.govtribe.com/project?page=2"</span>
        </span></span></span>}
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"activity"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>],
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section><h4 id="person-search-people">Search People&nbsp;<a href="#person-search-people"><i class="fa fa-link"></i></a></h4><p>Find a person by their name, email, telephone number, or position.</p>
<section id="person-search-people-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Person Search Results</span></div><div style="float:left"><a href="#person-search-people-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/person/search/{?q}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>q</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Nash</span></span><p>The string with which we will query the people</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Projects</code></strong><a data-toggle="collapse" data-target="#a47c78c3fc79452d8be6940ff0b9f066" class="pull-right">Toggle</a></li><li id="a47c78c3fc79452d8be6940ff0b9f066" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#a12296f7b21cb7efacbecd78aeafe24e" class="pull-right">Toggle</a></li><li id="a12296f7b21cb7efacbecd78aeafe24e" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"David Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"5339da796c5cc8b95e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Patty H. Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"51c2766dca985f5c1f0001cf"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Linda Nash-Gallaher"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"51c28a20ca985f0244000033"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Bridget R. Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"52a5cdc6e3dd90cc3c8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Gerard R. Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"51c27aceca985fdc250002c8"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Robert Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"51c2771aca985f8a20000342"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Charles Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"530d03573a8a942b080029fe"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Deborah Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"530cfc653a8a942b08000666"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Mary Priddy-Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"530cfca53a8a942b080009d4"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Bridget R. Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"51c2752fca985f181d000278"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Robert Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"530d0a743a8a942b080034d1"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Deborah Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"530cfd4b3a8a942b08001129"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Gilser A Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"51c290cbca985f554e000019"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rick Nash"</span>,
            type: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"51dc2e5dca985f8133000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">14</span>,
        count: <span class="hljs-number">14</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">1</span>,
        links: [ ]
    </span></span></span>}
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of results available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]
            },
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="vendor">Vendor&nbsp;<a href="#vendor"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="vendor-vendor">Vendor&nbsp;<a href="#vendor-vendor"><i class="fa fa-link"></i></a></h4><p>An Vendor is an entity that has been awarded a Project </p>
<section id="vendor-vendor-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Vendor</span></div><div style="float:left"><a href="#vendor-vendor-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/vendor/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51ed43bdca985f6c78000018</span></span><p>String <code>id</code> of the desired Vendor entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Vendor</code></strong><a data-toggle="collapse" data-target="#3ed2c16cd8324c7b51673c948e4bdd78" class="pull-right">Toggle</a></li><li id="3ed2c16cd8324c7b51673c948e4bdd78" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#db8c5a488bff673e232ffb2723aa14f2" class="pull-right">Toggle</a></li><li id="db8c5a488bff673e232ffb2723aa14f2" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    <span class="hljs-property">name</span>: <span class="hljs-string">"Deloitte"</span>,
    procurementStats: {
        NAICSWon: [
            <span class="hljs-string">"541990"</span>,
            <span class="hljs-string">"541611"</span>,
            <span class="hljs-string">"541511"</span>,
            <span class="hljs-string">"541512"</span>,
            <span class="hljs-string">"541513"</span>,
            <span class="hljs-string">"518210"</span>,
            <span class="hljs-string">"541690"</span>,
            <span class="hljs-string">"541519"</span>,
            <span class="hljs-string">"541219"</span>,
            <span class="hljs-string">"541199"</span>
        ],
        setAsideTypesWon: [
            <span class="hljs-string">"Partial Small Business"</span>
        ],
        classCodesWon: [
            <span class="hljs-string">"R"</span>,
            <span class="hljs-string">"D"</span>,
            <span class="hljs-string">"70"</span>,
            <span class="hljs-string">"L"</span>,
            <span class="hljs-string">"B"</span>,
            <span class="hljs-string">"A"</span>
        ],
        numbersOfAwards: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfAwards: <span class="hljs-number">6</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfAwards: <span class="hljs-number">31</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfAwards: <span class="hljs-number">14</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfAwards: <span class="hljs-number">7</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfAwards: <span class="hljs-number">2</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfAwards: <span class="hljs-number">1</span>
            }
        ],
        awardDollarFlow: {
            today: <span class="hljs-number">0</span>,
            thisWeek: <span class="hljs-number">0</span>,
            thisMonth: <span class="hljs-number">0</span>,
            thisQuarter: <span class="hljs-number">250000000</span>,
            thisYear: <span class="hljs-number">257201014.18</span>,
            allTime: <span class="hljs-number">257201014.18</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">250000000</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">7201014.18</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">7604399</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">3512815.52</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1205134</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">48279679.6</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1103420323.75</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">5007044975.15</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">13015651.4</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">89904109</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">77950601.4</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">14777824</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">62000000</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">496997943</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">724290051</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">128012807.03</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">0</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">25324963</span>
        }
    },
    protestStats: {
        totalProtests: [
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                totalProtests: <span class="hljs-number">4</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                totalProtests: <span class="hljs-number">2</span>
            }
        ]
    },
    timestamp: <span class="hljs-string">"2014-04-28T11:21:06-0400"</span>,
    type: <span class="hljs-string">"vendor"</span>,
    websites: [
        <span class="hljs-string">"www.deloitte.com"</span>
    ],
    _id: <span class="hljs-string">"51ed43bdca985f6c78000018"</span>
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"_id"</span> : {
            <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the Vendor"</span>
        },
        <span class="hljs-string">"websites"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A listing of websites for this vendor"</span>,
            <span class="hljs-string">"minLength"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"uniqueItems"</span> : true,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for a vendor'</span>s website<span class="hljs-string">",
                "</span>format<span class="hljs-string">" : "</span>uri<span class="hljs-string">"
            }
        },
        "</span>NAICSWon<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>minLength<span class="hljs-string">" : 0,
            "</span>uniqueItems<span class="hljs-string">": true,
            "</span>description<span class="hljs-string">": "</span>The North American Industry Classification Code <span class="hljs-keyword">for</span> Projects this vendor has won<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A  North American Industry Classification Code<span class="hljs-string">"
            }
        },
        "</span>setAsideTypesWon<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>minLength<span class="hljs-string">" : 0,
            "</span>uniqueItems<span class="hljs-string">": true,
            "</span>description<span class="hljs-string">": "</span>The Set Aside Types <span class="hljs-keyword">for</span> Projects this vendor has won<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A  Set Aside Type<span class="hljs-string">"
            }
        },
        "</span>classCodesWon<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>minLength<span class="hljs-string">" : 0,
            "</span>uniqueItems<span class="hljs-string">": true,
            "</span>description<span class="hljs-string">" : "</span>The Products <span class="hljs-built_in">and</span> Services Class (PSC) Codes <span class="hljs-keyword">for</span> projects this vendor has won<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A PSC Code<span class="hljs-string">"
            }
        },
        "</span>timestamp<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The date <span class="hljs-keyword">for</span> the last time the vendor was active<span class="hljs-string">",
            "</span>format<span class="hljs-string">" : "</span>date-time<span class="hljs-string">"
        },
        "</span>name<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The name of a project<span class="hljs-string">"
        },
        "</span>type<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The type of the entity<span class="hljs-string">",
            "</span>enum<span class="hljs-string">" : ["</span>vendor<span class="hljs-string">"]
        },
        "</span>procurementStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Procurement stats <span class="hljs-keyword">for</span> a <span class="hljs-transposed_variable">vendor.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>numbersOfAwards<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>minLength<span class="hljs-string">" : 0,
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total awards <span class="hljs-keyword">for</span> a vendor, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of total awards <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfAwards<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of awards<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>awardDollarFlow<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">"  "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total award values <span class="hljs-keyword">for</span> an entity, grouped by time buckets, going back two <span class="hljs-transposed_variable">years.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A time bucket of total award value<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : "</span> {
                            <span class="hljs-string">"timeBucket"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A human readable time bucket"</span>
                            },
                            <span class="hljs-string">"total"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total amount awarded for a time bucket. 
                            }
                        }
                    }
                }
            }
        },
        "</span>protestStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Protest stats <span class="hljs-keyword">for</span> a <span class="hljs-transposed_variable">vendor.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>totalProtests<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>minLength<span class="hljs-string">" : 0,
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of total protests <span class="hljs-keyword">for</span> a vendor, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of total protests <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfProtests<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">protests.</span><span class="hljs-string">"
                            }
                        }
                    }
                }
            }
        },
        "</span>obligationStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>minLength<span class="hljs-string">" : 0,
            "</span>description<span class="hljs-string">" : "</span>The obligations <span class="hljs-keyword">for</span> a vendor, broken down by year <span class="hljs-built_in">and</span> <span class="hljs-transposed_variable">agency.</span><span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>Total obligations <span class="hljs-keyword">for</span> a given year, broken down by top <span class="hljs-number">5</span> agencies<span class="hljs-string">",
                "</span>properties<span class="hljs-string">" : {
                     "</span>totalObligations<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The total amount of obligations to a vendor <span class="hljs-keyword">for</span> a given year<span class="hljs-string">"
                    },
                    "</span>calendarYear<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                    },
                    "</span>agenciesBreakdown<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                        "</span>minLength<span class="hljs-string">" : 0,
                        "</span>maxLength<span class="hljs-string">" : 6,
                        "</span>description<span class="hljs-string">" : "</span>The percentage of a vendors total obligations <span class="hljs-keyword">for</span> that year, split by <span class="hljs-transposed_variable">agency.</span> Top <span class="hljs-number">5</span> <span class="hljs-transposed_variable">listed.</span> Remainder listed as All Other Agencies<span class="hljs-string">",
                        "</span>items<span class="hljs-string">" : {
                            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                            "</span>description<span class="hljs-string">" : "</span>A percentage of the <span class="hljs-transposed_variable">vendor'</span>s obligations <span class="hljs-keyword">for</span> a specific agency<span class="hljs-string">",
                            "</span>properties<span class="hljs-string">"  : {
                                "</span>agencyName<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The name of the <span class="hljs-transposed_variable">agency.</span> Will only be an actual agency <span class="hljs-keyword">for</span> the top <span class="hljs-number">5.</span> Remainder noted as All Other Agencies<span class="hljs-string">"
                                },
                                "</span>percentage<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The percentage of a vendors total obligations <span class="hljs-keyword">for</span> this agency<span class="hljs-string">"
                                }
                            }
                        }
                    }
                }
            }
        },
        "</span>govTribeStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Proprietary GovTribe stats about a vendor<span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
            }
        }
    }
}
</span></code></pre></li></ul></section><h4 id="vendor-search-vendors">Search Vendors&nbsp;<a href="#vendor-search-vendors"><i class="fa fa-link"></i></a></h4><p>Find a vendor by name.</p>
<section id="vendor-search-vendors-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Vendor Search Results</span></div><div style="float:left"><a href="#vendor-search-vendors-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/vendor/search/{?q}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>q</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Deloitte</span></span><p>The string with which we will query the vendors</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Vendors</code></strong><a data-toggle="collapse" data-target="#35d3519ee3111087c3deb983a508a8ac" class="pull-right">Toggle</a></li><li id="35d3519ee3111087c3deb983a508a8ac" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#663794a54c33287cdf387f250db974b5" class="pull-right">Toggle</a></li><li id="663794a54c33287cdf387f250db974b5" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Deloitte"</span>,
            type: <span class="hljs-string">"vendor"</span>,
            _id: <span class="hljs-string">"51ed43bdca985f6c78000018"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">1</span>,
        count: <span class="hljs-number">1</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">1</span>,
        links: [ ]
    </span></span></span>}
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of results available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]
            },
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section><h4 id="vendor-vendor-slices">Vendor Slices&nbsp;<a href="#vendor-vendor-slices"><i class="fa fa-link"></i></a></h4><p>Returns a listing (slice) of NTIs that are related to a vendor based on the slice name. For example, the <code>agenciesThatAwardToThisVendor</code> slice will return a list of agency NTIs that have awarded projects to this vendor.</p>
<section id="vendor-vendor-slices-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Slice for a Vendor</span></div><div style="float:left"><a href="#vendor-vendor-slices-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/vendor/{_id}/slice/{sliceName}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51ed43bdca985f6c78000018</span></span><p>id of the desired vendor entity</p>
</dd><dt>sliceName</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>agenciesThatAwardToThisVendor</span></span><p>A list of entities or slice, relative to the vendor.</p>
<p><strong>Choices:<br></strong><code>agenciesThatAwardToThisVendor</code><br><code>officesThatAwardToThisVendor</code><br><code>peopleThatAwardToThisVendor</code><br><code>categoriesThatContainAwardsToThisVendor</code><br></p></dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Slice</code></strong><a data-toggle="collapse" data-target="#0b2c2b64edd92cefb7a9d4f579e04ff6" class="pull-right">Toggle</a></li><li id="0b2c2b64edd92cefb7a9d4f579e04ff6" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#fc12caa9637fbbaf7effd6b13407e8db" class="pull-right">Toggle</a></li><li id="fc12caa9637fbbaf7effd6b13407e8db" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Temperature Monitor"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5363ed276c5cc873538b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rebuild Cumberland Sound"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"537666f56c5cc8717e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"New Starts Financial Capacity Assessments and Financial Assessment"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5282d11ae3dd90f84d000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">182146</span>,
        count: <span class="hljs-number">50</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">3643</span>,
        links: {
            next: <span class="hljs-string">"http://api.govtribe.com/project?page=2"</span>
        </span></span></span>}
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"activity"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>],
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="category">Category&nbsp;<a href="#category"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="category-category">Category&nbsp;<a href="#category-category"><i class="fa fa-link"></i></a></h4><p>Categories are a hierarchical topical grouping construct. They are based on NAICS codes and PSC codes.  </p>
<section id="category-category-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Category</span></div><div style="float:left"><a href="#category-category-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/category/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>518ecbf0db40a51b0b000067</span></span><p>String <code>id</code> of the desired Category entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Category</code></strong><a data-toggle="collapse" data-target="#fb7410f522a929bc88bf15049a187ed1" class="pull-right">Toggle</a></li><li id="fb7410f522a929bc88bf15049a187ed1" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#d6fc336b03f2b0bb520cacea8c4bdde0" class="pull-right">Toggle</a></li><li id="d6fc336b03f2b0bb520cacea8c4bdde0" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    childCategories: <span class="hljs-string">"None Listed"</span>,
    <span class="hljs-property">name</span>: <span class="hljs-string">"Construction of structures and facilities"</span>,
    organizationalStats: {
        activePeople: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfActivePeople: <span class="hljs-number">281</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfActivePeople: <span class="hljs-number">675</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfActivePeople: <span class="hljs-number">792</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfActivePeople: <span class="hljs-number">469</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfActivePeople: <span class="hljs-number">219</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfActivePeople: <span class="hljs-number">124</span>
            }
        ],
        activeOffices: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfActiveOffices: <span class="hljs-number">210</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfActiveOffices: <span class="hljs-number">372</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfActiveOffices: <span class="hljs-number">389</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfActiveOffices: <span class="hljs-number">278</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfActiveOffices: <span class="hljs-number">172</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfActiveOffices: <span class="hljs-number">116</span>
            }
        ]
    },
    parentCategories: {
        <span class="hljs-property">name</span>: <span class="hljs-string">"Services"</span>,
        type: <span class="hljs-string">"category"</span>,
        _id: <span class="hljs-string">"518ecbf0db40a51b0b000002"</span>
    },
    procurementStats: {
        averageTimesToAward: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                averageDaysToAward: <span class="hljs-number">149.42</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                averageDaysToAward: <span class="hljs-number">119.72</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageDaysToAward: <span class="hljs-number">107.99</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                averageDaysToAward: <span class="hljs-number">21.2</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                averageDaysToAward: <span class="hljs-number">15</span>
            }
        ],
        averageAwardValues: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                averageAwardValue: <span class="hljs-number">8100565.31</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                averageAwardValue: <span class="hljs-number">9617817.01</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                averageAwardValue: <span class="hljs-number">14451089.48</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                averageAwardValue: <span class="hljs-number">37259376.26</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                averageAwardValue: <span class="hljs-number">11563504.14</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                averageAwardValue: <span class="hljs-number">6810072.36</span>
            }
        ],
        numbersOfAwards: [
            {
                calendarYear: <span class="hljs-string">"2014"</span>,
                numberOfAwards: <span class="hljs-number">341</span>
            },
            {
                calendarYear: <span class="hljs-string">"2013"</span>,
                numberOfAwards: <span class="hljs-number">1045</span>
            },
            {
                calendarYear: <span class="hljs-string">"2012"</span>,
                numberOfAwards: <span class="hljs-number">1305</span>
            },
            {
                calendarYear: <span class="hljs-string">"2011"</span>,
                numberOfAwards: <span class="hljs-number">832</span>
            },
            {
                calendarYear: <span class="hljs-string">"2010"</span>,
                numberOfAwards: <span class="hljs-number">264</span>
            },
            {
                calendarYear: <span class="hljs-string">"2009"</span>,
                numberOfAwards: <span class="hljs-number">120</span>
            }
        ],
        awardDollarFlow: {
            today: <span class="hljs-number">0</span>,
            thisWeek: <span class="hljs-number">92565556</span>,
            thisMonth: <span class="hljs-number">147271678.66</span>,
            thisQuarter: <span class="hljs-number">973476236.45</span>,
            thisYear: <span class="hljs-number">2705624613.58</span>,
            allTime: <span class="hljs-number">2705624613.58</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">826204557.79</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">591048125.82</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">740140353.41</span>,
            <span class="hljs-number">2014</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">400959897.9</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">608394394.6</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">278858994.6</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1749685748.69</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1488065812.62</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1229801844.72</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1075492374.89</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1024336976.17</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">744993985.35</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">04</span>-<span class="hljs-property">month</span>: <span class="hljs-number">307183237.02</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">03</span>-<span class="hljs-property">month</span>: <span class="hljs-number">117233136.92</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">02</span>-<span class="hljs-property">month</span>: <span class="hljs-number">739290426.83</span>,
            <span class="hljs-number">2013</span>-<span class="hljs-number">01</span>-<span class="hljs-property">month</span>: <span class="hljs-number">394136098.91</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">12</span>-<span class="hljs-property">month</span>: <span class="hljs-number">702958664.8</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">11</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1283217124.08</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">10</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1484018189.25</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">09</span>-<span class="hljs-property">month</span>: <span class="hljs-number">3236651661.93</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">08</span>-<span class="hljs-property">month</span>: <span class="hljs-number">720741760.44</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">07</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1040115311.5</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">06</span>-<span class="hljs-property">month</span>: <span class="hljs-number">1317349299.72</span>,
            <span class="hljs-number">2012</span>-<span class="hljs-number">05</span>-<span class="hljs-property">month</span>: <span class="hljs-number">762539162.88</span>
        }
    },
    protestStats: {
    totalProtests: <span class="hljs-string">"None Listed"</span>,
    protestsWithdrawn: <span class="hljs-string">"None Listed"</span>,
    protestsDenied: <span class="hljs-string">"None Listed"</span>,
    protestsSustained: <span class="hljs-string">"None Listed"</span>,
    protestsDismissed: <span class="hljs-string">"None Listed"</span>
    },
    timestamp: <span class="hljs-string">"2014-05-18T13:59:00-0400"</span>,
    type: <span class="hljs-string">"category"</span>,
    _id: <span class="hljs-string">"518ecbf0db40a51b0b000067"</span>
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"_id"</span> : {
            <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the Category"</span>
        },
        <span class="hljs-string">"description"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A description of the category. This is so meta."</span>
        },
        <span class="hljs-string">"mappedNAICS"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"minLength"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"uniqueItems"</span>: true,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The North American Industry Classification Codes that map to this category"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A  North American Industry Classification Code"</span>
            }
        },
        <span class="hljs-string">"mappedClassCodes"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"minLength"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"uniqueItems"</span>: true,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The Products and Services Class (PSC) Codes mapped to this category"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A PSC Code"</span>
            }
        },
        <span class="hljs-string">"parentCategories"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"An array for of one or more parent categories that contain this category."</span>,
            <span class="hljs-string">"uniqueItems"</span> : true,
            <span class="hljs-string">"minLength"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"An NTI for the parent catgory of this category"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity - namely category"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"childCategories"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"An array for of one or more children categories for which this category is the parent."</span>,
            <span class="hljs-string">"uniqueItems"</span> : true,
            <span class="hljs-string">"minLength"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"An NTI for a child catgory of this category"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity - namely category"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"timestamp"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The date for the last time an event occurred for projects within this category"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"date-time"</span>
        },
        <span class="hljs-string">"name"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of a project"</span>
        },
        <span class="hljs-string">"type"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity"</span>
        },
        <span class="hljs-string">"procurementStats"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Statistics about the office'</span>s public procurements, broken down by <span class="hljs-transposed_variable">year.</span> Updated <span class="hljs-transposed_variable">daily.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>averageTimesToAward<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the average number of days <span class="hljs-keyword">for</span> the <span class="hljs-transposed_variable">office'</span>s Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>The average number of days <span class="hljs-keyword">for</span> the <span class="hljs-transposed_variable">office'</span>s Projects to move from Open <span class="hljs-keyword">for</span> Bid to Award <span class="hljs-built_in">or</span> Canceled <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageTimeToAward<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of days<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>averageAwardValues<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the average award values <span class="hljs-keyword">for</span> an <span class="hljs-transposed_variable">office'</span>s projects <span class="hljs-keyword">for</span> each <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Average award value <span class="hljs-keyword">for</span> an <span class="hljs-transposed_variable">office'</span>s projects <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>averageAwardValue<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The average award value<span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>numbersOfAwards<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of awards <span class="hljs-keyword">for</span> an office, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of awards <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfAwards<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of <span class="hljs-transposed_variable">awards.</span> Does not differentiate with respect to competitive nature of <span class="hljs-transposed_variable">process.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>awardDollarFlow<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">"  "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>The total award values <span class="hljs-keyword">for</span> an entity, grouped by time buckets, going back two <span class="hljs-transposed_variable">years.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A time bucket of total award value<span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : "</span> {
                            <span class="hljs-string">"timeBucket"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"A human readable time bucket"</span>
                            },
                            <span class="hljs-string">"total"</span> : {
                                <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total amount awarded for a time bucket. 
                            }
                        }
                    }
                }
            }
        },
        "</span>organizationalStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Statistics about the category, including active people <span class="hljs-built_in">and</span> office <span class="hljs-transposed_variable">counts.</span> Updated <span class="hljs-transposed_variable">daily.</span><span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
                "</span>activePeople<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of active people <span class="hljs-keyword">for</span>  a category, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of active people <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfActivePeople<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of active <span class="hljs-transposed_variable">people.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>activeOffices<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of active offices <span class="hljs-keyword">for</span> a category, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of active offices <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfActiveOffices<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of active <span class="hljs-transposed_variable">offices.</span><span class="hljs-string">"
                            }
                        }
                    }
                },
                "</span>activeAgencies<span class="hljs-string">" : {
                    "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                    "</span>description<span class="hljs-string">" : "</span>A <span class="hljs-built_in">list</span> of the numbers of active agencies <span class="hljs-keyword">for</span> a category, broken down by <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                    "</span>items<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" :  "</span>Number of active agencies <span class="hljs-keyword">for</span> a given <span class="hljs-transposed_variable">year.</span><span class="hljs-string">",
                        "</span>properties<span class="hljs-string">" : {
                            "</span>calendarYear<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                            },
                            "</span>numberOfActiveAgencies<span class="hljs-string">" : {
                                "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                "</span>description<span class="hljs-string">" : "</span>The number of active <span class="hljs-transposed_variable">agencies.</span><span class="hljs-string">"
                            }
                        }
                    }
                }
            }
        },
        "</span>obligationStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
            "</span>minLength<span class="hljs-string">" : 0,
            "</span>description<span class="hljs-string">" : "</span>The obligations <span class="hljs-keyword">for</span> a category, broken down by year <span class="hljs-built_in">and</span> <span class="hljs-transposed_variable">agency.</span><span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>Total obligations <span class="hljs-keyword">for</span> a given year, broken down by top <span class="hljs-number">5</span> agencies<span class="hljs-string">",
                "</span>properties<span class="hljs-string">" : {
                     "</span>totalObligations<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>The total amount of obligations within a category <span class="hljs-keyword">for</span> a given year<span class="hljs-string">"
                    },
                    "</span>calendarYear<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">" : "</span>A calendar year<span class="hljs-string">"
                    },
                    "</span>agenciesBreakdown<span class="hljs-string">" : {
                        "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">",
                        "</span>minLength<span class="hljs-string">" : 0,
                        "</span>maxLength<span class="hljs-string">" : 6,
                        "</span>description<span class="hljs-string">" : "</span>The percentage of a <span class="hljs-transposed_variable">category'</span>s total obligations <span class="hljs-keyword">for</span> that year, split by <span class="hljs-transposed_variable">agency.</span> Top <span class="hljs-number">5</span> <span class="hljs-transposed_variable">listed.</span> Remainder listed as All Other Agencies<span class="hljs-string">",
                        "</span>items<span class="hljs-string">" : {
                            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                            "</span>description<span class="hljs-string">" : "</span>A percentage of the <span class="hljs-transposed_variable">category'</span>s obligations <span class="hljs-keyword">for</span> a specific agency<span class="hljs-string">",
                            "</span>properties<span class="hljs-string">"  : {
                                "</span>agencyName<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The name of the <span class="hljs-transposed_variable">agency.</span> Will only be an actual agency <span class="hljs-keyword">for</span> the top <span class="hljs-number">5.</span> Remainder noted as All Other Agencies<span class="hljs-string">"
                                },
                                "</span>percentage<span class="hljs-string">" : {
                                    "</span>type<span class="hljs-string">" : "</span>number<span class="hljs-string">",
                                    "</span>description<span class="hljs-string">" : "</span>The percentage of a <span class="hljs-transposed_variable">categories'</span> total obligations <span class="hljs-keyword">for</span> this agency<span class="hljs-string">"
                                }
                            }
                        }
                    }
                }
            }
        },
        "</span>govTribeStats<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Proprietary GovTribe stats about a category<span class="hljs-string">",
            "</span>properties<span class="hljs-string">" : {
            }
        }
    }
}
</span></code></pre></li></ul></section><h4 id="category-search-categories">Search Categories&nbsp;<a href="#category-search-categories"><i class="fa fa-link"></i></a></h4><p>Find a category by its name.</p>
<section id="category-search-categories-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Vendor Search Results</span></div><div style="float:left"><a href="#category-search-categories-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/category/search/{?q}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>q</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Mining</span></span><p>The string with which we will query the categories</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Vendors</code></strong><a data-toggle="collapse" data-target="#e44130c018eb7b5c72f86431ede8986d" class="pull-right">Toggle</a></li><li id="e44130c018eb7b5c72f86431ede8986d" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#649cf57b3453e2af71152898dc2a1dbd" class="pull-right">Toggle</a></li><li id="649cf57b3453e2af71152898dc2a1dbd" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{ 
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Mining: Oil and Gas"</span>,
            type: <span class="hljs-string">"category"</span>,
            _id: <span class="hljs-string">"518ecbf0db40a51b0b000071"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Mining: Coal and Mineral"</span>,
            type: <span class="hljs-string">"category"</span>,
            _id: <span class="hljs-string">"518ecbf0db40a51b0b000072"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Construction, mining, excavating and highway maintenance equipment"</span>,
            type: <span class="hljs-string">"category"</span>,
            _id: <span class="hljs-string">"518ecbf0db40a51b0b000029"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">3</span>,
        count: <span class="hljs-number">3</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">1</span>,
        links: [ ]
    </span></span></span>}
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of results available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]
            },
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section><h4 id="category-category-slices">Category Slices&nbsp;<a href="#category-category-slices"><i class="fa fa-link"></i></a></h4><p>Returns a listing (slice) of NTIs that are related to a category based on the slice name. For example, the <code>agenciesThatAwardProjectsInThisCategory</code> slice will return a list of agency NTIs that award projects within this category.</p>
<section id="category-category-slices-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Slice for a Category</span></div><div style="float:left"><a href="#category-category-slices-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/category/{_id}/slice/sliceName</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>518ecbf0db40a51b0b000029</span></span><p>id of the desired category</p>
</dd><dt>sliceName</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>agenciesThatAwardProjectsInThisCategory</span></span><p>A list of entities or slice, relative to the category.</p>
<p><strong>Choices:<br></strong><code>agenciesThatAwardProjectsInThisCategory</code><br><code>officesThatAwardProjectsInThisCategory</code><br><code>peopleThatAwardProjectsInThisCategory</code><br><code>vendorsThatWinProjectsInThisCategory</code><br></p></dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Slice</code></strong><a data-toggle="collapse" data-target="#ed6b652a922c89ba804fd7926f155113" class="pull-right">Toggle</a></li><li id="ed6b652a922c89ba804fd7926f155113" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#2f44f9590fd6ab36ee26d2513faa267f" class="pull-right">Toggle</a></li><li id="2f44f9590fd6ab36ee26d2513faa267f" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"Temperature Monitor"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5363ed276c5cc873538b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Rebuild Cumberland Sound"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"537666f56c5cc8717e8b4567"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"New Starts Financial Capacity Assessments and Financial Assessment"</span>,
            type: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"5282d11ae3dd90f84d000000"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">182146</span>,
        count: <span class="hljs-number">50</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">3643</span>,
        links: {
            next: <span class="hljs-string">"http://api.govtribe.com/project?page=2"</span>
        </span></span></span>}
    }
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of entities available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"activity"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>],
            }
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="activity">Activity&nbsp;<a href="#activity"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="activity-activity">Activity&nbsp;<a href="#activity-activity"><i class="fa fa-link"></i></a></h4><p>The Activity collection provides objects representing the ongoing activity of one or more of the other entity types. It is a time series of the world of government procurement.</p>
<p>A single Activity object contains actors, targets, and actions. For example, if a CO within the Bureau of Prisons awards a Mining Project named 23—Mining Contract to Acme Consulting, an Activity object is created with the actions that occurred as well as references to the involved entities.</p>
<p>In this example, the actors are:</p>
<ul>
<li>An Agency - The Department of Justice</li>
<li>An Office - The Bureau of Prisons</li>
<li>A Person - The CO</li>
<li>A Category - Mining</li>
</ul>
<p>In this example, the targets are:</p>
<ul>
<li>A Project - the 23—Mining Project</li>
<li>A Vendor - Acme Consulting</li>
</ul>
<p>In this example, the actions are:</p>
<ul>
<li>Awarded = true</li>
</ul>
<section id="activity-activity-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Activity</span></div><div style="float:left"><a href="#activity-activity-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/activity/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51f79dd2ca985f9b7c00031c</span></span><p>string <code>id</code> of the desired Activity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Activity</code></strong><a data-toggle="collapse" data-target="#4434d12d1bac99f550ad1982ffce7307" class="pull-right">Toggle</a></li><li id="4434d12d1bac99f550ad1982ffce7307" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#cef56dd08eeb8756df1352ed8513f059" class="pull-right">Toggle</a></li><li id="cef56dd08eeb8756df1352ed8513f059" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">actions</span>": <span class="hljs-value">[
        {
            "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"updated"</span></span>,
            "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
        </span>},
        {
            "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"changedTheStatusTo"</span></span>,
            "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"Justification and Approval (J&amp;A)"</span>
        </span>},
        {
            "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"addedFiles"</span></span>,
            "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-number">1</span>
        </span>},
        {
            "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"changedTheWorkflowStatusTo"</span></span>,
            "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"Awarded"</span>
        </span>},
        {
            "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"removedAContact"</span></span>,
            "<span class="hljs-attribute">value</span>": <span class="hljs-value">[
                <span class="hljs-string">"Richard Ferraiolo"</span>
            ]
        </span>}
    ]</span>,
    "<span class="hljs-attribute">activityType</span>": <span class="hljs-value"><span class="hljs-string">"project"</span></span>,
    "<span class="hljs-attribute">actors</span>": <span class="hljs-value">[
        {
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of the Navy"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548151db40a5165c0000d1"</span>
        </span>},
        {
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Naval Supply Systems Command"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"office"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51c1d4dddb40a5298c79c740"</span>
        </span>},
        {
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"NAVSUP Weapon Systems Support Philadelphia PA"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"office"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51c1d4e8db40a5298c79c75c"</span>
        </span>},
        {
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Manufacturing: Computer, Electronics, Appliances"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"category"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"518ecbf0db40a51b0b00009c"</span>
        </span>},
        {
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Communication, detection, and radiation equipment"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"category"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"518ecbf0db40a51b0b000034"</span>
        </span>}
    ]</span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Update"</span></span>,
    "<span class="hljs-attribute">targets</span>": <span class="hljs-value">[
        {
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Receiver Transmitter"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"project"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"52a092fde3dd9054348b4567"</span>
        </span>}
    ]</span>,
    "<span class="hljs-attribute">timestamp</span>": <span class="hljs-value"><span class="hljs-string">"2014-05-20T11:05:00-0400"</span></span>,
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"activity"</span></span>,
    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"537b92226c5cc8fb188b4567"</span>
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span> : {
        <span class="hljs-string">"actors"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"minLength"</span> : <span class="hljs-number">1</span>,
            <span class="hljs-string">"uniqueItems"</span> : <span class="hljs-literal">true</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"An array of NTIs for the entities that are acting for this activity message"</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span> : <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span> : {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span> : {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span> : {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"actions"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"An array of action objects and resulting values"</span>,
            <span class="hljs-string">"items"</span> : {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"properties"</span> :
                {
                    <span class="hljs-string">"action"</span> : {
                        <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The action that occurred"</span>,
                        <span class="hljs-string">"enum"</span> : [<span class="hljs-string">"added"</span>, <span class="hljs-string">"addedAContact"</span>, <span class="hljs-string">"addedADecision"</span>, <span class="hljs-string">"addedADueDate"</span>, <span class="hljs-string">"addedANewSolicitationNumber"</span>, <span class="hljs-string">"addedASetAsideType"</span>, <span class="hljs-string">"addedASolicitationNumber"</span>, <span class="hljs-string">"addedASynopsis"</span>, <span class="hljs-string">"addedAwardValue"</span>, <span class="hljs-string">"addedFiles"</span>, <span class="hljs-string">"awarded"</span>, <span class="hljs-string">"awardedTo"</span>, <span class="hljs-string">"changedTheDueDate"</span>, <span class="hljs-string">"changedTheSetAsideType"</span>, <span class="hljs-string">"changedTheSynopsis"</span>, <span class="hljs-string">"changedTheWorkflowStatusTo"</span>, <span class="hljs-string">"issuedMultipleAwards"</span>, <span class="hljs-string">"named"</span>, <span class="hljs-string">"removedAContact"</span>, <span class="hljs-string">"removedTheDueDate"</span>, <span class="hljs-string">"removedTheSetAsideType"</span>, <span class="hljs-string">"renamed"</span>, <span class="hljs-string">"setTheProtestedProjectTo"</span>, <span class="hljs-string">"setTheProtestingPartyTo"</span>, <span class="hljs-string">"setTheWorkflowStatusTo"</span>, <span class="hljs-string">"updated"</span>]    
                    },
                    <span class="hljs-string">"value"</span> : {
                        <span class="hljs-string">"type"</span> : [<span class="hljs-string">"string"</span>, <span class="hljs-string">"boolean"</span>, <span class="hljs-string">"number"</span>],
                        <span class="hljs-string">"description"</span> : <span class="hljs-string">"The value associated with the action."</span>
                    }
                }

            }
        }, 
        <span class="hljs-string">"targets"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"minLength"</span> : <span class="hljs-number">1</span>,
            <span class="hljs-string">"uniqueItems"</span> : <span class="hljs-literal">true</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"An array of NTIs for the entities that are being acted upon for this activity message"</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span> : <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span> : {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span> : {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"enum"</span>: [<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"protest"</span>],
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span> : {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                }
            }
        },
        <span class="hljs-string">"timestamp"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The date this activity occurred"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"date-time"</span>
        },
        <span class="hljs-string">"name"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of the activity object."</span>,
            <span class="hljs-string">"enum"</span> : [<span class="hljs-string">"forecast"</span>, <span class="hljs-string">"posting"</span>, <span class="hljs-string">"update"</span>, <span class="hljs-string">"cancelation"</span>, <span class="hljs-string">"award"</span>, <span class="hljs-string">"protest"</span>, <span class="hljs-string">"obligation"</span>, <span class="hljs-string">"r
        },
        "</span><span class="hljs-built_in">type</span><span class="hljs-string">" : {
            "</span><span class="hljs-built_in">type</span><span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>The <span class="hljs-built_in">type</span> of the object. Namely activity<span class="hljs-string">"
        }
    }
}
</span></code></pre></li></ul></section><h4 id="activity-activity-feed">Activity Feed&nbsp;<a href="#activity-activity-feed"><i class="fa fa-link"></i></a></h4><p>Retrieving multiple activity objects for one or more entities produces an activity feed. This is accomplished by submitting an array of <code>_id</code> properties to the <code>feed</code> endpoint along with a optional since timestamp value. </p>
<p>For example, let’s say you are interested in seeing a year’s worth of contracting activity for the U.S. Department of Agriculture. For this example, you would submit the <code>_id</code> property of the USDA agency entity and a since of now-31556926 to the <code>feed</code> endpoint. </p>
<p>You can combine multiple <code>_id</code> properties in the submitted array to get an integrated activity feed for multiple entities. </p>
<p>For example, let’s say you are interested in seeing the contracting activity for 3 different person entities. For this example, you will submit the three <code>_id</code> strings (in an array) to the <code>feed</code> endpoint.</p>
<section id="activity-activity-feed-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve an Activity Feed</span></div><div style="float:left"><a href="#activity-activity-feed-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/activity/feed/{ids,since}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>ids</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>51548151db40a5165c0000d1,51c1d4dddb40a5298c79c740</span></span><p>one or more comma separated <code>id</code> strings for the desired entities.</p>
</dd><dt>since</dt><dd><code>number</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1399822866</span></span><p>the distance back in time for a particular call as seconds. Default is one year</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Activity</code></strong><a data-toggle="collapse" data-target="#2b74f2566e4b0807912f5e911d504b28" class="pull-right">Toggle</a></li><li id="2b74f2566e4b0807912f5e911d504b28" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#a6be9772be8b74ae2b1dc1dbc0a24739" class="pull-right">Toggle</a></li><li id="a6be9772be8b74ae2b1dc1dbc0a24739" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">results</span>": <span class="hljs-value">[
        {
            "<span class="hljs-attribute">actions</span>": <span class="hljs-value">[
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"updated"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"changedTheStatusTo"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"Award Notice"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"removedTheDueDate"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"awarded"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"addedAwardValue"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"$50,817.06"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"changedTheWorkflowStatusTo"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"Awarded"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"awardedTo"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value">[
                        <span class="hljs-string">"Mac Business Solutions Inc."</span>
                    ]
                </span>}
            ]</span>,
            "<span class="hljs-attribute">activityType</span>": <span class="hljs-value"><span class="hljs-string">"project"</span></span>,
            "<span class="hljs-attribute">actors</span>": <span class="hljs-value">[
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of Health and Human Services"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548150db40a5165c0000c6"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Food and Drug Administration"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"office"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51c1d621ca985fad34000076"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Office of Acquisitions and Grants Services"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"office"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51c1d621ca985fad34000077"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"General purpose information technology equipment"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"category"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"518ecbf0db40a51b0b00003c"</span>
                </span>}
            ]</span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Update"</span></span>,
            "<span class="hljs-attribute">targets</span>": <span class="hljs-value">[
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Apple Mac Pros"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"project"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"5373cae66c5cc89e1b8b4567"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Mac Business Solutions Inc."</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"vendor"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51e0671eca985fd31705c1e1"</span>
                </span>}
            ]</span>,
            "<span class="hljs-attribute">timestamp</span>": <span class="hljs-value"><span class="hljs-string">"2014-05-20T11:09:00-0400"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"activity"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"537b97ed6c5cc8fc258b4567"</span>
        </span>},
        {
            "<span class="hljs-attribute">actions</span>": <span class="hljs-value">[
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"added"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"named"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"Maintenance Agreement for a Tecan Infinite F500 Microplate Reader"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"setTheStatusTo"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"Sources Sought"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"addedADueDate"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"2014-05-27T14:00:00-0400"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"addedASolicitationNumber"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"FDA_14-223-SOL-1134480"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"addedFiles"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-number">1</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"setTheWorkflowStatusTo"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value"><span class="hljs-string">"Presolicitation"</span>
                </span>},
                {
                    "<span class="hljs-attribute">action</span>": <span class="hljs-value"><span class="hljs-string">"addedAContact"</span></span>,
                    "<span class="hljs-attribute">value</span>": <span class="hljs-value">[
                        <span class="hljs-string">"Yolanda T. Peer"</span>
                    ]
                </span>}
            ]</span>,
            "<span class="hljs-attribute">activityType</span>": <span class="hljs-value"><span class="hljs-string">"project"</span></span>,
            "<span class="hljs-attribute">actors</span>": <span class="hljs-value">[
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Department of Health and Human Services"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"agency"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51548150db40a5165c0000c6"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Food and Drug Administration"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"office"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51c1d621ca985fad34000076"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Office of Acquisitions and Grants Services"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"office"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51c1d621ca985fad34000077"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Yolanda T. Peer"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"person"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"51c2832dca985ff1380000d7"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Electronic Equipment Repair and Maintenance"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"category"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"518ecbf0db40a51b0b000109"</span>
                </span>},
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Maintenance, repair and rebuilding of equipment"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"category"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"518ecbf0db40a51b0b00005a"</span>
                </span>}
            ]</span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Posting"</span></span>,
            "<span class="hljs-attribute">targets</span>": <span class="hljs-value">[
                {
                    "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Maintenance Agreement for a Tecan Infinite F500 Microplate Reader"</span></span>,
                    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"project"</span></span>,
                    "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"537b98166c5cc89c268b4567"</span>
                </span>}
            ]</span>,
            "<span class="hljs-attribute">timestamp</span>": <span class="hljs-value"><span class="hljs-string">"2014-05-20T11:00:00-0400"</span></span>,
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"activity"</span></span>,
            "<span class="hljs-attribute">_id</span>": <span class="hljs-value"><span class="hljs-string">"537b98166c5cc89c268b4568"</span>
        </span>},
    ]</span>,
    "<span class="hljs-attribute">pagination</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">total</span>": <span class="hljs-value"><span class="hljs-number">7658</span></span>,
        "<span class="hljs-attribute">count</span>": <span class="hljs-value"><span class="hljs-number">50</span></span>,
        "<span class="hljs-attribute">perPage</span>": <span class="hljs-value"><span class="hljs-number">50</span></span>,
        "<span class="hljs-attribute">currentPage</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
        "<span class="hljs-attribute">totalPages</span>": <span class="hljs-value"><span class="hljs-number">154</span></span>,
        "<span class="hljs-attribute">links</span>": <span class="hljs-value">{
            "<span class="hljs-attribute">next</span>": <span class="hljs-value"><span class="hljs-string">"http://api.govtribe.com/activity/feed?page=2&amp;ids=51548150db40a5165c0000c6%2C51c1d621ca985fad34000077&amp;timestampRange=1369051836"</span>
        </span>}
    </span>}
</span>}
</code></pre><h5>Schema</h5><pre><code>{
    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An activity feed for one or more entities. Paginated and sorted by activity timestamp."</span></span>,
    "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
        "<span class="hljs-attribute">results</span>" : <span class="hljs-value">{
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
            "<span class="hljs-attribute">uniqueItems</span>" : <span class="hljs-value"><span class="hljs-literal">true</span></span>,
            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The activity objects for submitted set of entity IDs"</span></span>,
            "<span class="hljs-attribute">minLength</span>" : <span class="hljs-value"><span class="hljs-number">0</span></span>,
            "<span class="hljs-attribute">maxLength</span>" : <span class="hljs-value"><span class="hljs-number">50</span></span>,
            "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                    "<span class="hljs-attribute">actors</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                        "<span class="hljs-attribute">minLength</span>" : <span class="hljs-value"><span class="hljs-number">1</span></span>,
                        "<span class="hljs-attribute">uniqueItems</span>" : <span class="hljs-value"><span class="hljs-literal">true</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An array of NTIs for the entities that are acting for this activity message"</span></span>,
                        "<span class="hljs-attribute">items</span>": <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                            "<span class="hljs-attribute">title</span>" : <span class="hljs-value"><span class="hljs-string">"NTI"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span></span>,
                            "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the entity"</span>
                                </span>}</span>,
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>]</span>,
                                    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                                </span>}</span>,
                                "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                                </span>}
                            </span>}
                        </span>}
                    </span>}</span>,
                    "<span class="hljs-attribute">actions</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An array of action objects and resulting values"</span></span>,
                        "<span class="hljs-attribute">items</span>" : <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                            "<span class="hljs-attribute">properties</span>" :
                            <span class="hljs-value">{
                                "<span class="hljs-attribute">action</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The action that occurred"</span></span>,
                                    "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"added"</span>, <span class="hljs-string">"addedAContact"</span>, <span class="hljs-string">"addedADecision"</span>, <span class="hljs-string">"addedADueDate"</span>, <span class="hljs-string">"addedANewSolicitationNumber"</span>, <span class="hljs-string">"addedASetAsideType"</span>, <span class="hljs-string">"addedASolicitationNumber"</span>, <span class="hljs-string">"addedASynopsis"</span>, <span class="hljs-string">"addedAwardValue"</span>, <span class="hljs-string">"addedFiles"</span>, <span class="hljs-string">"awarded"</span>, <span class="hljs-string">"awardedTo"</span>, <span class="hljs-string">"changedTheDueDate"</span>, <span class="hljs-string">"changedTheSetAsideType"</span>, <span class="hljs-string">"changedTheSynopsis"</span>, <span class="hljs-string">"changedTheWorkflowStatusTo"</span>, <span class="hljs-string">"issuedMultipleAwards"</span>, <span class="hljs-string">"named"</span>, <span class="hljs-string">"removedAContact"</span>, <span class="hljs-string">"removedTheDueDate"</span>, <span class="hljs-string">"removedTheSetAsideType"</span>, <span class="hljs-string">"renamed"</span>, <span class="hljs-string">"setTheProtestedProjectTo"</span>, <span class="hljs-string">"setTheProtestingPartyTo"</span>, <span class="hljs-string">"setTheWorkflowStatusTo"</span>, <span class="hljs-string">"updated"</span>]    
                                </span>}</span>,
                                "<span class="hljs-attribute">value</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value">[<span class="hljs-string">"string"</span>, <span class="hljs-string">"boolean"</span>, <span class="hljs-string">"number"</span>]</span>,
                                    "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The value associated with the action."</span>
                                </span>}
                            </span>}

                        </span>}
                    </span>}</span>, 
                    "<span class="hljs-attribute">targets</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"array"</span></span>,
                        "<span class="hljs-attribute">minLength</span>" : <span class="hljs-value"><span class="hljs-number">1</span></span>,
                        "<span class="hljs-attribute">uniqueItems</span>" : <span class="hljs-value"><span class="hljs-literal">true</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"An array of NTIs for the entities that are being acted upon for this activity message"</span></span>,
                        "<span class="hljs-attribute">items</span>": <span class="hljs-value">{
                            "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
                            "<span class="hljs-attribute">title</span>" : <span class="hljs-value"><span class="hljs-string">"NTI"</span></span>,
                            "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span></span>,
                            "<span class="hljs-attribute">properties</span>" : <span class="hljs-value">{
                                "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The name of the entity"</span>
                                </span>}</span>,
                                "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">enum</span>": <span class="hljs-value">[<span class="hljs-string">"project"</span>, <span class="hljs-string">"agency"</span>, <span class="hljs-string">"office"</span>, <span class="hljs-string">"person"</span>, <span class="hljs-string">"vendor"</span>, <span class="hljs-string">"category"</span>, <span class="hljs-string">"protest"</span>]</span>,
                                    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The type of the entity"</span>
                                </span>}</span>,
                                "<span class="hljs-attribute">_id</span>" : <span class="hljs-value">{
                                    "<span class="hljs-attribute">type</span>":<span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                                    "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The unique ID for the entity"</span>
                                </span>}
                            </span>}
                        </span>}
                    </span>}</span>,
                    "<span class="hljs-attribute">timestamp</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The date this activity occurred"</span></span>,
                        "<span class="hljs-attribute">format</span>" : <span class="hljs-value"><span class="hljs-string">"date-time"</span>
                    </span>}</span>,
                    "<span class="hljs-attribute">name</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The Name of the activity object."</span></span>,
                        "<span class="hljs-attribute">enum</span>" : <span class="hljs-value">[<span class="hljs-string">"forecast"</span>, <span class="hljs-string">"posting"</span>, <span class="hljs-string">"update"</span>, <span class="hljs-string">"cancelation"</span>, <span class="hljs-string">"award"</span>, <span class="hljs-string">"protest"</span>, <span class="hljs-string">"obligation"</span>, <span class="hljs-string">"recompete"</span>, <span class="hljs-string">"announcement"</span>]
                    </span>}</span>,
                    "<span class="hljs-attribute">type</span>" : <span class="hljs-value">{
                        "<span class="hljs-attribute">type</span>" : <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
                        "<span class="hljs-attribute">description</span>" : <span class="hljs-value"><span class="hljs-string">"The type of the object. Namely activity"</span>
                    </span>}
                </span>}
            </span>}
        </span>}
    </span>}
</span>}    
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="protest">Protest&nbsp;<a href="#protest"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="protest-protest">Protest&nbsp;<a href="#protest-protest"><i class="fa fa-link"></i></a></h4><p>The laws and regulations that govern contracting with the federal government are designed to ensure that federal procurements are conducted fairly and, whenever possible, in a way that maximizes competition. On occasion, however, bidders or others interested in government procurements may have reason to believe that a contract has been or is about to be awarded improperly or illegally, or that they have been unfairly denied a contract or an opportunity to compete for a contract. </p>
<p>A major avenue of relief for those concerned about the propriety of an award has been the General Accounting Office, which for almost 75 years has provided an objective, independent, and impartial forum for the resolution of disputes concerning the awards of federal contracts.</p>
<p>Each of these disputes is a protest object.</p>
<section id="protest-protest-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve a Single Protest</span></div><div style="float:left"><a href="#protest-protest-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/protest/{_id}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>_id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>5359397fdb40a5238000621e</span></span><p>String <code>id</code> of the desired protest entity.</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Vendor</code></strong><a data-toggle="collapse" data-target="#e0ce1d8fbbddd4cfaa5881268d5023a9" class="pull-right">Toggle</a></li><li id="e0ce1d8fbbddd4cfaa5881268d5023a9" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#dde84e1910cc13ed377cd7fe26a942b2" class="pull-right">Toggle</a></li><li id="dde84e1910cc13ed377cd7fe26a942b2" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code>{
    agencies: [
        {
            name: <span class="hljs-string">"Department of the Air Force"</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"agency"</span>,
            _id: <span class="hljs-string">"51548151db40a5165c0000ce"</span>
        }
    ],
    decision: <span class="hljs-string">"Not Available"</span>,
    decisionURI: <span class="hljs-string">"http://www.gao.gov/docket/B-409297.1"</span>,
    name: <span class="hljs-string">"CACI International Inc. vs. Department of the Air Force"</span>,
    offices: <span class="hljs-string">"None Listed"</span>,
    people: [
        {
            name: <span class="hljs-string">"Paula J. Haurilesko"</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"person"</span>,
            _id: <span class="hljs-string">"5202dd79db40a59c28938516"</span>
        }
    ],
    projects: [
        {
            name: <span class="hljs-string">"Air Force Central (AFCENT) is seeking sponsorship for a Firefighter Challenge in Kuwait."</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"project"</span>,
            _id: <span class="hljs-string">"51f73802ca985f502f000123"</span>
        }
    ],
    protesters: [
        {
            name: <span class="hljs-string">"CACI International Inc."</span>,
            <span class="hljs-built_in">type</span>: <span class="hljs-string">"vendor"</span>,
            _id: <span class="hljs-string">"51ed4c84ca985f3b0900000b"</span>
        }
    ],
    status: <span class="hljs-string">"Dismissed"</span>,
    timestamp: <span class="hljs-string">"2013-11-25T16:59:46-0500"</span>,
    <span class="hljs-built_in">type</span>: <span class="hljs-string">"protest"</span>,
    _id: <span class="hljs-string">"5359397fdb40a5238000621e"</span>
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"_id"</span> : {
            <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the protest"</span>
        },
        <span class="hljs-string">"timestamp"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The date for the last time the protest was active"</span>,
            <span class="hljs-string">"format"</span> : <span class="hljs-string">"date-time"</span>
        },
        <span class="hljs-string">"name"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name of a protest. Constructed as entity v entity"</span>
        },
        <span class="hljs-string">"type"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The type of the entity"</span>,
            <span class="hljs-string">"enum"</span> : <span class="hljs-matrix">[<span class="hljs-string">"protest"</span>]</span>
        },
        },
        <span class="hljs-string">"status"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"The status of the protest"</span>,
            <span class="hljs-string">"enum"</span> : <span class="hljs-matrix">[<span class="hljs-string">"Withdrawn"</span>, <span class="hljs-string">"Denied"</span>, <span class="hljs-string">"Sustained"</span>, <span class="hljs-string">"Dismissed"</span>]</span>
        },
        <span class="hljs-string">"decisionURI"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Link to the decision on GAO'</span>s website<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>A link to the decision<span class="hljs-string">",
                "</span>format<span class="hljs-string">" : "</span>uri<span class="hljs-string">"
            }
        },
        "</span>decision<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
            "</span>description<span class="hljs-string">" : "</span>Text of the decision<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>string<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>Text of the decision<span class="hljs-string">",
            }
        },
       "</span>agencies<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> all agencies related to this person<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> a n agency<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name of the agency<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>agency<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type of the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The unique ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }
                }
            }
        },
        "</span>offices<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> all offices related to this person<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> an office<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name of the office<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>office<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type of the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The unique ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }
                }
            }
        },
        "</span>people<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> people related to the <span class="hljs-transposed_variable">protest.</span> Typically GAO <span class="hljs-transposed_variable">attorneys.</span><span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> a person<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name of the person<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The type of the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The unique ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }
                }
            }
        },
        "</span>protesters<span class="hljs-string">" : {
            "</span>type<span class="hljs-string">" : "</span>array<span class="hljs-string">"
            "</span>description<span class="hljs-string">" : "</span>The NTIs <span class="hljs-keyword">for</span> all protesters related to this protest<span class="hljs-string">",
            "</span>items<span class="hljs-string">" : {
                "</span>type<span class="hljs-string">" : "</span>object<span class="hljs-string">",
                "</span>description<span class="hljs-string">" : "</span>An NTI <span class="hljs-keyword">for</span> an entity<span class="hljs-string">",
                "</span>properties<span class="hljs-string">": {
                    "</span>name<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>description<span class="hljs-string">": "</span>The name of the entity<span class="hljs-string">"
                    },
                    "</span>type<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">",
                        "</span>enum<span class="hljs-string">": ["</span>agency<span class="hljs-string">", "</span>vendor<span class="hljs-string">"],
                        "</span>description<span class="hljs-string">": "</span>The type of the entity<span class="hljs-string">"
                    },
                    "</span>_id<span class="hljs-string">": {
                        "</span>type<span class="hljs-string">":"</span>string<span class="hljs-string">"
                        "</span>description<span class="hljs-string">": "</span>The unique ID <span class="hljs-keyword">for</span> the entity<span class="hljs-string">"
                    }
                }
            }
        }
    }
}
</span></code></pre></li></ul></section><h4 id="protest-search-protests">Search Protests&nbsp;<a href="#protest-search-protests"><i class="fa fa-link"></i></a></h4><p>Find a protest by…</p>
<section id="protest-search-protests-get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Retrieve Protest Search Results</span></div><div style="float:left"><a href="#protest-search-protests-get" class="btn btn-xs btn-primary">GET</a></div><div style="overflow:hidden"><code>/protest/search/{?q}</code></div></div><ul class="list-group"><li class="list-group-item bg-default"><strong>Parameters</strong></li><li class="list-group-item"><dl class="dl-horizontal"><dt>q</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Challenge</span></span><p>The string with which we will query the protests</p>
</dd></dl></li></ul><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>Search Protests</code></strong><a data-toggle="collapse" data-target="#b9ec1b71beb4968501d82557cdbcf6d7" class="pull-right">Toggle</a></li><li id="b9ec1b71beb4968501d82557cdbcf6d7" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-API-Key</span>: <span class="hljs-string">yourAPIKey</span><br></code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#0ab8f796f365a8d49b4995858b2567fc" class="pull-right">Toggle</a></li><li id="0ab8f796f365a8d49b4995858b2567fc" class="list-group-item panel-collapse collapse"><div class="description"></div><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">X-GT-Rate-Limit</span>: <span class="hljs-string">1000</span><br><span class="hljs-attribute">X-GT-Rate-Limit-Remaining</span>: <span class="hljs-string">999</span><br><span class="hljs-attribute">X-GT-API-Version</span>: <span class="hljs-string">3.0</span><br><span class="hljs-attribute">X-GT-Response-Time</span>: <span class="hljs-string">0.181 sec</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-rules">{
    <span class="hljs-rule"><span class="hljs-attribute">results</span>:<span class="hljs-value"> [
        {
            name: <span class="hljs-string">"CACI International Inc. vs. Department of the Air Force"</span>,
            type: <span class="hljs-string">"protest"</span>,
            _id: <span class="hljs-string">"5359397fdb40a5238000621e"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Kingdomware Technologies vs. Millennium Challenge Corporation"</span>,
            type: <span class="hljs-string">"protest"</span>,
            _id: <span class="hljs-string">"53593771db40a523800056e9"</span>
        </span></span></span>},
        <span class="hljs-rules">{
            <span class="hljs-rule"><span class="hljs-attribute">name</span>:<span class="hljs-value"> <span class="hljs-string">"Focused Management Inc. vs. Millennium Challenge Corporation"</span>,
            type: <span class="hljs-string">"protest"</span>,
            _id: <span class="hljs-string">"5359374ddb40a52380005621"</span>
        </span></span></span>}
    ],
    <span class="hljs-tag">pagination</span>: <span class="hljs-rules">{
        <span class="hljs-rule"><span class="hljs-attribute">total</span>:<span class="hljs-value"> <span class="hljs-number">3</span>,
        count: <span class="hljs-number">3</span>,
        perPage: <span class="hljs-number">50</span>,
        currentPage: <span class="hljs-number">1</span>,
        totalPages: <span class="hljs-number">1</span>,
        links: [ ]
    </span></span></span>}
}
</code></pre><h5>Schema</h5><pre><code>{
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
    <span class="hljs-string">"properties"</span>: {
        <span class="hljs-string">"pagination"</span> : {
            <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
            <span class="hljs-string">"description"</span> : <span class="hljs-string">"Information about paging through the returned results."</span>,
            <span class="hljs-string">"properties"</span> : {
                <span class="hljs-string">"total"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of results available"</span>
                },
                <span class="hljs-string">"count"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned on this page"</span>
                },
                <span class="hljs-string">"perPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number returned per page"</span>
                },
                <span class="hljs-string">"currentPage"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The page number you are currently on"</span>
                },
                <span class="hljs-string">"totalPages"</span> : {
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"number"</span>,
                    <span class="hljs-string">"description"</span> : <span class="hljs-string">"The total number of pages available"</span>
                },
                <span class="hljs-string">"links"</span> { 
                    <span class="hljs-string">"type"</span> : <span class="hljs-string">"object"</span>,
                    <span class="hljs-string">"properties"</span> : {
                        <span class="hljs-string">"previous"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the previous page"</span>
                        },
                        <span class="hljs-string">"next"</span> : {
                            <span class="hljs-string">"type"</span> : <span class="hljs-string">"string"</span>,
                            <span class="hljs-string">"format"</span> : <span class="hljs-string">"uri"</span>,
                            <span class="hljs-string">"description"</span> : <span class="hljs-string">"A uri for the next page"</span>
                        }
                    }
                }
            }
        },
        <span class="hljs-string">"results"</span>: {
            <span class="hljs-string">"type"</span>: <span class="hljs-string">"array"</span>,
            <span class="hljs-string">"uniqueItems"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"minItems"</span> : <span class="hljs-number">0</span>,
            <span class="hljs-string">"maxItems"</span> : <span class="hljs-number">50</span>,
            <span class="hljs-string">"items"</span>: {
                <span class="hljs-string">"type"</span>: <span class="hljs-string">"object"</span>,
                <span class="hljs-string">"title"</span>: <span class="hljs-string">"NTI"</span>,
                <span class="hljs-string">"description"</span> : <span class="hljs-string">"The name, type, and ID of an entity. Commonly referred to as an NTI"</span>,
                <span class="hljs-string">"properties"</span>: {
                    <span class="hljs-string">"name"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The name of the entity"</span>
                    },
                    <span class="hljs-string">"type"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The type of the entity"</span>
                    },
                    <span class="hljs-string">"_id"</span>: {
                        <span class="hljs-string">"type"</span>:<span class="hljs-string">"string"</span>,
                        <span class="hljs-string">"description"</span>: <span class="hljs-string">"The unique ID for the entity"</span>
                    }
                },
                <span class="hljs-string">"required"</span>:[<span class="hljs-string">"name"</span>, <span class="hljs-string">"type"</span>, <span class="hljs-string">"_id"</span>]
            },
            <span class="hljs-string">"required"</span>: [<span class="hljs-string">"pagination"</span>, <span class="hljs-string">"results"</span>]     
        }
    }
}
</code></pre></li></ul></section></div></div></div></div></div></div><p style="text-align: center;" class="text-muted">Copyright 2014 &nbsp;<a href="http://www.govtribe.com" class="aglio">GovTribe, Inc &nbsp;</a>- &nbsp;<a href="http://api.govtribe.com/legal" class="aglio">Legal</a></p><div id="localFile" style="display: none; position: absolute; top: 0; left: 0; width: 100%; color: white; background: red; font-size: 150%; text-align: center; padding: 1em;">This page may not display correctly when opened as a local file. Instead, view it from a web server.

</div></body><script src="//code.jquery.com/jquery-1.11.0.min.js"></script><script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script>(function() {
  if (location.protocol === 'file:') {
    document.getElementById('localFile').style.display = 'block';
  }

}).call(this);
</script><script>(function() {
  $('table').addClass('table');

}).call(this);
</script><script>(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-35493497-2');ga('send','pageview');</script></html>