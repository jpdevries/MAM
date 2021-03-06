<?php include 'functions.php';get_header('./'); ?>
<script>
  var MODx = {
      resource:{id:'1'},
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
                                            <td><strong>Just Imagine if your Manager was like this</strong></td>
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
<?php get_play_controls(); ?>
<?php get_main_nav(); ?>
            </div>
        </section>
        <div class="page-wrapper" style="padding-bottom:6em">
            <!--aside class="alert">
                <p class="message">
                    <i class="fa fa-info-circle"></i>&nbsp;Welcome to your MODX Manager. Is this your first time with us? <a class="tip" href="http://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources" target="_blank" title="Learn More about Creating Resources in MODX">Learn more.</a>
                </p>
            </aside-->
            <div class="dashbox">
                <div class="shell">
                    <div class="box">
                        <h2 id="scheduler-title" class="speakable-tip" title="Scheduler automates tasks for you">
                            <i class="mm mm-modx-logo"></i></i><br>MODX</h2>
                        <aside>
                            <p class=""><i class="fa fa-check-circle-o"></i>&nbsp;You are up to date with MODX <code>3.0.0</code>. Have a look at what is <a href="#" class="apparent-link">coming&nbsp;next</a>.</p>    
                        </aside>
                    </div>
                    <!--div class="box">
                        <h2 id="scheduler-title" class="speakable-tip" title="Scheduler automates tasks for you"><i class="fa fa-clock-o"></i><br>Scheduler</h2>
                        <aside>
                            <p class=""><i class="fa fa-circle-o"></i>&nbsp;Scheduler is automating several tasks coming up here in a bit. <a href="#" class="emphatic-link">View more</a>.</p>    
                        </aside>
                    </div-->
                </div>
            </div>
            <div class="dashbox">
                <div class="shell shell-content">
                    <div class="box">
                        <h2 id="content" name="content"><i class="fa fa-file-code-o"></i><br>Content</h2>
                        <a href="#" class="btn" title="Creating Resources in MODX is easy and help is available 24/7. Get started now."><button>Create a New Resource</button></a>
                        <hr>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-eye contextual"></i>&nbsp;Preview Site</h3>
                                        <p>We'd love to show you what you have been working on</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-gear contextual"></i>&nbsp;Import</h3>
                                        <p>Batch import HTML files to resources</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-cubes contextual"></i>&nbsp;Resource Groups</h3>
                                        <p>Assign resources to groups</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-file-zip-o contextual"></i>&nbsp;Content Types</h3>
                                        <p>Create new Document Types</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <hr>
                        <a href="#" title="As a modmore subscriber you have the below Premium Extras available to use at anytime." style="display:block;text-align:center">
                            <h4 class="modmore-logo"><i class="mm mm-logo"></i></h4>
                            <!--img src="assets/img/modmore-logo-230-grey.svg" width="32" style="margin:0 auto 1em auto;"-->
                        </a>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-th-large contextual"></i>&nbsp;Content Blocks</h3>
                                        <p>Configure your ContentBlocks Installation</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-pencil-square-o contextual"></i>&nbsp;Redactor</h3>
                                        <p>Manage all your Redactor for MODX Settings in one spot</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-photo contextual"></i>&nbsp;More Gallery</h3>
                                        <p>Configure your Gallerys and their templates</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="shell shell-media mini">
                    <div class="box">
                        <header>
                            <h2 id="media" title="View, upload and manage media"><i class="fa fa-photo"></i><br>Media</h2>
                            <div class="tert-nav">
                                <a href="media.php" title="Expand Media View" class="expand-btn"><i class="fa fa-expand"></i></a>
                            </div>
                        </header>
                        <div class="media-box">
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
                                        </tr>  
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div><img src="http://www.surf-charter.nu/wp-content/uploads/World%20Travel%20Pictures/world-travel-surfing-with-sunset.jpeg"></div>
                                                <code class="filename">sunset.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><img src="http://surfingindia.net/files/surf-files/u9/India_Surf_Tours_-_17__1_.jpg"></div>
                                                <code class="filename">myimg.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><img src="https://secure.static.tumblr.com/3231da342f69569c77057a2e3caf5bcb/6ijaatm/tcsn8k9wr/tumblr_static_431411.jpg"></div>
                                                <code class="filename">surf.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><img src="http://www.allianceabroad.com/wp-content/uploads/688415-south-west-monster-surf.jpg"></div>
                                                <code class="filename">wave.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><img src="http://www.surf-charter.nu/wp-content/uploads/World%20Travel%20Pictures/world-travel-surfing-with-sunset.jpeg"></div>
                                                <code class="filename">sunset.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><img src="http://surfingindia.net/files/surf-files/u9/India_Surf_Tours_-_17__1_.jpg"></div>
                                                <code class="filename">myimg.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><img src="https://secure.static.tumblr.com/3231da342f69569c77057a2e3caf5bcb/6ijaatm/tcsn8k9wr/tumblr_static_431411.jpg"></div>
                                                <code class="filename">surf.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div><img src="http://www.allianceabroad.com/wp-content/uploads/688415-south-west-monster-surf.jpg"></div>
                                                <code class="filename">wave.jpg</code>
                                            </td>
                                            <td>
                                                <code>120kb</code>
                                            </td>
                                            <td>
                                                <code>400x400</code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="dropzone" title="Feel free to drag a file or two here to upload at any time">
                            
                            </div>
                        </div>
                        
                        <nav class="media-streams">
                            <a href="#" title="Configure your Media Streams"><i class="fa fa-cog"></i></a>
                        </nav>
                    </div>
                </div>
                <div class="shell shell-manage">
                    <div class="box">
                        <h2 id="manage" title="You got the keys to the castle. You should probably be careful though."><i class="fa fa-wrench"></i><br>Manage</h2>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-group contextual"></i>&nbsp;Users</h3>
                                        <p>Manage Users and their Permissions</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-trash-o contextual"></i>&nbsp;Clear Cache</h3>
                                        <p>Delete cache files in all contexts</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-unlock contextual"></i>&nbsp;Remove Locks</h3>
                                        <p>Remove all locks on Manager pages</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-user-times contextual"></i>&nbsp;Flush your Permissions</h3>
                                        <p>Reload this session's permissions</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-user-secret contextual"></i>&nbsp;Logout All Users</h3>
                                        <p>Immediately destroy all sessions</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-pie-chart contextual"></i>&nbsp;Reports</h3>
                                        <p>Admin reports for your MODX install</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <hr>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Setting</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>site_enabled</code></td>
                                        <td><input type="checkbox" checked>&nbsp;Yes</input></td>
                                    </tr>
                                    <tr>
                                        <td><code>cache_enabled</code></td>
                                        <td><input type="checkbox" checked>&nbsp;Yes</input></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="shell shell-extra">
                    <div class="box">
                        <h2 id="extras"><i class="fa fa-plug"></i><br>Extras</h2>
                        <nav>
                            <ul>
                                <li>
                                    <div>
                                        <h3><i class="fa fa-terminal contextual"></i>&nbsp;Installer<a href="#" class="smallcaps subtle"><span>Update All</span></a></h3>
                                        <p>Manage Add-ons and&nbsp;Distributions</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-cloud-download contextual"></i>&nbsp;Providers</h3>
                                        <p>Configure the providers you'll fetch packages&nbsp;from</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <hr>
                        <div class="congrats">
                            <!--div-->
                                <a href="#" title="As a modmore subscriber you have the below Premium Extras available to use at anytime." style="display:block;text-align:center">
                                    <h4 class="modmore-logo"><i class="mm mm-logo"></i></h4>
                                </a>
                                <div class="unaligned">
                                    <p>Congrats,<br><br>Your exclusive mod<strong>more</strong> API Key has been successfully&nbsp;configured.</p><p><a href="#" class="emphatic-link modmore" title="Take advantage of your access to premium content by modmore.">Get premium apps</a></p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="shell shell-message">
                    <div class="box">
                        <h2 id="send-message"><i class="fa fa-send"></i><br>Send a Message</h2>
                        <form>
                            <h3><label for="recipient">Recipients</label></h3>
                            <!--input type="text" name="recipient" value="" id="recipient"-->
                            <p>Choose a combination of users or user groups to receive your message.</p>
                            <fieldset style="max-height:20em;overflow-y:auto">
                                <input type="checkbox">&nbsp;Administrator</input><br>
                                <input type="checkbox">&nbsp;modmore</input><br>
                                <input type="checkbox">&nbsp;Editors</input>
                            </fieldset>
                            <hr>
                            <fieldset style="max-height:20em;overflow-y:auto">
                                <input type="checkbox">&nbsp;jpdevries</input><br>
                                <input type="checkbox">&nbsp;markh</input><br>
                                <input type="checkbox">&nbsp;joeaugie</input><br>
                                <input type="checkbox">&nbsp;isaacniebeling</input><br>
                                <input type="checkbox">&nbsp;christianseel</input>
                            </fieldset>
                            <!--br-->
                            <div role="group">
                                <textarea placeholder="Your message here&hellip;" rows="3"></textarea>
                            </div>
                            <!--br><br-->
                            <button>Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="shell shell-quick-create">
                    <div class="box">
                        <h2 id="quick-create-resource"><i class="fa fa-pencil"></i><br>Quick Create</h2>
                        <form>
                            <div>
                                <div role="group"><!-- http://stackoverflow.com/a/19687716 -->
                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" name="pagetitle" value="" id="pagetitle">
                                    </div>
                                    <br>
                                    <div>
                                        <label for="title">Long Title</label>
                                        <input type="text" name="longtitle" value="" id="longtitle">
                                    </div>
                                    <br>
                                    <div>
                                        <label for="title">Alias</label>
                                        <input type="text" name="alias" value="" id="alias">
                                    </div>
                                </div>
                                <div role="group">
                                    <label>Template</label>
                                    <select>
                                        <option value="web">Base Template</option>
                                        <option value="api">Blog Post</option>
                                    </select>
                                </div>
                                <div role="group">
                                    <label>Content</label>
                                    <textarea row="8" style="min-height:9em"></textarea>
                                </div>
                            </div>
                            <button disabled>Create Resource</button>
                        </form>
                    </div>
                </div>
                <div id="task-list" class="shell shell-task-list">
                    <form action="#" method="post" class="box">
                        <h2 id="task-list"><i class="fa fa-circle-o"></i><br>Task List</h2>
                        <!--aside class="alert">
                            <p class="message"><i class="fa fa-exclamation-triangle"></i>&nbsp;Please <a class="apparent-link" href="http://enable-javascript.com" target="_blank">enable <code>JavaScript</code></a> for full use of this&nbsp;component.</p>       
                        </aside-->
                        <ul class="naked">
                            <li>
                                <label for="yolo" style="font-size:inherit;text-transform:none;font-weight:normal"><input name="install_modx" type="checkbox">&nbsp;Install MODX</label>
                            </li>
                            <li>
                                <label for="yolo" style="font-size:inherit;text-transform:none;font-weight:normal"><input name="yolo" type="checkbox">&nbsp;Set your <code>site_name</code></label>
                            </li>
                        </ul>
                        <footer class="add-item">
                            <input required ref="TaskTitle" type="text" name="text" placeholder="Add a new item&hellip;" />
                            <button type="submit" title=".no-js users are taken to a task-list landing page with this component only">Save</button>
                        </footer>
                    </form>
                </div>
                <div class="shell shell-getresources">
                    <div class="box">
                        <header>
                            <h2 style="text-transform:none"><i class="fa fa-list"></i><br>getResources</h2>
                            <div class="tert-nav">
                                <a href="=&quot;#&quot;" title="Expand Media View" class="expand-btn"><i class="fa fa-expand"></i></a>
                            </div>
                        </header>
                        <p><code>getResources</code> is a general purpose <code>Resource</code> listing and summarization snippet.</p>
                        <div class="">
                            <form class="liquid-form">
                                <fieldset>
                                   <label for="parents" title="Comma-delimited list of ids serving as parents. Use -1 to ignore parents when specifying resourcesto include. If this is not done, getResources assumes &parents as the current resource and reads its children from there (plus the resources given in &resources = unexpected results).">parents</label>
                                   <input type="text" name="parents" value="1,10" id="parents"> 
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="resources" title="Comma-delimited list of ids to include in the results. Prefix an id with a dash to exclude the resource from the result.">resources</label>
                                    <input type="text" name="resources" value="" id="resources">
                                </fieldset>
                                <fieldset>
                                    <label for="depth" title="Integer value indicating depth to search for resources from each parent. First level of resources beneath parent is depth">depth</label>
                                    <input type="number" min="0" step="1" name="depth" value="10" id="depth">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="tvFilters" title="Can be used to filter resources by certain TV values.">TV Filters</label>
                                    <input type="text" name="tvFilters" value="" id="tvFilters">
                                </fieldset>
                                <fieldset>
                                    <label for="sortby" title="Any Resource Field (excluding Template Variables) to sort by. Some common fields to sort on are publishedon, menuindex, pagetitle etc, but see the Resources documentation for all fields">Sort By</label>
                                    <input type="text" name="sortby" value="" id="sortby" placeholder="createdon">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="publishedon">Published On</label>
                                    <input type="text" name="publishedon" value="" id="publishedon">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="sortbyAlias" title="Query alias for sortby field">Sort by Alias</label>
                                    <input type="text" name="sortbyAlias" value="" id="sortbyAlias">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="sortbyEscaped" title="Escapes the field name specified in sortby">Sort by Escaped</label>
                                    <input type="text" name="sortbyEscaped" value="" id="sortbyEscaped">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="sortdir" title="Order which to sort by">Sort Dir</label>
                                    <input type="text" name="sortdir" value="" id="sortdir">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="sortdirtv" title="Order which to sort by when using sortbyTV">Sort Dir</label>
                                    <input type="text" name="sortdirtv" value="" id="sortdirtv">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="sortbytv" title="Template Variable to sort by">Sort by TV</label>
                                    <input type="text" name="sortbytv" value="" id="sortbytv">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="sortbyTVType" title="Specify the data type of the sortby TV. Possible values are string, integer, decimal, datetime">Sort by TV Type</label>
                                    <input type="text" name="sortbyTVType" value="" id="sortbyTVType">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="limit" title="Limits the number of resources returned. Use `0` for unlimited results.">Limit</label>
                                    <input type="number" min="0" step="1" name="limit" value="5" id="limit">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="offset" title="An offset of resources returned by the criteria to skip">Offset</label>
                                    <input type="text" name="offset" value="" id="offset">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="where" title="A JSON-style expression of criteria to build any additional where clauses from. See below for an example">Where</label>
                                    <textarea type="text" class="code" name="where" value="" id="where" rows="3"></textarea>
                                </fieldset>
                                <fieldset class="hideable">
                                    <label title="Comma-delimited list of context keys to limit results by; if empty, contexts for all specified parents will be used (all contexts if 0 is specified)">Context</label>
                                    <input name="context[]" type="checkbox" value="web">&nbsp;web</input><br>
                                    <input name="context[]" type="checkbox" value="api">&nbsp;api</input>
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="showUnpublished" title="If true, will also show Resources if they are unpublished.">Show Unpublished</label>
                                    <input type="checkbox" name="showUnpublished" value="1" id="showUnpublished" />&nbsp;Yes
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="showDeleted" title="If true, will also show Resources regardless if they are deleted.">Show Deleted</label>
                                    <input type="checkbox" name="showDeleted" value="1" id="showDeleted" />&nbsp;Yes
                                </fieldset>
                                <fieldset>
                                    <label for="showHidden" title="If true, will show Resources regardless if they are hidden from the menus.">Show Hidden</label>
                                    <input type="checkbox" name="showHidden" value="1" id="showHidden" />&nbsp;Yes
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="hideContainers" title="If set, will not show any Resources marked as a container (isfolder).">Hide Containers</label>
                                    <input type="checkbox" name="hideContainers" value="1" id="hideContainers" />&nbsp;Yes
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="includeContent" title="Indicates if the content of each resource should be returned in the results">Include Content</label>
                                    <input type="checkbox" name="includeContent" value="1" id="includeContent" />&nbsp;Yes
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="includeTVs" title="Indicates if TemplateVar values should be included in the properties available to each resource template">Include TVs</label>
                                    <input type="checkbox" name="includeTVs" value="1" id="includeTVs" />&nbsp;Yes
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="includeTVList" title="An optional comma-delimited list of TemplateVar names to include explicitly if includeTVs is 1">Include TV List</label>
                                    <input type="text" name="includeTVList" value="" id="includeTVList">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="prepareTVs" title="Prepares media source-dependant TemplateVar values.">Prepare TVs</label>
                                    <input type="checkbox" name="prepareTVs" value="1" id="prepareTVs" checked>&nbsp;Yes
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="prepareTVList" title="Limits the TVs that are prepared to those specified by name in a comma-delimited list">Prepare TV List</label>
                                    <input type="text" name="prepareTVList" value="" id="prepareTVList">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="processTVs" title="Indicates if TemplateVar values should be rendered as they would on the resource being summarized. TemplateVars must be included (see includeTVs/includeTVList) to be processed.">Process TVs</label>
                                    <input type="text" name="processTVs" value="" id="processTVs">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="processTVList" title="An optional comma-delimited list of TemplateVar names to process explicitly. TemplateVars specified here must be included via includeTVs/includeTVList">Process TV List</label>
                                    <input type="text" name="processTVList" value="" id="processTVList">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="tvPrefix" title="The prefix for TemplateVar properties">TV Prefix</label>
                                    <input type="text" name="tvPrefix" value="" id="tvPrefix" placeholder="tv.">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="idx" title="You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered">idx</label>
                                    <input type="text" name="idx" value="" id="idx">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="first" title="Define the idx which represents the first resource">First</label>
                                    <input type="text" name="first" value="" id="first" placeholder="1">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="last" title="Define the idx which represents the last resource. Default is # of resources being summarized + first - 1">Last</label>
                                    <input type="text" name="last" value="" id="last">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="totalVar" title="Define the key of a placeholder set by getResources indicating the total number of Resources that would be selected notconsidering the limitvalue.">Total Var</label>
                                    <input type="text" name="totalVar" value="" id="totalVar" placeholder="total">
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="debug" title="If true, will send the SQL query to the MODX log.">Debug</label>
                                    <input type="checkbox" name="debug" value="1" id="debug">&nbsp;Yes
                                </fieldset>
                                <fieldset class="hideable">
                                    <label for="cache" title="If true, allows getResource Chunk call to be cached">Cache</label>
                                    <input type="checkbox" name="cache" value="1" id="cache">&nbsp;Yes
                                </fieldset>
                            </form>
                            <hr>
                            <textarea name="code" class="code code-selectable" rows="3" onclick="this.focus();this.select()" readonly>[[!getResources? &parents=`1,10` &context=`0` &prepareTVs=`1`]]</textarea>
                            <hr>
                            <nav class="horz-nav">
                                <script>document.write('<button class="touchless copy"><a href="#">Copy</a></button>');</script>
                                <button><a href="#">Save as Chunk</a></button>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="shell shell-teleport">
                    <div class="box">
                        <h2 id="teleport"><i class="fa fa-rocket"></i><br>Teleport</h2>
                        <div>
                            <h4><i class="fa fa-file-zip-o"></i>&nbsp;Create a Snapshot</h4>
                            <form>
                                <select>
                                    <option value="changeset">Change Set</option>
                                    <option value="complete" selected>Complete</option>
                                    <option value="complete_db">Complete Database</option>
                                    <option value="develop">Develop</option>
                                    <option value="elements">Elements</option>
                                    <option value="packages">Packages</option>
                                    <option value="resource_children">Resource Children</option>
                                    <option value="resources">Resources</option>
                                    <option value="settings">Settings</option>
                                    <option value="user">User</option>
                                    <option value="users">Users</option>
                                </select>
                                <button type="submit" style="margin-top:1em">Create Snapshot Now</button>
                            </form>
                            <hr>
                            <h4><i class="fa fa-upload"></i>&nbsp;Inject Snapshot</h4>
                            <p style="margin-bottom:1em">Snapshots are immediately injected and may overwrite all existing data. <strong>Backup first</strong>.</p>
                            <select>
                                <option>Choose a Snapshot to Inject&hellip;</option>
                                <option value="snapshot_a">Snapshot A</option>
                                <option value="snapshot_b">Snapshot B</option>
                            </select>
                            <div style="margin-top:0.4em;display:block">
                                    <input type="checkbox" style=""><small>&nbsp;I've backed up my data and understand I could <strong title="Teleport Injections overwrite existing data. Use caution.">loose it all</strong>.</small></input>
                            </div>                            
                            <button type="submit" style="margin-top:1em" disabled>Inject Snapshot</button>
                        </div>
                    </div>
                </div>
                <div class="shell shell-whos-online">
                    <div class="box">
                        <h2 id="whos_online" title="Recent User Activity"><i class="fa fa-users"></i><br>Who's Online</i></h2>
                        <p>Within the last 20 minutes we've seen activity from the following users.</p>
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>User's ID</th>
                                    <th>Last hit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>markh</td>
                                    <td>1</td>
                                    <td>4 minutes</td>
                                    <td>Resource Edit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="shell recently-edited">
                    <div class="box">
                        <h2 id="recently_edited"><i class="fa fa-pencil-square-o"></i><br>Recently Edited</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Resource's Title</th>
                                    <th><i class="fa fa-lock"></i></th>
                                    <th>Published</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">168</a></td>
                                    <td><a href="#">temp</a></td>
                                    <td><a href="#" title="Edit this resource now"><i class="fa fa-unlock"></i></a></td>
                                    <td><input type="checkbox">&nbsp;No</input></td>
                                </tr>
                                <tr>
                                    <td><a href="#">184</a></td>
                                    <td><a href="#" title="MODX is greater than the sum of it's parts">Community</a></td>
                                    <td><a href="#" title="Edit this resource now"><i class="fa fa-unlock"></i></a></td>
                                    <td><input type="checkbox" checked>&nbsp;Yes</input></td>
                                </tr>
                                <tr>
                                    <td><a href="#">185</a></td>
                                    <td><a href="#">test</a></td>
                                    <td><i class="fa fa-lock" title="Sorry, This Resource is locked by user markh"></i></td>
                                    <td><input type="checkbox">&nbsp;No</input></td>
                                </tr>
                                <tr class="locked">
                                    <td><a href="#">41</a></td>
                                    <td><a href="#">Contact</a></td>
                                    <td><a href="#" title="Edit this resource now"><i class="fa fa-unlock"></i></a></td>
                                    <td><input type="checkbox" checked>&nbsp;Yes</input></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="shell shell-users">
                    <div class="box">
                        <h2 id="users"><i class="fa fa-group"></i><br>Users</h2>  
                        <section>
                            <form class="search-bar">
                                <input type="search" placeholder="is:user is:active">
                                <button type="submit"><i class="fa fa-search"></i>&nbsp;<span class="js-rem">Search</span></button>
                            </form>
                            <table class="grid">
                                <thead>
                                    <th style="width:2em"><input type="checkbox"></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Active</th>
                                    <th>Blocked</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:2em"><input type="checkbox"></td>
                                        <td>2</td>
                                        <td>jpdevries</td>
                                        <td>JP DeVries</td>
                                        <td>jp@modmore.com</td>
                                        <td>
                                            <input type="checkbox" checked>&nbsp;Yes</input>
                                        </td>
                                        <td>
                                            <input type="checkbox">&nbsp;No</input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:2em"><input type="checkbox"></td>
                                        <td>3</td>
                                        <td>markh</td>
                                        <td>Mark Hamstra</td>
                                        <td>mark@modmore.com</td>
                                        <td>
                                            <input type="checkbox" checked>&nbsp;Yes</input>
                                        </td>
                                        <td>
                                            <input type="checkbox">&nbsp;No</input>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <!--h3 style="margin-bottom:1em">Create a New User</h3-->
                            <form action="" class="create-user">
                                <div class="username" style="margin-bottom:1em">
                                    <label for="username">username</label>
                                    <input required type="text" name="username" value="" id="username">
                                </div>
                                <div class="fullname" style="margin-bottom:1em">
                                    <label for="fullname">fullname</label>
                                    <input type="text" name="fullname" value="" id="fullname">
                                </div>
                                <div class="email" style="margin-bottom:1em">
                                    <label for="email">email</label>
                                    <input required type="email" name="email" value="" id="email">
                                </div>
                                <div class="boolean-options" style="margin-bottom:1em">
                                    <div>
                                        <div>
                                            <input type="checkbox" name="active" value="" id="active">&nbsp;<label for="active" style="display:inline">Active</label>
                                        
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <input type="checkbox" name="blocked" value="" id="blocked">&nbsp;<label for="blocked" style="display:inline">Blocked</label>
                                        
                                        
                                        </div>
                                    </div>
                                </div>
                                <button>Create User</button>
                            </form>
                        </section>
                    </div>
                </div>
                <div class="shell shell-news-feed">
                    <div class="box">
                        <h2 id="news-feed"><a href="#" class="rss" title="Subscribe to the News RSS Feed"><i class="fa fa-rss"></i></a><br>News Feed</h2>
                        <section>
                            <article>
                                <header>
                                    <a href="#"><h3>Revo 2.3.3 &mdash; Over 40 Fixes and Improvements</h3></a>
                                    <p>
                                       Today we released Revolution 2.3.3. This patch release includes over 40 fixes and improvements.  
                                    </p>
                                </header>
                                <div>
                                    <p>
                                        Here are just some of the highlights of Revolution 2.3.3:
                                    </p>
                                    <ul class="dis-ul">
                                        <li>Fixed <code>Context</code> settings remove and update from window </li>
                                        <li>Fixed autoredirect after creating new <code>User</code></li>
                                        <li>Fixed <code>@INHERIT</code> binding in <code>Template Variables</code></li>
                                        <li>Fixed showing lock tree icon for locked <code>Resources</code></li>
                                        <li>Added option to delete property from <code>Property Set</code> using the UI </li>
                                        <li>Fixed showing Rich Text Editor in all resource types </li>
                                        <li>For a complete list of changes in MODX Revolution 2.3.3 view the <a href="https:/raw.githubusercontent.com/modxcms/revolution/v2.3.3-pl/core/docs/changelog.txt" target="_blank" rel="nofollow">changelog</a><br>
                                        </li>
                                    </ul>
                                    <h4>Contributors</h4>
                                    <p>
                                        Let's take the time to thank the individual contributors of this release: <a href="https:/github.com/argnist" target="_blank" rel="nofollow">argnist</a>, <a href="https:/github.com/bartholomej" target="_blank" rel="nofollow">bartholomej</a>, <a href="https:/github.com/BobRay" target="_blank" rel="nofollow">BobRay</a>, <a href="https:/github.com/danyaPostfactum" target="_blank" rel="nofollow">danyaPostfactum</a>, <a href="https:/github.com/enrichit" target="_blank" rel="nofollow">enrichit</a>, <a href="https:/github.com/goldsky" target="_blank" rel="nofollow">goldsky</a>, <a href="https:/github.com/hansek" target="_blank" rel="nofollow">hansek</a>, <a href="https:/github.com/Jako" target="_blank" rel="nofollow">Jako</a>, <a href="https:/github.com/Lefthandmedia" target="_blank" rel="nofollow">Lefthandmedia</a>, <a href="https:/github.com/markwillis82" target="_blank" rel="nofollow">markwillis82</a>, <a href="https:/github.com/numee" target="_blank" rel="nofollow">numee</a>, <a href="https:/github.com/opengeek" target="_blank" rel="nofollow">opengeek</a>, <a href="https:/github.com/OptimusCrime" target="_blank" rel="nofollow">OptimusCrime</a>, <a href="https:/github.com/pixelchutes" target="_blank" rel="nofollow">pixelchutes</a>, <a href="https:/github.com/rtripault" target="_blank" rel="nofollow">rtripault</a>, <a href="https:/github.com/sottwell" target="_blank" rel="nofollow">sottwell</a>, <a href="https:/github.com/TheBoxer" target="_blank" rel="nofollow">TheBoxer</a>, and <a href="https:/github.com/whitebyte" target="_blank" rel="nofollow">whitebyte</a>.
                                    </p>
                                    <h4>Ongoing Security</h4>
                                    <p>
                                        Security is an Ongoing Process. We cannot stress how important it is to be running the most current version of MODX. We are always improving security and staying in the habit of regular upgrades dramatically reduces the chance of your site getting hacked.
                                    </p>
                                    <h4>Getting Started</h4>
                                    <p>
                                        Here's what you need to get started or upgrade to MODX Revolution 2.3.3:
                                    </p>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
                <div class="shell shell-security-feed">
                    <div class="box">
                        <h2 id="security-feed" title="Keep your Site secure by staying informed"><a href="" title="Subsribe to the RSS Security Feed" class="rss"><i class="fa fa-bullhorn"></i></a><br>Security Feed</h2>
                        <div class="feed">
                            <h4>Description</h4>
                            <p>A significant vulnerability was discovered in the Manager login of MODX Revolution that also affects the use of the Login Extra. A malicious user could formulate a link that automatically logs the user into their own account, then redirects the user to a site the attacker controls immediately, exposing the user's CSRF token. This can be exploited with or without getting the user to enter their credentials in the form.</p>
                            
                            <h4>Affected Releases</h4>
                            <p>All MODX Revolution releases prior to and including 2.2.14.</p>
                            
                            <h4>Solution</h4>
                            <p>Upgrade to <a href="http://modx.com/download/release/revolution-2.2.15-pl" target="_blank" rel="nofollow">MODX Revolution 2.2.15</a>. Due to the nature of this issue and the number of files requiring changes the solution is to upgrade. No installable patch or fileset is available for prior versions.</p>
                            
                            <h4>Acknowledgement</h4>
                            <p>We would like to thank Narendra Bhati, of <a href="http://www.sumasoft.com" target="_blank" rel="nofollow">Suma Soft</a> for bringing this issue to our attention.</p>
                            
                            <h4>Additional Information</h4>
                            <p>For additional information, please use the <a href="http://modx.com/company/contact/" target="_blank" rel="nofollow">MODX Contact Form</a></span><span class="date_stamp">Wed 16 Jul 2014 08:02:20 AM PDT</span></p>
                        </div>
                    </div>
                </div>
                <div class="shell shell-forum-post">
                    <div class="box">
                        <h2 id="forum"><i class="fa fa-comments"></i><br>Post to the Forums</h2>
                        <p style="text-align:center;margin-bottom:1.5em">Learn how to <a href="#" title="If you’re having technical problems, please supply adequate details: web server type and version; PHP version, configuration and how it runs; MySQL details and especially the MODX version and list of Add-ons installed.">help us help you</a> with<br>our <a href="#" class="apparent-link">Forum&nbsp;Guidelines</a></p>
                        <form>
                            <fieldset class="unaligned focus-hard">
                                <div class="primary">
                                    <input type="radio" name="posttype">&nbsp;Discussion</input>
                                </div>
                                <div class="secondary">
                                    <input type="radio" name="posttype" checked>&nbsp;Question</input>  
                                </div>
                            </fieldset>
                            
                            <input type="text" name="postitle" placeholder="Post Title" id="postitle">
                            <div style="margin:1em 0">
                                <textarea placeholder="Post your message here&hellip;" rows="8"></textarea>
                            </div>
                            <button>Start Post</button>
                        </form>
                    </div>
                </div>
                <div class="shell shell-contexts">
                    <div class="box">
                        <h2 id="contexts"><i class="fa fa-sitemap"></i><br>Contexts</h2>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-globe"></i>&nbsp;web</h3>
                                        <p>Default web context</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3><i class="fa fa-cube"></i>&nbsp;api</h3>
                                        <p>API Subdomain. Servers JSON to mobile app.</p>
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <a href="#"><button>Create a New Context</button></a>
                        </nav>
                    </div>
                </div>
                <div class="shell shell-twitter">
                    <div class="box">
                        <h2><i class="fa fa-twitter"></i><br>Twitter</h2>
                        <p>MODX has an <a class="apparent-link" href="http://twitter.com/modx">active community</a> on Twitter. You could be <span class="char-count">140</span> characters or less away from solving your next MODX dilemma. </p>
                        <form>
                            <div style="margin-bottom:1em">
                                <textarea placeholder="I'm new to #MODX. Can anybody lend a hand?" rows="3" maxlength="140" required></textarea>
                            </div>
                            <button disabled>Send Tweet</button>
                        </form>
                    </div>
                </div>
                <div class="shell shell-modx-university">
                    <div class="box">
                        <h2><i class="fa fa-university"></i><br>MODX University</h2>
                        <p>The more you know the less you know, you know? Whether you are a newbie, have been using MODX for a while, or an advanced user MODX University has relevant content for you.</p>
                        <p>Stay up to date while participate in sharing the latest MODX tips, tricks, best practices.</p>
                        <p>Help up improve our documentation.</p>
                        <p>Submit an article to the Review Board.</p>
                    </div>
                </div>
                <div class="shell shell-error-log">
                    <div class="box">
                        <h2 title="*We never claimed to be perfect"><i class="fa fa-terminal"></i><br>Error Log</h2>
                        <p style="text-align:center">For not your client eye's only. <a href="#" title="Download your MODX Error Log (20.34MB)"><i class="fa fa-download"></i></a></p><br>
                        <textarea rows="10" cols="50" onclick="this.focus();this.select()" readonly="readonly">
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src0d2484c6fe6aaa92230f57e69f3240b1_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__srcd918629a17b21cdccfadc284c2d8f127_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src4a679ee6c8f63b76832b69ce242be4ee_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src681cac870357fd3a06975af23e4d0622_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__srcefbc1b5b6db4954c25f00660aa4de3cd_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src95d24440dacdab3a200a547be07c1de8_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src97aa3f9d53e2927dba8cb833ddc2dece_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__srcb669868572906c0bcd75300e95961925_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src5e2a3247b0de81c9d22dd591507069d8_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src94c8dff1117a94e626237eb9c41b4108_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:29:43] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:29:45] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/modx/red/core/components/redactor/processors/media/uploadimage.class.php
[2015-02-13 05:29:45] (ERROR @ /modx/red/assets/components/redactor/connector.php) 
[2015-02-13 05:29:45] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/lodx/redactor/assets/uploads/devries_development_avatar.png
[2015-02-13 05:29:45] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/lodx/redactor/assets/uploads/devries_development_avatar_1.png
[2015-02-13 05:29:45] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/lodx/redactor/assets/uploads/devries_development_avatar_2.png
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src4a679ee6c8f63b76832b69ce242be4ee_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src681cac870357fd3a06975af23e4d0622_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src0d2484c6fe6aaa92230f57e69f3240b1_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__srcd918629a17b21cdccfadc284c2d8f127_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__srcefbc1b5b6db4954c25f00660aa4de3cd_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src96611c0414e8c7e61e1737d3d8c9f611_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src95d24440dacdab3a200a547be07c1de8_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src5e2a3247b0de81c9d22dd591507069d8_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src94c8dff1117a94e626237eb9c41b4108_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__src97aa3f9d53e2927dba8cb833ddc2dece_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:25] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:26] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) phpThumb was unable to generate a thumbnail for: /Users/jP/Sites/lodx/redactor/core/cache/phpthumb/localhost.dev__srcb669868572906c0bcd75300e95961925_par3c3e7e559cea40c93b9a1b3478d58c4d_dat0.jpeg
[2015-02-13 05:30:26] (ERROR @ /lodx/redactor/connectors/system/phpthumb.php) Error outputting thumbnail:
OutputThumbnail() failed because !is_resource($this->gdimg_output) in file "phpthumb.class.php" on line 572
[2015-02-13 05:30:28] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/modx/red/core/components/redactor/processors/media/uploadimage.class.php
[2015-02-13 05:30:28] (ERROR @ /modx/red/assets/components/redactor/connector.php) Array
(
[path] => 
[pathIsRelative] => 1
[pathAbsolute] => /Users/jP/Sites/lodx/redactor/
[pathAbsoluteWithPath] => /Users/jP/Sites/lodx/redactor/assets/uploads/
[pathRelative] => assets/uploads/
[urlIsRelative] => 1
[url] => 
[urlAbsolute] => /lodx/redactor/
[urlAbsoluteWithPath] => /lodx/redactor/assets/uploads/
[urlRelative] => assets/uploads/
)

[2015-02-13 05:30:28] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/lodx/redactor/assets/uploads/devries_development_avatar.png
[2015-02-13 05:30:28] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/lodx/redactor/assets/uploads/devries_development_avatar_1.png
[2015-02-13 05:30:28] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/lodx/redactor/assets/uploads/devries_development_avatar_2.png
[2015-02-13 05:30:28] (ERROR @ /modx/red/assets/components/redactor/connector.php) /Users/jP/Sites/lodx/redactor/assets/uploads/devries_development_avatar_3.png
                    </textarea>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?></body></html>
