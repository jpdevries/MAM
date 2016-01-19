<?php include '../functions.php';get_header('./../'); ?>
<script>
  var MODx = {
      resource:{id:'14'},
      tree:{branch:'9'}
  };
</script>
  <script src="assets/js/vendor/rainbow-custom.min.js" type="text/javascript"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
            
        <!-- Add your site or application content here -->
        <section id="above-fold" style="top:-15em"><!-- PHP:set this to (-8 -2 - $('#resource-view-body > tr').length)em -->
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
                                        <pre title="Imagine this is interactive, terminal like with tab-to-complete">/web/posts/</pre>
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
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/getresources-tutorial.php" title="ID: 10; Published">getResources Tutorial</a></td>
                                            <td>Learn how the hyper&ndash;accessible getResources component is crafted</td>
                                            <td><time>15 days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/js-drivers.php" title="ID: 11; Published">js-drivers</a></td>
                                            <td>A wild idea to free the Manager from the confinements of any front end framework at all</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/orphans.php" title="ID: 12; Published">Adopting Orphans</a></td>
                                            <td>A simple use of the &amp;nbsp; entity</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/speakable-titles.php" title="ID: 13; Published">Speakable Components</a></td>
                                            <td>Learn how to make your pages talk with speakable.jquery.js</td>
                                            <td><time>Yesterday</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/sticky-uberbar.php" title="ID: 14; Published"><strong>Sticky Uberbar</strong></a></td>
                                            <td>Behind the scenes of the Sticky Uberbar component</td>
                                            <td><time>3 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/accessible-todo.php">To&ndash;Do List Tutorial</a></td>
                                            <td>Behind the scenes of the To&ndash;Do List component</td>
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
<?php get_play_controls(); ?>
<?php get_main_nav(); ?>
            </div>
        </section>
        <div id="sticky-uberbar" class="speakable page-wrapper" data-transcript="sticky-uberbar" style="padding-bottom:6em">
            <section style="margin-top:1em">
                <header class="dashbox">
                    <div class="shell shell-legible shell-readme">
                        <div class="box">
                                                    <h1 style="text-transform:none"><i class="fa fa-search clickable speaker-btn"></i><br>Sticky Uberbar<code class="subtle" style="position:absolute;top:0;right:0;opacity:1"><a href="http://twitter.com/MODX" target="_blank" title="Follow MODX on Twitter">#MODX</a></code></h1>
                                                    <p>
                                                        Those accustomed to <code>MODX 2.x</code> don't need to be reminded of the tree. The <a><code>ExtJS</code> tree components</a> serve as a main action area for creating and managing resources and <code>Elements</code> alike. How could we ever replace them? The task of somehow replicating the functionality of the tree in a mobile first and responsive way troubled me until I just couldn't stand it; there has to be a simple solution here. After spending some time searching through my <code>HTML5/CSS3</code> toolbox and bashing my head against the keyboard I just turned the computer off and gave&nbsp;up&hellip;</p>
                            <aside class="subtle smaller unaligned lowercase unspeakable"><i class="fa fa-clock-o"></i><br>This post is a quick read but can be <a id="listened-to-as-well" class="apparent-link">listened to</a> as&nbsp;well</aside>
                        </div>
                    </div>
                </header>
                <div class="dashbox">
                    <div class="shell shell-legible shell-readme">
                        <div class="box legible">
                            <p>Later doing some sketches <i>on&nbsp;paper</i> I realized <code>position:sticky</code> could be the awesome-sauce I'd been looking&nbsp;for. <span class="untouchable">Let's have a look at the <code>Dashboard</code> page all squashed up in an <code>iframe</code> as an example below.</span> <small style="display:block" class="unaligned untouchable unspeakable">(psssst&hellip;you can probably <span class="untouchable">just </span>scroll down on this page for&nbsp;stickiness&nbsp;:p)</small>
                                                    </p>
                                                    <figure class="untouchable">
                                                        <iframe src="./index.php?hc=1#focus" style="min-height:42em;width:100%"></iframe>
                                                        <figcaption><code>Dashboard</code> Concept in an high contrast mode. Scroll up and then back down within the <code>iframe</code> to see&nbsp;effect.</figcaption>
                                                    </figure>
                                                    <p style="margin-top:2em">Notice that our search bar is always present but when we scroll to the top of the page it "un-sticks" itself making way for the contextual navigation above. How <strike class="unspeakable">cool</strike> sticky is that? I had been looking for a way to allow a tree&ndash;link navigational component to always be within reach. One of the challenges of mobile first design, is you are generally confined to a one&ndash;column layout. That's ok though, because with a little creative use of <code>position:sticky</code> and anchor links we can do just that. The concept is simple, we put what we want to be at the top of the page <i>further below</i>. Anything above this threshold is considered contextual and scrolled beyond. This design pattern of simulating a negative y-axis originated from mobile design when we saw features like the ability to scroll up to a hidden component such as a search bar. Designing  mobile&ndash;first we limit ourselves to one big column, but we don't always have to start our users off at <a href="javascript:window.scrollTo(0,0)"><code>document.body.ScrollTop = 0;</code></a> </p>
