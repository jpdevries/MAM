<?php include './../functions.php';get_header('./../'); ?>
<script>
  var MODx = {
      resource:{id:'10'},
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
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/getresources-tutorial.php" title="ID: 10; Published"><strong>getResources Tutorial</strong></a></td>
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
<?php get_main_nav(); ?>
            </div>
        </section>
        <div class="page-wrapper" style="padding-bottom:6em">
            <!--aside class="alert">
                <p class="message">
                    <i class="fa fa-info-circle"></i>&nbsp;Welcome to your <code data-enunciate="mod ex">MODX</code> Manager. Is this your first time with us? <a class="tip" href="http://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources" target="_blank" title="Learn More about Creating Resources in MODX">Learn more.</a>
                </p>
            </aside-->
            <div class="dashbox">
                <div class="shell shell-greedy">
                    <div class="box">
                        <h2 id="building-a-getresource-wysiwyg-component" class="untransformable"><i class="fa fa-file-code-o"></i><br>Building a getResource WYSIWYG Component</h2>
                        <div class="legible">
                            <p>In this tutorial we will create an example component from scratch. We'll be creating the <a href="#getResources" class="apparent-link"><code>getResources widget</code></a> found below. This widget adds <span class="lightcaps">WYSIWYG</span> ability to create and save configurable <code>getResources</code> calls as  <code>Chunks</code>.</p>
                            <h3>Creating the Form</h3>
                            <p>First we create our basic <code>.box</code> that holds our form. Notice the <code>.expand-btn</code>. This allows our flexible module to be expanded to take up a full column and show show any <code>.hideable</code> elements.</p>
                            <pre class="rainbow-block"><code data-language="html">&lt;div class="shell shell-getResources"&gt;
  &lt;div class="box"&gt;
    &lt;header&gt;
      &lt;h2 id="getResources" style="text-transform:none"&gt;&lt;i class="fa fa-list"&gt;&lt;/i&gt;&lt;br&gt;getResources&lt;/h2&gt;
      &lt;div class="tert-nav"&gt;
        &lt;!-- allow our component to be expandable --&gt;
        &lt;a href="#" title="Expand getResources View" class="expand-btn"&gt;&lt;i class="fa fa-expand"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;/div&gt;
    &lt;/header&gt;
    &lt;p&gt;&lt;code&gt;getResources&lt;/code&gt; is a general purpose &lt;code&gt;Resource&lt;/code&gt; listing and summarization snippet.&lt;/p&gt;
    &lt;div&gt;
      &lt;form action="#" class="liquid-form"&gt;
        &lt;!-- our form will go here pretend it is hooked up to a server action --&gt;
      &lt;/form&gt;
      &lt;hr&gt;
      &lt;!-- we will populate this textarea with our chunk as the form is updated --&gt;
      &lt;textarea name="code" class="code code-selectable" rows="3" onclick="this.focus();this.select()" readonly&gt;[[!getResources]]&lt;/textarea&gt;
      &lt;hr&gt;
      &lt;nav class="horz-nav"&gt;
        &lt;!-- notice the .js-dep class on button.copy. This is because the action is async and requires js --&gt;
        &lt;button class="js-dep copy"&gt;&lt;a href="#"&gt;Copy&lt;/a&gt;&lt;/button&gt;
        &lt;button&gt;&lt;a href="#"&gt;Save as Chunk&lt;/a&gt;&lt;/button&gt;
      &lt;/nav&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>

<p>The <code>.js-dep</code> class allows us to easily hide elements from users without <code>JavaScript</code>. This is fine and well but we must ask ourselves, is that necessary? We can use <code>JavaScript</code> to create the element so it isn't even there in the first place:</p>

<pre><code>
&lt;script&gt;document.write(&#x27;&lt;button class=&quot;copy&quot;&gt;&lt;a href=&quot;#&quot;&gt;Copy&lt;/a&gt;&lt;/button&gt;&#x27;);&lt;/script&gt;
</code></pre>
                            
                            <p style="margin-top:2em">Next, we populate the form with a series of <code>fieldset</code> elements. Each one represents a getResources option and we use a <code>.hideable</code> class to hide field sets in the default collapsed&nbsp;view.</p>
                            
                            <pre class="rainbow-block"><code data-language="html">&lt;div class="shell shell-getresources"&gt;
    &lt;div class="box"&gt;
        &lt;header&gt;
            &lt;h2 id="getResources" style="text-transform:none"&gt;&lt;i class="fa fa-list"&gt;&lt;/i&gt;&lt;br&gt;getResources&lt;/h2&gt;
            &lt;div class="tert-nav"&gt;
                &lt;a href="=&quot;#&quot;" title="Expand Media View" class="expand-btn"&gt;&lt;i class="fa fa-expand"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;/div&gt;
        &lt;/header&gt;
        &lt;p&gt;&lt;code&gt;getResources&lt;/code&gt; is a general purpose &lt;code&gt;Resource&lt;/code&gt; listing and summarization snippet.&lt;/p&gt;
        &lt;div class=""&gt;
            &lt;form action="#" class="liquid-form"&gt;
                &lt;fieldset&gt;
                   &lt;label for="parents"&gt;parents&lt;/label&gt;
                   &lt;input type="text" name="parents" value="1,10" id="parents"&gt; 
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="resources"&gt;resources&lt;/label&gt;
                    &lt;input type="text" name="resources" value="" id="resources"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset&gt;
                    &lt;label for="depth"&gt;depth&lt;/label&gt;
                    &lt;input type="number" min="0" step="1" name="depth" value="10" id="depth"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="tvFilters"&gt;TV Filters&lt;/label&gt;
                    &lt;input type="text" name="tvFilters" value="" id="tvFilters"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset&gt;
                    &lt;label for="sortby"&gt;Sort By&lt;/label&gt;
                    &lt;input type="text" name="sortby" value="" id="sortby" placeholder="createdon"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="publishedon"&gt;Published On&lt;/label&gt;
                    &lt;input type="text" name="publishedon" value="" id="publishedon"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="sortbyAlias"&gt;Sort by Alias&lt;/label&gt;
                    &lt;input type="text" name="sortbyAlias" value="" id="sortbyAlias"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="sortbyEscaped"&gt;Sort by Escaped&lt;/label&gt;
                    &lt;input type="text" name="sortbyEscaped" value="" id="sortbyEscaped"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="sortdir"&gt;Sort Dir&lt;/label&gt;
                    &lt;input type="text" name="sortdir" value="" id="sortdir"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="sortdirtv"&gt;Sort Dir&lt;/label&gt;
                    &lt;input type="text" name="sortdirtv" value="" id="sortdirtv"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="sortbytv"&gt;Sort by TV&lt;/label&gt;
                    &lt;input type="text" name="sortbytv" value="" id="sortbytv"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="sortbyTVType"&gt;Sort by TV Type&lt;/label&gt;
                    &lt;input type="text" name="sortbyTVType" value="" id="sortbyTVType"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="limit"&gt;Limit&lt;/label&gt;
                    &lt;input type="number" min="0" step="1" name="limit" value="5" id="limit"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="offset"&gt;Offset&lt;/label&gt;
                    &lt;input type="text" name="offset" value="" id="offset"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="where"&gt;Where&lt;/label&gt;
                    &lt;textarea type="text" class="code" name="where" value="" id="where" rows="3"&gt;&lt;/textarea&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label&gt;Context&lt;/label&gt;
                    &lt;input name="context[]" type="checkbox" value="web"&gt;&nbsp;web&lt;/input&gt;&lt;br&gt;
                    &lt;input name="context[]" type="checkbox" value="api"&gt;&nbsp;api&lt;/input&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="showUnpublished"&gt;Show Unpublished&lt;/label&gt;
                    &lt;input type="checkbox" name="showUnpublished" value="1" id="showUnpublished" /&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="showDeleted"&gt;Show Deleted&lt;/label&gt;
                    &lt;input type="checkbox" name="showDeleted" value="1" id="showDeleted" /&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset&gt;
                    &lt;label for="showHidden"&gt;Show Hidden&lt;/label&gt;
                    &lt;input type="checkbox" name="showHidden" value="1" id="showHidden" /&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="hideContainers"&gt;Hide Containers&lt;/label&gt;
                    &lt;input type="checkbox" name="hideContainers" value="1" id="hideContainers" /&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="includeContent"&gt;Include Content&lt;/label&gt;
                    &lt;input type="checkbox" name="includeContent" value="1" id="includeContent" /&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="includeTVs"&gt;Include TVs&lt;/label&gt;
                    &lt;input type="checkbox" name="includeTVs" value="1" id="includeTVs" /&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="includeTVList"&gt;Include TV List&lt;/label&gt;
                    &lt;input type="text" name="includeTVList" value="" id="includeTVList"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="prepareTVs"&gt;Prepare TVs&lt;/label&gt;
                    &lt;input type="checkbox" name="prepareTVs" value="1" id="prepareTVs" checked&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="prepareTVList"&gt;Prepare TV List&lt;/label&gt;
                    &lt;input type="text" name="prepareTVList" value="" id="prepareTVList"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="processTVs"&gt;Process TVs&lt;/label&gt;
                    &lt;input type="text" name="processTVs" value="" id="processTVs"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="processTVList"&gt;Process TV List&lt;/label&gt;
                    &lt;input type="text" name="processTVList" value="" id="processTVList"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="tvPrefix"&gt;TV Prefix&lt;/label&gt;
                    &lt;input type="text" name="tvPrefix" value="" id="tvPrefix" placeholder="tv."&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="idx"&gt;idx&lt;/label&gt;
                    &lt;input type="text" name="idx" value="" id="idx"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="first"&gt;First&lt;/label&gt;
                    &lt;input type="text" name="first" value="" id="first" placeholder="1"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="last"&gt;Last&lt;/label&gt;
                    &lt;input type="text" name="last" value="" id="last"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="totalVar"&gt;Total Var&lt;/label&gt;
                    &lt;input type="text" name="totalVar" value="" id="totalVar" placeholder="total"&gt;
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="debug"&gt;Debug&lt;/label&gt;
                    &lt;input type="checkbox" name="debug" value="1" id="debug"&gt;&nbsp;Yes
                &lt;/fieldset&gt;
                &lt;fieldset class="hideable"&gt;
                    &lt;label for="cache" &gt;Cache&lt;/label&gt;
                    &lt;input type="checkbox" name="cache" value="1" id="cache"&gt;&nbsp;Yes
                &lt;/fieldset&gt;
            &lt;/form&gt;
            &lt;hr&gt;
            &lt;textarea name="code" class="code code-selectable" rows="3" onclick="this.focus();this.select()" readonly&gt;&lt;/textarea&gt;
            &lt;hr&gt;
            &lt;nav class="horz-nav"&gt;
                &lt;script&gt;document.write(&#x27;&lt;button class=&quot;copy&quot;&gt;&lt;a href=&quot;#&quot;&gt;Copy&lt;/a&gt;&lt;/button&gt;&#x27;);&lt;/script&gt;
                &lt;button&gt;&lt;a href="#"&gt;Save as Chunk&lt;/a&gt;&lt;/button&gt;
            &lt;/nav&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                            </code></pre>
<hr>                 
<h4>Scripts</h4>                        
<p>Lastly, we add some <code>jQuery</code> to update the code block dynamically as the form is updated and trigger a click action.</p>

<pre class="rainbow-block"><code data-language="javascript">$('.shell-getresources').each(function(){
    var _that = $(this);
    var _form = _that.find('form');
    var _codeArea = _that.find('textarea.code-selectable'); // textarea we write chunk to
    
    _that.find('input, textarea').on('change keyup',function(e){
        var _props = _form.serializeArray(); // get the form data
        
        var _as = [];
        var _dl = {};
                
        // support multiple input checkboxes, kinda weird
        $.each(_props,function(index,prop){
            if(prop.value && prop.name.indexOf('[]') > 1) {
                var _name = prop.name.substring(0,prop.name.indexOf('[]'));
                try {
                    _dl[_name].push(prop.value);
                } catch (variable) {
                    _dl[_name] = [prop.value];
                } 
            }
        });
        $.each(_dl,function(index,prop){
            _props.push({name:index,value:prop.join(',')});
        });
        
        // build the query string
        $.each(_props,function(index,prop){
            if(prop.value && !prop.name.includes('[]') && prop.name != "cache") _as.push(prop.name + '=`' + prop.value + '`');
        });

        var cache = false;
        // hard core way of checking if chunk should be cached based on actual form data
        try {
            cache = (jQuery.grep(_props,function(n,i){return n.name == "cache"})[0].value == "1") ? true : false;
        } catch (e) { } 
        
        // update the view
        _codeArea.val(
            '[[' + ((cache) ? '' : '!') + 'getResources? ' +
            _as.join(' &') +
            ']]'
        );
    }).end().find('.horz-nav .copy').click(function(e){ // make it easy to copy
        e.preventDefault();
        _codeArea.click();
    });
});
</code></pre>

<h3>Conclusion</h3>
<p>We didn't even have to write any <code>CSS</code> or get too crazy with assigning classes. We wrapped everything in a <code>.shell</code> class, which gives us a flexible child of the main <code>dashbox</code> container. Our <code>.box</code> class gives us the pretty white box. We give our <code>&lt;form&gt;</code> a <code>.liquid-form</code> class, which tells the field sets to <strong>lay themselves out cleverly</strong> to fill all the remaining space no matter what size the viewport or encasing component&nbsp;is. We assume that our <code>&lt;form&gt;</code> will be hooked up to a server side script to support saving our new <code>Chunk</code> both asynchronously and synchronously, so we are all good accessibility-wise. We wrote some scripts to add our fancy <span class="lightcaps">WYSIWYG</span> feature.</p>
<p>The main purpose of this tutorial is to show what can be done with a lot of <code>HTML</code>, no <code>CSS</code>, and a little bit of <code>JavaScript</code>. How do <a href="mailto:jp@modmore.com?subject=Ion%20getResources%20Tutorial" class="apparent-link"><i>you think</i></a> we did?</p>
<ul class="naked">
    <li>
        <i class="fa fa-check-circle-o"></i>&nbsp;Accessible
    </li>
    <li>
        <i class="fa fa-check-circle-o"></i>&nbsp;Pretty
    </li>
    <li>
        <i class="fa fa-check-circle-o"></i>&nbsp;Responsive
    </li>
    <li>
        <i class="fa fa-check-circle-o"></i>&nbsp;Asynchronous
    </li>
    <li>
        <i class="fa fa-circle-o"></i>&nbsp;Functional
    </li>
</ul>
<p>We accomplished a lot by starting with <code>HTML</code> and then enhancing it with some scripts. Pat yourself on the back for not using scripts to author your markup for you. You've gotten down and dirty with silk of the web. Doesn't it feel nice? Aside from hooking the form up to the server with a traditional server&ndash;side form handler as well as asynchronously with scripts, we are <strike>ready for a <span class="smallcaps" style="font-weight:inherit">Fri 5:00PM</span> launch</strike>.</p>
<p>Why not give the <code>getResources</code> component a spin&nbsp;below?</p>
                            
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
                <div class="shell shell-getresources">
                    <div class="box">
                        <header>
                            <h2 id="getResources" style="text-transform:none"><i class="fa fa-list"></i><br>getResources</h2>
                            <div class="tert-nav">
                                <a href="=&quot;#&quot;" title="Expand Media View" class="expand-btn"><i class="fa fa-expand"></i></a>
                            </div>
                        </header>
                        <p>getResources is a general purpose Resource listing and summarization snippet.</p>
                        <div class="">
                            <form action="#" class="liquid-form">
                                <fieldset>
                                   <label for="parents" title="Comma-delimited list of ids serving as parents. Use -1 to ignore parents when specifying resourcesto include. If this is not done, getResources assumes &amp;parents as the current resource and reads its children from there (plus the resources given in &amp;resources = unexpected results).">parents</label>
                                   <input type="text" name="parents" value="0" id="parents"> 
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
                            <textarea name="code" class="code code-selectable" rows="3" onclick="this.focus();this.select()" readonly>[[!getResources? parents=`0` &depth=`10` &limit=`5`]]</textarea>
                            <hr>
                            <nav class="horz-nav">
                                <button class="copy"><a href="#">Copy</a></button>
                                <button><a href="#">Save as Chunk</a></button>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="shell shell-greedy shell-congrats">
                    <div class="box">
                        <header>
                            <h2 id="congrats" class="untransformable"><i class="fa fa-trophy"></i><br>Congrats</h2>
                        </header>
                        <p class="unaligned legible"><i class="fa fa-check-circle-o"></i>&nbsp;You've completed Part 1 of the getResources <span class="lightcaps">WYSIWYG</span> Component Tutorial.<br><br><a href="#" class="twitter"><i class="fa fa-twitter"></i>&nbsp;let your peeps know</a>
                        <br><br>
                        <span class="subtle">&mdash;&emsp;or&emsp;&mdash;</span>
                        <br><br>
                        <a href="#">Advance to Part 2&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                        </p>
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
                <div class="shell shell-users">
                    <div class="box">
                        <h2 id="users"><i class="fa fa-group"></i><br>Users</h2>  
                        <section>
                            <form class="search-bar">
                                <input type="search" placeholder="is:user is:active">
                                <button type="submit"><i class="fa fa-search"></i>&nbsp;<span class="js-rem">Search</span></button>
                            </form>
                            <table>
                                <thead>
                                    <th><input type="checkbox"></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Active</th>
                                    <th>Blocked</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
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
                                        <td><input type="checkbox"></td>
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
                        </section>
                    </div>
                </div>
                <div class="shell shell-forum-post">
                    <div class="box">
                        <h2 id="forum"><i class="fa fa-comments"></i><br>Post to the Forums</h2>
                        <p style="text-align:center">Learn how to <a href="#" title="If you’re having technical problems, please supply adequate details: web server type and version; PHP version, configuration and how it runs; MySQL details and especially the MODX version and list of Add-ons installed.">help us help you</a> with our <a href="#" class="apparent-link">Forum&nbsp;Guidelines</a>.</p>
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
                <div class="shell shell-modx-university">
                    <div class="box">
                        <h2><i class="fa fa-university"></i><br>MODX University</h2>
                        <p>The more you know the less you know, you know? Whether you are a newbie, have been using MODX for a while, or an advanced user MODX University has relevant content for you.</p>
                        <p>Stay up to date while participate in sharing the latest MODX tips, tricks, best practices.</p>
                        <p>Help up improve our documentation.</p>
                        <p>Submit an article to the Review Board.</p>
                    </div>
                </div>
            </div>
        </div>
        
        
            
<?php get_footer('./../'); ?></body></html>
