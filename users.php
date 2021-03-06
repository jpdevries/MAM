<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'8'},
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
                                            <td><i class="fa fa-file-text-o" title="Users Page Concept"></i>&nbsp;<a href="#" title="ID: 8; Published"><strong>Users Page Concept</strong></a></td>
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
                        <h2><i class="fa fa-group"></i><br>Users</h2>
                        <aside>
                            <p>In MODX you can create as many users as you desire. Configure their permissions to your needs below. <a href="#" class="emphatic-link" title="Learn more about Managing and Creating Users in MODX.">Learn More</a>.</p>
                        </aside>
                        <form>
                            <label for="users_search" style="margin-bottom:0.25em">Filter Users&nbsp;&nbsp;<a href="#" title="Learn more about the powerful uber syntax."><i class="fa fa-info-circle"></i></a></label>
                            <div class="search-bar">
                                <input type="search" name="users_search" placeholder="group:all is:active">
                                <button type="submit"><i class="fa fa-search"></i>&nbsp;<span class="js-rem">Search</span></button>
                            </div>
                        </form>
                        <div class="float-labels">
                            <label title="Filter the Users shown below by User Group">User Groups:</label>&nbsp;
                            <label for="adiminstrator">All</label>
                            <input type="checkbox" name="user_groups" value="" id="all" checked>
                            
                            <label for="adiminstrator">Adiminstrator</label>
                            <input type="checkbox" name="user_groups" value="user_groups[adiminstrator]" id="adiminstrator">
                            
                            <label for="modmore">modmore</label>
                            <input type="checkbox" name="user_groups" value="user_groups[modmore]" id="modmore">
                            
                        </div>
                        <hr>  
                        <div style="margin:0">
                            <h5 style="display:inline" title="Select one or more users below to perform Bulk Actions"><label class="inline-label">Bulk Actions:</label></h5>&nbsp;
                            <a href="#" title="Activate Users"><i class="fa fa-check-circle-o"></i></a>&nbsp;&nbsp;
                            <a href="#" title="De-Activate Users"><i class="fa fa-circle-o"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Block Users"><i class="fa fa-warning"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Delete Users"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashbox">
                <div class="shell shell-user">
                    <div class="box">
                        <h2><i class="fa fa-user"></i><br><input type="checkbox">&emsp;jpdevries</input></h2>
                        <form>
                            <fieldset class="focus inline-label">
                                <div class="primary">
                                    <label for="active">Active</label>
                                    <input type="checkbox" checked name="active" id="active__1">
                                </div>
                                <div class="secondary">
                                    <label for="active">Blocked</label>
                                    <input type="checkbox" name="blocked" id="blocked__1">
                                </div>
                            </fieldset>
                            <fieldset>
                                <label for="fullname__1">Fullname</label>
                                <input type="text" name="fullname__1" value="JP DeVries"></input>
                            </fieldset>
                            <fieldset>
                                <label for="email__1">Email</label>
                                <input type="email" name="email__1" value="jp@modmore.com"></input>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>jpdevries has been an active member since Nov 1, 2013 and currently belongs to the Administrator and mod<strong>more</strong> User Groups. As a sudo user, he has full administration privileges.</small></p>
                        </aside>
                        <hr>
                        <a href=""><button>Edit jpdevries</button></a>
                    </div>
                </div>
                <div class="shell shell-user">
                    <div class="box">
                        <h2><i class="fa fa-user"></i><br><input type="checkbox">&emsp;markh</input></h2>
                        <form>
                            <fieldset class="focus inline-label">
                                <div class="primary">
                                    <label for="active">Active</label>
                                    <input type="checkbox" checked name="active" id="active__1">
                                </div>
                                <div class="secondary">
                                    <label for="active">Blocked</label>
                                    <input type="checkbox" name="blocked" id="blocked__1">
                                </div>
                            </fieldset>
                            <fieldset>
                                <label for="fullname__1">Fullname</label>
                                <input type="text" name="fullname__1" value="Mark Hamstra"></input>
                            </fieldset>
                            <fieldset>
                                <label for="email__1">Email</label>
                                <input type="email" name="email__1" value="mark@modmore.com"></input>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>markh has been an active member since Aug 23, 2013 and currently belongs to the Administrator, mod<strong>more</strong>, and COEX User Groups. </small></p>
                        </aside>
                        <hr>
                        <a href=""><button>Edit markh</button></a>
                    </div>
                </div>
                <div class="shell shell-user">
                    <div class="box">
                        <h2><i class="fa fa-user"></i><br><input type="checkbox">&emsp;joeaugie</input></h2>
                        <form>
                            <fieldset class="focus inline-label">
                                <div class="primary">
                                    <label for="active">Active</label>
                                    <input type="checkbox" checked name="active" id="active__1">
                                </div>
                                <div class="secondary">
                                    <label for="active">Blocked</label>
                                    <input type="checkbox" name="blocked" id="blocked__1">
                                </div>
                            </fieldset>
                            <fieldset>
                                <label for="fullname__1">Fullname</label>
                                <input type="text" name="fullname__1" value="Joe Augie"></input>
                            </fieldset>
                            <fieldset>
                                <label for="email__1">Email</label>
                                <input type="email" name="email__1" value="joe@modmore.com"></input>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>joeaugie has been an active member since July 7, 2013 and currently belongs to the Site Editor User&nbsp;Group.</small></p>
                        </aside>
                        <hr>
                        <a href=""><button>Edit joeaugie</button></a>
                    </div>
                </div>
                <div class="shell shell-user">
                    <div class="box">
                        <h2><i class="fa fa-user"></i><br><input type="checkbox">&emsp;christianseel</input></h2>
                        <form>
                            <fieldset class="focus inline-label">
                                <div class="primary">
                                    <label for="active">Active</label>
                                    <input type="checkbox" checked name="active" id="active__1">
                                </div>
                                <div class="secondary">
                                    <label for="active">Blocked</label>
                                    <input type="checkbox" name="blocked" id="blocked__1">
                                </div>
                            </fieldset>
                            <fieldset>
                                <label for="fullname__1">Fullname</label>
                                <input type="text" name="fullname__1" value="Christian Seel"></input>
                            </fieldset>
                            <fieldset>
                                <label for="email__1">Email</label>
                                <input type="email" name="email__1" value="christian@modmore.com"></input>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>christianseel has been an active member since September 15, 2014 and currently belongs to the Site Editor User&nbsp;Group.</small></p>
                        </aside>
                        <hr>
                        <a href=""><button>Edit christianseel</button></a>
                    </div>
                </div>
                <div class="shell shell-user">
                    <div class="box">
                        <h2><i class="fa fa-user"></i><br><input type="checkbox">&emsp;isaacniebeling</input></h2>
                        <form>
                            <fieldset class="focus inline-label">
                                <div class="primary">
                                    <label for="active">Active</label>
                                    <input type="checkbox" checked name="active" id="active__1">
                                </div>
                                <div class="secondary">
                                    <label for="active">Blocked</label>
                                    <input type="checkbox" name="blocked" id="blocked__1">
                                </div>
                            </fieldset>
                            <fieldset>
                                <label for="fullname__1">Fullname</label>
                                <input type="text" name="fullname__1" value="Isaac Niebeling"></input>
                            </fieldset>
                            <fieldset>
                                <label for="email__1">Email</label>
                                <input type="email" name="email__1" value="isaac@modmore.com"></input>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="nued" style="text-align:center"><i class="fa fa-info-circle"></i></p>
                        <aside>
                            <p><small>isaacniebeling has been an active member since May 19, 2014 and currently belongs to the Site Editor User&nbsp;Group.</small></p>
                        </aside>
                        <hr>
                        <a href=""><button>Edit isaacniebeling</button></a>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?></body></html>
