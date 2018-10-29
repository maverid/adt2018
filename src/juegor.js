"use strict";

var _createClass = (function() {
  function defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }
  return function(Constructor, protoProps, staticProps) {
    if (protoProps) defineProperties(Constructor.prototype, protoProps);
    if (staticProps) defineProperties(Constructor, staticProps);
    return Constructor;
  };
})();

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _possibleConstructorReturn(self, call) {
  if (!self) {
    throw new ReferenceError(
      "this hasn't been initialised - super() hasn't been called"
    );
  }
  return call && (typeof call === "object" || typeof call === "function")
    ? call
    : self;
}

function _inherits(subClass, superClass) {
  if (typeof superClass !== "function" && superClass !== null) {
    throw new TypeError(
      "Super expression must either be null or a function, not " +
        typeof superClass
    );
  }
  subClass.prototype = Object.create(superClass && superClass.prototype, {
    constructor: {
      value: subClass,
      enumerable: false,
      writable: true,
      configurable: true
    }
  });
  if (superClass)
    Object.setPrototypeOf
      ? Object.setPrototypeOf(subClass, superClass)
      : (subClass.__proto__ = superClass);
}

var Square = (function(_React$Component) {
  _inherits(Square, _React$Component);

  function Square(props) {
    _classCallCheck(this, Square);

    var _this = _possibleConstructorReturn(
      this,
      (Square.__proto__ || Object.getPrototypeOf(Square)).call(this, props)
    );

    _this.state = {
      color: _this.props.color,
      nRow: _this.props.nRow,
      nCol: _this.props.nCol,
      value: _this.props.value
    };
    return _this;
  }

  _createClass(Square, [
    {
      key: "render",
      value: function render() {
        var classColor = this.state.color ? "square black" : "square white";
        var columnas = ["a", "b", "c", "d", "e", "f", "g", "h"];
        var coordenadas = columnas[this.state.nCol] + (8 - this.state.nRow);
        return React.createElement(
          "button",
          {
            className: classColor,
            onClick: function onClick() {
              alert(coordenadas);
            }
          },
          this.props.value
        );
      }
    }
  ]);

  return Square;
})(React.Component);

var Row = (function(_React$Component2) {
  _inherits(Row, _React$Component2);

  function Row(props) {
    _classCallCheck(this, Row);

    var _this2 = _possibleConstructorReturn(
      this,
      (Row.__proto__ || Object.getPrototypeOf(Row)).call(this, props)
    );

    _this2.createRow = function() {
      var row = [];
      for (var i = 0; i < 8; i++) {
        row.push(_this2.renderSquare(i));
      }
      return row;
    };

    _this2.state = {
      color: _this2.props.color,
      nRow: _this2.props.nRow,
      squares: _this2.props.squares
    };
    return _this2;
  }

  _createClass(Row, [
    {
      key: "renderSquare",
      value: function renderSquare(i) {
        var color = this.state.color === (i % 2 === 0);
        var celda = (7 - this.state.nRow) * 8 + i;
        return React.createElement(Square, {
          key: i,
          color: !color,
          nRow: this.state.nRow,
          nCol: i,
          value: this.state.squares[celda]
        });
      }
    },
    {
      key: "render",
      value: function render() {
        return React.createElement(
          "div",
          { className: "board-row" },
          this.createRow()
        );
      }
    }
  ]);

  return Row;
})(React.Component);

var Board = (function(_React$Component3) {
  _inherits(Board, _React$Component3);

  function Board(props) {
    _classCallCheck(this, Board);

    var _this3 = _possibleConstructorReturn(
      this,
      (Board.__proto__ || Object.getPrototypeOf(Board)).call(this, props)
    );

    _this3.createBoard = function() {
      var squares = [
        "r",
        "N",
        "l",
        "Q",
        "k",
        "L",
        "n",
        "R",
        "P",
        "p",
        "P",
        "p",
        "P",
        "p",
        "P",
        "p"
      ];
      squares = squares.concat(Array(32).fill(null));
      squares = squares.concat([
        "P",
        "p",
        "P",
        "p",
        "P",
        "p",
        "P",
        "p",
        "r",
        "N",
        "l",
        "Q",
        "k",
        "L",
        "n",
        "R"
      ]);
      _this3.state.squares = squares; //Tengo que cambiar esta línea para usar setState
      var board = [];
      for (var i = 0; i < 8; i++) {
        board.push(_this3.renderRow(i));
      }
      return board;
    };

    _this3.state = {
      squares: Array(64)
    };
    return _this3;
  }

  _createClass(Board, [
    {
      key: "renderRow",
      value: function renderRow(i) {
        var color = i % 2 === 0;
        return React.createElement(Row, {
          key: i,
          color: color,
          nRow: i,
          squares: this.state.squares
        });
      }
    },
    {
      key: "render",
      value: function render() {
        var status = "Juegan Blancas";
        return React.createElement(
          "div",
          null,
          React.createElement("div", { className: "status" }, status),
          this.createBoard()
        );
      }
    }
  ]);

  return Board;
})(React.Component);

var Game = (function(_React$Component4) {
  _inherits(Game, _React$Component4);

  function Game() {
    _classCallCheck(this, Game);

    return _possibleConstructorReturn(
      this,
      (Game.__proto__ || Object.getPrototypeOf(Game)).apply(this, arguments)
    );
  }

  _createClass(Game, [
    {
      key: "render",
      value: function render() {
        return React.createElement(
          "div",
          { className: "game" },
          React.createElement(
            "div",
            { className: "game-board" },
            React.createElement(Board, null)
          ),
          React.createElement(
            "div",
            { className: "game-info" },
            React.createElement("div", null),
            React.createElement("ol", null)
          )
        );
      }
    }
  ]);

  return Game;
})(React.Component);

// ========================================

ReactDOM.render(React.createElement(Game), document.getElementById("root"));
