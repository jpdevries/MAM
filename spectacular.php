<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'7'},
      tree:{branch:'0'}
  };
</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <section id="above-fold" style="top:-22.75em"><!-- PHP:set this to ((0-(60+(24*(n+2))+16))/16) in em units where n is $('#resource-view-body > tr').length -->
            <div class="page-wrapper">
<?php get_settings_nav(); ?>
                <div class="resources">
                    <div data-title="Imagine this is a tree-like navigation component for traversing and browsing contexts">
<div id="resource-view">
                            <div id="resource-view-reactable">
                                <h4>
                                    <a href="#" title="Switch to another Context"><i class="fa fa-globe"></i></a>&nbsp;
                                    Resources
                                    <div class="codepath">
                                        <a href="#" class="preview" title="Preview this Document"><i className="fa fa-eye"></i></a>
                                        <pre title="Imagine this is interactive, terminal like with tab-to-complete">/web/</pre>
                                    </div>
                                </h4>
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <thead>
                                        <tr>
                                            <th>Resource</th>
                                            <th>Intro Text</th>
                                            <th>Last Edited</th>
                                        </tr>
                                    </thead>
                                    <tbody id="resource-view-body">
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Context Settings Concept"></i>&nbsp;<a href="#" title="ID: 2; Published">Context Settings Concept</a></td>
                                            <td>Mobile&ndash;first concept for editing Contexts</td>
                                            <td><time>15 days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Dashboard Concept"></i>&nbsp;<a href="#" title="ID: 1; Published">Dashboard Concept</a></td>
                                            <td>Just Imagine if your Manager was like this</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="MAM Manifesto"></i>&nbsp;<a href="#" title="ID: 3; Published">MAM Manifesto</a></td>
                                            <td>Read the public declaration for MAM by JP DeVries</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="README"></i>&nbsp;<a href="#" title="ID: 4; Published">README</a></td>
                                            <td>Contribution Guidelines</td>
                                            <td><time>Yesterday</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Resource Edit Concept"></i>&nbsp;<a href="#" title="ID: 5; Published">Resource Edit Concept</a></td>
                                            <td>Concept for editing Resources</td>
                                            <td><time>3 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Resource Edit Concept"></i>&nbsp;<a href="#" title="ID: 16; Published">Resources</a></td>
                                            <td>Concept for browsing resources</td>
                                            <td><time>3 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Settings Page Concept"></i>&nbsp;<a href="#" title="ID: 6; Published">Settings Page Concept</a></td>
                                            <td>Quickly&ndash;Editable Settings Concept</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Spectacular Docs"></i>&nbsp;<a href="#" title="ID: 7; Published"><strong>Spectacular Docs</strong></a></td>
                                            <td>Some Sass</td>
                                            <td><time>Yesterday</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Users Page Concept"></i>&nbsp;<a href="#" title="ID: 8; Published">Users Page Concept</a></td>
                                            <td>Editing Users could be similar to settings</td>
                                            <td><time>4 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-folder" title="Posts"></i>&nbsp;<a href="#" title="ID: 9; Published">Posts</a></td>
                                            <td>We've written some stuff</td>
                                            <td><time>Yesterday</time></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav class="grid-nav">
                                <a href="resource-edit.php" title="Add a new Resource under the root Web Context"><i class="fa fa-plus-square"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
<?php get_main_nav(); ?>
            </div>
        </section>
        <div class="page-wrapper" style="padding-bottom:6em">
            <div class="dashbox">
                <div class="shell shell-readme">
                    <div class="box">
                        <h1 style="text-transform:none"><i class="fa fa-magic"></i><br>spectacular</h1>
                        
                        <h3><i class="fa fa-child"></i>&nbsp;About <code>spec/_tacular.scss</code></h3>
                        <p>
                            <code>spec/_tacular.scss</code> is a silent <code class="sass">Sass</code> utility class by @jpdevries. It adds no initial weight to your project, but gives you some <span class="acronym" title="Do Not Repeat Yourself">DRY</span> best practices.
                        </p>
                        <hr>
                        <h3>Breakpoints</h3>
                        <pre><code>
$desktop: max-width 990px 12 !default;
$cinema: max-width 1400px 12 !default;
$iphoneP: max-width 480px 4 !default;
$mobile: max-width 640px 4 !default;
$tabletP: max-width 768px 12 !default;
$tabletL: max-width 1024px 12 !default; 

$gtDesktop: min-width 991px 12 !default;
$gtCinema: min-width 1401px 12 !default;
$gtiphoneP: min-width 481px 4 !default;
$gtMobile: min-width 641px 12 !default;
$gtTabletP: min-width 769px 12 !default;
$gtTabletL: min-width 1025px 12 !default;

