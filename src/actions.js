export const onSearch = (e) => {
  return dispatch => {
    dispatch({ type: "SEARCH_REQUEST", payload: e.target.value });
    dispatch(onRequest());
  }
};

export const onRequest = () => {
  return (dispatch, getState) => {
    const { input, api_key } = getState();
    fetch(`http://www.omdbapi.com/?apikey=${api_key}&t=${input}`)
      .then(res => res.json())
      .then(json => dispatch({ type: "ADD_MOVIE", payload: json }));
  }
};

export const onBookmark = () => {
  return (dispatch, getState) => {
    const { movie, bookmarks } = getState();
    const newBookmark = [...bookmarks];
    newBookmark.push(movie);

    dispatch({ type: "UPDATE_BOOKMARKS", payload: newBookmark });
    localStorage.setItem('bookmarks', JSON.stringify(newBookmark));
  }
};