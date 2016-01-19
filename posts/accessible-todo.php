<?php include '../functions.php';get_header('./../'); ?>
<script>
  var MODx = {
      resource:{id:'15'},
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
        <div id="accessible-todo" class=" page-wrapper" style="padding-bottom:6em">
            <section style="margin-top:1em">
                <div class="dashbox">
                    <div class="shell shell-legible shell-readme speakable" data-transcript="accessible-todo">
                        <div class="box legible">
                                                    <h1 style="text-transform:none"><!--i class="fa fa-search clickable speaker-btn"></i><br-->Creating an Accessible to&ndash;do list<br>powered by <code>React.js</code><br><code class="subtle" style="position:absolute;top:0;right:0;opacity:1">#a11y</code></h1>
<p>You may have noticed the interactive to&ndash;do list component on our <a href="index.php">Dashboard Concept</a> page. This component is progressively enhanced all the way from a basic <code>#a11y</code> form to an asynchronous <code>React.js</code> component; we thought we'd share it.</p>                                           
<h4>Initial Markup</h4>
<pre class="rainbow-block unspeakeable"><code data-language="html">&lt;div id=&quot;task-list&quot; class=&quot;shell shell-task-list&quot;&gt;
  &lt;form action=&quot;#&quot; method=&quot;post&quot; class=&quot;box&quot;&gt;
    &lt;h2 id=&quot;task-list&quot;&gt;&lt;i class=&quot;fa fa-circle-o&quot;&gt;&lt;/i&gt;&lt;br&gt;Task List&lt;/h2&gt;
    &lt;ul class=&quot;naked&quot;&gt;
      &lt;li&gt;
        &lt;label for=&quot;item_0&quot;&gt;&lt;input name=&quot;item_0&quot; type=&quot;checkbox&quot;&gt;&amp;nbsp;Install MODX&lt;/label&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;label for=&quot;item_1&quot;&gt;&lt;input name=&quot;item_1&quot; type=&quot;checkbox&quot;&gt;&amp;nbsp;Set your &lt;code&gt;site_name&lt;/code&gt;&lt;/label&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;footer class=&quot;add-item&quot;&gt;
      &lt;input required type=&quot;text&quot; name=&quot;new_item&quot; placeholder=&quot;Add a new item&amp;hellip;&quot; /&gt;
      &lt;button type=&quot;submit&quot;&gt;Save&lt;/button&gt;
    &lt;/footer&gt;
    &lt;/form&gt;
&lt;/div&gt;</code></pre>
<h4><code>React.js</code> component</h4>
<pre class="rainbow-block unspeakeable"><code data-language="js">var TodoList = React.createClass({
  itemClicked: function(i) {
      this.props.handleItemClicked(i);
  },
  render: function() {
  var that = this;
    var createItem = function(item,i) {
        var icon = &#x27;fa &#x27; + ((item.done) ? &#x27;fa-check-circle-o&#x27; : &#x27;fa-circle-o&#x27;);
        return (
          &lt;li onClick={that.itemClicked.bind(that,i)}&gt;
            &lt;p&gt;&lt;i className={icon}&gt;&lt;/i&gt;&amp;nbsp;{item.text}&lt;/p&gt;
          &lt;/li&gt;
        );
    };
    return &lt;ul className=&quot;naked&quot;&gt;{this.props.items.map(createItem)}&lt;/ul&gt;;
  }
});
var TodoApp = React.createClass({
  getInitialState: function() {
    return {text:&#x27;&#x27;, items: [ // pretend this comes from server
        {id:0,text:&#x27;Install MODX&#x27;,done:true},
        {id:1,text:&#x27;Set your site_name&#x27;,done:false}
    ]};
  },
  addItem: function(e) {
      this.setState({items: this.state.items.concat({text:this.state.text,done:false}), text:&#x27;&#x27;});
      this.refs.TaskTitle.getDOMNode().focus();
      return false;
  },
  handleItemClicked: function(i) {
      this.state.items[i].done = !this.state.items[i].done;
      this.setState({items: this.state.items});
  },
  onChange: function(e) {
      this.setState({text: e.target.value});
  },
  render: function() {
      var _disabled = this.state.text == &#x27;&#x27; ? true : false;
    return (
        &lt;form className=&quot;box&quot; onSubmit={this.addItem}&gt;
            &lt;h2 id=&quot;task-list&quot;&gt;&lt;i className=&quot;fa fa-circle-o&quot;&gt;&lt;/i&gt;&lt;br /&gt;Task List&lt;/h2&gt;
            &lt;TodoList items={this.state.items} handleItemClicked={this.handleItemClicked} /&gt;
            &lt;footer className=&quot;add-item&quot;&gt;
                &lt;input required ref=&quot;TaskTitle&quot;
                  type=&quot;text&quot; name=&quot;text&quot;
                  onChange={this.onChange} value={this.state.text}
                  placeholder=&quot;Add a new item&amp;hellip;&quot; /&gt;
                &lt;button disabled={_disabled} type=&quot;submit&quot;&gt;
                    &lt;i className=&quot;fa fa-plus&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/footer&gt;
        &lt;/form&gt;
    );
  }
});

React.render(&lt;TodoApp /&gt;, document.getElementById(&#x27;task-list&#x27;));</code></pre>
<hr>
<h4>Conclusion</h4>
<p style="margin-top:0">The <code>&lt;TodoApp&gt;</code> component binds a dataset to an asynchronous version of the original form. It handles adding items to the data model, and would handle communication with the server if we'd gotten that far. Notice <code>TodoApp</code> does not handle the list itself. The list is managed in a separate <code>&lt;TodoList&gt;</code> component. <code>&lt;TodoList&gt;</code> is provided a dataset of items to iterate, our list of items, and a click event function to bind communication between our two&nbsp;components.</p>
<p>That's it!</p>

<!--aside class="seperated">
    <p><i class="fa fa-lightbulb-o"></i><br>Over at the <a class="https://github.com/jpdevries/wool">Wool for MODX</a> project you'll find some <a href="https://github.com/jpdevries/wool/blob/develop/core/components/wool/model/wool/wool.class.php" class="apparent-link">crafty <code title="Hypertext Preprocessor">PHP</code></a> that strives to up your type game as well.</p>
</aside-->
                                                    
                        </div><!-- end .box -->
                    </div><!-- end .shell -->
                </div>
                
                <div class="dashbox">
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
                    <div class="shell shell-task-list">
                        <form action="#" method="post" class="box">
                            <h2 id="task-list"><i class="fa fa-circle-o"></i><br>Task List</h2>
                            <aside class="alert">
                                <p class="message"><i class="fa fa-exclamation-triangle"></i>&nbsp;Please <a class="apparent-link" href="http://enable-javascript.com" target="_blank">enable <code>JavaScript</code></a> for full use of this&nbsp;component.</p>       
                            </aside>
                            <ul class="naked">
                                <li>
                                    <label for="yolo" style="font-size:inherit;text-transform:none;font-weight:normal"><input name="install_modx" type="checkbox">&nbsp;Install <code>MODX</code></label>
                                </li>
                                <li>
                                    <label for="yolo" style="font-size:inherit;text-transform:none;font-weight:normal"><input name="yolo" type="checkbox">&nbsp;Set your <code>site_name</code></label>
                                </li>
                            </ul>
                            <footer class="add-item">
                                <input required ref="TaskTitle" type="text" name="text" placeholder="Add a new item&hellip;" />
                                <button type="submit" style="padding-left:0;padding-right:0" title=".no-js users are taken to a task-list landing page with this component only">Save</button>
                            </footer>
                        </form>
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