/*
.my-thing {
  @include media($gtMobile) {
    float:left;
  }
}
*/
</code></pre>
<hr>
<h3>Default Variables</h3>
<table>
    <thead>
        <tr style="text-align:left">
            <th><code>variable</code></th>
            <th><code>default</code></th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <code>$topMost</code>
            </td>
            <td>
                <code>99999</code>
            </td>
            <td>
                Highest <code>z-index</code> used
            </td>
        </tr>
        <tr>
            <td>
                <code>$too-wide</code>
            </td>
            <td>
                <code>em(1200)</code>
            </td>
            <td>
                When our art&ndash;director says things get too wide
            </td>
        </tr>
    </tbody>
</table>
<hr>
<h3>Silent Classes</h3>
<p>We use <a href="#" class="apparent-link" target="_blank">silent classes</a> to prevent duplication when using the <i>same styles</i>. Silent classes are great, but there is one exception. They cannot be used within <code>@media</code> queries. Say what? To remedy this, all silent classes are bootstrapped with mixins of the same name.</p>


<dl>
    <dt><h4 class="emphatic"><code>%greedy</code>&emsp;&emsp;<code><span class="subtle">// @include greedy;</span></code></h4></dt>
    <dd><p>Sets elements to be <code>100%</code> of their container width with the exception they will become selfless at the <code>$too&ndash;wide</code>&nbsp;breakpoint.</p></dd>
    
    <dt><h4 class="emphatic"><code>%very-greedy</code>&emsp;&emsp;<code><span class="subtle">// @include very-greedy;</span></code></h4></dt>
    <dd><p><code>%greedy</code> but with no exceptions.</p></dd>
    
    <dt><h4 class="emphatic"><code>%code</code>&emsp;&emsp;<code><span class="subtle">// @include code;</span></code></h4></dt>
    <dd><p><code>%code</code> applies <code>font-family: monospace, serif;</code></p></dd>

    <dt><h4 class="emphatic"><code>%clickable</code>&emsp;&emsp;<code><span class="subtle">// @include clickable;</span></code></h4></dt>
    <dd><p><code>%clickable</code> applies <code>cursor:pointer;</code></p></dd>

    <dt><h4 class="emphatic"><code>%smallcaps</code>&emsp;&emsp;<code><span class="subtle">// @include smallcaps;</span></code></h4></dt>
    <dd><p><code>%smallcaps</code> Bolds and capitalizes type. Slight downsizes.<br><span class="smallcaps">smallcaps</span></p></dd>

    <dt><h4 class="emphatic"><code>%lightcaps</code>&emsp;&emsp;<code><span class="subtle">// @include lightcaps;</span></code></h4></dt>
    <dd><p><code>%lightcaps</code> is a lighter version of %smallcaps.</code><br><span class="lightcaps">lightcaps</span></p></dd>
    
    <dt><h4 class="emphatic"><code>%contained</code>&emsp;&emsp;<code><span class="subtle">// @include contained;</span></code></h4></dt>
    <dd><p><code>%contained</code> applies <code>max-width:100%;</code> to ensure elements don't outgrow their container</p></dd>
    
    <dt><h4 class="emphatic"><code>%vulnerable</code>&emsp;&emsp;<code><span class="subtle">// @include vulnerable;</span></code></h4></dt>
    <dd><p><code>%vulnerable</code> applies <code>margin:0;</code> to clear all margins</p></dd>
</dl>
<hr>
<h3>Mixins</h3>
<p>In addition to the bootstraps for the silent classes mentioned above we think you'll find the following mixins useful.</p>
<h4 class="emphatic"><code>pretty-table</code></h4>
<p>Makes tables pretty with supported display properties via supplying an optional <code>$props</code> <code>map</code>. Usage:</p>
<pre><code>table {
  @include pretty-table();
}</code></pre>
<p>Or to customize the look and feel:</p>
<pre><code>table {
  @include pretty-table((
  tablePadding:0 0.2em 0.2em 0.2em,
  gutter:1em,
  paddingTop:1em,
  paddingBottom:0.6em,
  border:1px solid darken(rgb(240,240,240),12%),
  borderRadius:0.5em,
  trOdd:null,
  trEven:(
    background:rgb(240,240,240),
    border-top:1px solid darken(rgb(240,240,240),12%),
    border-bottom:1px solid darken(rgb(240,240,240),12%)
));
}</code></pre>




                    </div>
                </div>
            </div>

        </div>
<script>
[].map.call(document.querySelectorAll('.toggle-contrast'), function(el){
    el.classList.add('clickable');
    el.addEventListener('click',function(e){
        e.preventDefault();
        document.body.classList.toggle('inverted');
    });
});
</script>
<?php get_footer(); ?>
</body></html>
