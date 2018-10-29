import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';


class Square extends React.Component {
  constructor(props){
    super(props)
    this.state = {
      color: this.props.color,
      nRow: this.props.nRow,
      nCol: this.props.nCol,
      value: this.props.value,
    }
  }

  render() {
    let classColor = this.state.color ? 'square black' : 'square white';
    let columnas = ['a','b','c','d','e','f','g','h'];
    let coordenadas = (columnas[this.state.nCol]) + (8 - this.state.nRow);
        return (
            <button className={classColor} onClick={function() { alert(coordenadas); }}>
              {this.props.value}
            </button>
        );

  }
}
class Row extends React.Component {
  constructor(props){
    super(props)
    this.state = {
      color: this.props.color,
      nRow: this.props.nRow, 
      squares: this.props.squares,
    }
  }
  renderSquare(i) {
    let color = this.state.color === ((i%2) === 0 );
    let celda = (7-this.state.nRow)*8+i;
    return <Square 
      key={i} 
      color = {!color} 
      nRow = {this.state.nRow} 
      nCol={i} 
      value={this.state.squares[celda]} />;
  }
   createRow = () => {
    let row = []
    for (let i = 0; i < 8 ; i++) {
      row.push(this.renderSquare(i)
      )
      
    };
    return row
  }
  render() {
    return (
      <div className="board-row">
        {this.createRow()}
      </div>
    );
  }
}


class Board extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      squares: Array(64),
    };
  }
  renderRow(i){
    let color = (i % 2) === 0;
    return <Row key={i} color={color} nRow={i} squares={this.state.squares} />;
  }
  createBoard = () => {
    let squares = ['r','N','l','Q','k','L','n','R','P','p','P','p','P','p','P','p'];
    squares = squares.concat(Array(32).fill(null));
    squares = squares.concat(['P','p','P','p','P','p','P','p','r','N','l','Q','k','L','n','R']);
    this.state.squares = squares; //Tengo que cambiar esta línea para usar setState
    let board = []
    for (let i = 0; i < 8 ; i++) {
      board.push(this.renderRow(i))
      
    };
    return board
  }

 
  render() {
    const status = 'Juegan Blancas';
    return (
      <div>
        <div className="status">{status}</div>
           {this.createBoard()}
      </div>
    );
  }
}

class Game extends React.Component {
  render() {
    return (
      <div className="game">
        <div className="game-board">
          <Board />
        </div>
        <div className="game-info">
          <div>{/* status */}</div>
          <ol>{/* TODO */}</ol>
        </div>
      </div>
    );
  }
}

// ========================================

ReactDOM.render(
  <Game />,
  document.getElementById('root')
);
