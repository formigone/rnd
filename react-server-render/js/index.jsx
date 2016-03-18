const React = require('react');
const ReactDOMServer = require('react-dom/server');

const Yo = require('./Yo');

ReactDOMServer.renderToString(<Yo/>, print);
