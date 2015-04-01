require(['Comp', 'React', 'Jsx'], function(Comp, React, Jsx){
    var me = new Comp('rodrigo');
    var Display = React.createClass({
        render: function(){
            return <h1>My name is {this.props.name}</h1>;
        }
    });

    React.render(
        <Display name="me.name" />,
        document.body
    )
});
