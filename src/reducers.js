let bookmarks = localStorage.getItem('bookmarks');
bookmarks = bookmarks? JSON.parse(bookmarks) : [];

const INITIAL_STATE = {
  api_key: '969a0dc3',
  input: '',
  movie: {},
  bookmarks: bookmarks
};

export default (state = INITIAL_STATE, action) => {
  switch(action.type) {
    case "SEARCH_REQUEST":
      return {...state, input: action.payload};
    case "ADD_MOVIE":
      return {...state, movie: action.payload};
    case "UPDATE_BOOKMARKS":
      return {...state, bookmarks: action.payload};
    default:
      return state;
  }
}