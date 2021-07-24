import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import TopPage from "./Page/TopPage";
import LogInPage from "./Page/LogInPage";
import TodoListPage from "./Page/TodoListPage";
import MainPage from "./Page/MainPage";
import SignUpPage from "./Page/SignUpPage";
import "tailwindcss/tailwind.css";

const App: React.FC = () => {
    return (
        <Router>
            <Switch>
                <Route path="/" exact component={MainPage} />
                <Route path="/SignUpPage" exact component={SignUpPage} />
                <Route path="/topPage" exact component={TopPage} />
                <Route path="/LogInPage" component={LogInPage} />
                <Route path="/todoListPage" component={TodoListPage} />
            </Switch>
        </Router>
    );
};

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}