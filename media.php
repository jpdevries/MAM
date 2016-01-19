<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'15'},
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
                <div class="shell shell-media">
                    <div class="box">
                        <header>
                            <h2 id="media" title="View, upload and manage media"><i class="fa fa-photo"></i><br>Media</h2>
                            <!--div class="tert-nav">
                                <a href=="#" title="Expand Media View" class="expand-btn"><i class="fa fa-expand"></i></a>
                            </div-->
                        </header>
                        <aside class="media-box">
                            <header class="top-strip">
                                <div>
                                    <nav class="toolbar">
                                        <a href="#" class="grid-view-btn" title="Thumbnail View"><i class="fa fa-th-large"></i></a>
                                        <a href="#" class="list-view-btn" title="Grid View"><i class="fa fa-list"></i></a>
                                        <a href="#" class="upload-file" title="Upload a File"><i class="fa fa-arrow-circle-o-up"></i></a>
                                    </nav>
                                    <pre>$ ls /assets/images/hawaii</pre>
                                </div>
                            </header>
                            <hr>
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>File</th>
                                            <th>File Size</th>
                                            <th>Dimensions</th>
                                            <th>Edited On</th>
                                        </tr>  
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="http://www.surf-charter.nu/wp-content/uploads/World%20Travel%20Pictures/world-travel-surfing-with-sunset.jpeg">
                                                <small>sunset.jpg</small>
                                            </td>
                                            <td>
                                                120kb
                                            </td>
                                            <td>
                                                400x400
                                            </td>
                                            <td>
                                                Yesterday
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://surfingindia.net/files/surf-files/u9/India_Surf_Tours_-_17__1_.jpg">
                                                <small>myimg.jpg</small>
                                            </td>
                                            <td>
                                                120kb
                                            </td>
                                            <td>
                                                400x400
                                            </td>
                                            <td>
                                                Yesterday
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://secure.static.tumblr.com/3231da342f69569c77057a2e3caf5bcb/6ijaatm/tcsn8k9wr/tumblr_static_431411.jpg">
                                                <small>surf.jpg</small>
                                            </td>
                                            <td>
                                                120kb
                                            </td>
                                            <td>
                                                400x400
                                            </td>
                                            <td>
                                                Yesterday
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://www.allianceabroad.com/wp-content/uploads/688415-south-west-monster-surf.jpg">
                                                <small>wave.jpg</small>
                                            </td>
                                            <td>
                                                120kb
                                            </td>
                                            <td>
                                                400x400
                                            </td>
                                            <td>
                                                Yesterday
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="dropzone" title="Feel free to drag a file or two here to upload at any time">
                            
                            </div>
                        </aside>
                        
                        <nav class="media-streams">
                            <a href="#" title="Configure your Media Streams"><i class="fa fa-cog"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?></body></html>
