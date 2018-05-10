import React, { Component } from 'react';
import './App.css';
import Movie from './Movie';

const API_KEY = '969a0dc3';

let bookmarks = localStorage.getItem('bookmarks');
bookmarks = bookmarks? JSON.parse(bookmarks) : [];

class MyApp extends Component {
  constructor(props) {
    super(props);
    this.state = {
      input: '',
      movie: {},
      bookmarks: bookmarks
    }
  };

  onSearch = (e) => {
    this.setState({input: e.target.value});
    this.onRequest();
  };

  onRequest = () => {
    fetch(`http://www.omdbapi.com/?apikey=${API_KEY}&t=${this.state.input}`)
      .then(res => res.json())
      .then(json => this.setState({movie: json}));
  };

  onBookmark = () => {
    const { movie, bookmarks } = this.state;
    const newBookmark = [...bookmarks];
    newBookmark.push(movie);

    this.setState({bookmarks: newBookmark});
    localStorage.setItem('bookmarks', JSON.stringify(newBookmark));
  };

  render() {
    return (
      <div className="container">
        <input
          type="text"
          className="form-control"
          value={this.state.input}
          onChange={this.onSearch}
        />

        {this.state.movie.Title && <Movie {...this.state.movie}
                                          onBookmark={this.onBookmark.bind(this)} />}

        <h4>Bookmarks</h4>
        <div className="row">
          {this.state.bookmarks.map((bookmark) => (
            <div className="col-3">
              <Movie {...bookmark} />
            </div>
          ))}
        </div>
      </div>
    )
  }
}

export default MyApp;
