import { applyMiddleware, createStore } from 'redux';
import logger from 'redux-logger';
import rootReducer from './reducers';
import Thunk from 'redux-thunk';

export default createStore(
  rootReducer,
  applyMiddleware(logger, Thunk)
)