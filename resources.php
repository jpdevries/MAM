<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'16'},
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
                                            <td><i class="fa fa-file-text-o" title="Dashboard Concept"></i>&nbsp;<a href="#" title="ID: 1; Published"><strong>Dashboard Concept</strong></a></td>
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
                                            <td><i class="fa fa-file-text-o" title="Resource Edit Concept"></i>&nbsp;<a href="#" title="ID: 16; Published"><strong>Resources</strong></a></td>
                                            <td>Concept for browsing resources</td>
                                            <td><time>3 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Settings Page Concept"></i>&nbsp;<a href="#" title="ID: 6; Published">Settings Page Concept</a></td>
                                            <td>Quickly&ndash;Editable Settings Concept</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Spectacular Docs"></i>&nbsp;<a href="#" title="ID: 7; Published">Spectacular Docs</a></td>
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
                <div class="shell">
                    <div class="box">
                        <h2><i class="fa fa-gears"></i><br>Resources
                        <br>&mdash;&emsp;<select>
                            <option value="web">web</option>
                            <option value="api">api</option>
                        </select>&emsp;&mdash;
                        </h2>
                        
                        <aside>
                            <p>To date you've created 573 Resources in the web context and published 428 of them.<br>These resources are listed&nbsp;below. <a href="#" class="emphatic-link">Learn more</a>.</p>
                        </aside>
                        <form>
                            <label for="users_search" style="margin-bottom:0.25em">Filter Resources&nbsp;&nbsp;<a href="#" title="Learn more about the powerful uber syntax."><i class="fa fa-info-circle"></i></a></label>
                            <div class="search-bar">
                                <input type="search" name="users_search" placeholder="context_key:web published:1">
                                <button type="submit"><i class="fa fa-search"></i>&nbsp;<span class="js-rem">Search</span></button>
                            </div>
                        </form>
                        <div class="float-labels">
                            <label title="Filter the Users shown below by User Group">Showing:</label>&nbsp;
                            <input type="checkbox" name="user_groups" value="" id="all">
                            <label for="adiminstrator">All</label>
                            
                            <input type="checkbox" name="hidden_menu" value="user_groups[hidden_menu]" id="hidden_menu" checked>
                            <label for="core">Hidden from Menu</label>
                            
                            <input type="checkbox" name="published" value="user_groups[published]" id="published" checked>
                            <label for="modmore">Published</label>
                        </div>
                        <hr>  
                        <div style="margin:0">
                            <h5 style="display:inline" title="Select one or more users below to perform Bulk Actions"><label class="inline-label">Bulk Actions:</label></h5>&nbsp;
                            <a href="#" title="Publish Resources"><i class="fa fa-check-circle-o"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Unpublish Resources"><i class="fa fa-circle-o"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Delete Resources"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashbox">
                <div class="shell shell-resource shell-greedy">
                    <div class="box">
                        <h3 style="text-align:center;margin-bottom:1em"><code>/cooking/</code></h3>
                        <h2><i class="fa fa-folder-open"></i><br><input type="checkbox">&emsp;Cooking</input></h2>
                        <form>
                            <fieldset>
                                <label for="title_1">Title</label>
                                <input type="text" value="Surfing USA" name="title_1">&nbsp;</input>
                                
                                <label for="alias_1">Alias</label>
                                <input type="text" value="surfing-usa" name="alias_1">&nbsp;</input>
                                <div class="float-labels">
                                    <label for="published_1">Published</label>&emsp;
                                    <input type="checkbox" name="published_1" id="published_1" checked>&nbsp;Yes</input>
                                </div>
                                <br>
                                <a href="#" title="Link to this resouce within your templates using the URL scheme [[~2]]"><pre style="text-align:center;margin:0"><code>[[~2]]</code></pre></a>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>This resource was last edited by <a href="#" class="apparent-link">markh</a> who published it on Jan 13, 2013. It contains 12&nbsp;<a href="#" class="apparent-link">children</a>, 8&nbsp;<a href="#" class="apparent-link">of&nbsp;which</a> are published.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>
                
                
                
                <div class="shell shell-resource">
                    <div class="box">
                        <h3 style="text-align:center;margin-bottom:1em"><code>/cooking/bacon-noodle-soup</code></h3>
                        <h2><i class="fa fa-file-text-o"></i><br><input type="checkbox">&emsp;Bacon Noodle Soup</input></h2>
                        <form>
                            <fieldset>
                                <label for="title_1">Title</label>
                                <input type="text" value="Bacon Noodle Soup" name="title_1">&nbsp;</input>
                                
                                <label for="alias_1">Alias</label>
                                <input type="text" value="bacon-noodle-soup" name="alias_1">&nbsp;</input>
                                <div class="float-labels">
                                    <label for="published_1">Published</label>&emsp;
                                    <input type="checkbox" name="published_1" id="published_1" checked>&nbsp;Yes</input>
                                </div>
                                <br>
                                <a href="#" title="Link to this resouce within your templates using the URL scheme [[~11]]"><pre style="text-align:center;margin:0"><code>[[~11]]</code></pre></a>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>This resource was last edited by <a href="#" class="apparent-link">markh</a> who published it on Jan 13, 2013. It contains 12&nbsp;<a href="#" class="apparent-link">children</a>, 8&nbsp;<a href="#" class="apparent-link">of&nbsp;which</a> are published.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>
                
                <div class="shell shell-resource">
                    <div class="box">
                        <h3 style="text-align:center;margin-bottom:1em"><code>/cooking/turkey-grilled-cheese</code></h3>
                        <h2><i class="fa fa-file-text-o"></i><br><input type="checkbox">&emsp;Turkey Grilled Cheese</input></h2>
                        <form>
                            <fieldset>
                                <label for="title_1">Title</label>
                                <input type="text" value="Turkey Grilled Cheese" name="title_1">&nbsp;</input>
                                
                                <label for="alias_1">Alias</label>
                                <input type="text" value="turkey-grilled-cheese" name="alias_1">&nbsp;</input>
                                <div class="float-labels">
                                    <label for="published_1">Published</label>&emsp;
                                    <input type="checkbox" name="published_1" id="published_1" checked>&nbsp;Yes</input>
                                </div>
                                <br>
                                <a href="#" title="Link to this resouce within your templates using the URL scheme [[~13]]"><pre style="text-align:center;margin:0"><code>[[~13]]</code></pre></a>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>This resource was last edited by <a href="#" class="apparent-link">markh</a> who published it on Jan 13, 2013. It contains 12&nbsp;<a href="#" class="apparent-link">children</a>, 8&nbsp;<a href="#" class="apparent-link">of&nbsp;which</a> are published.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>
                
                <div class="shell shell-resource shell-greedy">
                    <div class="box">
                        <h3 style="text-align:center;margin-bottom:1em"><code>/surfing/</code></h3>
                        <h2><i class="fa fa-folder"></i><br><input type="checkbox">&emsp;Surfing</input></h2>
                        <form>
                            <fieldset>
                                <label for="title_1">Title</label>
                                <input type="text" value="Surfing" name="title_1">&nbsp;</input>
                                
                                <label for="alias_1">Alias</label>
                                <input type="text" value="surfing-usa" name="alias_1">&nbsp;</input>
                                
                                <label>Thumbnail</label>
                                <input type="url" value="http://i.telegraph.co.uk/multimedia/archive/02134/surf-wave_2134340b.jpg"></input>
                                <div style="text-align:center">
                                    <img style="margin-right:auto;margin-left:auto;margin-top:1em;margin-bottom:1em;border:1px solid rgb(230,230,230)" src="http://i.telegraph.co.uk/multimedia/archive/02134/surf-wave_2134340b.jpg">
                                </div>
                                <div class="float-labels">
                                    <label for="published_1">Published</label>&emsp;
                                    <input type="checkbox" name="published_1" id="published_1" checked>&nbsp;Yes</input>
                                </div>
                                <br>
                                <a href="#" title="Link to this resouce within your templates using the URL scheme [[~1]]"><pre style="text-align:center;margin:0"><code>[[~1]]</code></pre></a>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>This resource was last edited by <a href="#" class="apparent-link">markh</a> who published it on Jan 13, 2013. It contains 12&nbsp;<a href="#" class="apparent-link">children</a>, 8&nbsp;<a href="#" class="apparent-link">of&nbsp;which</a> are published.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?></body></html>
