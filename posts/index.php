<?php include '../functions.php';get_header('./../'); ?>
<script>
  var MODx = {
      resource:{id:'9'},
      tree:{branch:9}
  };
</script>
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
        <div id="sticky-uberbar" class="speakable page-wrapper" data-transcript="sticky-uberbar" style="padding-bottom:6em">
            <section style="margin-top:1em">
                <div class="dashbox">
                    <div class="shell shell-readme">
                        <div class="box">
                            <h1 style="text-transform:none"><a href="posts/getresources-tutorial.php"><i class="fa fa-book clickable"></i><br>getResources Tutorial</a><code class="subtle" style="position:absolute;top:0;right:0;opacity:1"><a href="http://twitter.com/MODX" target="_blank" title="Follow MODX on Twitter">#MODX</a></code></h1>
                            <p class="unaligned">
                                Step through each line of the source code to our <code>getResources</code>&nbsp;component.
                            </p>                                                               
                        </div>
                    </div>
                    <div class="shell">
                        <div class="box">
                            <h1 style="text-transform:none"><a href="posts/orphans.php"><i class="fa fa-font clickable"></i><br>Adopting Orphans with &amp;nbsp;</a></h1>
                            <p class="unaligned">
                                A clever use of a single HTML entity that will up your typography&nbsp;game.
                            </p>                                                               
                        </div>
                    </div>
                    <div class="shell">
                        <div class="box">
                            <h1 style="text-transform:none"><a href="posts/js-drivers.php"><i class="fa fa-cubes clickable"></i><br>js&ndash;drivers</a><code class="subtle" style="position:absolute;top:0;right:0;opacity:1">#JS</a></code></h1>
                            <p class="unaligned">
                                A wild idea to free the Manager from the confinements of any front end framework at&nbsp;all. Even the author has&nbsp;questions.
                            </p>                                                               
                        </div>
                    </div>
                    <div class="shell">
                        <div class="box">
                            <h1 style="text-transform:none"><a href="posts/speakable-titles.php"><i class="fa fa-volume-up clickable"></i><br>Speakable Titles</a><code class="subtle" style="position:absolute;top:0;right:0;opacity:1"><a href="http://twitter.com/MODX" target="_blank" title="Follow MODX on Twitter">#a11y</a></code></h1>
                            <p class="unaligned">
                                Using <a href="#" class="apparent-link"><code>speakable.jquery.js</code></a> you too can make your markup talk. Learn to customize voice, pitch, rate and volume without a single line of script in this&nbsp;tutorial.
                            </p>                                                               
                        </div>
                    </div>
                    <div class="shell">
                        <div class="box">
                            <h1 style="text-transform:none"><a href="posts/sticky-uberbar.php"><i class="fa fa-search clickable"></i><br>Sticky Uberbar</a><code class="subtle" style="position:absolute;top:0;right:0;opacity:1"><a href="http://twitter.com/MODX" target="_blank" title="Follow MODX on Twitter">#CSS3</a></code></h1>
                            <p class="unaligned">
                                Behind the scenes of the Sticky Uberbar&nbsp;component.
                            </p>                                                               
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
