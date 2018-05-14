import React, { Component } from 'react';
import { bindActionCreators } from 'redux';
import { connect } from 'react-redux';
import './App.css';
import { onBookmark, onSearch } from './actions'
import Movie from './Movie';

class MyApp extends Component {
  render() {
    const {
      movie,
      input,
      bookmarks,
      onSearch,
      onBookmark
    } = this.props;
    return (
      <div className="container">
        <input
          type="text"
          className="form-control"
          value={input}
          onChange={onSearch}
        />

        {movie.Title && <Movie {...movie} onBookmark={onBookmark} />}

        <h4>Bookmarks</h4>
        <div className="row">
          {bookmarks.map((bookmark, i) => (
            <div className="col-3" key={i}>
              <Movie {...bookmark} />
            </div>
          ))}
        </div>
      </div>
    )
  }
}

export default connect(
  state => ({
    input: state.input,
    movie: state.movie || {},
    bookmarks: state.bookmarks || [],
  }),
  dispatch => bindActionCreators({
    onSearch,
    onBookmark,
  }, dispatch)
)(MyApp);
