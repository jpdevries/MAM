<?php include '../functions.php';get_header('./../'); ?>
<script>
  var MODx = {
      resource:{id:'11'},
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
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/js-drivers.php" title="ID: 11; Published"><strong>js-drivers</strong></a></td>
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
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/sticky-uberbar.php" title="ID: 14; Published">Sticky Uberbar</a></td>
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
        <div id="js-drivers" class=" page-wrapper" data-transcript="js-drivers" style="padding-bottom:6em">
            <section class="speakable" style="margin-top:1em">
                <header class="dashbox">
                    <div class="shell shell-legible shell-readme">
                        <div class="box">
                                                    <h1 style="text-transform:none"><i class="fa fa-cubes clickable speaker-btn"></i><br>js&ndash;drivers<code class="subtle unspeakable" style="position:absolute;top:0;right:0;opacity:1">#js&nbsp;<a href="http://twitter.com/MODX" target="_blank">#MODX</a></code></h1>
<p>The <code data-enunciate="mod ex">MODX</code> project has been successful in providing web designers and developers alike the creative freedom they desire to author amazing experiences. However, it has yet to provide us with the manager experience of our dreams.</p>

<p>The <code data-enunciate="mod ex">MODX 3.x</code> roadmap is beginning to unfold, but little is known about any official plans for &#8220;what&#8221; front end tools will be &#8220;chosen&#8221;. I used to ponder this recursively; until I realized <i>maybe</i> there is no need&nbsp;to.</p>
<aside class="subtle smaller unaligned lowercase unspeakable"><i class="fa fa-clock-o"></i><br>This post is about a 5 minute read but can be <a id="listened-to-as-well" class="apparent-link">listened&nbsp;to</a>&nbsp;as&nbsp;well</aside>
</aside>
                                                    
                        </div>
                    </div>
                </header>
                <div class="dashbox">
                    <div class="shell shell-legible shell-readme">
                        <div class="box">
                            <p>No matter how brilliant your <code>PHP</code> is, you can't start off with a blank page, cross your fingers, let scripts <code>DOM</code> for you and expect it to be accessible. Or standard. Or future proof. Or likely even a very good user experience. You just <a href="http://a11y.modx.com" target="_blank" class="apparent-link"><i>can't</i></a>.</p>
                            <!--blockquote class="unspeakable">
                                &#8220;agno4itu8h234805709[rjewklnf/laktqp45uq240[5rup'aEMf;]]<br>Sorry; I just lifted my head from the keyboard&#8221;<br>
                                &mdash;&emsp;@jpdevries
                            </blockquote-->
                            <p style="margin-bottom:0">The <code data-enunciate="mod ex">MODX</code> backend is powered by industry&ndash;leading <code>PHP</code>&nbsp;software.</p>
                            <dl>
                                <dt>
                                    <code><strong>PHP:</strong></code>
                                </dt>
                                <dd>Hypertext Preprocessor</dd>
                            </dl>
                            <p>Sure, it is problematic that &#8220;People who use assistive technology such as screen readers, enlarged fonts and alternate input devices were never really considered&#8221; but the root issue is that neither was&nbsp;hypertext:</p>
                            <figure>
                                <img class="unaligned" src="http://cl.ly/image/0R1m272H0o0g/Screen%20Shot%202015-02-28%20at%202.17.32%20PM.png">
                                <figcaption><code>MODX 2.3.3</code> raw <code>HTML</code> is inaccessible&nbsp;<i class="fa fa-thumbs-o-down"></i></figcaption>
                            </figure>
                            <h3 style="margin-top:2em">Where's the <i>hypertext</i>?</h3>
                            <p>We must ask ourselves if the interfaces our users interact with are worth authoring character&ndash;by&ndash;character ourselves the same way we template amazing <code data-enunciate="mod ex">MODX</code>&nbsp;sites while having an informed discussion about <i>what accessibility is</i> according to the <a href="http://www.w3.org/TR/WCAG10/" class="apparent-link" target="_blank">WCAG&nbsp;Guidelines</a>.
                            <blockquote>
                                &#8220;Ensure that pages are usable when scripts, applets, or other programmatic objects are turned off or not&nbsp;supported.&#8221;<br><br>
                                &mdash;&emsp;<a href="http://www.w3.org/TR/WCAG10/#gl-new-technologies" >WCAG <small class="smallcaps">1.0</small> Guideline 6</a>
                            </blockquote>
                                <!--hr-->
                            <p>Regardless of the fact that <i>practically all devices</i> have <code>JavaScript</code> we are having&ndash;a&ndash;go at bringing creative freedom to our concepts by tracing our technology stack back to the ubiquity of standard markup. It's the only way not to assume too much. When we work markup first everything else false into place. We know that accessibility <a href="http://www.456bereastreet.com/archive/201005/accessibility_does_not_prevent_you_from_using_javascript_or_flash/" class="apparent-link" target="_blank">does not prevent you</a> from using <code>JavaScript</code> but it does require you to think about what happens when support is missing. No problem; after all, isn't authoring <code>HTML</code> markup one of the things <code data-enunciate="mod ex">MODX</code> is so notorious&nbsp;for?</p>                    
                            <blockquote>
                                &#8220;Use W3C technologies <span class="unspeakable">(according to specification) </span>and follow accessibility guidelines. Where it is not possible to use a W3C technology, or doing so results in material that does not transform gracefully, provide an alternative version of the content that is accessible.&#8221;<br><br>
                                &mdash;&emsp;<a href="http://www.w3.org/TR/WCAG10/#gl-use-w3c" >WCAG <small class="smallcaps">1.0</small> Guideline 11</a>
                            </blockquote>
                            <figure>
                                <div class="unspeakable">
                                    <div id="mam-raw-img">
                                            <picture class="unaligned">
                                                <source srcset="myimg@2x.png 2x, http://cl.ly/image/3U1N0O3M1A06/mam-resource-create.png.jpg 1x" />
                                               <img src="http://cl.ly/image/3U1N0O3M1A06/mam-resource-create.png" srcset="http://cl.ly/image/3U1N0O3M1A06/mam-resource-create.png 1x, myimg@2x.png 2x">    
                                            </picture>
                                    </div>
                                    <script>if(!Modernizr.touch) {
                                        var _w = document.getElementById('mam-raw-img');
                                        var i = document.createElement('iframe');
                                        i.src = 'resource-edit-raw.php#focus';
                                        i.width = 480;
                                        i.height = 560;
                                        i.innerHTML = _w.innerHTML;
                                        _w.innerHTML = i.outerHTML;
                                    }</script>
                                </div>
                                <figcaption><code>MAM 0.0.0</code> raw <code>HTML</code> is accessible&nbsp;<i class="fa fa-thumbs-o-up"></i></figcaption>
                            </figure>
                            <p><code data-enunciate="ma'am">MAM</code> wants you to write markup and be ok with that. Maybe make it look nice with a little <code class="sass">Sass</code>. Then test it; test it; test it, <strong><i>and then</i></strong> enhance it with scripts and <i>that it is ok</i> if you get stuck. Remember, <code data-enunciate="ma'am">MAM</code> is <a href="#" class="apparent-link">always here</a> for you.</p>
                            <hr>
                            <form class="unaligned">
                                <h3>Take the Poll</h3>
                                &nbsp;<p style="margin:0 auto 1em auto">Are the interfaces our users interact with worth authoring ourselves?</p>
                                <fieldset class="unspeakable">
                                    <input type="radio" value="1" name="worth-authoring" style="display:inline-block" />&nbsp;<label style="display:inline-block">Yes</label>&emsp;&emsp;&emsp;&emsp;
                                    <input type="radio" value="0" name="worth-authoring" style="display:inline-block" />&nbsp;<label style="display:inline-block">No</label>
                                </fieldset>
                                <button type="submit" class="unspeakable">Submit</button>
                            </form>
                            <hr>
                            <h3 style="margin-top:1em">&#8220;I thought this was about&nbsp;<code>JavaScript</code>?&#8221;</h3>
                            <p>Here's the thing, <code data-enunciate="ma'am">MAM</code> provides us with <a href="index.php" class="apparent-link">killer fluid liquid awesome interfaces</a> and all this other stuff but when it comes to choosing a <code>JavaScript</code> framework for life, <code data-enunciate="ma'am">MAM</code> just can't commit. Frameworks become obsolete overnight and <code data-enunciate="ma'am">MAM</code> has so many peeps there is no way they will all fall in love with the same&nbsp;one. Oh dear.</p>
                            
                            <p>While <code>React.js</code> is currently <code data-enunciate="ma'am">MAM</code>'s <code>JavaScript</code> framework of choice, we want to make <code data-enunciate="ma'am">MAM</code> compatible with as many <code>JavaScript</code> frameworks as the <code data-enunciate="mod ex">MODX</code> community at large desires. We plan on doing this by giving <code data-enunciate="ma'am">MAM</code> drivers; As many drivers as <code data-enunciate="ma'am">MAM</code> needs. This will allow <code data-enunciate="ma'am">MAM</code> to focus on creating beautiful hyper&ndash;accessible components that don't know or even care what or <i>if any scripts</i> enhance them. These components exists in the <code>DOM</code> before the scripts that enhance them; they are not made by them.</p>
                            <p>So to get behind the concept of js&ndash;drivers we need to get behind the concepts of our scripts being slaves to our carefully crafted markup; <strong class="unspeakable">not vice&ndash;versa</strong>. Our <code>API</code> needs to be traced all the way back to web&nbsp;standards.</p>
                            <blockquote>Proving this concept would allow developers to choose between drivers for frameworks like <code>Angular.js</code> or <code>React.js</code> without changing the look and feel of components at&nbsp;all.</blockquote>
                            <h3 style="margin-top:1em">What is a Driver?</h3>
                            <p>The concept of our js&ndash;drivers is to handle enhancing front end components by bridging asynchronous communication between the <code>MODX API</code> and the <code>DOM</code> much like <code>ExtJS</code> does for <code>2.x</code> but with several clear distinctions:</p>
                            
                            <ul style="padding-left:1em">
                                <li>
                                    <code data-enunciate="ma'am">MAM</code> drivers do not influence a component's layout
                                </li>
                                <li>
                                    <code data-enunciate="ma'am">MAM</code> drivers do not influence a component's visual style
                                </li>
                                <li>
                                    <code data-enunciate="ma'am">MAM</code> drivers do not influence a component's markup structure
                                </li>
                            </ul>
                            
                            <p><code data-enunciate="ma'am">MAM</code> drivers should add asynchronous features and any relevant considerations to our components.  Once a proof of concept for a component like <a href="posts/getresources-tutorial.php" class="apparent-link">this one</a> is written we should be able to document the areas of markup that need to be made dynamic as well as any additional considerations, write tests, then go off and create multiple js&ndash;drivers. Drivers perform identical tasks but in their own syntax. The user should have no indication in their experience that they are using one js&ndash;driver or another. </p>
                            <p class="smaller">Until we have multiple drivers that all provide the same user experience, this is still <i>theory</i>. Many of our concepts would rely on the ability for Manager pages to be heavily <code>HTML</code> driven similar to how standard websites are created. Additionally we hope for the ability to communicate asynchronously as well as synchronously with the server to support accessible&nbsp;forms.</p>
                        </div>
                    </div>
                </div>
                
            </section>
            
            <div class="dashbox">
                <div class="shell shell-legible shell-readme">
                    <div class="box">
                        <header>
                            <h2 style="text-transform:none"><i class="fa fa-cubes"></i><br>drivers for everyone</h2>
                        </header>
                        <div>
                            <figure>
                                <a href="http://www.commitstrip.com/2015/03/02/getting-bored-change-your-stack/" target="_blank"><img src="https://pbs.twimg.com/media/B_HT1uIWoAAP3kt.jpg" alt="Embedded image permalink" width="650" height="625"></a>
                                <figcaption>What have we gotten ourselves into?</figcaption>
                            </figure>
                            <p>Supporting, testing, and developing drivers is <i>a lot</i> of work. We automate what we can but the undertaking of maintaining multiple drivers would burden any team. Thankfully we leverage ubiquity when working with web standards; if the <code>API</code> is standard enough and test driven development is encouraged perhaps drivers can be maintained by their respective advocate(s).</p>
                            <p>Imagine if rather than the <code>MODX</code> roadmap &#8220;choosing a js&ndash;framework&#8221; it first agreed on how js&ndash;drivers should work. Drivers could decorate components in their own way but would need to dispatch standard events so that developers could handle updates in their&nbsp;themes.</p>
                            <p>Wish <code>MODX</code> supported another js&ndash;framework for speaking with the <code>DOM</code>? Fork the default driver, keep the same tests, swap frameworks, tag, release; now <code>MODX</code> supports that&nbsp;driver.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
                            <div class="dashbox">
                                <div class="shell shell-legible shell-readme">
                                    <div class="box">
                                        <header>
                                            <h2 style="text-transform:none"><i class="fa fa-binoculars"></i><br>Behind the Scenes</h2>
                                        </header>
                                        <p>
                                            Above we stress the importance of starting with accessible markup. We'd like to show one example of how we start with just a simple <code>img</code>, enhance it to add <code>2x</code> support, and then again to be an interactive <code>iframe</code>. 
                                            Why would we do such a thing? <code>iframe</code>s and other scrollable containers don't translate well on touch devices because you wind up with nested scrollbars. With this component we want to give desktop users a way for the simple image we start out with to "feel alive" by becoming an interactive example. This interactive failed our mobile user ability tests due to nested scrollbars. Also, the <code>iframe</code> adds complexity and just feels confusing on a smaller&nbsp;screens.  
                                        </p>
                                        <ol style="margin-top:0">
                                            <li>
                                                <p>We start with just an image:</p>
                                                <pre class="rainbow-block"><code data-language="html">&lt;img src=&quot;myimg.png&quot;&gt;</code></pre>
                                            </li>
                                            <li>
                                                <p>
                                                    We then add <code>2x</code> support to the image itself using the <code>srcset</code> attribute.
                                                </p>
                                                <pre class="rainbow-block"><code data-language="html">&lt;img src=&quot;myimg.png&quot; srcset=&quot;myimg.png 1x, myimg@2x.png 2x&quot;&gt;</code></pre>
                                            </li>
                                            <li>
                                                <p>And then we wrap that image in a picture element, which again adds retina support. This duplication strengthens cross browser syntax. Hopefully this syntax will become more sane as the spec stabilizes.</p>
                            
                                            <pre class="rainbow-block"><code data-language="html">&lt;picture&gt;
  &lt;source srcset=&quot;myimg@2x.png 2x, myimg.png 1x&quot; /&gt;
  &lt;img src=&quot;myimg.png&quot; srcset=&quot;myimg.png 1x, myimg@2x.png 2x&quot;&gt;    
&lt;/picture&gt;</code></pre>
                                            </li>
                                            <li>
                                                <p>Next we wrap it all in a div with a unique id. This gives us an easy reference to the container in our script.</p>
                                                <pre class="rainbow-block"><code data-language="html">&lt;div id="my-img"&gt; 
&lt;picture&gt;
  &lt;source srcset=&quot;myimg@2x.png 2x, myimg.png 1x&quot; /&gt;
  &lt;img src=&quot;myimg.png&quot; srcset=&quot;myimg.png 1x, myimg@2x.png 2x&quot;&gt;    
&lt;/picture&gt;
&lt;/div&gt;</code></pre>
        <p>Finally, we add our script to enhance our component.</p>
        <pre class="rainbow-block"><code data-language="html">&lt;script&gt;if(!Modernizr.touch) { // only enhance for .no-touch
  var i = document.createElement(&#x27;iframe&#x27;); // create an iframe
  i.src = &#x27;resource-edit-raw.php#focus&#x27;; // resource-edit.php forced to .no-js
  i.width = 480;
  i.height = 560;
  var _w = document.getElementById(&#x27;my-img&#x27;);
  i.innerHTML = _w.innerHTML; // wrap picture in iframe
  _w.innerHTML = i.outerHTML;
}&lt;/script&gt;</code></pre>
        <p><strong>All together now</strong>.</p>
        <pre class="rainbow-block"><code data-language="html">&lt;div id=&quot;my-img&quot;&gt; 
  &lt;picture&gt;
  &lt;source srcset=&quot;myimg@2x.png 2x, myimg.png 1x&quot; /&gt;
  &lt;img src=&quot;myimg.png&quot; srcset=&quot;myimg.png 1x, myimg@2x.png 2x&quot;&gt;    
  &lt;/picture&gt;
&lt;/div&gt;
&lt;script&gt;if(!Modernizr.touch) { // only enhance for .no-touch
  var i = document.createElement(&#x27;iframe&#x27;); // create an iframe
  i.src = &#x27;resource-edit-raw.php#focus&#x27;; // resource-edit.php forced to .no-js
  i.width = 480;
  i.height = 560;
  var _w = document.getElementById(&#x27;my-img&#x27;);
  i.innerHTML = _w.innerHTML; // wrap picture in iframe
  _w.innerHTML = i.outerHTML;
}&lt;/script&gt;</code></pre>
                                            </li>
                                        </ol>
                            
                           
                            
                           
            <footer class="unaligned">
                <small class="subtle">&mdash;&emsp;an accessible component enhanced with standards and&nbsp;scripts&emsp;&mdash;</small>
            </footer>
                                        <!--figure>
                                            <div class="unspeakable">
                                                <div id="mam-raw-img">
                                                        <picture class="unaligned">
                                                            <source srcset="myimg@2x.png 2x, http://cl.ly/image/3U1N0O3M1A06/mam-resource-create.png.jpg 1x" />
                                                           <img src="http://cl.ly/image/3U1N0O3M1A06/mam-resource-create.png" srcset="http://cl.ly/image/3U1N0O3M1A06/mam-resource-create.png 1x, myimg@2x.png 2x">    
                                                        </picture>
                                                </div>
                                                <script>if(!Modernizr.touch) {
                                                    var _w = document.getElementById('mam-raw-img');
                                                    var i = document.createElement('iframe');
                                                    i.src = 'resource-edit-raw.php#focus';
                                                    i.width = 480;
                                                    i.height = 560;
                                                    i.innerHTML = _w.innerHTML;
                                                    _w.innerHTML = i.outerHTML;
                                                }</script>
                                            </div>
                                            <figcaption><code>MAM 0.0.0</code> Resource Create Create raw <code>HTML</code> is accessible&nbsp;<i class="fa fa-thumbs-o-up"></i></figcaption>
                                        </figure-->
                                    </div>
                                </div>
                            </div>
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
