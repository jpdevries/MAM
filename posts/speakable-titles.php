<?php include '../functions.php';get_header('./../'); ?>
<script>
  var MODx = {
      resource:{id:'13'},
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
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/orphans.php" title="ID: 12; Published">Adopting Orphans</a></td>
                                            <td>A simple use of the &amp;nbsp; entity</td>
                                            <td><time>Today</time></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-file-text-o"></i>&nbsp;<a href="posts/speakable-titles.php" title="ID: 13; Published"><strong>Speakable Components</strong></a></td>
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
        <div class="page-wrapper" style="padding-bottom:6em">
            <section style="margin-top:1em">
                <div class="dashbox">
                    <div id="turning-it-up-with-speakable-components" data-transcript="turning-it-up-with-speakable-components" class="speakable shell shell-legible shell-readme">
                        <div class="box legible">
                            <h1 style="text-transform:none"><i class="fa fa-volume-up clickable speaker-btn unspeakable"></i><br>Turning it up with Speakable Components<code class="subtle" style="position:absolute;top:0;right:0;opacity:1"><a href="http://twitter.com/MODX" target="_blank" title="Follow MODX on Twitter">#HTML</a> #JS</code></h1>
                            <p>
                                When designing for touch devices the familiar <code>title</code> attribute is of little use. Hovering over an element requires a mouse but all we have is these greasy fingers and that free U2 Album we don't want on our phones. So what is there to do?
                            </p>       
                            <p>As digital creatives we have <i>two</i> senses to work with:</p>                                      
                            <ol>
                                <li>Sight</li>
                                <li>Sound</li>
                            </ol>
                            <p>Let's you and I give the later a try with the new <code>JavaScript</code> Speech Synthesis API. Actually, <strike>scratch that</strike> we aren't going to get into that. We'll let <code>speakable.jquery.js</code> handle that. All we need to do is add a <code>speakable-tip</code> class to our element like so:</p>
                            <pre class="rainbow-block unspeakeable"><code data-language="html">&lt;h3 title="Hello World" class="speakable-title"&gt;Click me. I'll read my title.&lt;/h3&gt;</code></pre>

                            <h3 title="Hello World" class="speakable-tip"><i class="fa fa-volume-up"></i>&nbsp;Click me. I'll read my title.</h3>
                            <hr>
                            <p>We can also set the voice, pitch, rate and volume using data attributes:</p>
                            <pre class="rainbow-block unspeakeable"><code data-language="html">   &lt;h4 title=&quot;I&#x27;m Radioactive            Rrrrrrrrraaaaaaaaaaaaaaddddddddiiiiiioooooactive!&quot; class=&quot;speakable-tip&quot; data-voice=&quot;ralph&quot; data-pitch=&quot;2&quot; data-rate=&quot;0.5&quot;&gt;I&#x27;m Radioactive.&lt;/h4&gt;</code></pre>
                            <h4 title="I'm Radioactive            Rrrrrrrrraaaaaaaaaaaaaaddddddddiiiiiioooooactive!" class="speakable-tip" data-voice="ralph" data-pitch="1.6" data-rate="0.5"><i class="fa fa-volume-up"></i>&nbsp;I'm Radioactive.</h4>              <hr>
<p>Thanks to <code>speakable.jquery.js</code> you can even <a class="clickable apparent-link speaker-btn">listen to this component</a> read aloud. This is done by making use of the <code>.speakable</code>, <code>.speaker-btn</code>, and <code>data-transcript</code> properties documented <a href="#" class="apparent-link" title="Learn more about speakable.jquery.js" target="_blank">here</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="dashbox">
                    <div id="making-things-unspeakable" data-voice="Whisper" data-transcript="making-things-unspeakable" class="shell shell-legible shell-readme speakable">
                        <div class="box">
                            <h2 class="unspeakable" style="text-transform:none"><i class="fa fa-volume-off clickable speaker-btn"></i><br><strike>Making things Unspeakable</strike></h2>
                            <p><i class="fa fa-volume-up clickable speaker-btn"></i>&nbsp;We understand that there may be parts of your code that simply can never be spoken of; to anyone. Anything we wrap in the <code>.unspeakable</code> class will never be spoken of by <code>speakable.jquery.js</code>; that much we can <strike class="unspeakable">pretty much</strike> assure&nbsp;you.</p>
                        </div>
                    </div>
                </div>
                <div class="dashbox">
                    <div
                      id="configure-your-own-voice"
                      class="speakable shell shell-legible shell-readme configure-your-own-voice"
                      data-voice="Fred"
                      data-volume="1"
                      data-rate="1"
                      data-pitch="1"
                      data-transcript="configure-voice-transcript">
                        <div class="box">
                            <h2 style="text-transform:none"><i class="speaker-btn fa fa-bullhorn"></i><br>Create your own Voice</h2>
                            <noscript>                                
                                <aside class="alert">
                                    <p class="message"><i class="fa fa-exclamation-triangle"></i>&nbsp;Please <a class="apparent-link" href="http://enable-javascript.com" target="_blank">enable <code>JavaScript</code></a> to use this component.</p>       
                                </aside>
                            </noscript>
                            <p><script>document.write(('speechSynthesis' in window) ? 'Your browser says we can talk&nbsp;<i class="fa fa-thumbs-o-up"></i>' : 'Sorry, your browser does not support <code>speechSynthesis</code>.&nbsp;<i class="fa fa-thumbs-o-down"></i>');</script></p>                            
                            <textarea disabled rows="4" id="configure-voice-transcript">Fitter. Happier. More productive. Comfortable.</textarea>
                            <fieldset>
                                <div class="addomant-flex-container" style="text-align:;margin-top:1em">
                                    <div class="field">
                                        <label>Voice</label>
                                        <select name="voice" id="voice" disabled>
                                            <option value="Agnes">Agnes</option><option value="Albert">Albert</option><option value="Alex">Alex</option><option value="Alice">Alice</option><option value="Alva">Alva</option><option value="Amelie">Amelie</option><option value="Anna">Anna</option><option value="Bad News">Bad News</option><option value="Bahh">Bahh</option><option value="Bells">Bells</option><option value="Boing">Boing</option><option value="Bruce">Bruce</option><option value="Bubbles">Bubbles</option><option value="Carmit">Carmit</option><option value="Cellos">Cellos</option><option value="Damayanti">Damayanti</option><option value="Daniel">Daniel</option><option value="Deranged">Deranged</option><option value="Diego">Diego</option><option value="Ellen">Ellen</option><option value="Fiona">Fiona</option><option value="Fred" selected>Fred</option><option value="Good News">Good News</option><option value="Hysterical">Hysterical</option><option value="Ioana">Ioana</option><option value="Joana">Joana</option><option value="Junior">Junior</option><option value="Kanya">Kanya</option><option value="Karen">Karen</option><option value="Kathy">Kathy</option><option value="Kyoko">Kyoko</option><option value="Laura">Laura</option><option value="Lekha">Lekha</option><option value="Luciana">Luciana</option><option value="Mariska">Mariska</option><option value="Mei-Jia">Mei-Jia</option><option value="Melina">Melina</option><option value="Milena">Milena</option><option value="Moira">Moira</option><option value="Monica">Monica</option><option value="Nora">Nora</option><option value="Paulina">Paulina</option><option value="Pipe Organ">Pipe Organ</option><option value="Princess">Princess</option><option value="Ralph">Ralph</option><option value="Samantha">Samantha</option><option value="Sara">Sara</option><option value="Satu">Satu</option><option value="Sin-ji">Sin-ji</option><option value="Tarik">Tarik</option><option value="Tessa">Tessa</option><option value="Thomas">Thomas</option><option value="Thomas">Thomas</option><option value="Ting-Ting">Ting-Ting</option><option value="Ting-Ting">Ting-Ting</option><option value="Trinoids">Trinoids</option><option value="Veena">Veena</option><option value="Veena">Veena</option><option value="Vicki">Vicki</option><option value="Victoria">Victoria</option><option value="Whisper">Whisper</option><option value="Xander">Xander</option><option value="Yelda">Yelda</option><option value="Yuna">Yuna</option><option value="Zarvox">Zarvox</option><option value="Zosia">Zosia</option><option value="Zuzana">Zuzana</option>
                                        </select>
                                    </div>
                                    <div class="field">
                                        <label>Volume</label>
                                        <input disabled id="volume" name="volume" type="range" min="0" max="1" step="0.05" value="1" />
                                    </div>
                                    <div class="field">
                                        <label>Rate</label>
                                        <input disabled id="rate" name="rate" type="range" min="0" max="10" step="0.05" value="1" />
                                    </div>
                                    <div class="field">
                                        <label>Pitch</label>
                                        <input disabled id="pitch" name="pitch" type="range" min="0" max="2" step="0.05" value="1" />
                                    </div>
                                </div>
                            </fieldset>
                            <button id="create-speek" class="speaker-btn" disabled>Speak</button>
                            <footer class="unaligned" style="margin-top:1em">
                                <small class="subtle">this component was inspired by <a href="http://blog.teamtreehouse.com/getting-started-speech-synthesis-api" class="apparent-link" title="Getting Started with the Speech Synthesis API" target="_blank">this post</a> by <a href="http://blog.teamtreehouse.com/author/mattwest" title="More Articles by Matt West" target="_blank">Matt West</a></small>
                            </footer>
                            <script>document.getElementById('configure-voice-transcript').disabled = document.getElementById('create-speek').disabled = document.getElementById('voice').disabled = document.getElementById('volume').disabled = document.getElementById('rate').disabled = document.getElementById('pitch').disabled = false;</script>
                        </div>
                        <script>
                        document.querySelector('#configure-voice-transcript').addEventListener('change',function(){
                        });
                        document.querySelector('#voice').addEventListener('change',function(e){
                            document.querySelector('#configure-your-own-voice').dataset.voice = document.querySelector('#voice').value;
                        });
                        document.querySelector('#volume').addEventListener('change',function(e){
                            document.querySelector('#configure-your-own-voice').dataset.volume = document.querySelector('#volume').value;
                        });
                        document.querySelector('#rate').addEventListener('change',function(e){
                            document.querySelector('#configure-your-own-voice').dataset.rate = document.querySelector('#rate').value;
                        });
                        document.querySelector('#pitch').addEventListener('change',function(e){
                            document.querySelector('#configure-your-own-voice').dataset.pitch = document.querySelector('#pitch').value;
                        });
                        </script>
                    </div>
                </div>
                <div class="dashbox">
                    <div class="shell shell-legible shell-readme speakable">
                        <div class="box">
                            <h2 style="text-transform:none"><i class="speaker-btn fa fa-child"></i><br>Polite Forms with&nbsp;<code style="font-size:inherit;padding:0" data-enunciate="ma'am">MAM</code></h2>
                            <p>
                                Just like when bringing candy to the schoolroom, we <a class="apparent-link" href="manifesto.php">don't want anyone to feel left out</a>. We want to inform users what they can and cannot do with our interface based on how they arrive. That is why the above component is built within semantic markup authored to be politely enhanced.  This means that users without <code>JavaScript</code> get a politely requested to enable <code>JavaScript</code>. We even give them a link with instructions; how thoughtful of us.  We do this by initially disabling our input fields that require asynchronous interaction. Also, we place a <code>aside.alert</code> messeage with a <code>&lt;noscript&gt;</code> tag. You may see where this is going; we finally use scripts to enable our inputs and detect the <code>speechSynthesis</code> feature. See&nbsp;below.
                            </p>
                        </div>
                    </div>
                </div>
                
                
                <div class="dashbox">
                    <div id="configure-your-own-voice-no-js" class="speakable shell shell-legible shell-readme">
                        <section class="box">
                            <h2 style="text-transform:none"><i class="speaker-btn fa fa-code"></i><br>Create your own Voice (no-js)</h2>
                            <!--noscript-->                                
                                <aside class="alert">
                                    <p class="message"><i class="fa fa-exclamation-triangle"></i>&nbsp;Please <a class="apparent-link" href="http://enable-javascript.com" target="_blank">enable <code>JavaScript</code></a> to use this component.</p>       
                                </aside>
                                <!--/noscript-->
                                <p></p>
                            <textarea disabled rows="4" id="configure-voice-transcript">Fitter. Happier. More productive. Comfortable.</textarea>
                            <fieldset>
                                <div class="addomant-flex-container" style="margin-top:1em">
                                    <div class="field">
                                        <label>Voice</label>
                                        <select name="voice" id="voice" disabled>
                                            <option value="Agnes">Agnes</option><option value="Albert">Albert</option><option value="Alex">Alex</option><option value="Alice">Alice</option><option value="Alva">Alva</option><option value="Amelie">Amelie</option><option value="Anna">Anna</option><option value="Bad News">Bad News</option><option value="Bahh">Bahh</option><option value="Bells">Bells</option><option value="Boing">Boing</option><option value="Bruce">Bruce</option><option value="Bubbles">Bubbles</option><option value="Carmit">Carmit</option><option value="Cellos">Cellos</option><option value="Damayanti">Damayanti</option><option value="Daniel">Daniel</option><option value="Deranged">Deranged</option><option value="Diego">Diego</option><option value="Ellen">Ellen</option><option value="Fiona">Fiona</option><option value="Fred" selected>Fred</option><option value="Good News">Good News</option><option value="Hysterical">Hysterical</option><option value="Ioana">Ioana</option><option value="Joana">Joana</option><option value="Junior">Junior</option><option value="Kanya">Kanya</option><option value="Karen">Karen</option><option value="Kathy">Kathy</option><option value="Kyoko">Kyoko</option><option value="Laura">Laura</option><option value="Lekha">Lekha</option><option value="Luciana">Luciana</option><option value="Mariska">Mariska</option><option value="Mei-Jia">Mei-Jia</option><option value="Melina">Melina</option><option value="Milena">Milena</option><option value="Moira">Moira</option><option value="Monica">Monica</option><option value="Nora">Nora</option><option value="Paulina">Paulina</option><option value="Pipe Organ">Pipe Organ</option><option value="Princess">Princess</option><option value="Ralph">Ralph</option><option value="Samantha">Samantha</option><option value="Sara">Sara</option><option value="Satu">Satu</option><option value="Sin-ji">Sin-ji</option><option value="Tarik">Tarik</option><option value="Tessa">Tessa</option><option value="Thomas">Thomas</option><option value="Thomas">Thomas</option><option value="Ting-Ting">Ting-Ting</option><option value="Ting-Ting">Ting-Ting</option><option value="Trinoids">Trinoids</option><option value="Veena">Veena</option><option value="Veena">Veena</option><option value="Vicki">Vicki</option><option value="Victoria">Victoria</option><option value="Whisper">Whisper</option><option value="Xander">Xander</option><option value="Yelda">Yelda</option><option value="Yuna">Yuna</option><option value="Zarvox">Zarvox</option><option value="Zosia">Zosia</option><option value="Zuzana">Zuzana</option>
                                        </select>
                                    </div>
                                    <div class="field">
                                        <label>Volume</label>
                                        <input disabled id="volume" name="volume" type="range" min="0" max="1" step="0.05" value="1" />
                                    </div>
                                    <div class="field">
                                        <label>Rate</label>
                                        <input disabled id="rate" name="rate" type="range" min="0" max="10" step="0.05" value="1" />
                                    </div>
                                    <div class="field">
                                        <label>Pitch</label>
                                        <input disabled id="pitch" name="pitch" type="range" min="0" max="2" step="0.05" value="1" />
                                    </div>
                                </div>
                            </fieldset>
                            <button id="create-speek" class="speaker-btn" disabled>Speak</button>
                            <footer class="unaligned" style="margin-top:1em">
                                <small class="subtle">this component was inspired by <a href="http://blog.teamtreehouse.com/getting-started-speech-synthesis-api" class="apparent-link" title="Getting Started with the Speech Synthesis API" target="_blank">this post</a> by <a href="http://blog.teamtreehouse.com/author/mattwest" title="More Articles by Matt West" target="_blank">Matt West</a></small>
                            </footer>
                        </section>
                    </div>
                </div>
                
                
                
            </section>
        </div>
<?php get_footer(''); ?>
</body></html>