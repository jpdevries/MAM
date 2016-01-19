var GridItem = React.createClass({
  handleClick:function(){
      if(!this.props.data.is_container) return;
      this.props.handleClick('fakeson/' + this.props.data.id + '.json');
  },
  render: function() {
    var icon;
    if(this.props.data.is_container) {
        icon = (this.props.data.conatiner_open) ? 'fa fa-folder-open' : 'fa fa-folder';
    } else {
        switch(this.props.data.class_key) {
          case 'modWebLink':
              icon = 'fa fa-link';
          break;
      
          default:
              icon = 'fa fa-file-text-o'
          break;
        }        
    }
    
    var titleAttr = "ID: " + this.props.data.id + "; " + "Published";
    var cur = (this.props.data.id == MODx.resource.id) ? true : false;
    var link = (cur) ? <a href={this.props.data.href} title={titleAttr}><strong>{decodeHTML(this.props.data.title)}</strong></a> : <a href={this.props.data.href} title={titleAttr}>{decodeHTML(this.props.data.title)}</a>;
    return (
        <tr>
            <td> 
              <i onClick={this.handleClick} className={icon} title="Contains 2 children"></i>&nbsp;
              {link}
            </td>
            <td>{decodeHTML(this.props.data.introtext)}</td>
            <td>Today</td>
        </tr>
      );
  }
});

var Grid = React.createClass({
    getInitialState: function() {
        return {
            items: [],
            path:[''],
            resource:{
                id:"",
                alias:""
            }
        };
    },
    handleMount: function() {
        $.ajax({
          url: this.props.url,
          dataType: 'json',
          success: function(data) {
            this.setState(data);
            //if(this.props.stateSetCallback) this.props["stateSetCallback"]();
            window.dispatchEvent(new Event('resource_view__stateSet'));
          }.bind(this),
          error: function(xhr, status, err) {
              console.log('error');
          }.bind(this)
        });
        
        var previewClicked = function(e){
            e.preventDefault();
            $('body').toggleClass('inverted');    
        };
        $('a.preview').unbind('click',previewClicked).bind('click',previewClicked);
    },
    componentDidMount: function() {
        this.handleMount();
    },
    handleClick:function(fetch){
        this.props.url = fetch + '?nc=' + new Date().getTime();
        this.handleMount();
    },
    handleSlugClick:function(fetch){
        this.handleClick(fetch);
    },
    render: function() {
        var that = this;
        var context = 'web';
        return (
            <div>
              <h4>
                <a href="#" title="Switch to another Context"><i className="fa fa-globe"></i></a>&nbsp;
                Resources
                <div className="codepath">
                    <pre title="Imagine this is interactive, terminal like with tab-to-complete">{this.state.path.map(function(item, i){
                        return (
                            <span>
                              <a data-fetch={item.fetch} className="clickable" onClick={that.handleSlugClick.bind(this, item.fetch)}>{item.slug}</a>
                              <span>/</span>
                            </span>
                        );
                    })}</pre>
                    <a href="#" className="preview" title="Preview this Document"><i className="fa fa-eye"></i></a>
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
                {this.state.items.map(function (item, i) {
                    return (
                        <GridItem handleClick={that.handleClick} data={item} key={context + item.id} ref={'item'+i} ></GridItem>
                    );
                })}
              </tbody>        
              </table>
            </div>
        );
    }
});
var b = '0';
try { b = MODx.tree.branch; } catch (e) {} 
var j = './fakeson/' + b + '.json?nc=' + new Date().getTime();
React.render(<Grid url={j} />, document.getElementById('resource-view-reactable'));



var TodoList = React.createClass({
  itemClicked: function(i) {
      this.props.handleItemClicked(i);
  },
  render: function() {
  var that = this;
    var createItem = function(item,i) {
        var icon = 'fa ' + ((item.done) ? 'fa-check-circle-o' : 'fa-circle-o');
        return <li onClick={that.itemClicked.bind(that,i)}><p><i className={icon}></i>&nbsp;{item.text}</p></li>;
    };
    return <ul className="naked">{this.props.items.map(createItem)}</ul>;
  }
});
var TodoApp = React.createClass({
  getInitialState: function() {
    return {text:'', items: [ // pretend this comes from server
        {id:0,text:<span>Install <code>MODX</code></span>,done:true},
        {id:1,text:<span>Set your <code>site_name</code></span>,done:false}
    ]};
  },
  addItem: function(e) {
      this.setState({items: this.state.items.concat({text:this.state.text,done:false}), text:''});
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
      var _disabled = this.state.text == '' ? true : false;
    return (
        <form className="box" onSubmit={this.addItem}>
            <h2 id="task-list"><i className="fa fa-circle-o"></i><br />Task List</h2>
            <TodoList items={this.state.items} handleItemClicked={this.handleItemClicked} />
            <footer className="add-item">
                <input required ref="TaskTitle" type="text" name="text" onChange={this.onChange} value={this.state.text} placeholder="Add a new item&hellip;" />
                <button disabled={_disabled} type="submit">
                    <i className="fa fa-plus"></i>
                </button>
            </footer>
        </form>
    );
  }
});

React.render(<TodoApp />, document.getElementById('task-list'));