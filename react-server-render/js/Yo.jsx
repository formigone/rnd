const Yo = React.createClass({
	getInitialState: function(){
		return {
			count: 0
		};
	},
	inc: function(){
		console.log('??')
		this.setState({count: this.state.inc + 1});
	},
    render: function(){
        return (
        <div>
        <p>{this.state.count}</p>
        <button onClick={this.inc}>[+]</button>
        </div>
        );
    }
});

export default Yo;