<p>We can stash useful stuff out of the way by scrolling right passed it; or most of it that is. We always want our <code>#main-nav</code> to be accessible so we'll make it stick to to the top. 
                                                    
                                                        Appending <code>#focus</code> to our links will tell the browser to scroll straight to the main content area. So how does the search bar always stay viewable by sticking to the top when it is scrolled&nbsp;beyond?
                                                    </p>
                                                    <pre class="rainbow-block unspeakeable"><code data-language="css">#above-fold {
  position:sticky;
  position:-webkit-sticky; #vendor prefix
  top:-22.75em; /* ((0-(60+(24*(n+2))+16))/16)em */
}</code></pre>

<p>With <code>CSS3</code> <code>position:sticky</code> we can achieve our desired effect but <i>how</i> do we know where how to calculate the top value? Our table component changes height as it is updated <code>:/</code>. So, how do we support this change in height? I've been unable to do this strictly in the stylesheet; the top value has to be calculated manually using a like <code>PHP</code> and/or <code>JavaScript</code>.</p>
<h5><code>.no-js</code> support</h5>
<pre class="rainbow-block unspeakeable"><code data-language="html">&lt;section id=&quot;above-fold&quot; style=&quot;top:-22.75em&quot;&gt;
&lt;!-- PHP:set top to ((0-(60+(24*(n+2))+16))/16) in em units
where n is $(&#x27;#resource-view-body &gt; tr&#x27;).length --&gt;    
</code></pre><br>
<h5><code>.js</code> support</h5>
<pre class="rainbow-block unspeakeable"><code data-language="js">window.addEventListener('resource_view__stateSet',function(){
  $('#above-fold').each(function(){
    $(this).css('top',
      ((0-(60+(24*(($('#resource-view-body > tr').length)+2))+16))/16).toString() + 'em'
    );
    });
});</code></pre>

<p>Whenever the <code>React.js</code> driver used in this example is done updating the view it let lets us know by invoking a <code>resource_view__stateSet</code> event. It feels kind of hacky to have to listen to an update event from our <a href="posts/js-drivers.php" class="apparent-link"><code>.js-driver</code></a>, do some math, and update the&nbsp;view. That said, this is a pretty <strike>slick</strike> sticky component for just a little math&nbsp;homework.</p>
    
                                                    <p>In <a>supported browsers</a> the <code>#above-fold</code> will <strong>refuse to hide</strong> by sticking itself top the top of the page once the first <code>11em</code> have been scrolled past. We arrive at this <code>Nem</code> calculation by <strike>measuring the distance between the top of <code>#main-nav</code> and the top of the window</strike> passing the number of resources shown in the table to the algorithm above. <strike>This means that we have to know how tall our hide-able parts of the components are going to be and if they change at runtime manually update the <code>top</code> value.</strike></p>
                                                    <h3>Conclusion</h3>
                                                    <p>Pretty <strike class="unspeakable">slick</strike> sticky eh? What do you think, could you see yourself using this on a project? <a href="mailto:jp@modmore.com?subject=Sticky%20Uberbar" class="apparent-link">Let us know</a>.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php get_footer(''); ?>
<script>
    $(document).ready(function(){
        
        $('#listened-to-as-well').on('click',function(event){
            event.preventDefault();
            event.stopPropagation();
            $('.speaker-btn').first().click();
            //$('#manifesto').data('plugin_speakable').yourOtherFunction();
        });
    });
</script>
</body></html>
