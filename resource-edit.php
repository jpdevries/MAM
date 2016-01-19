<?php include 'functions.php';get_header(); ?>
<script>
  var MODx = {
      resource:{id:'5'},
      tree:{branch:'0'}
  };
</script>
    </head>
    <body class="resource-edit">
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
                                            <td><i class="fa fa-file-text-o" title="Resource Edit Concept"></i>&nbsp;<a href="#" title="ID: 5; Published"><strong>Resource Edit Concept</strong></a></td>
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
            <aside class="alert">
                <p class="message"><i class="fa fa-lightbulb-o"></i>&nbsp;You are <a href="http://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources" target="_blank">creating a new <code>Resource</code></a> under the <code>web</code> <code>context</code>.<br>Once saved, it will be assigned&nbsp;a&nbsp;unique&nbsp;id. <a class="tip" href="http://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources" target="_blank" title="Learn More about Creating Resources in MODX">Learn more.</a></p>
            </aside>
            <div class="dashbox">
                <div class="shell shell-greedy">
                    <section id="resource-meta" class="resource-meta-edit box">
                        <header>
                            <a href="#" title="Publishing a Document in MODX can be as quick and easy or time consuming as you make it. Enjoy creating.">
                                <h3><i class="fa fa-file-text-o"></i>&nbsp;Document</h3>
                            </a>
                        </header>
                        <div class="focus">
                            <div class="primary">
                                <fieldset id="pagetitle">
                                    <label for="pagetitle">Title</label>
                                    <input required type="text" value="" name="pagetitle" placeholder="Enter a title of your Resource"></input>
                                </fieldset>
                                <fieldset id="longtitle">
                                    <label for="longtitle">Long Title</label>
                                    <input type="text" value="" name="longtitle" placeholder="Handy for search engines and further description."></input>
                                </fieldset>
                                <fieldset>
                                    <label for="description">Description</label>
                                    <textarea id="description" rows="3" placeholder="Useful for meta descriptions."></textarea>
                                </fieldset>
                                <fieldset>
                                    <label for="introtext">Intro Text</label>
                                    <textarea id="introtext" rows="2" placeholder="A brief summary of the document." max-length="140"></textarea>
                                </fieldset>
                            </div>
                            <div class="secondary">
                                <fieldset>
                                    <label for="template-select">Template</label>
                                    <select name="template-select" class="template-select" title="Choose a Template&hellip;">
                                        <option value="1" selected>Base Template</option>
                                        <option value="2">Other Template</option>
                                    </select>
                                </fieldset>
                                <fieldset>
                                    <label for="alias">Alias</label>
                                    <input required type="text" value="" name="alias" placeholder="FURL alias"></input>
                                </fieldset>
                                <fieldset>
                                    <label for="link_attributes">Link Attributes</label>
                                    <input type="text" value="" name="link_attributes" placeholder="Additonal Attributes"></input>
                                </fieldset>
                                <fieldset class="visibility-options">
                                    <input type="checkbox" title="Hide resource from navigational menus"> Hide from Menus</input><br>
                                    <input type="checkbox" title="Publishes your resource within the given context"> Published</input>
                                </fieldset>
                                <pre class="subtle">
                                    <a href="#" target="_blank" title="This resource will be available at this URL when Published">
                                        <i class="fa fa-external-link-square">&nbsp;http://mysite.com/my-resource</i>
                                    </a>
                                </pre>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="shell shell-greedy">
                    <section id="resouce-content" class="box">
                            <header>
                                <a href="#"><h3><i class="fa fa-file-code-o"></i>&nbsp;Content</h3></a>
                            </header>
                            <fieldset>
                                <textarea id="resource-content" rows="6" placeholder="Main content area. Could obviously be spruced up with premium extras :)"></textarea>
                            </fieldset>
                    </section>
                </div> 
                <div class="shell shell-tags">
                    <section class="box">
                        <header>
                            <a href="#"><h3><i class="fa fa-tags"></i>&nbsp;Tags</h3></a>
                            <div class="tert-nav">
                                <a href=="#" title="Expand Media View" class="expand-btn"><i class="fa fa-expand"></i></a>
                            </div>
                        </header>
                        <p>Tagging this document will make it easier for you and others to find.</p>
                        <form>
                            <fieldset>
                                <input type="text" name="tag" value="bacon, chicken" id="tag">
                            </fieldset>
                        </form>
                        <div class="tags">
                            <ul class="naked">
                                <li>
                                    <input type="checkbox" checked>&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;cheese</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;turkey</input>
                                </li>
                                <li>
                                    <input type="checkbox" checked>&nbsp;chicken</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                                <li>
                                    <input type="checkbox">&nbsp;bacon</input>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="shell shell-release-notes">
                    <div class="box">
                        <header>
                            <a href="#">
                                <h3><i class="fa fa-list"></i>&nbsp;Release Notes</h3>
                            </a>
                        </header>
                        <br>
                        <form>
                            <fieldset>
                                <div>
                                    <label for="package_version">Package Version</label>
                                    <input type="text" name="package_version" value="" id="package_version" placeholder="1.0.0">
                                </div>
                                
                                <div style="margin-top:1em">
                                    <label>Release Channel</label>
                                    <select>
                                        <option value="pl">Public</option>
                                        <option value="dev">Internal Dev</option>
                                    </select>
                                </div>
                                <div style="margin-top:1em">
                                    <label for="release_notes">Notes</label>
                                    <textarea name="release_notes" rows="4" placeholder="This releaes contains bug fixes and optimizations."></textarea>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="shell shell-parent">
                    <section class="box">
                        <header>
                            <a href="#" title="Your Document Your Way"><h3><i class="fa fa-folder"></i>&nbsp;Parent</h3></a>
                        </header>
                        <p>Select the Container your Resource will reside under.</p>
                        <form>
                            <fieldset>
                                <label>Parent Resource</label>
                                <select>
                                    <option value="0" selected>web context (0)</option>
                                    <option value="1">Container A (1)</option>
                                    <option value="2">Container B (2)</option>
                                    <option value="3">Container C (3)</option>
                                    <option value="4">Weblink D (4)</option>
                                    <option value="5">Resource E (5)</option>
                                </select>
                            </fieldset>
                        </form>
                    </section>
                </div>
                <div class="shell shell-settings">
                    <section id="document-settings" class="box">
                            <header>
                                <a href="#" title="Your Document Your Way"><h3><i class="fa fa-gear"></i>&nbsp;Settings</h3></a>
                            </header>
                            <div class="focus">
                                <div class="primary">
                                    <fieldset>
                                        <label>Resource Type</label>
                                        <select>
                                            <option value="modResource">Document</option>
                                            <option value="static">Static Resource</option>
                                            <option value="modSymLink">Symlink</option>
                                            <option value="modWebLink">Weblink</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <label>Content Type</label>
                                        <select>
                                            <option value="CSS">CSS</option>
                                            <option value="HTML" selected>HTML</option>
                                            <option value="javascript">javascript</option>
                                        </select>
                                    </fieldset>
                                    <fieldset class="radio-set content-disposition">
                                        <label>Content Disposition</label>
                                            <p>
                                                <input type="radio" name="content_disposition" value="inline" checked>&nbsp;Inline<br>
                                                <input type="radio" name="content_disposition" value="attachment">&nbsp;Attachment
                                            </p>
                                    </fieldset>
                                </div>
                                <div class="secondary">
                                    <!--fieldset>
                                        <label>Published On</label>
                                        <div class="focus-hard">
                                            <input class="primary" type="date" value="2014-02-06">
                                            <input class="secondary" type="time" value="" placeholder="Published Time">
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <label>Publish Date</label>
                                        <div class="focus-hard">
                                            <input class="primary" type="date" value="2014-02-06">
                                            <input class="secondary" type="time" value="" placeholder="Publish Time">
                                        </div>
                                    </fieldset>
                                    <fieldset class="focus-hard">
                                        <label>Unpublish Date</label>
                                        <div class="focus-hard">
                                            <input class="primary" type="date" value="2014-02-06">
                                            <input class="secondary" type="time" value="" placeholder="Unpublish Time">
                                        </div>
                                    </fieldset-->
                                    <fieldset class="enclosed focus-hard boolean-settings">
                                        <div class="primary">
                                            <input type="checkbox">&nbsp;Container<br>
                                            <input type="checkbox" checked>&nbsp;Searchable<br>
                                            <input type="checkbox" checked>&nbsp;Rich Text<br>
                                            <!--input type="checkbox">&nbsp;Freeze URI-->
                                        </div>
                                        <div class="secondary">
                                            <input type="checkbox" checked>&nbsp;Cacheable<br>
                                            <input type="checkbox" checked>&nbsp;Empty Cache<br>
                                        </div>
                                    </fieldset> 
                                    <fieldset>
                                        <input type="checkbox">&nbsp;Freeze URI<br><br>
                                        <div style="display:none">
                                            <label>URI</label>
                                            <input type="text" name="freeze_uri" value="" id="freeze_uri">
                                        </div>
                                    </fieldset>
                                    <!--fieldset class="document-settings__menu-index">
                                        <label>Menu Index</label>
                                        <input type="number" min="0" step="1" value="0"></input>
                                    </fieldset-->
                                </div>
                            </div>
                            <div style="position:absolute:bottom:1em;right:1em;text-align:right">
                                <a href="#" id="new-field" title="Add a new field"><h3><i class="<a href="resource-edit.php" title="Add a new Resource under the root Web Context"><i class="fa fa-plus-square"></i></a>"></i>&nbsp;</h3></a>
                            </div>
                    </section>
                </div>
                <div class="shell shell-new-setting-master" style="display:none">
                    <section class="box box-new-setting">
                        <form>
                            <header>
                                <h3>
                                    <i class="fa fa-gear"></i>&nbsp;New Field
                                </h3>
                            </header>
                            <fieldset style="margin-top:1em">
                                <label>Type</label>
                                <select>
                                    <option>text</option>
                                    <option selected>textarea</option>
                                    <option>boolean</option>
                                </select>
                            </fieldset>
                            <fieldset>
                                <label>Name</label>
                                <input type="text" placeholder="Name your new Field" required>
                            </fieldset>
                            <fieldset>
                                <label>Value</label>
                                <div class="value">
                                    <textarea rows="3" placeholder="Default value of your new field"></textarea>
                                </div>
                            </fieldset>
                        </form>
                    </section>
                </div>
                <div class="shell shell-menu-index">
                    <section class="box">
                        <header>
                            <a href="#"><h3><i class="fa fa-bars"></i>&nbsp;Menu Index</h3></a>
                            <div class="tert-nav">
                                <a href=="#" title="Expand Media View" class="expand-btn"><i class="fa fa-expand"></i></a>
                            </div>
                        </header>
                        <div class="focus" style="margin-top:1em">
                            <p>Experimental touch-friendly component to replace a drag n' drop tree.</p>
                            <div class="primary" style="margin-bottom:1em">
                                <input class="greedy" type="number" style="font-weight:bold;font-size:5em;text-align:center" value="1" min="0" step="1"></input>
                            </div>
                            <div class="secondary">
                                <h4 style="padding-left:1em"><i class="fa fa-folder"></i>&nbsp;Cooking</h4>
                                <ul class="scrolly-list">
                                    <li><a href="">Sibling A</a></li>
                                    <li><a href="">Sibling B</a></li>
                                    <li><a href="">Sibling C</a></li>
                                    <li><a href=""><strong>This Resource</strong></a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                    <li><a href="">Sibling E</a></li>
                                    <li><a href="">Sibling F</a></li>
                                    <li><a href="">Sibling G</a></li>
                                    <li><a href="">Sibling H</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="shell shell-resource-groups">
                    <section id="resource-groups" class="box">
                        <header>
                            <a href="#"><h3><i class="fa fa-sitemap"></i>&nbsp;Resource Groups</h3></a>
                        </header>
                        <p>Here you can select which Resource Groups this Resource belongs to.</p>
                        <p style="margin:0;text-align:center"><small><i class="helpful-sentence"><i class="fa fa-info-circle" title="When coupled with User Groups, Resource Groups can be used to restrict access to pages and resources."></i> Hm, looks like you don't have any Resource Groups. Would you like to <a href="#" class="decorated-link">create one now</a>?</i></small></p>
                        <!--table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Access</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table-->
                        <br>
                        <nav class="grid-nav">
                            <button href="#" class="clicky" title="Add a new Resource under the root Web Context"><i class="<a href="resource-edit.php" title="Add a new Resource under the root Web Context"><i class="fa fa-plus-square"></i></a>"></i>&nbsp;Add a New Resource Group</button>
                        </nav>
                    </section>
                </div>
                <!--div class="shell shell-freeze-uri">
                    <section class="box">
                        <header>
                            <a href="#">
                                <h3><i class="fa fa-lock"></i>&nbsp;Freeze URI</h3>
                            </a>
                        </header>
                        <div style="margin-top:1em">
                            <form>
                                <fieldset>
                                    <input type="url">
                                </fieldset>
                                <fielset style="display:block;padding:0 1em;text-align:right;font-size:0.86em">
                                    <input type="checkbox" name="enabled" value="" id="enabled">&nbsp;Enabled</input>
                                </fielset>
                            </form>
                            <p>Freezing a Document's URI allows you to explicitly set it's URI relative to the root&nbsp;context. Any&nbsp;resource, any&nbsp;URI.</p>
                        </div>
                    </section>
                </div-->
                <div class="shell shell-publishedon">
                    <section class="box">
                        <header>
                            <a href="#" title="Set when your Document was Published On"><h3><i class="fa fa-calendar"></i>&nbsp;Published On</h3></a>
                        </header>
                        <div class="focus" style="margin-top:1em">
                            <input class="primary" type="date" value="2014-02-06">
                            <input class="secondary" type="time" value="" placeholder="Time">
                        </div>
                    </section>
                </div>
                <div class="shell shell-publisheddate">
                    <section class="box">
                        <header>
                            <a href="#" title="Set when your Document was Published On"><h3><i class="fa fa-calendar"></i>&nbsp;Published Date</h3></a>
                        </header>
                        <div class="focus" style="margin-top:1em">
                            <input class="primary" type="date" value="2014-02-06">
                            <input class="secondary" type="time" value="" placeholder="Time">
                        </div>
                    </section>
                </div>
                <div class="shell shell-unpublishdate">
                    <section class="box">
                        <header>
                            <a href="#" title="Set when your Document is to be unpublished"><h3><i class="fa fa-calendar"></i>&nbsp;Unpublish Date</h3></a>
                        </header>
                        <div class="focus" style="margin-top:1em">
                            <input class="primary" type="date" value="" placeholder="Date">
                            <input class="secondary" type="time" value="" placeholder="Time">
                        </div>
                    </section>
                </div>
                <div class="shell shell-tinyurl">
                    <section class="box">
                        <header>
                                <a href="#" title="Generate a Tiny URL for this Resource"><h3><i class="fa fa-link"></i>&nbsp;TinyURL</h3></a>
                        </header>
                        <p class="unaligned"><code>http://my.site./3234</code></p>
                        <div style="margin-top:1em">
                            <button disabled>Generate Tiny URL</button>
                        </div>
                    </section>
                </div>
                <div class="shell shell-new-tv">
                    <section class="box">
                        <header>
                            <h3 title="Create a New Template Variable that will be assigned to the Base Template."><i class="fa fa-list-alt"></i>&nbsp;New Template Variable</h3>
                        </header>
                        <div style="margin-top:1em">
                            <p>Get things done. <a href="#" class="apparent-link">Create a new</a> Template Variable right here right&nbsp;now.</p>
                            <hr>
                            <form>
                                <fieldset>
                                    <label>Name</label>
                                    <input type="text" required placeholder="Template Variable Name">
                                </fieldset>
                                <fieldset>
                                    <label>Input Type</label>
                                    <select>
                                        <option>text</option>
                                        <option>textarea</option>
                                        <option selected>Yes/No</option>
                                    </select>
                                </fieldset>
                                <hr>
                                <fieldset>
                                    <label>Value</label>
                                    <input type="checkbox">
                                </fieldset>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="shell shell-new-chunk">
                    <section class="box">
                        <header>
                            <h3><i class="fa fa-th-list"></i>&nbsp; New Chunk</h3>
                        </header>
                        <p>Keep your templates DRY with reusable <code>Chunks</code>.</p>
                        <hr>
                        <form>
                            <fieldset>
                                <label>Name</label>
                                <input type="text" required placeholder="Template Variable Name">
                            </fieldset>
                            <fieldset>
                                <label>Category</label>
                                <select>
                                    <option>Choose a Category</option>
                                    <option>Cooking</option>
                                    <option>Surfing</option>
                                </select>
                            </fieldset>
                            <hr>
                            <fieldset>
                                <label>Value</label>
                                <textarea rows="4"></textarea>
                            </fieldset>
                        </form>
                    </section>
                </div>
                <div class="shell shell-greedy shell-save">
                    <div class="box">
                        <button id="save-doc" disabled type="submit" class="very-clicky" style="margin-top:0.5em">Save your Changes</button>           
                        <a href="#"><button id="delete" class="big-button very-clicky">Delete</button></a>
                        <aside class="untouchable">
                            <p>
                                <small>protip: Make use of one of the <a>many keyboard shortcuts</a> with CTRL+S to quickly save your edits.</small>
                            </p>
                        </aside>
                    </div>
                </div>
                <div class="shell shell-message">
                    <div class="box">
                        <header>
                            <h3 id="send-message"><i class="fa fa-send"></i> Send a Message</h3>
                        </header>
                        <form style="margin-top:1em">
                            <h3><label for="recipient">Recipients</label></h3>
                            <!--input type="text" name="recipient" value="" id="recipient"-->
                            <p>We'll make sure to include a link to <a href="#" class="apparent-link">this resource</a> in your message.</p>
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
                            <br>
                            <textarea placeholder="Your message here&hellip;" rows="3"></textarea>
                            <br><br>
                            <button>Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="shell shell-whos-online">
                    <div class="box">
                        <header>
                            <h3 id="whos_online" title="Recent User Activity"><i class="fa fa-users"></i> Who's Online</i></h3>
                        </header>
                        <div style="margin-top:1em">
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
                </div>
                <div class="shell shell-greedy">
                    <section class="box">
                        <header>
                            <h2><i class="fa fa-flag-checkered"></i>&nbsp;<br>What's Next?</h2>
                        </header>
                        <p class="unaligned">
                            Now that you've <a href="#" class="apparent-link">made edits</a> to <code>Resource 29</code> we must ask, what would you like to do next?
                        </p>
                        <nav class="horz-flex">
                            <a href="#resource-view"><button><i class="fa fa-folder"></i>&nbsp;Browse Resources</button></a>
                            <a href="#"><button><i class="fa fa-copy"></i>&nbsp;Duplicate Resource</button></a>
                            <a href="#"><button><i class="fa fa-share"></i>&nbsp;Publish Resource</button></a>
                        </nav>
                    </section>
                </div>
            </div>
            
        </div>
<?php get_footer(); ?></body></html>
