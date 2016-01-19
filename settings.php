<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'6'},
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
                                            <td><i class="fa fa-file-text-o" title="Resource Edit Concept"></i>&nbsp;<a href="#" title="ID: 16; Published">Resources</a></td>
                                            <td>Concept for browsing resources</td>
                                            <td><time>3 Days ago</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o" title="Settings Page Concept"></i>&nbsp;<a href="#" title="ID: 6; Published"><strong>Settings Page Concept</strong></a></td>
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
                        <h2><i class="fa fa-gears"></i><br>Settings</h2>
                        <aside>
                            <p>MODX is a configurable content management system. Here you make that tool your own. <a href="#" class="emphatic-link">Learn more</a>.</p>
                        </aside>
                        <form>
                            <label for="users_search" style="margin-bottom:0.25em">Filter Users&nbsp;&nbsp;<a href="#" title="Learn more about the powerful uber syntax."><i class="fa fa-info-circle"></i></a></label>
                            <div class="search-bar">
                                <input type="search" name="users_search" placeholder="namespace:core">
                                <button type="submit"><i class="fa fa-search"></i>&nbsp;<span class="js-rem">Search</span></button>
                            </div>
                        </form>
                        <div class="float-labels">
                            <label title="Filter the Users shown below by User Group">Namespace:</label>&nbsp;
                            <label for="adiminstrator">All</label>
                            <input type="checkbox" name="user_groups" value="" id="all">
                            
                            <label for="core">core</label>
                            <input type="checkbox" name="user_groups" value="user_groups[core]" id="core" checked>
                            
                            <label for="modmore">redactor</label>
                            <input type="checkbox" name="user_groups" value="user_groups[redactor]" id="redactor" checked>
                            
                        </div>
                        <hr>  
                        <div style="margin:0">
                            <h5 style="display:inline" title="Select one or more users below to perform Bulk Actions"><label class="inline-label">Bulk Actions:</label></h5>&nbsp;
                            <a href="#" title="Enable Settings"><i class="fa fa-check-circle-o"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Disable Settings"><i class="fa fa-circle-o"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Delete Settings"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashbox">
                <div class="shell shell-setting">
                    <div class="box">
                        <h2><i class="fa fa-gear"></i><br><!--input type="checkbox" disabled-->site_name</input></h2>
                        <form>
                            <input type="text" value="Surfing USA">&nbsp;</input>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>The name of your website as referenced by [[++site_name]].</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>
                <div class="shell shell-setting">
                    <div class="box">
                        <h2><i class="fa fa-gear"></i><br><input type="checkbox">&emsp;site_enabled</input></h2>
                        <form>
                            <input type="checkbox" title="" checked>&nbsp;Yes</input>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>When enabled allows anonymous users default web access. Essentially publishes or un-publishes your site.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>
                <div class="shell shell-setting">
                    <div class="box">
                        <h2><i class="fa fa-gear"></i><br><input type="checkbox">&emsp;compress_css</input></h2>
                        <form>
                            <input type="checkbox" title="" checked>&nbsp;Yes</input>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>When enabled, concatenates and minifies Manager stylesheets.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>

                <div class="shell shell-setting">
                    <div class="box">
                        <h2><i class="fa fa-gear"></i><br><input type="checkbox">&emsp;compress_js</input></h2>
                        <form>
                            <input type="checkbox" title="" checked>&nbsp;Yes</input>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>When enabled, concatenates and minifies Manager scripts.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>Edit compress_css</button></a-->
                    </div>
                </div>
                <div class="shell shell-setting">
                    <div class="box">
                        <h2><i class="fa fa-gear"></i><br><!--input type="checkbox"-->redactor.clipsJson</input></h2>
                        <form>
                            <textarea type="checkbox" class="code" rows="8">
[{"title":"$ Dollar Sign","clip":"$"},
{"title":"€ Euro Sign","clip":"€"},
{"title":"¢ Cent Sign","clip":"¢"},
{"title":"£ Pound Sign","clip":"£"},
{"title":"¤ Currency Sign","clip":"¤"},
{"title":"¥ Yen Sign","clip":"¥"},
{"title":"ƒ Florin Sign","clip":"ƒ"}]
                            </textarea>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>Data fed to the notorious <a href="#" class="apparent-link">clips plugin</a>.</small></p>
                        </aside>
                        <hr>
                        <!--a href=""><button>update clipsJson</button></a-->
                    </div>
                </div>

            </div>
        </div>
<?php get_footer(); ?></body></html>
