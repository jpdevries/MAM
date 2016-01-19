<?php include '../functions.php';get_header('./../'); ?>
<script>
  var MODx = {
      resource:{id:'12'},
      tree:{branch:'9'}
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
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/js-drivers.php" title="ID: 11; Published">js-drivers</a></td>
                                            <td>A wild idea to free the Manager from the confinements of any front end framework at all</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/orphans.php" title="ID: 12; Published"><strong>Adopting Orphans</strong></a></td>
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
                <header class="dashbox">
                    <div class="shell shell-legible shell-readme">
                        <div class="box legible">
                                                    <h1 style="text-transform:none"><!--i class="fa fa-search clickable speaker-btn"></i><br-->Adopting Orphans with<br><code style="font-size:inherit">&amp;nbsp;</code><code class="subtle" style="position:absolute;top:0;right:0;opacity:1"><a href="http://twitter.com/MODX" target="_blank" title="Follow MODX on Twitter">#HTML</a></code></h1>
                                                    <p>
                                                        In the modern age of responsive devices and layouts our typography skills can get away from us. Even the most professionally designed websites can struggle with orphaned words. Luckily for us, things don't have to be that way. Just end your paragraphs using a <code style="font-size:inherit">&amp;nbsp;</code> entity between the last two words like&nbsp;this:
                                                    </p>                                             
<pre style="margin-top:0" class="unaligned"><code>
End your paragraphs using a &amp;nbsp; entity between the last two words like&amp;nbsp;this.
</code></pre>
<p>So cheers to the <code style="font-size:inherit">&amp;nbsp;</code> entity for allowing us to glue words&nbsp;together. If you are using <a href="https://www.modmore.com/extras/redactor/" class="apparent-link">Redactor for MODX</a> we have a handy <code>redactor.norphan Setting</code> that will reduce orphans using this technique. The <code>norphan</code> plugin can be found on <a href="https://github.com/modmore/redactor-plugins#norphan" target="_blank" class="apparent-link">Github</a> so it can be used standalone with <a href="http://imperavi.com/redactor/" target="_blank" class="apparent-link">Imperavi's Redactor.js</a>.</p>
<aside class="seperated">
    <p><i class="fa fa-lightbulb-o"></i><br>Over at the <a class="https://github.com/jpdevries/wool">Wool for MODX</a> project you'll find some <a href="https://github.com/jpdevries/wool/blob/develop/core/components/wool/model/wool/wool.class.php" class="apparent-link">crafty <code title="Hypertext Preprocessor">PHP</code></a> that strives to up your type game as well.</p>
</aside>
                                                    
                        </div>
                    </div>
                </header>
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
